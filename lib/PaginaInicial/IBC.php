<?php
/**
 * TrcIMPLAN Sitio Web - IBC
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
 * Clase IBC
 */
class IBC {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $a   = array();
        $a[] = '  <section id="ibc">';
        $a[] = '    <div id="IBCTorreonMapa" class="mapa"></div>';
        $a[] = '  </section>';
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        $a   = array();
        $a[] = '  // Cargar mapa IBC Torreón cuando esté lista la página';
        $a[] = '  $(window).load(function() {';
        $a[] = sprintf('    cartodb.createVis(\'IBCTorreonMapa\', \'%s\', {', \Configuracion\IBCTorreonConfig::LIMITES);
        $a[] = '        shareable: false,';
        $a[] = '        title: true,';
        $a[] = '        description: true,';
        $a[] = '        search: false,';
        $a[] = '        scrollwheel: false,';
        $a[] = '        infowindow: true,';
        $a[] = '        fullscreen: true';
        $a[] = '      })';
        $a[] = '      .done(function(vis, layers) {';
        $a[] = '        // Capa colonias';
        $a[] = '        var colonias_capa = layers[1];';
        $a[] = '        colonias_capa.setInteraction(true);';
        $a[] = '        // Ajustes en el mapa';
        $a[] = '        var map = vis.getNativeMap();';
        $a[] = '        map.setZoom(14);';
        $a[] = '      })';
        $a[] = '  });';
        return implode("\n", $a);
    } // javascript

} // Clase IBC

?>
