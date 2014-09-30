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
        // Indicar al padre que no queremos encerrar el contenido con row y cuerpo
        $this->contenido_en_renglon = false;
        // Navegacion
        $this->navegacion          = new \Base\Navegacion();
        $this->navegacion->en_raiz = true;
        // Encabezado
        $encabezado         = new Encabezado();
        $this->contenido[]  = $encabezado->html();
        $this->javascript[] = $encabezado->javascript();
        // Destacado
        $destacado          = new Destacado();
        $this->contenido[]  = $destacado->html();
        $this->javascript[] = $destacado->javascript();
        // Novedades
        $novedades          = new Novedades();
        $this->contenido[]  = $novedades->html();
        $this->javascript[] = $novedades->javascript();
        // Mapa
        $mapa               = new Mapa();
        $this->contenido[]  = $mapa->html();
        $this->javascript[] = $mapa->javascript();
        // Redes
        $redes              = new Redes();
        $this->contenido[]  = $redes->html();
        $this->javascript[] = $redes->javascript();
        // Entregar resultado del padre
        return parent::html();
    } // html

} // Clase PaginaInicial

?>
