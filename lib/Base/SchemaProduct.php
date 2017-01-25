<?php
/**
 * Plataforma de Conocimiento - SchemaProduct
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
 * Clase SchemaProduct
 *
 * Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
 * http://schema.org/Product
 */
class SchemaProduct extends SchemaThing {

    // En Schema
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $identation;      // Integer. Level of identation (beautiful code).
    // public $id_property;     // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;  // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;      // Boolean. Use true for enclose with <article>
    // public $is_visible;      // Boolean. Use true for use invisible meta tags.
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
    // En SchemaProduct
    public $logo;               // ImageObject or URL. An associated logo.
    public $manufacturer;       // Organization. The manufacturer of the product.
    public $releaseDate;        // Date. The release date of a product or product model. This can be used to distinguish the exact variant of a product.

    /**
     * Logo HTML
     *
     * @return string Código HTML
     */
    protected function logo_html() {
        if ($this->image != '') {
            if ($this->url != '') {
                return "  <a href=\"{$this->url}\"><img class=\"contenido-imagen-previa\" itemprop=\"logo\" alt=\"{$this->name}\" src=\"{$this->image}\"></a>";
            } else {
                return "  <img class=\"contenido-imagen-previa\" itemprop=\"logo\" alt=\"{$this->name}\" src=\"{$this->image}\">";
            }
        } else {
            return '';
        }
    } // logo_html

    /**
     * Release Date HTML
     *
     * @return string Código HTML
     */
    protected function relase_date_html() {
        if ($this->releaseDate != '') {
            return "  <meta itemprop=\"releaseDate\" content=\"{$this->releaseDate}\">";
        } else {
            return '';
        }
    } // relase_date_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar acumulador
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/Product"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
            $a[] = $this->logo_html();
        } else {
            $a[] = $this->logo_html();
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        if (is_object($this->manufacturer) && ($this->manufacturer instanceof SchemaOrganization)) {
            $this->manufacturer->onTypeProperty = 'manufacturer';
            $this->manufacturer->identation     = $this->identation + 1;
            $this->manufacturer->is_article     = FALSE;
            $a[]                                = $this->manufacturer->html();
        }
        $a[] = $this->relase_date_html();
        $a[] = $this->url_html();
        $a[] = $this->content_html();
        $a[] = $this->itemscope_end();
        $a[] = $this->extra_html();
        // Entregar
        return $this->clean_html($a);
    } // html

} // Clase SchemaProduct

?>
