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

    // public $onTypeProperty; // Text. Use when this item is part of another one.
    // public $description;    // Text. A short description of the item.
    // public $image;          // URL or ImageObject. An image of the item.
    // public $name;           // Text. The name of the item.
    public $author;            // Organization or Person. The author of this content.
    public $contentLocation;   // Place. The location of the content.
    public $datePublished;     // Date. Date of first broadcast/publication. In ISO 8601, example 2007-04-05T14:30
    public $headline;          // Text. Headline of the article.
    public $headline_style;    // Text. CSS style for encabezado
    public $producer;          // Organization or Person. The person or organization who produced the work.

    /**
     * Encabezado HTML
     *
     * @return string Código HTML
     */
    protected function encabezado_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Encabezado inicia
        if ($this->headline_style != '') {
            if (preg_match('/^#[[:xdigit:]]{6}$/', $this->headline_style) === 1) {
                $a[] = "  <div class=\"encabezado\" style=\"background-color:{$this->headline_style};\">";
            } else {
                $a[] = "  <div class=\"encabezado\" style=\"{$this->headline_style};\">";
            }
        } else {
            $a[] = "  <div class=\"encabezado\">";
        }
        // Como título headline y/o name
        if ($this->headline != '') {
            if ($this->name == '') {
                $a[] = "    <h1 itemprop=\"name\">{$this->headline}</h1>";
                $this->name = $this->headline;
            } elseif ($this->name != $this->headline) {
                $a[] = "    <h1 itemprop=\"headline\">{$this->headline}</h1>";
                $a[] = "    <h4 itemprop=\"name\">{$this->name}</h4>";
            }
        } elseif ($this->name != '') {
            $a[] = "    <h1 itemprop=\"name\">{$this->name}</h1>";
            $this->headline = $this->name;
        } else {
            throw new \Exception('Error en SchemaCreativeWork, html: La propiedad name y/o headline es incorrecta.');
        }
        // Descripción
        if ($this->description != '') {
            $a[] = "    <div class=\"encabezado-descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        // Autor y Fecha
        if (($this->author != '') || ($this->datePublished != '')) {
            $a[] = '    <div class="encabezado-autor-fecha">';
            if ($this->author != '') {
                $a[] = "      Por <span itemprop=\"author\">{$this->author}</span>";
            }
            if ($this->datePublished != '') {
                $a[] = sprintf('      - <meta itemprop="datePublished" content="%s">%s', $this->datePublished, $this->fecha_con_formato_humano($this->datePublished));
            }
            $a[] = '    </div>';
        }
        // Encabezado termina
        $a[] = "  </div>";
        // Entregar
        return implode("\n", $a);
    } // encabezado_html

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
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/CreativeWork\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/CreativeWork">';
        }
        // Encabezado
        $a[] = $this->encabezado_html();
        // Imagen
        if ($this->image != '') {
            $a[] = "  <img class=\"contenido-imagen-previa\" itemprop=\"image\" alt=\"Imagen previa\" src=\"{$this->image}\">";
        }
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaCreativeWork

?>
