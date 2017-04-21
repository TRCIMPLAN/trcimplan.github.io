<?php
/**
 * TrcIMPLAN Sitio Web - Mapa Inferior Config
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

namespace Configuracion;

/**
 * Clase MapaInferiorConfig
 */
class MapaInferiorConfig {

    public $sitio_titulo = 'IMPLAN Torreón';
    public $logotipo     = 'imagenes/implan-transparente-gris.png';
    public $en_raiz      = FALSE; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '    <div class="mapa-inferior">';
    //~ $a[] = '      <div class="row">';
    //~ $a[] = '        <div class="col-md-8">';
    //~ if ($this->en_raiz) {
        //~ $a[] = sprintf('            <a href="index.html"><img class="img-responsive mapa-inferior-logo" src="%s" alt="%s"></a>', $this->logotipo, $this->sitio_titulo);
    //~ } else {
        //~ $a[] = sprintf('            <a href="../index.html"><img class="img-responsive mapa-inferior-logo" src="../%s" alt="%s"></a>', $this->logotipo, $this->sitio_titulo);
    //~ }
    //~ $a[] = '        </div>'; // col-md-8
    //~ $a[] = '        <div class="col-md-4">';
        $a[] = '          <div class="pull-right redes-sociales">';
        $a[] = '            <a class="fa fa-twitter-square" href="http://www.twitter.com/trcimplan" target="_blank"></a>';
        $a[] = '            <a class="fa fa-facebook-square" href="https://facebook.com/trcimplan" target="_blank"></a>';
        $a[] = '            <a class="fa fa-google-plus-square" href="https://plus.google.com/106220426241750550649" target="_blank"></a>';
        $a[] = '            <a class="fa fa-github-square" href="https://github.com/TRCIMPLAN" target="_blank"></a>';
        if ($this->en_raiz) {
            $a[] = '            <a class="fa fa-rss-square" href="rss.xml"></a>';
        } else {
            $a[] = '            <a class="fa fa-rss-square" href="../rss.xml"></a>';
        }
        $a[] = '          </div>'; // redes-sociales
    //~ $a[] = '        </div>'; // col-md-4
    //~ $a[] = '      </div>'; // row
        $a[] = '    </div>'; // mapa-inferior
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase MapaInferiorConfig

?>
