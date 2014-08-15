<?php
/*
 * SMIbeta - SMI PlantillaHTML
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
 * Clase PlantillaHTML
 */
class PlantillaHTML extends \Configuracion\PlantillaHTMLConfig {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $menu_principal_logo;
    // public $pie;
    // public $en_raiz;
    // public $para_compartir;
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
     * Menu Principal HTML
     *
     * @return string Código HTML
     */
    protected function menu_principal_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '    <div class="navbar-header">';
        $a[] = '      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
        $a[] = '        <span class="sr-only">Toggle navigation</span>';
        $a[] = '        <span class="icon-bar"></span>';
        $a[] = '        <span class="icon-bar"></span>';
        $a[] = '        <span class="icon-bar"></span>';
        $a[] = '      </button>';
        if ($this->menu_principal_logo != '') {
            if ($this->en_raiz) {
                $a[] = "      <a class=\"navbar-brand\" href=\"index.html\"><img class=\"navbar-brand-img\" src=\"{$this->menu_principal_logo}\"></a>";
            } else {
                $a[] = "      <a class=\"navbar-brand\" href=\"../index.html\"><img class=\"navbar-brand-img\" src=\"../{$this->menu_principal_logo}\"></a>";
            }
        } else {
            if ($this->en_raiz) {
                $a[] = "      <a class=\"navbar-brand\" href=\"index.html\">{$this->sitio_titulo}</a>";
            } else {
                $a[] = "      <a class=\"navbar-brand\" href=\"../index.html\">{$this->sitio_titulo}</a>";
            }
        }
        $a[] = '    </div>';
        $a[] = '    <ul class="nav navbar-nav navbar-right">';
        $a[] = '      <li><a href="rss.xml">RSS</a></li>';
        $a[] = '    </ul>';
        // Entregar
        return implode("\n", $a);
    } // menu_principal_html

    /**
     * Menu Izquierdo HTML
     *
     * @return string Código HTML
     */
    protected function menu_izquierdo_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
/*
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
 */

/* Un nivel
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
 */

/* Dos niveles
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 */

/* Tres niveles
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 */

/*
                    </ul>
                </div>
            </div>
 */
        // Entregar
        return implode("\n", $a);
    } // menu_izquierdo_html

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
        }
        $a[] = '  <!-- SOPORTE PARA IE -->';
        $a[] = '  <!--[if lt IE 9]>';
        $a[] = '  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
        $a[] = '  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
        $a[] = '  <![endif]-->';
        $a[] = '</head>';
/* */
        $a[] = '<body>';
        $a[] = '<div id="wrapper">';
/* */
        $a[] = '<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">';
        $a[] = $this->menu_principal_html();
        $a[] = $this->menu_izquierdo_html();
        $a[] = '</nav>';
/* */
        $a[] = '<div id="contenido">';
        $a[] = '  <div class="container">';
        if ($this->contenido_secundario != '') {
            $a[] = '    <div class="row">';
            $a[] = '      <div class="col-md-9">';
            if ($this->encabezado != '') {
                $a[] = $this->encabezado;
            }
            if ($this->titulo == '') {
                $a[] = "  <h1>{$this->sitio_titulo}</h1>";
            } else {
                $a[] = "  <h1>{$this->titulo}</h1>";
            }
            $a[] = $this->contenido;
            $a[] = '      </div>';
            $a[] = '      <div class="col-md-3">';
            $a[] = '        <aside>';
            $a[] = $this->contenido_secundario;
            $a[] = '        </aside>';
            $a[] = '      </div>';
            $a[] = '    </div>';
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
        $a[] = '  </div>';
        $a[] = '</div>';
        $a[] = $this->inferior_html();
        if ($this->pie != '') {
            $a[] = '<footer id="pie">';
            $a[] = ' <div class="container">';
            $a[] = $this->pie;
            $a[] = '  </div>';
            $a[] = '</footer>';
        }
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
/* */
        $a[] = '</div>';
        $a[] = '</body>';
/* */
        $a[] = '</html>';
        // Entregar
        return implode("\n", $a);
    } // html

} // PlantillaHTML

?>
