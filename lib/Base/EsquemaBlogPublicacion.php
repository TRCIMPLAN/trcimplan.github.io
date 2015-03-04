<?php
/**
 * TrcIMPLAN Sitio Web - Esquema Blog Publicacion
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
 * Clase EsquemaBlogPublicacion
 *
 * http://schema.org/BlogPosting
 * http://getschema.org/index.php?title=BlogPosting
 */
class EsquemaBlogPublicacion {

    public $publicacion; // Instancia de Publicacion

    /**
     * Constructor
     *
     * @param mixed Instancia de Publicacion
     */
    public function __construct(Publicacion $publicacion) {
        $this->publicacion = $publicacion;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<div class="post" itemscope itemType="http://schema.org/BlogPosting">';
        $a[] = '  <h2 class="post-title" itemprop="headline">Introducing schema.org: Search engines come together for a richer web</h2>';
        $a[] = '  <div class="introduction" itemprop="description">Short description of my post</div>';
        $a[] = '  <div class="date-header">';
        $a[] = '    <meta itemprop="datePublished" content="2011-06-02T16:00Z"/>';
        $a[] = '    6/02/2011 10:00:00 AM';
        $a[] = '  </div>';
        $a[] = '  <div class="post-body" itemprop="articleBody">';
        $a[] = '    Today we"re announcing ....';
        $a[] = '  </div>';
        $a[] = '  <div class="post-author" itemprop="author">';
        $a[] = '    <span itemscope itemtype="http://schema.org/Person">';
        $a[] = '      Posted by <span itemprop="name">Ramanathan Guha</span>, Google Fellow';
        $a[] = '    </span>';
        $a[] = '  </div>';
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase EsquemaBlogPublicacion

?>
