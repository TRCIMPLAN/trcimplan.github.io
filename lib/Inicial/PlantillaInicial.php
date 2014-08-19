<?php
/*
 * SMIbeta - Inicial Plantilla Inicial
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

// Namespace
namespace Inicial;

/**
 * Clase PlantillaInicial
 */
class PlantillaInicial extends \Base\Plantilla {

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
    // public $titulo;
    // public $autor;
    // public $descripcion;
    // public $claves;
    // public $directorio;
    // public $ruta;
    // public $imagen_previa;
    // public $menu_principal;
    // public $encabezado;
    // public $contenido;
    // public $javascript;

    /**
     * Constructor
     */
    public function __construct() {
        // Valores por defecto de estas propiedades
        $this->en_raiz     = true;
        $this->titulo      = $this->sitio_titulo;
        $this->autor       = 'TrcIMPLAN';
        $this->descripcion = 'El IMPLAN Torreón es el Órgano Técnico Descentralizado de la Administración Pública Municipal que coordina los procesos de Planeación Estratégica y Ordenamiento Territorial para el desarrollo de la Región.';
        $this->claves      = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio  = '.';
        $this->ruta        = "index.html";
        // Definir el menú principal
        $menu_principal          = new \Base\MenuPrincipal();
        $menu_principal->en_raiz = true;
        $this->menu_principal    = $menu_principal;
    } // constructor

    /**
     * Elaborar Contenido
     *
     * @return string Código HTML
     */
    protected function elaborar_contenido() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Definir el contenido
        $carrusel  = new Carrusel();
        $a[]       = $carrusel->html();
        $destacado = new Destacado();
        $a[]       = $destacado->html();
        $a[]       = $this->inferior();
        // Entregar
        return implode("\n", $a);
    } // elaborar_contenido

} // Clase PlantillaInicial

?>
