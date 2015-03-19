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
 * Entities that have a somewhat fixed, physical extension.
 * http://schema.org/Place
 */
class SchemaPlace extends SchemaThing {

    // public $onTypeProperty; // Text. Use when this item is part of another one.
    // public $description;    // Text. A short description of the item.
    // public $image;          // URL or ImageObject. An image of the item.
    // public $name;           // Text. The name of the item.
    // public $url;            // URL of the item.
    // public $url_label;      // Label for the URL of the item.
    public $address;           // PostalAddress. Physical address of the item.
    public $geo;               // Instance of SchemaGeoCoordinates. The geo coordinates of the place.
    public $logo;              // URL or ImageObject. An associated logo.
    public $telephone;         // Text. The telephone number.

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
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Place\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/Place">';
        }
        // Imagen
        if ($this->image != '') {
            $a[] = "  <img class=\"contenido-imagen-previa\" itemprop=\"image\" alt=\"Imagen previa\" src=\"{$this->image}\">";
        }
        // Título
        if ($this->name != '') {
            $a[] = "  <h3 class=\"titulo\" itemprop=\"name\">{$this->name}</h3>";
        } else {
            throw new \Exception('Error en SchemaPlace, html: La propiedad name es incorrecta.');
        }
        // Descripción
        if ($this->description != '') {
            $a[] = "  <div class=\"descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        // Geo
        if ($this->geo instanceof SchemaGeoCoordinates) {
            $this->geo->onTypeProperty = 'geo';
            $a[] = $this->geo->html();
        } else {
            throw new \Exception('Error en SchemaPlace, html: La propiedad geo no es instancia de SchemaGeoCoordinates');
        }
        // URL
        if ($this->url != '') {
            if ($this->url_label != '') {
                $a[] = "  <a href=\"{$this->url}\" itemprop=\"url\">{$this->url_label}</a>";
            } else {
                $a[] = "  <a href=\"{$this->url}\" itemprop=\"url\">{$this->name}</a>";
            }
        }
        // Teléfono
        if ($this->telephone != '') {
            $a[] = "  <div>Teléfono: <span itemprop=\"telephone\">{$this->telephone}</span></div>";
        }
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaPlace

?>
