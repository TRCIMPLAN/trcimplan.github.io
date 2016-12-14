<?php
/**
 * Plataforma de Conocimiento - Schema Dataset
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
 * Clase SchemaDataset
 *
 * A body of structured information describing some topic(s) of interest.
 * http://schema.org/Dataset
 */
class SchemaDataset extends SchemaCreativeWork {

    // En Schema
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $identation;      // Integer. Level of identation (beautiful code).
    // public $id_property;     // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;  // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;      // Boolean. Use true for enclose with <article>
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
    // En SchemaCreativeWork
    // public $author;          // Organization or Person. The author of this content.
    // public $contentLocation; // Place. The location of the content.
    // public $datePublished;   // Date. Date of first broadcast/publication. In ISO 8601, example 2007-04-05T14:30
    // public $producer;        // Organization or Person. The person or organization who produced the work.
    // En SchemaDataset
    public $catalog;            // DataCatalog. A data catalog which contains a dataset.
    public $distribution;       // DataDownload. A downloadable form of this dataset, at a specific location, in a specific format.
    public $spatial;            // Instance of SchemaPlace. The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
    public $temporal;           // DateTime. The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).

    /**
     * Temporal HTML
     *
     * @return string Código HTML
     */
    protected function temporal_html() {
        if ($this->temporal != '') {
            return sprintf('  <div class="temporal">Temporal: <meta itemprop="temporal" content="%s">%s</div>', $this->temporal, $this->fecha_con_formato_humano($this->temporal));
        } else {
            return '';
        }
    } // temporal_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar acumulador
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/Dataset"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->image_html();
        if (is_object($this->catalog) && ($this->catalog instanceof SchemaDataCatalog)) {
            $this->catalog->onTypeProperty = 'catalog';
            $this->catalog->identation     = $this->identation + 1;
            $this->catalog->is_article     = FALSE;
            $a[]                           = $this->catalog->html();
        }
        if (is_object($this->distribution) && ($this->distribution instanceof SchemaDataDownload)) {
            $this->distribution->onTypeProperty = 'distribution';
            $this->distribution->identation     = $this->identation + 1;
            $this->distribution->is_article     = FALSE;
            $a[]                                = $this->distribution->html();
        }
        if (is_object($this->spatial) && ($this->spatial instanceof SchemaPlace)) {
            $this->spatial->onTypeProperty = 'spatial';
            $this->spatial->identation     = $this->identation + 1;
            $this->spatial->is_article     = FALSE;
            $a[]                           = $this->spatial->html();
        }
        $a[] = $this->temporal_html();
        $a[] = $this->content_html();
        $a[] = $this->itemscope_end();
        $a[] = $this->extra_html();
        // Entregar
        return $this->clean_html($a);
    } // html

} // Clase SchemaDataset

?>
