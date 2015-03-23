<?php
/**
 * TrcIMPLAN Sitio Web - SchemaContactPoint
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
 * Clase SchemaContactPoint
 */
class SchemaContactPoint extends SchemaThing {

    // public $onTypeProperty;
    // public $description;
    // public $image;
    // public $name;
    // public $url;
    // public $url_label;
    public $email;
    public $telephone;

    /**
     * e-mail HTML
     *
     * @return string Código HTML
     */
    protected function email_html() {
        if ($this->email != '') {
            return "  <div class=\"email\">e-mail: <span itemprop=\"email\">{$this->email}</span></div>";
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
        if ($this->onTypeProperty != '') {
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/ContactPoint\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/ContactPoint">';
        }
        $a[] = $this->image_html();
        $a[] = $this->title_html();
        $a[] = $this->description_html();
        $a[] = $this->telephone_html();
        $a[] = $this->email_html();
        $a[] = $this->url_html();
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaContactPoint

?>
