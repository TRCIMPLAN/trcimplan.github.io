<?php
/**
 * TrcIMPLAN Sitio Web - Mapas
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
 * Clase Mapas
 */
class Mapas {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Mapa
        $servicios     = new \PaginaInicial\Mapa('SERVICIOS', array(
            'Análisis Publicados'               => 'blog/index.html',
            'Indicadores'                       => 'indicadores-categorias/index.html',
            'Indicadores Básicos de Colonias'   => 'ibc/index.html',
            'Información Geográfica'            => 'sig-mapas-torreon/index.html',
            'Investigaciones'                   => 'investigaciones/index.html',
            'Plan Estratégico Torreón 2040'     => 'pet/introduccion.html'));
        $institucional = new \PaginaInicial\Mapa('INSTITUCIONAL', array(
            'Consejo Directivo'                 => 'consejo-directivo/integrantes.html',
            'Estructura Orgánica'               => 'institucional/estructura-organica.html',
            'Mensaje del Director'              => 'institucional/mensaje-director.html',
            'Modelo Operativo Universal'        => 'institucional/modelo-operativo-universal.html',
            'Quienes Somos'                     => 'autores/index.html',
            'Reglamentos'                       => 'institucional/reglamentos.html',
            'Visión / Misión'                   => 'institucional/vision-mision.html'));
        $interaccion   = new \PaginaInicial\Mapa('INTERACCION', array(
            'Contacto'                          => 'contacto/contacto.html',
            'Preguntas Frecuentes'              => 'preguntas-frecuentes/preguntas-frecuentes.html',
            'Quejas y Sugerencias'              => 'http://goo.gl/forms/1rdX4X128PpMOif73',
            'Sala de Prensa'                    => 'sala-prensa/index.html'));
        $legal         = new \PaginaInicial\Mapa('LEGAL', array(
            'Aviso de Privacidad'               => 'terminos/privacidad.html',
            'Términos de Uso de la Información' => 'terminos/terminos-informacion.html',
            'Términos de Uso del Sitio Web'     => 'terminos/terminos-sitio.html',
            'Transparencia'                     => 'http://www.icai.org.mx:8282/ipo/dependencia.php?dep=178'));
        // Acumular mapa grande
        $a   = array();
        $a[] = '  <section id="mapa">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-sm-6 col-md-3">';
        $a[] = $servicios->grande_html();
        $a[] = '      </div>';
        $a[] = '      <div class="col-sm-6 col-md-3">';
        $a[] = $institucional->grande_html();
        $a[] = '      </div>';
        $a[] = '      <div class="col-sm-6 col-md-3">';
        $a[] = $interaccion->grande_html();
        $a[] = '      </div>';
        $a[] = '      <div class="col-sm-6 col-md-3">';
        $a[] = $legal->grande_html();
        $a[] = '      </div>';
        $a[] = '    </div>';
        $a[] = '  </section>';
        // Acumular mapa chico
        $a[] = '  <section id="mapa-chico">';
        $a[] = $servicios->chico_html();
        $a[] = $institucional->chico_html();
        $a[] = $interaccion->chico_html();
        $a[] = $legal->chico_html();
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

} // Clase Mapas

?>
