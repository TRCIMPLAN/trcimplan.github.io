<?php
/**
 * TrcIMPLAN Sitio Web - UltimasPublicaciones
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
 * Clase UltimasPublicaciones
 */
class UltimasPublicaciones {

    public $imprentas;                        // Arreglo con rutas a las clases de ImprentaPublicaciones
    const   ULTIMAS_PUBLICACIONES_LIMITE = 4; // Cantidad límite de últimas publicaciones

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar concentrador
        $concentrador          = new \Base\VinculosDetallados();
        $concentrador->en_raiz = TRUE;
        // Iniciar recolector
        $recolector = new \Base\Recolector();
        $recolector->iniciar_para_estado_publicar();
        $recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        // Ordenar publicaciones por tiempo, de la más nueva a la más antigua
        $recolector->ordenar_por_tiempo_desc();
        // Bucle por las publicaciones
        foreach ($recolector->obtener_publicaciones(self::ULTIMAS_PUBLICACIONES_LIMITE) as $publicacion) {
            // Iniciar vínculo
            $vinculo          = new \Base\Vinculo();
            $vinculo->en_raiz = TRUE;
            $vinculo->en_otro = FALSE;
            $vinculo->definir_con_publicacion($publicacion);
            // Agregar
            $concentrador->agregar($vinculo);
        }
        // Acumular Últimas Publicaciones y Twitter Timeline
        $a   = array();
        $a[] = '  <section id="ultimas-publicaciones">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-md-8">';
        $a[] = '        <div class="ultimas">';
        $a[] = '          <h2>Últimas publicaciones</h2>';
        $a[] = $concentrador->html();
        $a[] = '          <div class="text-center">';
        $a[] = "            <a href=\"blog/index.html\" class=\"btn btn-default\" role=\"button\">Todos los Análisis Publicados</a>";
        $a[] = '          </div>';
        $a[] = '        </div>';
        $a[] = '      </div>';
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <div class="red-social-twitter">';
        $a[] = '          <a class="twitter-timeline" height="720px" href="https://twitter.com/trcimplan" data-chrome="nofooter transparent" data-theme="dark" data-widget-id="455819492145127424">Tweets por @trcimplan</a>';
        $a[] = '        </div>';
        $a[] = '      </div>';
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
        // Entregar javascipt del Twitter Timeline
        return <<<FINAL
  // Twitter timeline
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
FINAL;
    } // javascript

} // Clase UltimasPublicaciones

?>
