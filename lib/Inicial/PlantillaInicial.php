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

    /**
     * Constructor
     */
    public function __construct() {
        // Valores por defecto de estas propiedades
        $this->en_raiz       = true;
        $this->titulo        = $this->sitio_titulo;
        $this->autor         = 'TrcIMPLAN';
        $this->descripcion   = 'El IMPLAN Torreón es el Órgano Técnico Descentralizado de la Administración Pública Municipal que coordina los procesos de Planeación Estratégica y Ordenamiento Territorial para el desarrollo de la Región.';
        $this->claves        = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio    = '.';
        $this->ruta          = "index.html";
        $this->imagen_previa = '/imagenes/implan.jpg';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Definir el contenido
        $carrusel      = new Carrusel();
        $a[]           = $carrusel->html();
        $destacado     = new Destacado();
        $a[]           = $destacado->html();
        $mapa_inferior = new \Base\MapaInferior();
        $a[]           = $mapa_inferior->html();
        // Definir contenido
        $this->contenido = implode("\n", $a);
        // Ejecutar padre
        return parent::html();
    } // html

} // Clase PlantillaInicial

?>
