<?php
/*
 * TrcIMPLAN Sitio Web - Mapa
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
 * Clase Mapa
 */
class Mapa {

    public $servicios     = array(
        'Análisis Publicados'            => 'blog/index.html',
        'Indicadores'                    => 'smi/introduccion.html',
        'Información Geográfica'         => 'sig/introduccion.html',
        'Plan Estratégico Metropolitano' => 'plan-estrategico-metropolitano/introduccion.html',
        'Banco de Proyectos'             => 'proyectos/introduccion.html');
    public $institucional = array(
        'Visión / Misión'        => 'institucional/vision-mision.html',
        'Mensaje del Director'   => 'institucional/mensaje-director.html',
        'Quienes Somos'          => 'institucional/quienes-somos.html',
        'Estructura Orgánica'    => 'institucional/estructura-organica.html',
        'Reglamentos'            => 'institucional/reglamentos.html',
        'Información Financiera' => 'institucional/informacion-financiera.html',
        'Transparencia'          => 'http://www.icai.org.mx/ipmn/dependencias/impyc',
        'Consejo Directivo'      => 'consejo-directivo/integrantes.html'); //
    public $interaccion   = array(
        'Eventos'                           => 'eventos/index.html',
        'Sala de Prensa'                    => 'sala-prensa/index.html',
        'Preguntas Frecuentes'              => 'preguntas-frecuentes/preguntas-frecuentes.html',
        'Términos de Uso de la Información' => 'terminos/terminos-informacion.html',
        'Términos de Uso del Sitio Web'     => 'terminos/terminos-sitio.html',
        'Contacto'                          => 'contacto/contacto.html',
        'Quejas y Sugerencias'              => 'http://trcimplan.mx/comentariossugerencias');

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular mapa grande
        $a[] = '  <section id="mapa">';
        $a[] = '    <div class="row">';
        // Servicios
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">SERVICIOS</h4>';
        $a[] = '        <ul>';
        foreach ($this->servicios as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $a[] = "          <li><a href=\"$vinculo\" target=\"_blank\">$etiqueta</a></li>";
            } else {
                $a[] = "          <li><a href=\"$vinculo\">$etiqueta</a></li>";
            }
        }
        $a[] = '        </ul>';
        $a[] = '      </div>';
        // Institucional
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">INSTITUCIONAL</h4>';
        $a[] = '        <ul>';
        foreach ($this->institucional as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $a[] = "          <li><a href=\"$vinculo\" target=\"_blank\">$etiqueta</a></li>";
            } else {
                $a[] = "          <li><a href=\"$vinculo\">$etiqueta</a></li>";
            }
        }
        $a[] = '        </ul>';
        $a[] = '      </div>';
        // Interacción
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">INTERACCIÓN</h4>';
        $a[] = '        <ul>';
        foreach ($this->interaccion as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $a[] = "          <li><a href=\"$vinculo\" target=\"_blank\">$etiqueta</a></li>";
            } else {
                $a[] = "          <li><a href=\"$vinculo\">$etiqueta</a></li>";
            }
        }
        $a[] = '        </ul>';
        $a[] = '      </div>';
        // Cierre
        $a[] = '    </div>';
        $a[] = '  </section>';
        // Acumular mapa chico
        $a[] = '  <section id="mapa-chico">';
        // Servicios
        $a[] = '    <h4 class="mapa-encabezado">SERVICIOS</h4>';
        $b   = array();
        foreach ($this->servicios as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $b[] = "<a href=\"$vinculo\" target=\"_blank\">$etiqueta</a>";
            } else {
                $b[] = "<a href=\"$vinculo\">$etiqueta</a>";
            }
        }
        $a[] = sprintf('    <p>%s</p>', implode(', ', $b));
        // Institucional
        $a[] = '    <h4 class="mapa-encabezado">INSTITUCIONAL</h4>';
        $b   = array();
        foreach ($this->institucional as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $b[] = "<a href=\"$vinculo\" target=\"_blank\">$etiqueta</a>";
            } else {
                $b[] = "<a href=\"$vinculo\">$etiqueta</a>";
            }
        }
        $a[] = sprintf('    <p>%s</p>', implode(', ', $b));
        // Interacción
        $a[] = '    <h4 class="mapa-encabezado">INTERACCIÓN</h4>';
        $b   = array();
        foreach ($this->interaccion as $etiqueta => $vinculo) {
            if (preg_match('/^(http|https):\/\/.+/', $vinculo)) {
                $b[] = "<a href=\"$vinculo\" target=\"_blank\">$etiqueta</a>";
            } else {
                $b[] = "<a href=\"$vinculo\">$etiqueta</a>";
            }
        }
        $a[] = sprintf('    <p>%s</p>', implode(', ', $b));
        // Cierre
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
        return '';
    } // javascript

} // Clase Mapa

?>
