<?php
/**
 * TrcIMPLAN Sitio Web - Schema CreativeWork
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
 * Clase SchemaCreativeWork
 *
 * http://schema.org/CreativeWork
 */
class SchemaCreativeWork extends SchemaThing {

    // public $description;  // Text. A short description of the item.
    // public $image;        // URL or ImageObject. An image of the item.
    // public $name;         // Text. The name of the item.
    public $author;          // Organization or Person. The author of this content.
    public $contentLocation; // Place. The location of the content.
    public $datePublished;   // Date. Date of first broadcast/publication.
    public $headline;        // Text. Headline of the article.
    public $producer;        // Organization or Person. The person or organization who produced the work.

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

} // Clase SchemaCreativeWork

?>
