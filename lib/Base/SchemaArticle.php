<?php
/**
 * TrcIMPLAN Sitio Web - Schema Article
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
 * Clase SchemaArticle
 *
 * http://schema.org/Article
 */
class SchemaArticle extends SchemaCreativeWork {

    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $name;            // Text. The name of the item.
    // public $author;          // Organization or Person. The author of this content.
    // public $contentLocation; // Place. The location of the content.
    // public $datePublished;   // Date. Date of first broadcast/publication.
    // public $headline;        // Text. Headline of the article.
    // public $producer;        // Organization or Person. The person or organization who produced the work.
    public $articleBody;        // Text. The actual body of the article.

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
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Article\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/Article">';
        }
        // Título
        if (is_string($this->headline) && ($this->headline != '')) {
            if (!is_string($this->name) || ($this->name == '')) {
                $this->name = $this->headline;
                $a[] = "  <h1 itemprop=\"name\">{$this->name}</h1>";
            } elseif ($this->name != $this->headline) {
                $a[] = "  <h1 itemprop=\"headline\">{$this->headline}</h1>";
                $a[] = "  <h4 itemprop=\"name\">{$this->name}</h4>";
            }
        } elseif (is_string($this->name) && ($this->name != '')) {
            $a[] = "  <h1 itemprop=\"name\">{$this->name}</h1>";
            $this->headline = $this->name;
        } else {
            throw new \Exception('Error en SchemaArticle, html: La propiedad name y/o headline es incorrecta.');
        }
        // Imagen
        if ($this->image != '') {
            $a[] = "  <img class=\"contenido-imagen-previa\" itemprop=\"image\" alt=\"Imagen previa\" src=\"{$this->image}\">";
        }
        // Descripción
        if ($this->description != '') {
            $a[] = "  <div class=\"contenido-descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        // Autor y Fecha
        if (($this->author != '') || ($this->datePublished != '')) {
            $a[] = '  <div class="contenido-autor-fecha">';
            if ($this->author != '') {
                $a[] = "    Por <span itemprop=\"author\">{$this->author}</span>";
            }
            if ($this->datePublished != '') {
                $a[] = sprintf('    <meta itemprop="datePublished" content="%s">%s', $this->datePublished, $this->fecha_con_formato_humano($this->datePublished));
            }
            $a[] = '  </div>';
        }
        // Contenido
        if (is_string($this->articleBody) && ($this->articleBody != '')) {
            $a[] = '  <div itemprop="articleBody">';
            $a[] = $this->articleBody;
            $a[] = '  </div>';
        } else {
            throw new \Exception("Error en SchemaArticle, html: La propiedad articleBody es incorrecta.");
        }
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaArticle

?>
