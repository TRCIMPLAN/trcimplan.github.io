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
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 * http://schema.org/CreativeWork
 */
class SchemaCreativeWork extends SchemaThing {

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
    public $author;                 // Organization or Person. The author of this content.
    public $contentLocation;        // Place. The location of the content.
    public $datePublished;          // Date. Date of first broadcast/publication. In ISO 8601, example 2007-04-05T14:30
    public $headline;               // Text. Headline of the article.
    public $headline_style;         // Text. CSS style for encabezado.
    public $producer;               // Organization or Person. The person or organization who produced the work.

    /**
     * Headline HTML
     *
     * @return string Código HTML
     */
    protected function headline_html() {
        if ($this->headline != '') {
            if ($this->name == '') {
                $this->name = $this->headline;
                return "  <h1 itemprop=\"name\">{$this->headline}</h1>";
            } elseif ($this->name != $this->headline) {
                return "  <h1 itemprop=\"headline\">{$this->headline}</h1>\n    <h4 itemprop=\"name\">{$this->name}</h4>";
            }
        } elseif ($this->name != '') {
            $this->headline = $this->name;
            return "  <h1 itemprop=\"name\">{$this->name}</h1>";
        } else {
            return '';
        }
    } // headline_html

    /**
     * Author Date Published HTML
     *
     * @return string Código HTML
     */
    protected function author_date_published_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        if (($this->author != '') && ($this->datePublished != '')) {
            $a[] = '<div class="encabezado-autor-fecha">';
            $a[] = "  Por <span itemprop=\"author\">{$this->author}</span>";
            $a[] = sprintf('  - <meta itemprop="datePublished" content="%s">%s', $this->datePublished, $this->fecha_con_formato_humano($this->datePublished));
            $a[] = '</div>';
        } elseif ($this->datePublished != '') {
            $a[] = '<div class="encabezado-autor-fecha">';
            $a[] = sprintf('  <meta itemprop="datePublished" content="%s">%s', $this->datePublished, $this->fecha_con_formato_humano($this->datePublished));
            $a[] = '</div>';
        } elseif ($this->author != '') {
            $a[] = '<div class="encabezado-autor-fecha">';
            $a[] = "  Por <span itemprop=\"author\">{$this->author}</span>";
            $a[] = '</div>';
        }
        // Entregar
        if (count($a) > 0) {
            $spaces = str_repeat('  ', $this->identation + 1);
            return $spaces.implode("\n$spaces", $a);
        } else {
            return '';
        }
    } // author_date_published_html

    /**
     * Big Heading HTML
     *
     * @return string Código HTML
     */
    protected function big_heading_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Puede recibir un estilo o un color hexadecimal
        if ($this->headline_style != '') {
            if (preg_match('/^#[[:xdigit:]]{6}$/', $this->headline_style) === 1) {
                $a[] = "<div class=\"encabezado\" style=\"background-color:{$this->headline_style};\">";
            } else {
                $a[] = "<div class=\"encabezado\" style=\"{$this->headline_style};\">";
            }
        } else {
            $a[] = "<div class=\"encabezado\">";
        }
        $a[] = $this->headline_html();
        if ($this->description != '') {
            $a[] = "  <div class=\"encabezado-descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        $a[] = $this->author_date_published_html();
        $a[] = "</div>";
        // Entregar
        $spaces = str_repeat('  ', $this->identation + 1);
        return $spaces.implode("\n$spaces", $a);
    } // big_heading_html

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
            $a[] = "  <div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/CreativeWork\">";
        } else {
            $a[] = $spaces.'<div itemscope itemtype="http://schema.org/CreativeWork">';
        }
        $a[] = $this->big_heading_html();
        $a[] = $this->image_html();
        if ($this->extra != '') {
            $a[] = $this->extra;
        }
        $a[] = '</div>';
        // Entregar
        return implode("\n$spaces", $a);
    } // html

} // Clase SchemaCreativeWork

?>
