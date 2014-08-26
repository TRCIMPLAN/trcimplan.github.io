<?php
/*
 * SMIbeta - Base Plantilla
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
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    public $titulo;               // Título de la página
    public $descripcion;          // Descripción del sitio o la página
    public $claves;               // Claves que ayuden a los buscadores
    public $directorio;           // Directorio donde se guardará el archivo HTML
    public $ruta;                 // Ruta relativa a la pagina HTML
    public $imagen_previa;        // Ruta relativa a la imagen
    public $navegacion;           // Instancia de \Base\Navegacion
    public $contenido;            // Código HTML con el contenido
    public $mapa_inferior;        // Instancia de \Base\MapaInferior
    public $javascript = array(); // Arreglo que acumula el código Javascript a poner al final de la página

    /**
     * Incorporar Publicacion
     *
     * @param mixed Instancia de Publicacion
     */
    public function incorporar_publicacion($publicacion) {
        // Validar
        if (!is_object($publicacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: No es una instancia.");
        }
        if (!($publicacion instanceof Publicacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: No es instancia de Publicacion.");
        }
        if (!is_object($this->navegacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: La propiedad navegacion no es una instancia.");
        }
        if (!($this->navegacion instanceof Navegacion)) {
            throw new \Exception("Error en Plantilla, incorporar_publicacion: La propiedad navegacion no es instancia de Navegacion.");
        }
        // Esta publicación ocupará la página completa
        $completo        = new Completo($publicacion);
        $this->contenido = $completo->html();
        // En navegacion, para que el menú indique la opción activa
        $this->navegacion->opcion_activa = $publicacion->nombre_menu;
        // Definir las demás propiedades
        $this->titulo        = $publicacion->nombre;
        $this->autor         = $publicacion->autor;
        $this->descripcion   = $publicacion->descripcion;
        $this->claves        = $publicacion->claves;
        $this->directorio    = $publicacion->directorio;
        $this->ruta          = "{$publicacion->directorio}/{$publicacion->archivo}.html";
        $this->imagen_previa = $publicacion->imagen_previa;
        $this->javascript[]  = $publicacion->javascript;
    } // incorporar_publicacion

    /**
     * Cabezera
     *
     * @return string Código HTML
     */
    protected function cabezera() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<head>';
        $a[] = '  <meta charset="utf-8">';
        $a[] = '  <meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $a[] = '  <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        if ($this->descripcion != '') {
            $a[] = "  <meta name=\"description\" content=\"{$this->descripcion}\">";
        }
        if ($this->autor != '') {
            $a[] = "  <meta name=\"author\" content=\"{$this->autor}\">";
        }
        if ($this->claves != '') {
            $a[] = "  <meta name=\"keywords\" content=\"{$this->claves}\">";
        }
        if ($this->para_compartir) {
            $a[] = "  <meta name=\"twitter:card\" content=\"summary\">";
            $a[] = "  <meta name=\"twitter:title\" content=\"{$this->titulo}\">";
            $a[] = "  <meta name=\"twitter:description\" content=\"{$this->descripcion}\">";
            if ($this->imagen_previa != '') {
                $a[] = sprintf('  <meta name="twitter:image" content="%s/%s">', $this->sitio_url, $this->imagen_previa);
            }
            $a[] = sprintf('  <meta name="twitter:url" content="%s/%s">', $this->sitio_url, $this->ruta);
            $a[] = "  <meta name=\"og:title\" content=\"{$this->titulo}\">";
            $a[] = "  <meta name=\"og:description\" content=\"{$this->descripcion}\">";
            if ($this->imagen_previa != '') {
                $a[] = sprintf('  <meta name="og:image" content="%s/%s">', $this->sitio_url, $this->imagen_previa);
            }
            $a[] = sprintf('  <meta name="og:url" content="%s/%s">', $this->sitio_url, $this->ruta);
        }
        if ($this->titulo == '') {
            $a[] = "  <title>{$this->sitio_titulo}</title>";
        } else {
            $a[] = "  <title>{$this->titulo} - {$this->sitio_titulo}</title>";
        }
        if ($this->en_raiz) {
            if ($this->favicon != '') {
                $a[] = "  <link href=\"{$this->favicon}\" rel=\"shortcut icon\" type=\"image/x-icon\">";
            }
            if ($this->rss != '') {
                $a[] = "  <link href=\"{$this->rss}\" rel=\"alternate\" type=\"application/rss+xml\" title=\"{$this->sitio_titulo}\">";
            }
            $a[] = '  <link href="css/bootstrap.min.css" rel="stylesheet">';
            $a[] = '  <link href="css/morris.css" rel="stylesheet">';
            $a[] = '  <link href="css/leaflet.css" rel="stylesheet">';
            $a[] = '  <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">';
            $a[] = '  <link href="css/sb-admin-2.css" rel="stylesheet">';
            $a[] = '  <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">';
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
            $a[] = '  <link href="../css/bootstrap.min.css" rel="stylesheet">';
            $a[] = '  <link href="../css/morris.css" rel="stylesheet">';
            $a[] = '  <link href="../css/leaflet.css" rel="stylesheet">';
            $a[] = '  <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">';
            $a[] = '  <link href="../css/sb-admin-2.css" rel="stylesheet">';
            $a[] = '  <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">';
            if ($this->propio_css != '') {
                $a[] = "  <link href=\"../{$this->propio_css}\" rel=\"stylesheet\">";
            }
        }
        $a[] = '  <!-- SOPORTE PARA IE -->';
        $a[] = '  <!--[if lt IE 9]>';
        $a[] = '  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
        $a[] = '  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
        $a[] = '  <![endif]-->';
        $a[] = '</head>';
        // Entregar
        return implode("\n", $a);
    } // cabezera

    /**
     * Scripts
     *
     * @return string Código HTML
     */
    protected function scripts() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        if ($this->en_raiz) {
            $a[] = '<script src="js/jquery.min.js"></script>';
            $a[] = '<script src="js/bootstrap.min.js"></script>';
            $a[] = '<script src="js/raphael-min.js"></script>';
            $a[] = '<script src="js/morris.min.js"></script>';
            $a[] = '<script src="js/leaflet.js"></script>';
            $a[] = '<script src="js/plugins/metisMenu/metisMenu.min.js"></script>';
            $a[] = '<script src="js/sb-admin-2.js"></script>';
            //$a[] = '<script src="js/google-analytics.js"></script>';
        } else {
            $a[] = '<script src="../js/jquery.min.js"></script>';
            $a[] = '<script src="../js/bootstrap.min.js"></script>';
            $a[] = '<script src="../js/raphael-min.js"></script>';
            $a[] = '<script src="../js/morris.min.js"></script>';
            $a[] = '<script src="../js/leaflet.js"></script>';
            $a[] = '<script src="../js/plugins/metisMenu/metisMenu.min.js"></script>';
            $a[] = '<script src="../js/sb-admin-2.js"></script>';
            //$a[] = '<script src="../js/google-analytics.js"></script>';
        }
        if (is_array($this->javascript)) {
            $b = array();
            foreach ($this->javascript as $js) {
                if (trim($js) != '') {
                    $b[] = $js;
                }
            }
            if (count($b) > 0) {
                $a[] = "<script>\n".implode("\n", $b)."\n</script>";
            }
        } elseif (is_string($this->javascript) && (trim($this->javascript) != '')) {
            $a[] = '<script>';
            $a[] = $this->javascript;
            $a[] = '</script>';
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
        if (!is_object($this->mapa_inferior)) {
            throw new \Exception("Error en Plantilla, html: La propiedad mapa_inferior no es una instancia.");
        }
        if (!($this->mapa_inferior instanceof MapaInferior)) {
            throw new \Exception("Error en Plantilla, html: La propiedad mapa_inferior no es instancia de MapaInferior.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<!DOCTYPE html>';
        $a[] = '<html lang="es">';
        if ($this->mensaje_oculto != '') {
            $a[] = $this->mensaje_oculto;
        }
        $a[] = $this->cabezera();
        $a[] = '<body>';
        $a[] = '<div id="wrapper">';
        $a[] = $this->navegacion->html();
        // Contenido inicia
        $a[] = '  <div id="page-wrapper">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="cuerpo">'; // col-lg-12
        if (is_string($this->contenido) && (trim($this->contenido) != '')) {
            $a[] = $this->contenido;
        } else {
            $a[] = "<b>No hay contenido para esta página.</b>";
        }
        $a[] = '      </div>'; // col-lg-12
        $a[] = '    </div>';   // row contenido
        $a[] = $this->mapa_inferior->html();
        $a[] = '  </div>';     // page-wrapper
        // Contenido termina
        $a[] = '</div>'; // wrapper
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
