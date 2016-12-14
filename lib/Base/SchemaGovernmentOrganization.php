<?php
/**
 * Plataforma de Conocimiento - Schema Government Organization
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase SchemaGovernmentOrganization
 *
 * A governmental organization or agency.
 * http://schema.org/GovernmentOrganization
 */
class SchemaGovernmentOrganization extends SchemaOrganization {

    // En Schema
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $identation;      // Integer. Level of identation (beautiful code).
    // public $id_property;     // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;  // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;      // Boolean. Use true for enclose with <article>
    // En SchemaThing
    // public $big_heading;     // Boolean. Use true to use a big heading for the web page.
    // public $headline;        // Text. Headline of the article.
    // public $headline_style;  // Text. CSS style or Hex color.
    // public $headline_icon;   // Text. Font Awsome icon.
    // public $content;         // Text. HTML content to put INSIDE.
    // public $extra;           // Text. Additional HTML to put ASIDE.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $image_show;      // Boolean. Use true to put an img tag. Use false to put a meta tag.
    // public $name;            // Text. The name of the item.
    // public $url;             // URL of the item.
    // public $url_label;       // Label for the URL of the item.
    // En SchemaOrganization
    // public $address;         // PostalAddress. Physical address of the item.
    // public $email;           // Text. Email address.
    // public $location;        // PostalAddress or Place. The location of the event, organization or action.
    // public $telephone;       // Text. The telephone number.

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar acumulador
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/GovernmentOrganization"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->image_html();
        if (is_object($this->address) && ($this->address instanceof SchemaPostalAddress)) {
            $this->address->onTypeProperty = 'address';
            $this->address->identation     = $this->identation + 1;
            $this->address->is_article     = FALSE;
            $a[]                           = $this->address->html();
        }
        $a[] = $this->telephone_html();
        $a[] = $this->email_html();
        $a[] = $this->url_html();
        if (is_object($this->location) && (($this->location instanceof SchemaPostalAddress) || ($this->location instanceof SchemaPlace))) {
            $this->location->onTypeProperty = 'location';
            $this->location->identation     = $this->identation + 1;
            $this->location->is_article     = FALSE;
            $a[]                            = $this->location->html();
        }
        $a[] = $this->content_html();
        $a[] = $this->itemscope_end();
        $a[] = $this->extra_html();
        // Entregar
        return $this->clean_html($a);
    } // html

} // Clase SchemaGovernmentOrganization

?>
