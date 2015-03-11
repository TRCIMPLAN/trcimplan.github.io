<?php
/**
 * TrcIMPLAN Sitio Web - SchemaGeoCoordinates
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
 * Clase SchemaGeoCoordinates
 */
class SchemaGeoCoordinates extends SchemaThing {

    // public $onTypeProperty; // Text. Use when this item is part of another one.
    // public $description;    // Text. A short description of the item.
    // public $image;          // URL or ImageObject. An image of the item.
    // public $name;           // Text. The name of the item.
    public $elevation;         // Number or Text. The elevation of a location.
    public $latitude;          // Number or Text. The latitude of a location. For example 37.42242
    public $longitude;         // Number or Text. The longitude of a location. For example -122.08585

    /**
     * Latitud con formato humano
     *
     * @return string
     */
    protected function latitud_con_formato_humano() {
        return $this->latitude;
    } // latitud_con_formato_humano

    /**
     * Longitud con formato humano
     *
     * @return string
     */
    protected function longitud_con_formato_humano() {
        return $this->longitude;
    } // longitud_con_formato_humano

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular inicia
        if ($this->onTypeProperty != '') {
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/GeoCoordinates\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/GeoCoordinates">';
        }
        // Latitud y longitud
        $a[] = sprintf('  Latitud: %s <meta itemprop="latitude" content="%s">', $this->latitud_con_formato_humano(), $this->latitude);
        $a[] = sprintf('  Longitud: %s <meta itemprop="longitude" content="%s">', $this->longitud_con_formato_humano(), $this->longitude);
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaGeoCoordinates

?>
