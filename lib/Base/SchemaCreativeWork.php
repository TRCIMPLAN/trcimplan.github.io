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
    public $producer;          // Organization or Person. The person or organization who produced the work.

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
        // Imagen
        if ($this->image != '') {
            $a[] = "  <img class=\"contenido-imagen-previa\" itemprop=\"image\" alt=\"Imagen previa\" src=\"{$this->image}\">";
        }
        // Título
        if (is_string($this->headline) && ($this->headline != '')) {
            if (!is_string($this->name) || ($this->name == '')) {
                $this->name = $this->headline;
                $a[] = "  <h3 itemprop=\"name\">{$this->name}</h3>";
            } elseif ($this->name != $this->headline) {
                $a[] = "  <h3 itemprop=\"headline\">{$this->headline}</h3>";
                $a[] = "  <h5 itemprop=\"name\">{$this->name}</h5>";
            }
        } elseif (is_string($this->name) && ($this->name != '')) {
            $a[] = "  <h3 itemprop=\"name\">{$this->name}</h3>";
            $this->headline = $this->name;
        } else {
            throw new \Exception('Error en SchemaCreativeWork, html: La propiedad name y/o headline es incorrecta.');
        }
        // Descripción
        if ($this->description != '') {
            $a[] = "  <div class=\"contenido-descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        // Autor y Fecha
        if (($this->author != '') || ($this->datePublished != '')) {
            $a[] = '  <div class="autor-fecha">';
            if ($this->author != '') {
                $a[] = "    Por <span itemprop=\"author\">{$this->author}</span>";
            }
            if ($this->datePublished != '') {
                $a[] = sprintf('    <meta itemprop="datePublished" content="%s">%s', $this->datePublished, $this->fecha_con_formato_humano($this->datePublished));
            }
            $a[] = '  </div>';
        }
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaCreativeWork

?>
