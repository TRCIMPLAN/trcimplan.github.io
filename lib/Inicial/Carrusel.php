<?php
/*
 * SMIbeta - Inicial Carrusel
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
 * Clase Carrusel
 */
class Carrusel {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '<div id="carrusel">';
        $a[] = '  <div class="container">';
        $a[] = '    <div class="carousel slide" data-ride="carousel">';
        $a[] = '      <ol class="carousel-indicators">';
        $a[] = '        <li data-target="#carrusel" data-slide-to="0" class="active"></li>';
        $a[] = '        <li data-target="#carrusel" data-slide-to="1"></li>';
        $a[] = '        <li data-target="#carrusel" data-slide-to="2"></li>';
        $a[] = '      </ol>';
        $a[] = '      <div class="carousel-inner">';
        $a[] = '        <div class="item active">';
        $a[] = '          <img src="imagenes/carrusel-smi.jpg" alt="Sistema Metropolitano de Indicadores">';
        $a[] = '        </div>';
        $a[] = '        <div class="item">';
        $a[] = '          <img src="imagenes/carrusel-sig.jpg" alt="Sistema de Información Geográfica">';
        $a[] = '        </div>';
        $a[] = '      </div>';
        $a[] = '      <a class="left carousel-control" href="#carrusel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>';
        $a[] = '      <a class="right carousel-control" href="#carrusel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>';
        $a[] = '    </div>';
        $a[] = '  </div>';
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase Carrusel

?>
