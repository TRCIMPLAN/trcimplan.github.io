<?php
/*
 * SMIbeta - Mapa
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

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '  <!-- MAPA -->';
        $a[] = '  <section id="mapa">';
        $a[] = '    <div class="row">';
        // Institucional
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">INSTITUCIONAL</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="institucional/vision-mision.html">Visión / Misión</a></li>';
        $a[] = '          <li><a href="institucional/mensaje-director.html">Mensaje del Director</a></li>';
        $a[] = '          <li><a href="institucional/quienes-somos.html">Quienes Somos</a></li>';
        $a[] = '          <li><a href="institucional/estructura-organica.html">Estructura Orgánica</a></li>';
        $a[] = '          <li><a href="institucional/reglamentos.html">Reglamentos</a></li>';
        $a[] = '          <li><a href="institucional/informacion-financiera.html">Información Financiera</a></li>';
        $a[] = '          <li><a href="http://www.icai.org.mx/ipmn/dependencias/impyc" target="_blank">Transparencia</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">SERVICIOS</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="plan-estrategico-metropolitano/introduccion.html">Plan Estratégico Metropolitano</a></li>';
        $a[] = '          <li><a href="smi/introduccion.html">S. Metropolitano de Indicadores</a></li>';
        $a[] = '          <li><a href="sig/introduccion.html">S. Información Geográfica</a></li>';
        $a[] = '          <li><a href="blog/index.html">Análisis Publicados</a></li>';
        $a[] = '          <li><a href="proyectos/introduccion.html">Banco de Proyectos</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
        $a[] = '      <div class="col-md-4">';
        $a[] = '        <h4 class="mapa-encabezado">INTERACCIÓN</h4>';
        $a[] = '        <ul>';
        $a[] = '          <li><a href="contacto/contacto.html">Contacto</a></li>';
        $a[] = '          <li><a href="eventos/index.html">Eventos</a></li>';
        $a[] = '          <li><a href="sala-prensa/index.html">Sala de Prensa</a></li>';
        $a[] = '          <li><a href="contacto/faq.html">Preguntas Frecuentes</a></li>';
        $a[] = '          <li><a href="contacto/quejas-sugerencias.html">Quejas y Sugerencias</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </div>';
        //
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
        return '';
    } // javascript

} // Clase Mapa

?>
