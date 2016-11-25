<?php
/**
 * Plataforma de Conocimiento - Redifusión
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase Redifusion
 */
class Redifusion extends \Configuracion\RedifusionConfig {

    // public $xml_encoding;
    // public $sitio_titulo;
    // public $sitio_url;
    // public $sitio_descripcion;
    // public $lenguaje;
    // public $generator;
    // public $webmaster_email;
    // public $elementos_max;
    // public $archivo;
    // public $usar_descripcion;
    protected $elementos = array();

    /**
     * Vínculos absolutos
     *
     * Cambia los vínculos de relativos a absolutos en el código HTML del contenido
     *
     * @param  string Código HTML
     * @param  string Opcional, directorio desde la raíz, relativamente donde está
     * @return string Código HTML
     */
    public function vinculos_absolutos($html, $dir='') {
        // Estos tag contienen estas propiedades que usan URLs
        $tags_atributos = array(
          'a'      => 'href',
          'link'   => 'href',
          'area'   => 'href',
          'form'   => 'action',
          'script' => 'src',
          'img'    => 'src',
          'iframe' => 'src',
          'frame'  => 'src',
          'embed'  => 'src');
        // Bucle para rutas que empiezen con /
        foreach ($tags_atributos as $tag => $atributo) {
            // En el patron destaca que debe omitir lo que tenga http:, https:, ftp:, javascript: y //
            $patron = "/<$tag([^>]*)$atributo=[\"']?(?!https?:|ftp:|javascript:|\/\/)\/([^\"'\s>]+)[\"']?/is";
            if ($dir == '') {
                $reemplazo = sprintf('<%s${1}%s="%s/${2}"', $tag, $atributo, $this->sitio_url);
            } else {
                $reemplazo = sprintf('<%s${1}%s="%s/%s/${2}"', $tag, $atributo, $this->sitio_url, $dir);
            }
            $html = preg_replace($patron, $reemplazo, $html);
        }
        // Bucle para rutas que NO empiezen con /
        foreach ($tags_atributos as $tag => $atributo) {
            // Lo único distinto respecto al anterior es una diagonal antes de la ruta
            $patron = "/<$tag([^>]*)$atributo=[\"']?(?!https?:|ftp:|javascript:|\/\/)([^\"'\s>]+)[\"']?/is";
            if ($dir == '') {
                $reemplazo = sprintf('<%s${1}%s="%s/${2}"', $tag, $atributo, $this->sitio_url);
            } else {
                $reemplazo = sprintf('<%s${1}%s="%s/%s/${2}"', $tag, $atributo, $this->sitio_url, $dir);
            }
            $html = preg_replace($patron, $reemplazo, $html);
        }
        // Entregar
        return $html;
    } // vinculos_absolutos

    /**
     * Agregar elemento
     *
     * @param mixed Instancia de Publicacion
     */
    public function agregar_elemento(Publicacion $publicacion) {
        // Si el estado NO es publicar, NO se agrega
        if (strtolower($publicacion->estado) != 'publicar') {
            return false;
        }
        // Fecha
        $t = strtotime($publicacion->fecha);
        if ($t === false) {
            // Fecha errónea, se usará 1980-01-01
            $ano    = 1980;
            $mes    = 1;
            $dia    = 1;
            $hora   = 0;
            $minuto = 0;
            $fecha  = date('r', mktime($hora, $minuto, 0, $mes, $dia, $ano));
        } else {
            // Sí se interpretó bien
            $a      = getdate($t);
            $ano    = $a['year'];
            $mes    = $a['mon'];
            $dia    = $a['mday'];
            $hora   = $a['hours'];
            $minuto = $a['minutes'];
            $fecha  = date('r', mktime($hora, $minuto, 0, $mes, $dia, $ano));
        }
        // Considerar vínculos desde la raíz
        $publicacion->en_raiz = true;
        // Formatear URL
        $url = sprintf('%s/%s', $this->sitio_url, $publicacion->url());
        // Identificador único directorio + archivo
        $id = sprintf('%s-%s', $publicacion->directorio, $publicacion->archivo);
        // La clave del arreglo asociativo es el tiempo_creado-archivo y sirve para ordenarlo
        $clave = sprintf('%s-%s', $publicacion->tiempo_creado(), $publicacion->archivo);
        // Tomar el contenido
        $contenido = $publicacion->redifusion_html();
        // Si autor es un arreglo
        if (is_array($publicacion->autor)) {
            $autor = implode(', ', $publicacion->autor);
        } else {
            $autor = $publicacion->autor;
        }
        // Acumular
        $this->elementos[$clave] = array(
            'id'          => $id,
            'fecha'       => $fecha,
            'titulo'      => $publicacion->nombre,
            'descripcion' => $publicacion->descripcion,
            'contenido'   => $this->vinculos_absolutos($contenido, $publicacion->directorio),
            'autor'       => $autor,
            'url'         => $url);
        // Entregar verdadero
        return true;
    } // agregar_elemento

    /**
     * XML
     *
     * @return string Código XML
     */
    public function xml() {
        // Validar que haya elementos
        if (count($this->elementos) == 0) {
            throw new \Exception("Error en Redifusion, xml: No hay elementos.");
        }
        // Ordenarlos por la clave del arreglo asociativo
        ksort($this->elementos);
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = sprintf('<?xml version="1.0" encoding="%s"?>', $this->xml_encoding);
        // RSS Inicia
        $a[] = '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
        $a[] = '  <channel>';
        // Datos generales
        $a[] = "    <title>{$this->sitio_titulo}</title>";
        $a[] = "    <link>{$this->sitio_url}</link>";
        $a[] = "    <description>{$this->sitio_descripcion}</description>";
        $a[] = "    <language>{$this->lenguaje}</language>";
        $a[] = sprintf('    <pubDate>%s</pubDate>', date('r'));
     // $a[] = sprintf('    <lastBuildDate>%s</lastBuildDate>', date('r'));
        $a[] = '    <docs>http://www.rssboard.org/rss-specification</docs>';
        $a[] = "    <generator>{$this->generator}</generator>";
     // $a[] = '    <managingEditor>editor@example.com</managingEditor>';
        $a[] = "    <webMaster>{$this->webmaster_email}</webMaster>";
        $a[] = "    <atom:link href=\"{$this->sitio_url}/{$this->archivo}\" rel=\"self\" type=\"application/rss+xml\" />";
        // Bucle por los elementos
        $contador = 0;
        foreach ($this->elementos as $clave => $e) {
            if ($contador >= $this->elementos_max) {
                break;
            }
            $a[] = '    <item>';
            $a[] = "      <title>{$e['titulo']}</title>";
            $a[] = "      <link>{$e['url']}</link>";
            $a[] = "      <guid isPermaLink=\"false\">{$e['id']}</guid>";
            $a[] = "      <pubDate>{$e['fecha']}</pubDate>";
            $a[] = "      <author>{$e['autor']}</author>";
            if ($this->usar_descripcion) {
                $a[] = "      <description>{$e['descripcion']}</description>";
            } else {
                $a[] = "      <description><![CDATA[{$e['contenido']}]]></description>";
            }
            $a[] = '    </item>';
            $contador++;
        }
        // RSS Cerrar
        $a[] = '  </channel>';
        $a[] = '</rss>';
        // Entregar
        return implode("\n", $a)."\n";
    } // xml

} // Clase Redifusion

?>
