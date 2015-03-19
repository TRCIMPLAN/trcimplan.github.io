<?php
/**
 * TrcIMPLAN Sitio Web - SchemaPostalAddress
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
 * Clase SchemaPostalAddress
 */
class SchemaPostalAddress extends SchemaContactPoint {

    // public $onTypeProperty;
    // public $description;
    // public $image;
    // public $name;
    // public $url;
    // public $url_label;
    // public $email;
    // public $telephone;
    public $addressCountry;  // Text. The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
    public $addressLocality; // Text. The locality. For example, Mountain View.
    public $addressRegion;   // Text. The region. For example, CA.
    public $streetAddress;   // Text. The postal code. For example, 94043.
    public $postalCode;      // Text. The street address. For example, 1600 Amphitheatre Pkwy.

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
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/PostalAddress\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/PostalAddress">';
        }
        // Calle
        if ($this->streetAddress != '') {
            $a[] = "  <span itemprop=\"streetAddress\">{$this->streetAddress}</span><br>";
        }
        // Ciudad, Estado, C.P.
        $b = array();
        if ($this->addressLocality != '') {
            $b[] = "  <span itemprop=\"addressLocality\">{$this->addressLocality}</span>";
        }
        if ($this->addressRegion != '') {
            $b[] = "  <span itemprop=\"addressRegion\">{$this->addressRegion}</span>";
        }
        if ($this->postalCode != '') {
            $b[] = "  C.P. <span itemprop=\"postalCode\">{$this->postalCode}</span>";
        }
        if (count($b) > 0) {
            $a[] = implode(', ', $b).'<br>';
        }
        // País
        if ($this->addressCountry != '') {
            $a[] = "  <span itemprop=\"addressCountry\">{$this->addressCountry}</span>";
        }
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Clase SchemaPostalAddress

?>
