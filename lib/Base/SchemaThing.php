<?php
/**
 * Plataforma de Conocimiento - Schema Thing
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
 * Clase SchemaThing
 *
 * The most generic type of item.
 * http://schema.org/Thing
 */
class SchemaThing extends Schema {

    // En Schema
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $identation;      // Integer. Level of identation (beautiful code).
    // public $id_property;     // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;  // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;      // Boolean. Use true for enclose with <article>
    // public $is_visible;      // Boolean. Use true for use invisible meta tags.
    // En SchemaThing
    public $big_heading;        // Boolean. Use true to use a big heading for the web page.
    public $headline;           // Text. Headline of the article.
    public $headline_style;     // Text. CSS style or Hex color.
    public $headline_icon;      // Text. Font Awsome icon.
    public $content;            // Text. HTML content to put INSIDE.
    public $extra;              // Text. Additional HTML to put ASIDE.
    public $description;        // Text. A short description of the item.
    public $image;              // URL or ImageObject. An image of the item.
    public $image_show;         // Boolean. Use true to put an img tag. Use false to put a meta tag.
    public $name;               // Text. The name of the item.
    public $url;                // URL of the item.
    public $url_label;          // Label for the URL of the item.

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->big_heading = FALSE; // Por defecto NO se usa el encabezado grande
        $this->image_show  = FALSE; // Por defecto es INVISIBLE con tag meta
    } // constructor

    /**
     * Author Date Published HTML
     *
     * @return string Código HTML
     */
    protected function author_date_published_html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Si author es un arreglo o si es un texto
        if (is_array($this->author) && (count($this->author) > 0)) {
            $author = implode(', ', $this->author);
        } elseif (is_string($this->author) && ($this->author != '')) {
            $author = $this->author;
        } else {
            $author = '';
        }
        // Acumular
        if (($author != '') && ($this->datePublished != '')) {
            $a[] = '<div class="encabezado-autor-fecha">';
            $a[] = sprintf('  Por <span itemprop="author">%s</span> -', $author);
            $a[] = sprintf('  <meta itemprop="datePublished" content="%s">%s', $this->datePublished, Funciones::fecha_con_formato_humano($this->datePublished));
            $a[] = '</div>';
        } elseif ($this->datePublished != '') {
            $a[] = '<div class="encabezado-autor-fecha">';
            $a[] = sprintf('  <meta itemprop="datePublished" content="%s">%s', $this->datePublished, Funciones::fecha_con_formato_humano($this->datePublished));
            $a[] = '</div>';
        } elseif ($author != '') {
            $a[] = '<div class="encabezado-autor-fecha">';
            $a[] = sprintf('  Por <span itemprop="author">%s</span>', $author);
            $a[] = '</div>';
        }
        // Entregar
        if (count($a) > 0) {
            $spaces = str_repeat('  ', $this->identation + 3);
            return '  '.implode("\n$spaces", $a);
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
        if ($this->headline != '') {
            if ($this->name == '') {
                $this->name = $this->headline;
                $a[] = sprintf('  <h1 itemprop="name">%s</h1>', $this->headline);
            } elseif ($this->name != $this->headline) {
                $a[] = sprintf('  <h1 itemprop="headline">%s</h1><h4 itemprop="name">%s</h4>', $this->headline, $this->name);
            }
        } elseif ($this->name != '') {
            $this->headline = $this->name;
            $a[] = sprintf('  <h1 itemprop="name">%s</h1>', $this->name);
        }
        if ($this->description != '') {
            $a[] = "  <div class=\"encabezado-descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        $a[] = $this->author_date_published_html();
        $a[] = "</div>";
        // Entregar
        $spaces = str_repeat('  ', $this->identation + 2);
        return '  '.implode("\n$spaces", $a);
    } // big_heading_html

    /**
     * Title HTML
     *
     * @return string Código HTML
     */
    protected function title_html() {
        if ($this->name != '') {
            if (($this->url != '') && ($this->url_label == '')) {
                return "  <a href=\"{$this->url}\" itemprop=\"url\"><h3 class=\"titulo\" itemprop=\"name\">{$this->name}</h3></a>";
            } else {
                return "  <h3 class=\"titulo\" itemprop=\"name\">{$this->name}</h3>";
            }
        } else {
            return '';
        }
    } // title_html

    /**
     * Description HTML
     *
     * @return string Código HTML
     */
    protected function description_html() {
        if ($this->description != '') {
            return "  <div class=\"descripcion\" itemprop=\"description\">{$this->description}</div>";
        } else {
            return '';
        }
    } // description_html

    /**
     * Image HTML
     *
     * @return string Código HTML
     */
    protected function image_html() {
        if ($this->image != '') {
            if ($this->image_show) {
                return "  <span class=\"contenido-imagen-previa\"><img class=\"img-responsive\" itemprop=\"image\" alt=\"{$this->name}\" src=\"{$this->image}\"></span>";
            } else {
                return "  <meta itemprop=\"image\" alt=\"{$this->name}\" src=\"{$this->image}\">";
            }
        } else {
            return '';
        }
    } // image_html

    /**
     * URL HTML
     *
     * @return string Código HTML
     */
    protected function url_html() {
        if ($this->url != '') {
            if ($this->url_label != '') {
                return "  <a href=\"{$this->url}\" itemprop=\"url\">{$this->url_label}</a>";
            } else {
                return '';
            }
        } else {
            return '';
        }
    } // url_html

    /**
     * Content HTML
     *
     * Pone contenido dentro
     */
    protected function content_html() {
        if ($this->content != '') {
            $a      = array();
            $a[]    = '<!-- Contenido: Inicia  -->';
            $a[]    = $this->content;
            $a[]    = '<!-- Contenido: Termina -->';
            return implode("\n  ", $a);
        } else {
            return '';
        }
    } // content_html

    /**
     * Extra
     *
     * Pone contenido entre tags aside
     */
    protected function extra_html() {
        if ($this->extra != '') {
            $a      = array();
            $a[]    = '<aside>';
            $a[]    = '<!-- Extra: Inicia  -->';
            $a[]    = $this->extra;
            $a[]    = '<!-- Extra: Termina -->';
            $a[]    = '</aside>';
            return implode("\n  ", $a);
        } else {
            return '';
        }
    } // extra_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar acumulador
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/Thing"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->image_html();
        $a[] = $this->url_html();
        $a[] = $this->content_html();
        $a[] = $this->itemscope_end();
        $a[] = $this->extra_html();
        // Entregar
        return $this->clean_html($a);
    } // html

} // Clase SchemaThing

?>
