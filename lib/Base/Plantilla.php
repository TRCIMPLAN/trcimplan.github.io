<?php
/*
 * TrcIMPLAN Sitio Web - Plantilla
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
 * Clase Plantilla
 */
class Plantilla extends \Configuracion\PlantillaConfig {

    // public $sitio_titulo;
    // static public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    public $titulo;                         // Título de la página
    public $descripcion;                    // Descripción del sitio o la página
    public $claves;                         // Claves que ayuden a los buscadores
    public $directorio;                     // Directorio donde se guardará el archivo HTML
    public $archivo_ruta;                   // Ruta desde la raiz a la pagina HTML
    public $imagen_previa_ruta;             // Ruta desde la raiz a la imagen previa
    public $icono;                          // Icono de Font Awsome
    public $navegacion;                     // Instancia de \Base\Navegacion
    public $contenido            = array(); // Texto o arreglo, código HTML con el contenido
    public $mapa_inferior;                  // Instancia de \Base\MapaInferior
    public $javascript           = array(); // Arreglo que acumula el código Javascript a poner al final de la página
    public $contenido_en_renglon = true;    // Encierra el contenido en renglón y cuerpo.
    public $google_site_verification;       // Opcional. Código de verificación de Google; se agregará a header

    /**
     * Incorporar Publicacion
     *
     * @param  mixed   Instancia de Publicacion
     * @return boolean Verdadero si se integró, falso si se omitió por no tener definida la propiedad archivo
     */
    public function incorporar_publicacion($publicacion) {
        // Validar que sea una Publicacion
        if (!is_object($publicacion) || !($publicacion instanceof Publicacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: No es instancia de Publicacion.");
        }
        // Omitir cuando la propiedad archivo NO está definida
        if (($publicacion->archivo == '') || ($publicacion->directorio == '')) {
            return false;
        }
        // Validar Navegación
        if (!is_object($this->navegacion) || !($this->navegacion instanceof Navegacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: La propiedad navegacion no es instancia de Navegacion.");
        }
        // Inicializar el código JavaScript, porque puede quedar algo de publicaciones anteriores
        $this->javascript   = array();
        // Esta publicación ocupará la página completa
        $completo           = new Completo($publicacion);
        $this->contenido    = $completo->html();
        $this->javascript[] = $completo->javascript();
        // En navegacion, para que el menú indique la opción activa
        $this->navegacion->opcion_activa = $publicacion->nombre_menu;
        // Definir las demás propiedades
        $this->titulo       = $publicacion->nombre;
        $this->autor        = $publicacion->autor;
        $this->descripcion  = $publicacion->descripcion;
        $this->claves       = $publicacion->claves;
        $this->directorio   = $publicacion->directorio;
        $this->archivo_ruta = "{$publicacion->directorio}/{$publicacion->archivo}.html";
        if ($publicacion->imagen_previa != '') {
            $this->imagen_previa_ruta = "{$publicacion->directorio}/{$publicacion->imagen_previa}";
        } else {
            $this->imagen_previa_ruta = '';
        }
        $this->icono        = $publicacion->icono;
        // Entregar verdadero
        return true;
    } // incorporar_publicacion

    /**
     * Cabecera
     *
     * @return string Código HTML
     */
    protected function cabecera() {
        // Título
        if (($this->titulo == '') || ($this->titulo == $this->sitio_titulo)) {
            $titulo = $this->sitio_titulo;
        } else {
            $titulo = "{$this->titulo} - {$this->sitio_titulo}";
        }
        // Definir título y descripción con carecteres validos para usarse como valor en un tag
        $caracteres_buscar      = array('"', '<', '>');
        $caracteres_reemplazar  = array("'", '-', '-');
        $titulo_para_valor      = str_replace($caracteres_buscar, $caracteres_reemplazar, $titulo);
        $descripcion_para_valor = str_replace($caracteres_buscar, $caracteres_reemplazar, $this->descripcion);
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<head>';
        $a[] = '  <meta charset="utf-8">';
        if ($this->mensaje_oculto != '') {
            $a[] = $this->mensaje_oculto;
        }
        $a[] = '  <meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $a[] = '  <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        if ($this->descripcion != '') {
            $a[] = "  <meta name=\"description\" content=\"$descripcion_para_valor\">";
        }
        if ($this->autor != '') {
            $a[] = "  <meta name=\"author\" content=\"{$this->autor}\">";
        }
        if ($this->claves != '') {
            $a[] = "  <meta name=\"keywords\" content=\"{$this->claves}\">";
        }
        if ($this->para_compartir) {
            $a[] = "  <meta name=\"twitter:card\" content=\"summary\">";
            $a[] = "  <meta name=\"twitter:title\" content=\"$titulo_para_valor\">";
            $a[] = "  <meta name=\"twitter:description\" content=\"$descripcion_para_valor\">";
            if ($this->imagen_previa_ruta != '') {
                $a[] = sprintf('  <meta name="twitter:image" content="%s/%s">', self::$sitio_url, $this->imagen_previa_ruta);
            }
            $a[] = sprintf('  <meta name="twitter:url" content="%s/%s">', self::$sitio_url, $this->archivo_ruta);
            $a[] = "  <meta name=\"og:title\" content=\"$titulo_para_valor\">";
            $a[] = "  <meta name=\"og:description\" content=\"$descripcion_para_valor\">";
            if ($this->imagen_previa_ruta != '') {
                $a[] = sprintf('  <meta name="og:image" content="%s/%s">', self::$sitio_url, $this->imagen_previa_ruta);
            }
            $a[] = sprintf('  <meta name="og:url" content="%s/%s">', self::$sitio_url, $this->archivo_ruta);
        }
        if ($this->google_site_verification != '') {
            $a[] = $this->google_site_verification;
        }
        $a[] = "  <title>$titulo</title>";
        if (isset($this->cabecera_bootstrap_css)) {
            $a[] = "  {$this->cabecera_bootstrap_css}";
        }
        if (isset($this->cabecera_font_awesome_css)) {
            $a[] = "  {$this->cabecera_font_awesome_css}";
        }
        if ($this->en_raiz) {
            if ($this->favicon != '') {
                $a[] = "  <link href=\"{$this->favicon}\" rel=\"shortcut icon\" type=\"image/x-icon\">";
            }
            if ($this->rss != '') {
                $a[] = "  <link href=\"{$this->rss}\" rel=\"alternate\" type=\"application/rss+xml\" title=\"{$this->sitio_titulo}\">";
            }
            if (!isset($this->cabecera_bootstrap_css)) {
                $a[] = '  <link href="css/bootstrap.min.css" rel="stylesheet">';
            }
            $a[] = '  <link href="css/morris.css" rel="stylesheet">';
            $a[] = '  <link href="css/leaflet.css" rel="stylesheet">';
            $a[] = '  <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">';
            $a[] = '  <link href="css/sb-admin-2.css" rel="stylesheet">';
            if (!isset($this->cabecera_font_awesome_css)) {
                $a[] = '  <link href="css/font-awesome.min.css" rel="stylesheet">';
            }
            if ($this->propio_css != '') {
                $a[] = "  <link href=\"{$this->propio_css}\" rel=\"stylesheet\">";
            }
        } else {
            if ($this->favicon != '') {
                $a[] = "  <link href=\"../{$this->favicon}\" rel=\"shortcut icon\" type=\"image/x-icon\">";
            }
            if ($this->rss != '') {
                $a[] = "  <link href=\"../{$this->rss}\" rel=\"alternate\" type=\"application/rss+xml\" title=\"{$this->sitio_titulo}\">";
            }
            if (!isset($this->cabecera_bootstrap_css)) {
                $a[] = '  <link href="../css/bootstrap.min.css" rel="stylesheet">';
            }
            $a[] = '  <link href="../css/morris.css" rel="stylesheet">';
            $a[] = '  <link href="../css/leaflet.css" rel="stylesheet">';
            $a[] = '  <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">';
            $a[] = '  <link href="../css/sb-admin-2.css" rel="stylesheet">';
            if (!isset($this->cabecera_font_awesome_css)) {
                $a[] = '  <link href="../css/font-awesome.min.css" rel="stylesheet">';
            }
            if ($this->propio_css != '') {
                $a[] = "  <link href=\"../{$this->propio_css}\" rel=\"stylesheet\">";
            }
        }
        // Google fonts inicia
        $a[] = '  <link href="http://fonts.googleapis.com/css?family=Questrial|Roboto+Condensed:400,700" rel="stylesheet" type="text/css">';
        // Google fonts termina
        $a[] = '  <!-- SOPORTE PARA IE -->';
        $a[] = '  <!--[if lt IE 9]>';
        $a[] = '  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
        $a[] = '  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
        $a[] = '  <![endif]-->';
        $a[] = '</head>';
        // Entregar
        return implode("\n", $a);
    } // cabecera

    /**
     * Scripts
     *
     * @return string Código HTML
     */
    protected function scripts() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        if (isset($this->scripts_jquery_css)) {
            $a[] = $this->scripts_jquery_css;
        }
        if (isset($this->scripts_bootstrap_js)) {
            $a[] = $this->scripts_bootstrap_js;
        }
        if ($this->en_raiz) {
            if (!isset($this->scripts_jquery_css)) {
                $a[] = '<script src="js/jquery.min.js"></script>';
            }
            if (!isset($this->scripts_bootstrap_js)) {
                $a[] = '<script src="js/bootstrap.min.js"></script>';
            }
            $a[] = '<script src="js/raphael-min.js"></script>';
            $a[] = '<script src="js/morris.min.js"></script>';
            $a[] = '<script src="js/leaflet.js"></script>';
            $a[] = '<script src="js/plugins/metisMenu/metisMenu.min.js"></script>';
            $a[] = '<script src="js/sb-admin-2.js"></script>';
        } else {
            if (!isset($this->scripts_jquery_css)) {
                $a[] = '<script src="../js/jquery.min.js"></script>';
            }
            if (!isset($this->scripts_bootstrap_js)) {
                $a[] = '<script src="../js/bootstrap.min.js"></script>';
            }
            $a[] = '<script src="../js/raphael-min.js"></script>';
            $a[] = '<script src="../js/morris.min.js"></script>';
            $a[] = '<script src="../js/leaflet.js"></script>';
            $a[] = '<script src="../js/plugins/metisMenu/metisMenu.min.js"></script>';
            $a[] = '<script src="../js/sb-admin-2.js"></script>';
        }
        if (is_array($this->javascript)) {
            $b = array();
            foreach ($this->javascript as $js) {
                if (trim($js) != '') {
                    if (substr(trim($js), 0, 8) == '<script ') {
                        $b[] = $js;
                    } else {
                        $b[] = "<script>\n$js\n</script>";
                    }
                }
            }
            if (count($b) > 0) {
                $a[] = implode("\n", $b);
            }
        } elseif (is_string($this->javascript) && (trim($this->javascript) != '')) {
            if (substr(trim($this->javascript), 0, 8) == '<script ') {
                $a[] = $this->javascript;
            } else {
                $a[] = '<script>';
                $a[] = $this->javascript;
                $a[] = '</script>';
            }
        }
        if (isset($this->google_analytics)) {
            $a[] = $this->google_analytics;
        }
        // Entregar
        return implode("\n", $a);
    } // scripts

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        if (!is_object($this->navegacion)) {
            throw new \Exception("Error en Plantilla, html: La propiedad navegacion no es una instancia.");
        }
        if (!($this->navegacion instanceof Navegacion)) {
            throw new \Exception("Error en Plantilla, html: La propiedad navegacion no es instancia de Navegacion.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<!DOCTYPE html>';
        $a[] = '<html lang="es">';
        $a[] = $this->cabecera();
        $a[] = '<body>';
        $a[] = '<div id="wrapper">';
        $a[] = $this->navegacion->html();
        // Contenido inicia
        $a[] = '  <div id="page-wrapper">';
        if ($this->contenido_en_renglon) {
            $a[] = '    <div class="cuerpo">';
        }
        if (is_string($this->contenido) && (trim($this->contenido) != '')) {
            $a[] = $this->contenido;
        } elseif (is_array($this->contenido) && (count($this->contenido) > 0)) {
            $a[] = implode("\n", $this->contenido);
        } else {
            $a[] = "      <b>No hay contenido para esta página.</b>";
        }
        if ($this->contenido_en_renglon) {
            $a[] = '    </div>'; // cuerpo
        }
        if (is_object($this->mapa_inferior) && ($this->mapa_inferior instanceof MapaInferior)) {
            $a[] = $this->mapa_inferior->html();
        }
        $a[] = '  </div>';     // page-wrapper
        // Contenido termina
        $a[] = '</div>';       // wrapper
        if (is_string($this->pie) && (trim($this->pie) != '')) {
            $a[] = '<div id="pie">';
            $a[] = $this->pie;
            $a[] = '</div>';
        }
        $a[] = $this->scripts();
        $a[] = '</body>';
        $a[] = '</html>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Plantilla

?>
