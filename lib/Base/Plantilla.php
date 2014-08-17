<?php
/*
 * SMIbeta - SMI Plantilla
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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

// NAMESPACE
namespace Base;

/**
 * Clase Plantilla
 */
class Plantilla extends \Configuracion\PlantillaConfig {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $menu_principal_logo;
    // public $pie;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $menu_principal;
    // public $menu_secundario;
    public $titulo;               // Título de la página
    public $autor;                // Persona que sea la autora
    public $descripcion;          // Descripción del sitio o la página
    public $claves;               // Claves que ayuden a los buscadores
    public $ruta;                 // Ruta relativa a la pagina HTML con la publicación para_compartir
    public $imagen_previa;        // Ruta relativa a la imagen a usar para_compartir
    public $contenido;            // Código HTML con el contenido
    public $contenido_secundario; // Código HTML que crea una segunda columna más delgada del lado derecho
    public $javascript;           // Código Javascript

    /**
     * Encabezado HTML
     *
     * @return string Código HTML
     */
    public function encabezado_html() {
        if ($this->en_raiz) {
            return '<a href="index.html"><img class="img-responsive img-encabezado" src="imagenes/encabezado-smi2.jpg"></a>';
        } else {
            return '<a href="../index.html"><img class="img-responsive img-encabezado" src="../imagenes/encabezado-smi2.jpg"></a>';
        }
    } // encabezado_html

    /**
     * Inferior HTML
     *
     * @return string Código HTML
     */
    public function inferior_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<div id="inferior">';
        $a[] = '  <div class="container">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-md-9">';
        if ($this->en_raiz) {
            $a[] = "        <a href=\"{$this->sitio_url}\"><img class=\"inferior-logo\" src=\"imagenes/implan-barra-mediano.png\" alt=\"{$this->sitio_titulo}\"></a>";
        } else {
            $a[] = "        <a href=\"{$this->sitio_url}\"><img class=\"inferior-logo\" src=\"../imagenes/implan-barra-mediano.png\" alt=\"{$this->sitio_titulo}\"></a>";
        }
        $a[] = '      </div>';
        $a[] = '      <div class="col-md-3">';
        $a[] = '      </div>';
        $a[] = '    </div>';
        $a[] = '  </div>';
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // inferior_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<!DOCTYPE html>';
        $a[] = '<html lang="es">';
        $a[] = <<<FINAL
<!-- ========================================================================================

        Instituto Municipal de Planeación y Competitividad de Torreón.
        Todos los Derechos Reservados. © 2014.

        Este sitio web fue elaborado por personal del IMPLAN Torreón usando Software Libre.

        Descargue y colabore por medio de GitHub:
           GitHub             https://github.com/TRCIMPLAN/trcimplan.github.io

        Agradecemos y compartimos las tecnologías abiertas sobre las que se basa:
           Twitter Bootstrap  http://getbootstrap.com
           StartBootStrap     http://startbootstrap.com
           Morris.js          http://www.oesmith.co.uk/morris.js
           LeafLet            http://leafletjs.com

     ======================================================================================== -->
FINAL;
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
        $a[] = '<body>';
/* */
        $a[] = '<div id="wrapper">';
/* */
        $a[] = '  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">';
        if (is_object($this->menu_principal)) {
            $a[] = $this->menu_principal->html();
        }
        if (is_object($this->menu_izquierdo)) {
            $a[] = $this->menu_izquierdo->html();
        }
        $a[] = '  </nav>';
/* */
        $a[] = '  <div id="page-wrapper" style="min-height:459px;">';
        $a[] = '    <div class="row">';
        if ($this->contenido_secundario != '') {
          //$a[] = '    <div class="row">';
          //$a[] = '      <div class="col-md-9">';
            if ($this->encabezado != '') {
                $a[] = $this->encabezado;
            }
            if ($this->titulo == '') {
                $a[] = "  <h1>{$this->sitio_titulo}</h1>";
            } else {
                $a[] = "  <h1>{$this->titulo}</h1>";
            }
            $a[] = $this->contenido;
          //$a[] = '      </div>';
          //$a[] = '      <div class="col-md-3">';
            $a[] = '        <aside>';
            $a[] = $this->contenido_secundario;
            $a[] = '        </aside>';
          //$a[] = '      </div>';
          //$a[] = '    </div>';
        } else {
            if ($this->encabezado != '') {
                $a[] = $this->encabezado;
            }
            if ($this->titulo == '') {
                $a[] = "  <h1>{$this->sitio_titulo}</h1>";
            } else {
                $a[] = "  <h1>{$this->titulo}</h1>";
            }
            $a[] = $this->contenido;
        }
        $a[] = $this->inferior_html();
        if ($this->pie != '') {
            $a[] = '      <div id="pie">';
            $a[] = $this->pie;
            $a[] = '      </div>';
        }
        $a[] = '    </div>'; // row
        $a[] = '  </div>';   // page-wrapper
        $a[] = '</div>'; // wrapper
        if ($this->en_raiz) {
            $a[] = '  <script src="js/jquery.min.js"></script>';
            $a[] = '  <script src="js/bootstrap.min.js"></script>';
            $a[] = '  <script src="js/raphael-min.js"></script>';
            $a[] = '  <script src="js/morris.min.js"></script>';
            $a[] = '  <script src="js/leaflet.js"></script>';
            $a[] = '  <script src="js/google-analytics.js"></script>';
        } else {
            $a[] = '  <script src="../js/jquery.min.js"></script>';
            $a[] = '  <script src="../js/bootstrap.min.js"></script>';
            $a[] = '  <script src="../js/raphael-min.js"></script>';
            $a[] = '  <script src="../js/morris.min.js"></script>';
            $a[] = '  <script src="../js/leaflet.js"></script>';
            $a[] = '  <script src="../js/google-analytics.js"></script>';
        }
        if (trim($this->javascript) != '') {
            $a[] = '<script>';
            $a[] = $this->javascript;
            $a[] = '</script>';
        }
        $a[] = '</body>';
        $a[] = '</html>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Plantilla

?>
