<?php
/**
 * TrcIMPLAN Sitio Web - Aviso
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
 * Clase Aviso
 */
class Aviso {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        $a   = array();
        $a[] = '  <section id="aviso">';
        $a[] = '    <div class="panel panel-default">';
        $a[] = '        <div class="panel-heading" style="background-color:#CACACA;padding:0px 15px;">';
        $a[] = '            <h2 style="border-bottom:none">Suspensión de difusión y propaganda por periodo electoral</h2>';
        $a[] = '        </div>';
        $a[] = '        <div class="panel-body">';
        $a[] = '            <p>A partir del primer minuto de este domingo 2 de abril y hasta las 24:00 horas del día 4 de junio, el Ayuntamiento de Torreón suspenderá toda su difusión promocional en todos los medios de comunicación en cumplimiento a las disposiciones del acuerdo emitido por el Consejo General del Instituto Nacional Electoral.</p>';
        $a[] = '            <p>El IMPLAN Torreón acatará las disposiciones de este órgano federal electoral en cuanto a sus normas reglamentarias sobre la propaganda gubernamental para los procesos electorales 2016-2017 respecto al artículo 41, base III, apartado C de la Constitución Política de los Estados Unidos Mexicanos.</p>';
        $a[] = '            <p>Ante estas disposiciones, se dejarán de emitir boletines de prensa y el Sistema Metropolitano de Indicadores (SMI) así como el Sistema de Información Geográfica (SIG) recibirán información que no sea considerada como propaganda gubernamental.</p>';
        $a[] = '        </div>';
        $a[] = '        <a href="consejo-directivo/eleccion-de-consejeros-de-representacion-sectorial-2015.html">';
        $a[] = '            <div class="panel-footer" style="background-color:#CACACA">';
        $a[] = '                <span class="pull-left">Ir a la página</span>';
        $a[] = '                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>';
        $a[] = '                <div class="clearfix"></div>';
        $a[] = '            </div>';
        $a[] = '        </a>';
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
        return NULL;
    } // javascript

} // Clase Aviso

?>
