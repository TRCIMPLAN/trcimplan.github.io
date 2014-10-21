<?php
/*
 * SMIbeta - Mapa Inferior Configuración
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
namespace Configuracion;

/**
 * Clase MapaInferiorConfig
 */
class MapaInferiorConfig {

    public $sitio_titulo = 'IMPLAN Torreón';
    public $logotipo     = 'imagenes/implan-transparente-gris.png';
    public $en_raiz = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '    <div class="row mapa-inferior">';
        $a[] = '      <div class="col-md-8">';
        if ($this->en_raiz) {
            $a[] = "          <a href=\"index.html\"><img class=\"img-responsive mapa-inferior-logo\" src=\"{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
        } else {
            $a[] = "          <a href=\"../index.html\"><img class=\"img-responsive mapa-inferior-logo\" src=\"../{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
        }
        $a[] = '      </div>'; // col-md-8
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <div class="pull-right mapa-inferior-redes-sociales">';
        $a[] = '          <a class="fa fa-twitter-square icono" href="http://www.twitter.com/trcimplan" target="_blank"></a>';
        $a[] = '          <a class="fa fa-facebook-square icono" href="https://facebook.com/trcimplan" target="_blank"></a>';
        $a[] = '          <a class="fa fa-github-square  icono" href="https://github.com/TRCIMPLAN" target="_blank"></a>';
        if ($this->en_raiz) {
            $a[] = '          <a class="fa fa-rss-square icono" href="rss.xml"></a>';
        } else {
            $a[] = '          <a class="fa fa-rss-square icono" href="../rss.xml"></a>';
        }
        $a[] = '        </div>';
        $a[] = '      </div>'; // col-md-4
        $a[] = '    </div>'; // row
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
