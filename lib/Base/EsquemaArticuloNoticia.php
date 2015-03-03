<?php
/**
 * TrcIMPLAN Sitio Web - EsquemaArticuloNoticia
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
 * Clase EsquemaArticuloNoticia
 *
 * http://schema.org/Article
 */
class EsquemaArticuloNoticia {

    /**
     * Constructor
     */
    public function __construct() {
    } // constructor

/*
<div itemscope itemtype="http://schema.org/Article">
  <div itemprop="headline">
    Allies Are Split on Goal and
    Exit Strategy in Libya
  </div>
  <div itemprop="description">
    NATO Takes Command
  </div>
  <div itemprop="associatedMedia">
    <span itemscope itemtype="http://schema.org/ImageObject">
      <img itemprop="contentURL"
       src="/files/rNews-Sample-Story/libya_sample_reuters.jpg"/>
      <div>
        Credit:
        <span itemprop="author">Goran Tomasevic</span>/
        <span itemprop="sourceOrganization">
          <span itemscope itemtype="http://schema.org/Organization">
            <span itemprop="name"> Reuters</span>
          </span>
        </span>
      </div>
    <div itemprop="caption">
      Rebel fighters take cover during a shelling
      near Ajdabiyah, Libya on Thursday.
    </div>
    </span>
  </div>
  <div>
    By <span itemprop="author">STEVEN LEE MYERS</span> and <span itemprop="author">DAVID D. KIRKPATRICK</span>
  </div>
  <div>
    WASHINGTON | <meta itemprop="datePublished" content="2011-03-24"/> March 24, 2011
  </div>
  <div itemprop="articleBody">
    <p>
      Having largely succeeded in stopping a rout of
      Libya's rebels, the inchoate coalition attacking
      Col. Muammar el-Qaddafi's forces remains divided
      over the ultimate goal — and exit strategy —
      of what officials acknowledged Thursday would be
      a military campaign that could last for weeks.
    </p>
  </div>
</div>
 */

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

} // Clase EsquemaArticuloNoticia

?>
