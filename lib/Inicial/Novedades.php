<?php
/*
 * SMIbeta - Novedades
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
 * Clase Novedades
 */
class Novedades {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '  <!-- NOVEDADES -->';
        $a[] = '  <section id="novedades">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-md-8">';
        $a[] = '        <div class="analisis-publicados">';
        // Análisis Inicia
        $analisis                   = new \Blog\Imprenta();
        $resumenes                  = $analisis->elaborar_resumenes(); // Entrega una instancia de \Base\Resumenes
        $resumenes->en_raiz         = true;
        $resumenes->cantidad_maxima = 4;
        $a[]                        = $resumenes->html();
        // Análisis Termina
        $a[] = '        </div>';
        $a[] = '      </div>';
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <div class="red-social-twitter">';
        // Twitter Timeline Inicia
        $a[] = '<a class="twitter-timeline" height="600px" href="https://twitter.com/trcimplan" data-chrome="nofooter transparent" data-theme="dark" data-widget-id="455819492145127424">Tweets por @trcimplan</a>';
        // Twitter Timeline Termina
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
        // Twitter Timeline
        return '!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");';
    } // javascript

} // Clase Novedades

?>
