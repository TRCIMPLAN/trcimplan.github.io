<?php
/**
 * Plataforma de Conocimiento - Publicación
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
 * Clase Publicacion
 */
class Publicacion extends \Configuracion\PublicacionConfig {

    // public $sitio_url;
    // public $fecha;
    // public $autor;
    // public $aparece_en_pagina_inicial;
    // public $para_compartir;
    // public $imagen;
    // public $imagen_previa;
    // public $imagen_id;
    // public $icono;
    // public $region_nivel;
    // public $estado;
    // public $poner_imagen_en_contenido;
    // public $include_extra_directorio;
    public $nombre;                           // Título completo
    public $nombre_menu;                      // Un título corto. Debe coincidir con la etiqueta usada en Navegacion
    public $directorio;                       // Directorio donde se guardará la publicación completa
    public $archivo;                          // El nombre del archivo para la publicación
    public $descripcion;                      // Descripción del sitio o la página
    public $claves;                           // Claves que ayuden a los buscadores
    public $encabezado;                       // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $encabezado_color;                 // Opcional. Color de fondo del encabezado en Hex, por ejemplo: #008000
    public $url;                              // Opcional. Cuando la propiedad archivo no se defina, entonces será sólo un vínculo a este URL de destino. Puede apuntar a un archivo descargable o a un URL absoluto.
    public $url_etiqueta;                     // Opcional. Cuando la propiedad archivo no se defina, entonces se usa esta etiqueta para el vínculo o botón.
    public $en_raiz          = false;         // Verdadero si el archivo va a la raiz del sitio web. Debe ser verdadero cuando se hacen las páginas de inicio.
    public $en_otro          = false;         // Verdadero si el archivo va a OTRO lugar como al directorio autores, categorias, etc.
    public $archivo_url;                      // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $archivo_target;                   // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $boton_url;                        // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $boton_target;                     // NO LO USE. Lo define el método validar en base a otra propiedades.
    public $contenido_archivo_html;           // Ruta absoluta a un archivo externo HTML que se usará como contenido
    public $contenido_archivo_markdown;       // Ruta absoluta a un archivo externo Markdown que se usará como contenido
    public $categorias       = array();       // Arreglo con las categorías de la publicación
    public $fuentes          = array();       // Arreglo con las fuentes. Lo usa el Organizador.
    public $regiones         = array();       // Arreglo con las regiones. Lo usa el Organizador.
    public $imprenta_titulo;                  // Título de la imprenta. Es usado por VinculosAcordeonesListados.
    protected $contenido     = array();       // Contenido código HTML de la publicación
    protected $javascript    = array();       // Código Javascript. Debe estar aparte para ponerlo al final de la página.
    protected $redifusion    = array();       // Código HTML con la publicación que va para redifusión (RSS feed).
    protected $validado      = false;         // Booleano, verdadero si ya se ha validado.

    /**
     * Validar
     *
     * Causa una excepción si hay propiedades incorrectas, también define los vínculos
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // Validar nombre
        if (!is_string($this->nombre) || ($this->nombre == '')) {
            throw new \Exception("Error en Publicacion, validar: La propiedad nombre no está definida.");
        }
        // Si está definido archivo
        if (is_string($this->archivo) && ($this->archivo != '')) {
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
        } elseif (is_string($this->url) && ($this->url != '')) {
            // No hay archivo. El vínculo es un URL absoluto o relativo, a una página o archivo o a un sitio web externo
            $this->archivo_url = $this->url;
            $this->boton_url   = $this->url;
        } else {
            throw new \Exception("Error en Publicacion, validar: Las propiedades archivo y/o url no están definidas. Debe estarlo por lo menos una.");
        }
        // Si no hay etiqueta, se usa el nombre
        if (is_string($this->url_etiqueta) && ($this->url_etiqueta == '')) {
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
        // Levantar la bandera
        $this->validado = true;
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
        // Validar
        $this->validar();
        // Entregar URL de la imagen
        if ($this->imagen == '') {
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
        // Validar
        $this->validar();
        // Entregar URL de la imagen previa
        if ($this->imagen_previa == '') {
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
        // Validar
        $this->validar();
        // Entregar número que indica la antigüedad
        $fecha = new \DateTime($this->fecha, new \DateTimeZone('America/Monterrey'));
        return sprintf('%012d', time() - $fecha->getTimestamp());
    } // tiempo_creado

    /**
     * Fecha con formato humano
     *
     * @return string Fecha en el formato DD/MM/YYYY
     */
    public function fecha_con_formato_humano() {
        // Validar
        $this->validar();
        // Entregar fecha
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
        // Validar
        $this->validar();
        // Entregar fecha
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
        // Validar
        $this->validar();
        // Entregar fecha
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
     * Se mantiene este método por compatibilidad, muchas publicaciones lo están mandando llamar.
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    protected function cargar_archivo_markdown($ruta) {
        return Funciones::cargar_archivo_markdown($ruta);
    } // cargar_archivo_markdown

    /**
     * Cargar archivo markdown extra
     *
     * Se mantiene este método por compatibilidad, muchas publicaciones lo están mandando llamar.
     *
     * @param  string Ruta al archivo markdown desde la raiz del sitio, ejemplo 'lib/Directorio/Archivo.md'
     * @return string Código HTML
     */
    protected function cargar_archivo_markdown_extra($ruta) {
        return Funciones::cargar_archivo_markdown_extra($ruta);
    } // cargar_archivo_markdown_extra

    /**
     * Es Contenido Esquema
     *
     * Si el contenido es una instancia de esquema, entonces se encargará de poner el encabezado en la página. Es usado en Completo.
     *
     * @return boolena Verdadero si el contenido es una instancia de Schema
     */
    public function es_contenido_esquema() {
        // Validar
        $this->validar();
        // Entregar verdadero si es derivado de SchemaCreativeWork
        if (is_object($this->contenido)) {
            if ($this->contenido instanceof SchemaCreativeWork) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } // es_contenido_esquema

    /**
     * Definir Color del Encabezado
     *
     * @param String Color
     */
    public function definir_encabezado_color($color) {
        if ($this->encabezado_color == '') {
            $this->encabezado_color = $color;
            if (is_object($this->contenido) && ($this->contenido instanceof SchemaCreativeWork)) {
                $this->contenido->headline_style = $color;
            }
        }
    } // definir_encabezado_color

    /**
     * Definir ícono del encabezado
     *
     * @param String Icono
     */
    public function definir_encabezado_icono($icono) {
        if ($this->icono == '') {
            $this->icono = $icono;
            if (is_object($this->contenido) && ($this->contenido instanceof SchemaCreativeWork)) {
                $this->contenido->headline_icon = $icono;
            }
        }
    } // definir_encabezado_icono

    /**
     * Definir encabezado
     *
     * @param String Código HTML para el encabezado
     */
    public function definir_encabezado($encabezado) {
        if ($this->encabezado == '') {
            $this->encabezado = $encabezado;
        }
    } // definir_encabezado

    /**
     * Definir claves
     *
     * @param String Claves
     */
    public function definir_claves($claves) {
        if ($this->claves == '') {
            $this->claves = $claves;
        }
    } // definir_claves

    /**
     * Definir directorio
     *
     * @param String Directorio
     */
    public function definir_directorio($dir) {
        if ($this->directorio == '') {
            $this->directorio = $dir;
        }
    } // definir_directorio

    /**
     * Definir nombre menu
     *
     * @param String Nombre del menú activo
     */
    public function definir_nombre_menu($nombre_menu) {
        if ($this->nombre_menu == '') {
            $this->nombre_menu = $nombre_menu;
        }
    } // definir_nombre_menu

    /**
     * Definir título de la imprenta
     *
     * @param string Título de la imprenta
     */
    public function definir_imprenta_titulo($titulo) {
        $this->imprenta_titulo = $titulo;
    } // definir_imprenta_titulo

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        $this->validar();
        // Hay cinco posibles formas de elaborar el HTML
        // 1) Propiedad contenido es una instancia de SchemaThing o desendiente de ésta
        if (is_object($this->contenido) && ($this->contenido instanceof SchemaThing)) {
            // SchemaArticle tiene articleBody
            if (is_object($this->contenido) && ($this->contenido instanceof SchemaArticle)) {
                // Si está definido la carga de un archivo
                if ($this->contenido_archivo_markdown != '') {
                    $this->contenido->articleBody = $this->cargar_archivo_markdown_extra($this->contenido_archivo_markdown);
                } elseif ($this->contenido_archivo_html != '') {
                    $this->contenido->articleBody = $this->cargar_archivo($this->contenido_archivo_html);
                }
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
        // Validar
        $this->validar();
        // Entregar
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
        // Validar
        $this->validar();
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
