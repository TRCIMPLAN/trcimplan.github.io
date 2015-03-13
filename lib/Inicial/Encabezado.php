<?php
/*
 * TrcIMPLAN Sitio Web - Encabezado
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
 * Clase Encabezado
 */
class Encabezado extends \Base\SchemaGovernmentOrganization {

    // public $onTypeProperty; // Text. Use when this item is part of another one.
    // public $description;    // Text. A short description of the item.
    // public $image;          // URL or ImageObject. An image of the item.
    // public $name;           // Text. The name of the item.

    /**
     * Constructor
     */
    public function __construct() {
        $this->name        = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $this->description = 'Es el órgano técnico responsable de la planeación municipal del desarrollo del municipio de Torreón cuyas propuestas de política tienen una orientación territorial.';
        $this->image       = 'imagenes/trcimplan.jpg';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '  <section id="encabezado" itemscope itemtype="http://schema.org/GovernmentOrganization">';
        $a[] = '    <img class="banner" itemprop="image" src="imagenes/banner-implan.jpg" alt="IMPLAN Torreón">';
        $a[] = '  </section>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Encabezado

?>
