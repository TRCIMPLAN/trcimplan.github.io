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

    // public $identation = 3; // Integer. Level of identation (beautiful code).
    // public $onTypeProperty; // Text. Use when this item is part of another one.
    // public $extra;          // Text. Additional HTML to put inside.
    // public $description;    // Text. A short description of the item.
    // public $image;          // URL or ImageObject. An image of the item.
    // public $name;           // Text. The name of the item.
    // public $url;            // URL of the item.
    // public $url_label;      // Label for the URL of the item.
    public $address;           // Instance of PostalAddress. Physical address of the item.
    public $geo;               // Instance of SchemaGeoCoordinates. The geo coordinates of the place.
    public $logo;              // URL or ImageObject. An associated logo.
    public $telephone;         // Text. The telephone number.

    /**
     * Logo HTML
     *
     * @return string Código HTML
     */
    protected function logo_html() {
        if ($this->image != '') {
            return "  <img class=\"contenido-imagen-previa\" itemprop=\"logo\" alt=\"{$this->name}\" src=\"{$this->logo}\">";
        } else {
            return '';
        }
    } // logo_html

    /**
     * Telephone HTML
     *
     * @return string Código HTML
     */
    protected function telephone_html() {
        if ($this->telephone != '') {
            return "  <div class=\"telefono\">Teléfono: <span itemprop=\"telephone\">{$this->telephone}</span></div>";
        } else {
            return '';
        }
    } // telephone_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir los espacios antes de cada renglón
        $spaces = str_repeat('  ', $this->identation);
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        if ($this->onTypeProperty != '') {
            $a[] = "  <div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Place\">";
        } else {
            $a[] = $spaces.'<div itemscope itemtype="http://schema.org/Place">';
        }
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->logo_html();
        if (is_object($this->address) && ($this->address instanceof SchemaPostalAddress)) {
            $this->address->onTypeProperty = 'address';
            $this->address->identation     = $this->identation + 1;
            $a[] = $this->address->html();
        }
        if (is_object($this->geo) && ($this->geo instanceof SchemaGeoCoordinates)) {
            $this->geo->onTypeProperty = 'geo';
            $this->geo->identation     = $this->identation + 1;
            $a[] = $this->geo->html();
        }
        $a[] = $this->telephone_html();
        $a[] = $this->url_html();
        if ($this->extra != '') {
            $a[] = $this->extra;
        }
        $a[] = '</div>';
        // Entregar
        return implode("\n$spaces", $a);
    } // html

} // Clase SchemaPlace

?>
