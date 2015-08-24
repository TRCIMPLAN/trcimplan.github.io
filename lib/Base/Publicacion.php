<?php
/*
 * TrcIMPLAN Sitio Web - Publicación
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
 * Clase Publicacion
 */
class Publicacion extends \Configuracion\PublicacionConfig {

    // public $fecha;                         // La fecha en forma de YYYY-MM-DD HH:MM, siendo así se ordena cronológicamente
    // public $autor;                         // El nombre o apodo a quien se le atribuye
    // public $aparece_en_pagina_inicial;     // Verdadero si va aparecer en la página de inicio
    // public $para_compartir;                // Si es verdadero pondrá los botones para compartir en Twitter/Facebook
    // public $imagen                         // Ruta relativa a un archivo de imagen
    // public $imagen_previa;                 // Ruta relativa a un archivo de imagen para la vista previa
    // public $icono;                         // Nombre del icono Font Awsome
    // public $region_nivel;                  // Nivel de la región. Le sirve a Relacionados para preferir los que sean de la misma región
    // public $estado                         // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
    public $nombre;                           // Título completo
    public $nombre_menu;                      // Un título corto. Debe coincidir con la etiqueta usada en Navegacion
    public $directorio;                       // Directorio donde se guardará la publicación completa
    public $archivo;                          // El nombre del archivo para la publicación
    public $descripcion;                      // Descripción del sitio o la página
    public $claves;                           // Claves que ayuden a los buscadores
    public $categorias       = array();       // Arreglo con las categorías de la publicación
    public $encabezado;                       // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $encabezado_color;                 // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    protected $contenido     = array();       // Contenido código HTML de la publicación
    protected $javascript    = array();       // Código Javascript. Debe estar aparte para ponerlo al final de la página.
    public $url;                              // Opcional. Cuando la propiedad archivo no se defina, entonces será sólo un vínculo a este URL de destino. Puede apuntar a un archivo descargable o a un URL absoluto.
    public $url_etiqueta;                     // Opcional. Cuando la propiedad archivo no se defina, entonces se usa esta etiqueta para el vínculo o botón.
    protected $redifusion    = array();       // Código HTML con la publicación que va para redifusión (RSS feed).
    public $en_raiz          = false;         // Verdadero si el archivo va a la raiz del sitio web. Debe ser verdadero cuando se hacen las páginas de inicio.
    public $en_otro          = false;         // Verdadero si el archivo va a OTRO lugar como al directorio autores, categorias, etc.
    public $archivo_url;                      // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $archivo_target;                   // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $boton_url;                        // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $boton_target;                     // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $contenido_archivo_html;           // Ruta absoluta a un archivo externo HTML que se usará como contenido
    public $contenido_archivo_markdown;       // Ruta absoluta a un archivo externo Markdown que se usará como contenido
    public $poner_imagen_en_contenido = true; // Poner la imagen antes que el contenido
    public $fuentes;                          // Pendiente que se definan las fuentes. Lo usa el Organizador.
    public $regiones;                         // Pendiente que se definan las regiones. Lo usa el Organizador.

    /**
     * Validar
     *
     * Causa una excepción si hay propiedades incorrectas. También define los vínculos. Es usado por Indice y Tarjetas.
     */
    public function validar() {
        // Validar nombre
        if (!is_string($this->nombre) || ($this->nombre == '')) {
            throw new \Exception("Error en Publicacion, validar: Una publicación NO tiene nombre.");
        }
        // Si está definido archivo
        if ($this->archivo != '') {
            $archivo_html = $this->archivo.'.html';
            // Si está definio OTRO URL
            if ($this->url != '') {
                // El botón al URL definido, el vínculo del título al archivo creado
                $this->archivo_url = $archivo_html;
                $this->boton_url   = $this->url;
            } else {
                // No está definido el url, ambos apuntan al archivo creado
                $this->archivo_url = $archivo_html;
                $this->boton_url   = $archivo_html;
            }
        } elseif ($this->url != '') {
            // No hay archivo. El vínculo es un URL absoluto o relativo, a una página o archivo o a un sitio web externo
            $this->archivo_url = $this->url;
            $this->boton_url   = $this->url;
        } else {
            throw new \Exception("Error en Publicacion, validar: {$this->nombre} NO tiene las propiedades archivo y url. Debe usar por lo menos una.");
        }
        // Si no hay etiqueta, se usa el nombre
        if ($this->url_etiqueta == '') {
            $this->url_etiqueta = $this->nombre;
        }
        // Si el url apunta afuera del sitio o a un archivo PDF, RAR, TAR.GZ, TGZ o ZIP
        if ((preg_match('/^(http|https|ftp|ftps):\/\//', $this->archivo_url) === 1) || (preg_match('/\.(pdf|rar|tar.gz|tgz|zip)$/', $this->archivo_url) === 1)) {
            $this->archivo_target = ' target="_blank"';
        } else {
            $this->archivo_target = '';
        }
        // Si el boton_url apunta afuera del sitio o a un archivo PDF, RAR, TAR.GZ, TGZ o ZIP
        if ((preg_match('/^(http|https|ftp|ftps):\/\//', $this->boton_url) === 1) || (preg_match('/\.(pdf|rar|tar.gz|tgz|zip)$/', $this->boton_url) === 1)) {
            $this->boton_target = ' target="_blank"';
        } else {
            $this->boton_target = '';
        }
    } // validar

    /**
     * URL
     *
     * @return string URL para enlazar, segun las banderas en_raiz y en_otro
     */
    public function url() {
        // Validar
        $this->validar();
        // Si el vínculo es absoluto
        if (preg_match('/^(http|https|ftp|ftps):\/\//', $this->archivo_url) === 1) {
            return $this->archivo_url;
        } elseif ($this->en_raiz) {
            return "{$this->directorio}/{$this->archivo_url}";
        } elseif ($this->en_otro) {
            return "../{$this->directorio}/{$this->archivo_url}";
        } else {
            return $this->archivo_url;
        }
    } // url

    /**
     * URL absoluto
     *
     * @return string URL absoluto de la publicación
     */
    public function url_absoluto() {
        // Validar
        $this->validar();
        // Si el vínculo es absoluto
        if (preg_match('/^(http|https|ftp|ftps):\/\//', $this->archivo_url) === 1) {
            return $this->archivo_url;
        } else {
            return sprintf('%s/%s/%s', $this->sitio_url, $this->directorio, $this->archivo_url);
        }
    } // url_absoluto

    /**
     * Imagen URL
     *
     * @return string URL para enlazar, segun las banderas en_raiz y en_otro
     */
    public function imagen_url() {
        if ($this->imagen === '') {
            return '';
        } elseif ((strpos($this->imagen, 'http://') === 0) || (strpos($this->imagen, 'https://') === 0) || (strpos($this->imagen, '/') === 0)) {
            return $this->imagen;
        } elseif ($this->en_raiz) {
            if (strpos($this->imagen, '../') === 0) {
                return substr($this->imagen, 3);
            } else {
                return "{$this->directorio}/{$this->imagen}";
            }
        } elseif ($this->en_otro) {
            return "../{$this->directorio}/{$this->imagen}";
        } else {
            return "{$this->imagen}";
        }
    } // imagen_url

    /**
     * Imagen previa URL
     *
     * @return string URL para enlazar, segun las banderas en_raiz y en_otro
     */
    public function imagen_previa_url() {
        if ($this->imagen_previa === '') {
            return '';
        } elseif ((strpos($this->imagen_previa, 'http://') === 0) || (strpos($this->imagen_previa, 'https://') === 0) || (strpos($this->imagen_previa, '/') === 0)) {
            return $this->imagen_previa;
        } elseif ($this->en_raiz) {
            if (strpos($this->imagen_previa, '../') === 0) {
                return substr($this->imagen_previa, 3);
            } else {
                return "{$this->directorio}/{$this->imagen_previa}";
            }
        } elseif ($this->en_otro) {
            return "../{$this->directorio}/{$this->imagen_previa}";
        } else {
            return "{$this->imagen_previa}";
        }
    } // imagen_previa_url

    /**
     * Tiempo desde que fue creado
     *
     * @return integer Timestamp
     */
    public function tiempo_creado() {
        $fecha = new \DateTime($this->fecha, new \DateTimeZone('America/Monterrey'));
        return sprintf('%012d', time() - $fecha->getTimestamp());
    } // tiempo_creado

    /**
     * Fecha con formato humano
     *
     * @return string Fecha en el formato DD/MM/YYYY
     */
    public function fecha_con_formato_humano() {
        $t = strtotime($this->fecha);
        if ($t === false) {
            // Fecha mal escrita, no se entrega nada
            return '';
        } else {
            // Sí se interpretó bien
            $a      = getdate($t);
            $ano    = $a['year'];
            $mes    = $a['mon'];
            $dia    = $a['mday'];
            $hora   = $a['hours'];
            $minuto = $a['minutes'];
            if (($hora > 0) || ($minuto > 00)) {
                return sprintf('%02d/%02d/%04d %02d:%02d', $dia, $mes, $ano, $hora, $minuto);
            } else {
                return sprintf('%02d/%02d/%04d', $dia, $mes, $ano);
            }
        }
    } // fecha_con_formato_humano

    /**
     * Fecha en ISO 8601, por ejemplo Thu, 21 Dec 2000 16:01:07 +0200
     *
     * @return string Fecha en ISO 8601
     */
    public function fecha_en_iso8601() {
        $t = strtotime($this->fecha);
        if ($t === false) {
            // Fecha mal escrita, se usará 1980-01-01
            $ano    = 1980;
            $mes    = 1;
            $dia    = 1;
            $hora   = 0;
            $minuto = 0;
            return date(DATE_ISO8601, mktime($hora, $minuto, 0, $mes, $dia, $ano));
        } else {
            // Sí se interpretó bien
            $a      = getdate($t);
            $ano    = $a['year'];
            $mes    = $a['mon'];
            $dia    = $a['mday'];
            $hora   = $a['hours'];
            $minuto = $a['minutes'];
            return date(DATE_ISO8601, mktime($hora, $minuto, 0, $mes, $dia, $ano));
        }
    } // fecha_en_iso8601

    /**
     * Fecha en RFC 2822, por ejemplo 2004-02-12T15:19:21+00:00
     *
     * @return string RFC 2822
     */
    public function fecha_en_rfc2822() {
        $t = strtotime($this->fecha);
        if ($t === false) {
            // Fecha mal escrita, se usará 1980-01-01
            $ano    = 1980;
            $mes    = 1;
            $dia    = 1;
            $hora   = 0;
            $minuto = 0;
            return date(DATE_RFC1123, mktime($hora, $minuto, 0, $mes, $dia, $ano));
        } else {
            // Sí se interpretó bien
            $a      = getdate($t);
            $ano    = $a['year'];
            $mes    = $a['mon'];
            $dia    = $a['mday'];
            $hora   = $a['hours'];
            $minuto = $a['minutes'];
            return date(DATE_RFC1123, mktime($hora, $minuto, 0, $mes, $dia, $ano));
        }
    } // fecha_en_rfc2822

    /**
     * Cargar archivo
     *
     * @param  string Ruta al archivo desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.html'
     * @return string Código HTML
     */
    protected function cargar_archivo($ruta) {
        $contenido = file_get_contents("$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en Publicacion, cargar_archivo: No se puede leer $ruta");
        }
        return $contenido;
    } // cargar_archivo_markdown

    /**
     * Cargar archivo markdown
     *
     * Con este método se pueden cargar archivos markdown para que se organize el contenido.
     * Útil con el uso de Lenguetas.
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    protected function cargar_archivo_markdown($ruta) {
        $contenido = file_get_contents("$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en Publicacion, cargar_archivo_markdown: No se puede leer $ruta");
        }
        $html = \Michelf\Markdown::defaultTransform($contenido);
        return $html;
    } // cargar_archivo_markdown

    /**
     * Cargar archivo markdown extra
     *
     * Éste tiene la construcción de tablas.
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    protected function cargar_archivo_markdown_extra($ruta) {
        $contenido = file_get_contents("$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en Publicacion, cargar_archivo_markdown_extra: No se puede leer $ruta");
        }
        $html    = \Michelf\MarkdownExtra::defaultTransform($contenido);
        $html_tb = str_replace('<table>', '<table class="table table-hover table-bordered">', $html); // Tablas de Twitter Bootstrap
        return $html_tb;
    } // cargar_archivo_markdown_extra

    /**
     * Es Contenido Esquema
     *
     * Si el contenido es una instancia de esquema, entonces se encargará de poner el encabezado en la página. Es usado en Completo.
     *
     * @return boolena Verdadero si el contenido es una instancia de Schema
     */
    public function es_contenido_esquema() {
        if (is_object($this->contenido) && ($this->contenido instanceof SchemaCreativeWork)) {
            return true;
        } else {
            return false;
        }
    } // es_contenido_esquema

    /**
     * Definir Color del Encabezado
     *
     * @param String Color
     */
    public function definir_encabezado_color($in_color) {
        $this->encabezado_color = $in_color;
        if ($this->es_contenido_esquema()) {
            $this->contenido->headline_style = $in_color;
        }
    } // definir_encabezado_color

    /**
     * Definir Icono del Encabezado
     *
     * @param String Icono
     */
    public function definir_encabezado_icono($in_icono) {
        if ($this->es_contenido_esquema()) {
            $this->contenido->headline_icon = $in_icono;
        }
    } // definir_encabezado_icono

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Hay cinco posibles formas de elaborar el HTML
        // 1) Propiedad contenido es una instancia Schema
        if (is_object($this->contenido) && ($this->contenido instanceof SchemaThing)) {
            // Si está definido la carga de un archivo
            if ($this->contenido_archivo_markdown != '') {
                $this->contenido->articleBody = $this->cargar_archivo_markdown_extra($this->contenido_archivo_markdown);
            } elseif ($this->contenido_archivo_html != '') {
                $this->contenido->articleBody = $this->cargar_archivo($this->contenido_archivo_html);
            }
            // Si existe un archivo HTML para cargar como el extra de SchemaThing
            $extra_archivo_html = sprintf('%s/%s/%s.html', $this->include_extra_directorio, $this->directorio, $this->archivo);
            if (file_exists($extra_archivo_html)) {
                $this->contenido->extra = $this->cargar_archivo($extra_archivo_html);
            }
            // Generar HTML y acumular Javascript
            $html = $this->contenido->html();
            if (is_array($this->javascript)) {
                $this->javascript[] = $this->contenido->javascript();
            } else {
                $this->javascript = array($this->contenido->javascript());
            }
            return $html;
        // 2) Cargar archivo externo de contenido_archivo_markdown
        } elseif ($this->contenido_archivo_markdown != '') {
            return $this->cargar_archivo_markdown_extra($this->contenido_archivo_markdown);
        // 3) Cargar archivo externo de contenido_archivo_html
        } elseif ($this->contenido_archivo_html != '') {
            return $this->cargar_archivo($this->contenido_archivo_html);
        // 4) Propiedad contenido es un arreglo con textos o instancias
        } elseif (is_array($this->contenido) && (count($this->contenido) > 1)) {
            $a = array();
            foreach ($this->contenido as $c) {
                if (is_object($c)) {
                    $a[] = $c->html();
                    if (is_array($this->javascript)) {
                        $this->javascript[] = $c->javascript();
                    } else {
                        $this->javascript = array($c->javascript());
                    }
                } elseif (is_string($c) && ($c != '')) {
                    $a[] = $c;
                }
            }
            return implode("\n", $a);
        // 5) Propiedad contenido es texto
        } elseif (is_string($this->contenido) && ($this->contenido != '')) {
            return $this->contenido;
        } else {
            return '';
        }
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        if (is_array($this->javascript) && (count($this->javascript) > 1)) {
            $a = array();
            foreach ($this->javascript as $c) {
                if ($c != '') {
                    $a[] = $c;
                }
            }
            return implode("\n", $a);
        } elseif (is_string($this->javascript) && ($this->javascript != '')) {
            return $this->javascript;
        } else {
            return '';
        }
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Hay seis formas de elaborar el HTML para redifusión
        // 1) Propiedad redifusion es un arreglo con textos o instancias
        if (is_array($this->redifusion) && (count($this->redifusion) > 1)) {
            $a = array();
            foreach ($this->redifusion as $c) {
                if (is_object($c)) {
                    $a[] = $c->html();
                } elseif (is_string($c) && ($c != '')) {
                    $a[] = $c;
                }
            }
            return implode("\n", $a);
        // 2) Propiedad redifusion es texto
        } elseif (is_string($this->redifusion) && ($this->redifusion != '')) {
            return $this->redifusion;
        // 3) Cargar archivo de contenido_archivo_markdown
        } elseif ($this->contenido_archivo_markdown != '') {
            $markdown = $this->cargar_archivo_markdown_extra($this->contenido_archivo_markdown);
            if ($this->poner_imagen_en_contenido && ($this->imagen != '')) {
                return "<img src=\"{$this->imagen}\"><br>\n\n{$markdown}";
            } else {
                return $markdown;
            }
        // 4) Cargar archivo de contenido_archivo_html
        } elseif ($this->contenido_archivo_html != '') {
            $html = $this->cargar_archivo($this->contenido_archivo_html);
            if ($this->poner_imagen_en_contenido && ($this->imagen != '')) {
                return "<img src=\"{$this->imagen}\"><br>\n\n{$html}";
            } else {
                return $html;
            }
        // 5) Propiedad contenido es un arreglo con textos o instancias
        } elseif (is_array($this->contenido) && (count($this->contenido) > 1)) {
            $a = array();
            foreach ($this->contenido as $c) {
                if (is_object($c)) {
                    $a[] = $c->html();
                } elseif (is_string($c) && ($c != '')) {
                    $a[] = $c;
                }
            }
            return implode("\n", $a);
        // 6) Propiedad contenido es texto
        } elseif (is_string($this->contenido) && ($this->contenido != '')) {
            return $this->contenido;
        } else {
            return '';
        }
    } // redifusion_html

} // Clase Publicacion

?>
