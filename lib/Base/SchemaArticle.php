<?php
/**
 * Plataforma de Conocimiento - Schema Article
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
 * Clase SchemaArticle
 *
 * An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.
 * http://schema.org/Article
 */
class SchemaArticle extends SchemaCreativeWork {

    // public $onTypeProperty;      // Text. Use when this item is part of another one.
    // public $identation;          // Integer. Level of identation (beautiful code).
    // public $id_property;         // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;      // Text. class property for div tag. Use to aply a general CSS style.
    // public $big_heading;         // Boolean. Use true to use a big heading for the web page.
    // public $extra;               // Text. Additional HTML to put inside.
    // public $description;         // Text. A short description of the item.
    // public $image;               // URL or ImageObject. An image of the item.
    // public $image_show;          // Boolean. Use true to put an img tag. Use false to put a meta tag.
    // public $name;                // Text. The name of the item.
    // public $url;                 // URL of the item.
    // public $url_label;           // Label for the URL of the item.
    // public $author;              // Organization or Person. The author of this content.
    // public $contentLocation;     // Place. The location of the content.
    // public $datePublished;       // Date. Date of first broadcast/publication.
    // public $headline;            // Text. Headline of the article.
    // public $headline_style;      // Text. CSS style for encabezado
    // public $headline_icon;       // Text. Font Awsome icon for encabezado.
    // public $producer;            // Organization or Person. The person or organization who produced the work.
    public $articleBody;            // Text. The actual body of the article.

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->big_heading = true; // Por defecto se usa el encabezado grande
        $this->image_show  = true; // Por defecto se muestra "image" con tag img, en lugar de ponerla invisible con meta
    } // constructor

    /**
     * Article Body HTML
     *
     * @return string Código HTML
     */
    protected function article_body_html() {
        if ($this->articleBody != '') {
            $a   = array();
            $a[] = '<div itemprop="articleBody">';
            $a[] = $this->articleBody;
            $a[] = '</div>';
            // Entregar
            $spaces = str_repeat('  ', $this->identation + 1);
            return $spaces.implode("\n$spaces", $a);
        } else {
            return '';
        }
    } // article_body_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/Article"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->image_html();
        $a[] = $this->article_body_html();
        if (is_object($this->contentLocation) && ($this->contentLocation instanceof SchemaPlace)) {
            $this->contentLocation->onTypeProperty = 'contentLocation';
            $this->contentLocation->identation     = $this->identation + 1;
            $a[] = $this->contentLocation->html();
        }
        $a[] = $this->itemscope_end();
        if ($this->extra != '') {
            $a[] = "<aside>{$this->extra}</aside>";
        }
        // Entregar
        $spaces = str_repeat('  ', $this->identation);
        return implode("\n$spaces", $a);
    } // html

} // Clase SchemaArticle

?>
