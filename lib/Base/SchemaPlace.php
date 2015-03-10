<?php
/**
 * TrcIMPLAN Sitio Web - Schema Place
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase SchemaPlace
 *
 * http://schema.org/Place
 */
class SchemaPlace extends SchemaThing {

    // public $description; // Text. A short description of the item.
    // public $image;       // URL or ImageObject. An image of the item.
    // public $name;        // Text. The name of the item.
    public $address;        // PostalAddress. Physical address of the item.
    public $geo;            // GeoCoordinates or GeoShape. The geo coordinates of the place.
    public $logo;           // URL or ImageObject. An associated logo.
    public $telephone;      // Text. The telephone number.

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Clase SchemaPlace

?>
