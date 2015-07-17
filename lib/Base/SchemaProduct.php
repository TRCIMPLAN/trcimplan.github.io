<?php
/**
 * TrcIMPLAN Sitio Web - SchemaProduct
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
 * Clase SchemaProduct
 *
 * Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
 * http://schema.org/Product
 */
class SchemaProduct extends SchemaThing {

    // public $onTypeProperty;      // Text. Use when this item is part of another one.
    // public $identation  = 3;     // Integer. Level of identation (beautiful code).
    // public $big_heading = false; // Boolean. Use true to use a big heading for the web page.
    // public $extra;               // Text. Additional HTML to put inside.
    // public $description;         // Text. A short description of the item.
    // public $image;               // URL or ImageObject. An image of the item.
    // public $image_show  = false; // Boolean. Use true to put an img tag. Use false to put a meta tag.
    // public $name;                // Text. The name of the item.
    // public $url;                 // URL of the item.
    // public $url_label;           // Label for the URL of the item.
    public $logo;                   // ImageObject or URL. An associated logo.
    public $manufacturer;           // Organization. The manufacturer of the product.
    public $releaseDate;            // Date. The release date of a product or product model. This can be used to distinguish the exact variant of a product.

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
     * Release Date HTML
     *
     * @return string Código HTML
     */
    protected function relase_date_html() {
        if ($this->image != '') {
            return "  <meta itemprop=\"releaseDate\" content=\"{$this->releaseDate}\">";
        } else {
            return '';
        }
    } // relase_date_html

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
            if ($this->big_heading) {
                $a[] = "  <article><div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Product\">";
            } else {
                $a[] = "  <div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Product\">";
            }
        } else {
            if ($this->big_heading) {
                $a[] = $spaces.'<article><div itemscope itemtype="http://schema.org/Product">';
            } else {
                $a[] = $spaces.'<div itemscope itemtype="http://schema.org/Product">';
            }
        }
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->logo_html();
        if (is_object($this->manufacturer) && ($this->manufacturer instanceof SchemaOrganization)) {
            $this->address->onTypeProperty = 'manufacturer';
            $this->address->identation     = $this->identation + 1;
            $a[] = $this->manufacturer->html();
        }
        $a[] = $this->relase_date_html();
        $a[] = $this->url_html();
        if ($this->extra != '') {
            $a[] = $this->extra;
        }
        $a[] = '</div>';
        // Entregar
        return implode("\n$spaces", $a);
    } // html

} // Clase SchemaProduct

?>
