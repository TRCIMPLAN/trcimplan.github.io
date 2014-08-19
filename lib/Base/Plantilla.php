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
    // public $menu_principal_logo;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $mensaje_oculto;
    // public $pie;
    public $titulo;         // Título de la página
    public $autor;          // Persona que sea la autora
    public $descripcion;    // Descripción del sitio o la página
    public $claves;         // Claves que ayuden a los buscadores
    public $directorio;     // Directorio donde se guardará el archivo HTML
    public $ruta;           // Ruta relativa a la pagina HTML
    public $imagen_previa;  // Ruta relativa a la imagen
    public $menu_principal; // Instancia de \Base\MenuPrincipal
    public $encabezado;     // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior
    public $contenido;      // Código HTML con el contenido
    public $javascript;     // Código Javascript

    /**
     * Inferior
     */
    protected function inferior() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '    <div class="row inferior">';
        if ($this->en_raiz) {
            $a[] = "        <a href=\"{$this->sitio_url}\"><img class=\"inferior-logo\" src=\"imagenes/implan-barra-mediano.png\" alt=\"{$this->sitio_titulo}\"></a>";
        } else {
            $a[] = "        <a href=\"{$this->sitio_url}\"><img class=\"inferior-logo\" src=\"../imagenes/implan-barra-mediano.png\" alt=\"{$this->sitio_titulo}\"></a>";
        }
        $a[] = '    </div>'; // row inferior
        // Entregar
        return implode("\n", $a);
    } // inferior

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
        if ($this->mensaje_oculto != '') {
            $a[] = $this->mensaje_oculto;
        }
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
        // Body Inicia
        $a[] = '<body>';
        $a[] = '<div id="wrapper">';
        // Menús Inicia
        $a[] = '  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">';
        if (is_object($this->menu_principal)) {
            $a[] = $this->menu_principal->html();
        }
        if (is_object($this->menu_izquierdo)) {
            $a[] = $this->menu_izquierdo->html();
        }
        $a[] = '  </nav>';
        // Menús Termina
        // Contenido Inicia
        $a[] = $this->elaborar_contenido();
        // Contenido Termina
        $a[] = '</div>'; // wrapper
        $a[] = '<div id="pie">';
        $a[] = $this->pie;
        $a[] = '</div>';
        // Javascript Inicia
        if ($this->en_raiz) {
            $a[] = '<script src="js/jquery.min.js"></script>';
            $a[] = '<script src="js/bootstrap.min.js"></script>';
            $a[] = '<script src="js/raphael-min.js"></script>';
            $a[] = '<script src="js/morris.min.js"></script>';
            $a[] = '<script src="js/leaflet.js"></script>';
            $a[] = '<script src="js/google-analytics.js"></script>';
        } else {
            $a[] = '<script src="../js/jquery.min.js"></script>';
            $a[] = '<script src="../js/bootstrap.min.js"></script>';
            $a[] = '<script src="../js/raphael-min.js"></script>';
            $a[] = '<script src="../js/morris.min.js"></script>';
            $a[] = '<script src="../js/leaflet.js"></script>';
            $a[] = '<script src="../js/google-analytics.js"></script>';
        }
        if (trim($this->javascript) != '') {
            $a[] = '<script>';
            $a[] = $this->javascript;
            $a[] = '</script>';
        }
        // Javascript Termina
        $a[] = '</body>';
        // Body Termina
        $a[] = '</html>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Plantilla

?>
