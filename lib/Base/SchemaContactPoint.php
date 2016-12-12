<?php
/**
 * Plataforma de Conocimiento - SchemaContactPoint
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
 * Clase SchemaContactPoint
 */
class SchemaContactPoint extends SchemaThing {

    // public $onTypeProperty;      // Text. Use when this item is part of another one.
    // public $identation;          // Integer. Level of identation (beautiful code).
    // public $id_property;         // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;      // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;          // Boolean. Use true for enclose with <article>
    // public $big_heading;         // Boolean. Use true to use a big heading for the web page.
    // public $extra;               // Text. Additional HTML to put inside.
    // public $description;         // Text. A short description of the item.
    // public $image;               // URL or ImageObject. An image of the item.
    // public $image_show;          // Boolean. Use true to put an img tag. Use false to put a meta tag.
    // public $name;                // Text. The name of the item.
    // public $url;                 // URL of the item.
    // public $url_label;           // Label for the URL of the item.
    public $email;                  // Text. Email address.
    public $telephone;              // Text. The telephone number.

    /**
     * e-mail HTML
     *
     * @return string Código HTML
     */
    protected function email_html() {
        if ($this->email != '') {
            return "  <div class=\"email\">e-mail: <a itemprop=\"email\" href=\"mailto:{$this->email}\">{$this->email}</a></div>";
        } else {
            return '';
        }
    } // email_html

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
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/ContactPoint"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->image_html();
        $a[] = $this->telephone_html();
        $a[] = $this->email_html();
        $a[] = $this->url_html();
        $a[] = $this->itemscope_end();
        if ($this->extra != '') {
            $a[] = "<aside>{$this->extra}</aside>";
        }
        // Entregar
        $spaces = str_repeat('  ', $this->identation);
        return implode("\n$spaces", $a);
    } // html

} // Clase SchemaContactPoint

?>
