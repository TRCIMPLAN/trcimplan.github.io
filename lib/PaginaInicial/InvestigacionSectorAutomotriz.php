<?php
/**
 * TrcIMPLAN Sitio Web - Investigación Sector Automotriz
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace PaginaInicial;

/**
 * Clase InvestigacionSectorAutomotriz
 */
class InvestigacionSectorAutomotriz {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $a   = array();
        $a[] = '  <section id="investigacion-sector-automotriz">';
        //~ $a[] = '    <div class="panel panel-default">';
        //~ $a[] = '        <div class="panel-body">';
        $a[] = '            <a href="investigaciones/sector-automotriz.html"><img class="img-responsive" src="imagenes/banner-sector-automotriz.jpg" alt="Investigación Sector Automotriz"></a>';
        //~ $a[] = '        </div>';
        //~ $a[] = '    </div>';
        $a[] = '  </section>';
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return NULL;
    } // javascript

} // Clase InvestigacionSectorAutomotriz

?>
