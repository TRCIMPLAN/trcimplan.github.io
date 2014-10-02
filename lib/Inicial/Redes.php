<?php
/*
 * SMIbeta - Redes
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace Inicial;

/**
 * Clase Redes
 */
class Redes {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '  <!-- REDES -->';
        $a[] = '  <section id="redes">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-md-8">';
        $a[] = '        <a href="index.html"><img class="img-responsive logotipo" src="imagenes/implan-transparente-gris.png" alt="IMPLAN Torreón"></a>';
        $a[] = '      </div>';
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <div class="pull-right redes-sociales">';
        $a[] = '          <a class="fa fa-twitter-square" href="http://www.twitter.com/trcimplan" target="_blank"></a>';
        $a[] = '          <a class="fa fa-facebook-square" href="https://facebook.com/trcimplan" target="_blank"></a>';
        $a[] = '          <a class="fa fa-github-square" href="https://github.com/TRCIMPLAN" target="_blank"></a>';
        $a[] = '          <a class="fa fa-rss-square" href="rss.xml"></a>';
        $a[] = '        </div>';
        $a[] = '      </div>';
        $a[] = '    </div>';
        $a[] = '  </section>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Redes

?>
