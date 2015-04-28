<?php
/**
 * TrcIMPLAN Sitio Web - Schema Map
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
 * Clase SchemaMap
 *
 * A map.
 * http://schema.org/Map
 */
class SchemaMap extends SchemaCreativeWork {

    // public $identation = 3;  // Integer. Level of identation (beautiful code).
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $extra;           // Text. Additional HTML to put inside.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $name;            // Text. The name of the item.
    // public $url;             // URL of the item.
    // public $url_label;       // Label for the URL of the item.
    // public $author;          // Organization or Person. The author of this content.
    // public $contentLocation; // Place. The location of the content.
    // public $datePublished;   // Date. Date of first broadcast/publication.
    // public $headline;        // Text. Headline of the article.
    // public $headline_style;  // Text. CSS style for encabezado
    // public $producer;        // Organization or Person. The person or organization who produced the work.
    public $mapType;            // Indicates the kind of Map, from the MapCategoryType Enumeration.

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
            $a[] = "  <div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Map\">";
        } else {
            $a[] = $spaces.'<div itemscope itemtype="http://schema.org/Map">';
        }

        $a[] = $this->big_heading_html();
        $a[] = $this->image_html();
        if (is_object($this->spatial) && ($this->spatial instanceof SchemaPlace)) {
            $this->spatial->onTypeProperty = 'spatial';
            $this->spatial->identation     = $this->identation + 1;
            $a[] = $this->spatial->html();
        }
        $a[] = $this->catalog_html();
        $a[] = $this->temporal_html();
        $a[] = $this->distribution_html();

        if ($this->extra != '') {
            $a[] = $this->extra;
        }
        $a[] = '</div>';
        // Entregar
        return implode("\n$spaces", $a);
    } // html

/*
<p itemscope itemtype="http://schema.org/Museum">
    Welcome to a fictional <span itemprop="name">SF art museum.</name>
    Here is our
    <span itemscope itemprop="hasMap" itemtype="http://schema.org/Map">
        <link itemprop="mapType" href="http://schema.org/VenueMap" /><a itemprop="url" href="/map1234/">venue map</a>
    </span>
</p>
 */

} // Clase SchemaMap

?>
