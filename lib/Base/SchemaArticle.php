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
        // Cargar los valores por defecto de Publicacion
        $publicacion_config = new \Configuracion\PublicacionConfig();
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular incia
        $a[] = '<div class="" itemscope itemtype="http://schema.org/Article">';
        // Nombre
        if ($this->publicacion->nombre != '') {
            $a[] = "  <h1 class=\"\" itemprop=\"headline\">{$this->publicacion->nombre}</h2>";
        } else {
            throw new \Exception('Error en EsquemaBlogPublicacion, html: Publicación sin nombre.');
        }
        // Descripción
        if ($this->publicacion->descripcion != '') {
            $a[] = "  <p class=\"\" itemprop=\"description\">{$this->publicacion->descripcion}</p>";
        }
        // Imagen
/*
  <div itemprop="associatedMedia">
    <span itemscope itemtype="http://schema.org/ImageObject">
      <img itemprop="contentURL" src="/files/rNews-Sample-Story/libya_sample_reuters.jpg">
      <div>
        Credit:
        <span itemprop="author">Goran Tomasevic</span>
        <span itemprop="sourceOrganization">
          <span itemscope itemtype="http://schema.org/Organization">
            <span itemprop="name"> Reuters</span>
          </span>
        </span>
      </div>
    <div itemprop="caption">Rebel fighters take cover during a shelling near Ajdabiyah, Libya on Thursday.</div>
    </span>
  </div>
 */
        // Autor
        if ($this->publicacion->autor != $publicacion_config->autor) {
            $a[] = '  <div class="">';
            $a[] = sprintf('    Por <span itemprop="author">%s</span>', $this->publicacion->autor);
            $a[] = '  </div>';
        }
        // Fecha
        if (strcmp($this->publicacion->fecha, $publicacion_config->fecha) > 0) {
            $a[] = '  <div class="">';
            $a[] = sprintf('    <meta itemprop="datePublished" content="%s">%s', $this->publicacion->fecha_en_rfc2822(), $this->publicacion->fecha_con_formato_humano());
            $a[] = '  </div>';
        }
        // Contenido
        $a[] = '  <div class="" itemprop="articleBody">';
        if ($this->publicacion->contenido != '') {
            $a[] = $this->publicacion->contenido;
        } else {
            throw new \Exception('Error en EsquemaBlogPublicacion, html: Publicación sin contenido.');
        }
        $a[] = '  </div>';
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaArticle

?>
