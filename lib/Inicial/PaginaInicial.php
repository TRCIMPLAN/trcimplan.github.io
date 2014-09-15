<?php
/*
 * SMIbeta - Página Inicial del sitio web
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
namespace Inicial;

/**
 * Clase PaginaInicial
 */
class PaginaInicial extends \Base\Plantilla {

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
    // public $titulo;
    // public $descripcion;
    // public $claves;
    // public $directorio;
    // public $ruta;
    // public $imagen_previa;
    // public $navegacion;
    // public $contenido;
    // public $mapa_inferior;
    // public $javascript;

    /**
     * Constructor
     */
    public function __construct() {
        $this->en_raiz       = true;
        $this->titulo        = $this->sitio_titulo;
        $this->autor         = 'TrcIMPLAN';
        $this->descripcion   = 'El IMPLAN Torreón es el Órgano Técnico Descentralizado de la Administración Pública Municipal que coordina los procesos de Planeación Estratégica y Ordenamiento Territorial para el desarrollo de la Región.';
        $this->claves        = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio    = '.';
        $this->ruta          = "index.html";
        $this->imagen_previa = 'imagenes/implan.jpg';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Navegacion
        $this->navegacion          = new \Base\Navegacion();
        $this->navegacion->en_raiz = true;
        // Iniciar contenido
        $this->contenido = array();
        // Carrusel
        $carrusel          = new Carrusel();
        $this->contenido[] = "<!-- CARRUSEL -->";
        $this->contenido[] = $carrusel->html();
        //
        $this->contenido[]  = '        <div class="row">';
        // Resumen de Análisis Publicados
        $analisis           = new \Blog\Imprenta();
        $resumenes          = $analisis->elaborar_resumenes();
        $resumenes->en_raiz = true;
        $this->contenido[]  = "<!-- RESUMENES ANALISIS PUBLICADOS -->";
        $this->contenido[]  = "          <div class=\"col-md-4\">\n".$resumenes->html()."\n          </div>";
        // Resumen de SIG
        $sig                = new \SIG\Imprenta();
        $resumenes          = $sig->elaborar_resumenes();
        $resumenes->en_raiz = true;
        $this->contenido[]  = "<!-- RESUMENES SIG -->";
        $this->contenido[]  = "          <div class=\"col-md-4\">\n".$resumenes->html()."\n          </div>";
        // Resumen de Indicadores
        $smi                = new \SMICategorias\Imprenta();
        $resumenes          = $smi->elaborar_resumenes();
        $resumenes->titulo  = 'Sistema Metropolitano de Indicadores';
        $resumenes->en_raiz = true;
        $this->contenido[]  = "<!-- RESUMENES SMI CATEGORIAS -->";
        $this->contenido[]  = "          <div class=\"col-md-4\">\n".$resumenes->html()."\n          </div>";
        //
        $this->contenido[]  = "        </div>"; // row
        // Destacado
/*      $destacado         = new Destacado();
        $this->contenido[] = $destacado->html(); */
        // Mapa Inferior
        $this->mapa_inferior          = new \Base\MapaInferior();
        $this->mapa_inferior->en_raiz = true;
        // Entregar resultado del padre
        return parent::html();
    } // html

} // Clase PaginaInicial

?>
