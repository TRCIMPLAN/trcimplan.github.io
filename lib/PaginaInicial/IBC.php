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
        // Mapa de Carto
    /*  $a   = array();
        $a[] = '  <section id="ibc">';
        $a[] = '    <div id="IBCTorreonMapa" class="mapa"></div>';
        $a[] = '  </section>';
        return implode("\n", $a); */
        $a   = array();
        $a[] = '  <section id="ibc">';
        $a[] = '    <div class="panel panel-default panel-ibc">';
        $a[] = '        <div class="panel-heading panel-heading-ibc">';
        $a[] = '            <h2 style="border-bottom:none; padding:12px 0 4px 0; margin:0;">Indicadores Básicos de Colonias (IBC)</h2>';
        $a[] = '        </div>';
        $a[] = '        <div class="panel-body">';
        $a[] = '            <a id="servicio-ibc" class="imagen-ibc" href="ibc/introduccion.html" title="IBC"></a>';
        $a[] = '            <p><b>Es la <b>colonia</b> la forma más común en que nos referimos a un lugar de nuestra ciudad.</b> Razón por la que hemos construido <b>IBC</b> como un <b>instrumento informativo</b> que <b>coadyuva a la planeación y toma de decisiones</b> tanto de instancias gubernamentales, empresariales, de investigación académica, así como <b>de interés ciudadano</b> porque está a un nivel más cercano a la dinámica social.</p>';
        $a[] = '        </div>';
        $a[] = '        <div class="clearfix"></div>';
        $a[] = '        <div class="panel-footer panel-footer-ibc">';
        $a[] = '            <b>Hay varias formas de usar IBC:</b>';
        $a[] = '            Por medio del listado alfabético de las <a class="btn btn-default destacado-boton" role="button" href="ibc-colonias-torreon/index.html">Colonias de Torreón</a>,';
        $a[] = '            con el <a class="btn btn-default destacado-boton" role="button" href="https://guivaloz.carto.com/viz/f0e6db7c-ac40-11e6-9146-0e3a376473ab/embed_map" target="_blank">Mapa Completo</a>';
        $a[] = '            o con el buscador de Google:';
        $a[] = '            <form method="get" action="http://www.trcimplan.gob.mx/buscador-resultados.html">';
        $a[] = '                <input type="hidden" value="015475140351266618625:04hulmghdys" name="cx">';
        $a[] = '                <input type="hidden" value="FORID:11" name="cof">';
        $a[] = '                <div class="input-group">';
        $a[] = '                  <input type="text" class="form-control" name="s" value="Colonia ">';
        $a[] = '                  <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>';
        $a[] = '                </div>';
        $a[] = '            </form>';
        $a[] = '        </div>';
        $a[] = '    </div>';
        $a[] = '  </section>';
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Mapa de Carto
    /*  $a   = array();
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
        return implode("\n", $a); */
        return NULL;
    } // javascript

} // Clase IBC

?>
