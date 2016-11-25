<?php
/**
 * TrcIMPLAN Sitio Web - Destacado
 *
 * Copyright (C) 2015 IMPLAN Torreón
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

namespace PaginaInicial;

/**
 * Clase Destacado
 */
class Destacado extends \Base\SchemaProduct {

    // public $onTypeProperty; // Text. Use when this item is part of another one.
    // public $description;    // Text. A short description of the item.
    // public $image;          // URL or ImageObject. An image of the item.
    // public $name;           // Text. The name of the item.
    // public $url;            // URL of the item.
    // public $url_label;      // Label for the URL of the item.
    // public $logo;           // ImageObject or URL. An associated logo.
    // public $manufacturer;   // Organization. The manufacturer of the product.
    // public $releaseDate;    // The release date of a product or product model. This can be used to distinguish the exact variant of a product.
    public $botones;           // Arreglo asociativo como etiqueta => vinculo

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
            $a[] = "        <div class=\"destacado-servicio\" itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Product\">";
        } else {
            $a[] = '        <div class="destacado-servicio" itemscope itemtype="http://schema.org/Product">';
        }
        // Propiedad image. Si imagen es un archivo .gif .jpg o .png se pone como imagen común
        if (preg_match('/.+\.(gif|jpg|png)$/', $this->imagen)) {
            $a[] = "          <a href=\"{$this->url}\"><img class=\"destacado-imagen\" src=\"{$this->image}\" alt=\"{$this->name}\"></a>";
        } else {
            // De lo contrario se considera un ID que debe estar definido en el archivo CSS para cambiar al pasar el ratón por encima
            $a[] = "          <a id=\"{$this->image}\" class=\"destacado-imagen\" href=\"{$this->url}\" title=\"{$this->name}\"></a>";
        }
        $a[] = '          <div class="destacado-texto">';
        // Propiedad name
        $a[] = "            <a href=\"{$this->url}\"><h3 class=\"destacado-titulo\" itemprop=\"name\">{$this->name}</h3></a>";
        // Propiedad description
        $a[] = "            <div class=\"destacado-descripcion\" itemprop=\"description\">{$this->description}</div>";
        // Propiedad botones
        $b = array();
        foreach ($this->botones as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https|ftp):\/\/.+/', $vinculo)) {
                $b[] = "<a class=\"btn btn-default destacado-boton\" href=\"$vinculo\" role=\"button\" target=\"_blank\">$etiqueta</a>";
            } else {
                $b[] = "<a class=\"btn btn-default destacado-boton\" href=\"$vinculo\" role=\"button\">$etiqueta</a>";
            }
        }
        $a[] = sprintf("            <p>%s</p>", implode(' ', $b));
        $a[] = '          </div>'; // destacado-texto
        // Acumular termina
        $a[] = '        </div>'; // destacado-servicio
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase Destacado

?>
