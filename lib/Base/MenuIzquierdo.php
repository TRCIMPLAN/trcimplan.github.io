<?php
/*
 * SMIbeta - Base Menu Izquierdo
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
namespace Base;

/**
 * Clase MenuIzquierdo
 */
class MenuIzquierdo {

    public $en_raiz = false;

    protected function rama($etiqueta, $url) {
        if ($this->en_raiz) {
            return "      <li>\n        <a href=\"$url\"><i class=\"fa fa-dashboard fa-fw\"></i> $etiqueta</a>\n      </li>";
        } else {
            return "      <li>\n        <a href=\"../$url\"><i class=\"fa fa-dashboard fa-fw\"></i> $etiqueta</a>\n      </li>";
        }
    } // rama

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '<div class="navbar-default sidebar" role="navigation">';
        $a[] = '  <div class="sidebar-nav navbar-collapse">';
        $a[] = '    <ul class="nav" id="side-menu">';
        // PENDIENTE mandar a Config
        $a[] = $this->rama('Torreón',       'indicadores-torreon/');
        $a[] = $this->rama('Gómez Palacio', 'indicadores-gomez-palacio/');
        $a[] = $this->rama('Lerdo',         'indicadores-lerdo/');
        $a[] = $this->rama('Matamoros',     'indicadores-matamoros/');
        $a[] = $this->rama('La Laguna',     'indicadores-la-laguna/');
        //
        $a[] = '    </ul>';
        $a[] = '  </div>';
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

/* Un nivel
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
 */

/* Dos niveles
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                        </li>
 */

/* Tres niveles
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
 */


} // Clase MenuIzquierdo

?>
