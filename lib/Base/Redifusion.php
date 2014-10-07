<?php
/*
 * SMIbeta - Redifusión
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 */

// Namespace
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
    protected $elementos = array();

    /**
     * Caracteres para web
     *
     * @param string  Texto a convertir
     * @return string Convertido
     */
    protected function caracteres_para_web($in_texto) {
        $buscados       = array('ñ', 'Ñ', 'ü', 'Ü', 'á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú');
        $cambios        = array('n', 'n', 'u', 'u', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
        $sin_acentos    = str_replace($buscados, $cambios, $in_texto);
        $especiales     = array(' ', '#', '&', '%', '$', '@', '(', ')', '.', ',');
        $sin_especiales = str_replace($especiales, '-', $sin_acentos);
        return strtolower($sin_especiales);
    } // caracteres_para_web

    /**
     * Agregar elemento
     *
     * @param mixed Instancia de Publicacion
     */
    public function agregar_elemento(Publicacion $publicacion) {
        // Tratar de interpretar la fecha
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
        // Formatear fecha
    /*  if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $in_fecha) {
            // Viene como AAAA-MM-DD
            $f      = explode('-', $in_fecha);
            $ano    = $f[0];
            $mes    = $f[1];
            $dia    = $f[2];
            $hora   = 0;
            $minuto = 0;
            $fecha  = date('r', mktime(0, 0, 0, $mes, $dia, $ano));
        } elseif (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2} \d{1,2}:\d{1,2}$/', $in_fecha)) {
            // Viene como AAAA-MM-DD HH:MM
            $s      = explode(' ', $in_fecha);
            $f      = explode('-', $s[0]);
            $ano    = $f[0];
            $mes    = $f[1];
            $dia    = $f[2];
            $t      = explode(':', $s[1]);
            $hora   = $t[0];
            $minuto = $t[1];
            $fecha  = date('r', mktime($hora, $minuto, 0, $mes, $dia, $ano);
        } else {
        } */
        // Considerar vínculos desde la raíz
        $publicacion->en_raiz = true;
        // Formatear URL
        $url = sprintf('%s/%s', $this->sitio_url, $publicacion->url());
        // Identificador único fecha + titulo
        $id = sprintf('%s-%s', date('YmdHi', mktime($hora, $minuto, 0, $mes, $dia, $ano)), $this->caracteres_para_web($publicacion->nombre));
        // La clave del arreglo asociativo es el tiempo_creado-archivo y sirve para ordenarlo
        $clave = sprintf('%s-%s', $publicacion->tiempo_creado(), $publicacion->archivo);
        // Acumular
        $this->elementos[$clave] = array(
            'id'          => $id,
            'fecha'       => $fecha,
            'titulo'      => htmlentities($publicacion->nombre),
            'descripcion' => htmlentities($publicacion->descripcion),
            'autor'       => htmlentities($publicacion->autor),
            'url'         => $url);
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
        $a[] = '<rss version="2.0">';
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
        // Bucle por los elementos
        $contador = 0;
        foreach ($this->elementos as $clave => $e) {
            if ($contador >= $this->elementos_max) {
                break;
            }
            $a[] = '    <item>';
            $a[] = "      <title>{$e['titulo']}</title>";
            $a[] = "      <link>{$e['url']}</link>";
            $a[] = "      <description>{$e['descripcion']}</description>";
            $a[] = "      <pubDate>{$e['fecha']}</pubDate>"; // Indicates when the item was published
            $a[] = "      <guid>{$clave}</guid>"; // A string that uniquely identifies the item
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
