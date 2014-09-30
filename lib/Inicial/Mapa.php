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
     * Constructor
     */
    public function __construct() {
    } // constructor

/*
                    <div class="col-md-3 inferior-mapa">
                      INSTITUCIONAL
                      <ul>
                        <li><a href="<?php echo home_url('/'); ?>institucional/vision-mision/">VISIÓN / MISIÓN</a></li>
                        <li><a href="<?php echo home_url('/'); ?>institucional/mensaje-del-director/">MENSAJE DEL DIRECTOR</a></li>
                        <li><a href="<?php echo home_url('/'); ?>institucional/quienes-somos/">QUIENES SOMOS</a></li>
                        <li><a href="<?php echo home_url('/'); ?>institucional/estructura-organica/">ESTRUCTURA ORGÁNICA</a></li>
                        <li><a href="http://www.icai.org.mx/ipmn/dependencias/impyc" target="_blank">TRANSPARENCIA</a></li>
                      </ul>
                    </div>
                    <div class="col-md-3 inferior-mapa">
                      SERVICIOS
                      <ul>
                        <li><a href="<?php echo home_url('/'); ?>servicios/reglamentos/">REGLAMENTOS</a></li>
                        <li><a href="<?php echo home_url('/'); ?>servicios/indicadores/">INDICADORES</a></li>
                        <li><a href="<?php echo home_url('/'); ?>servicios/sig/">SISTEMA DE INFORMACIÓN GEOGRÁFICA</a></li>
                        <li><a href="<?php echo home_url('/'); ?>servicios/banco-de-proyectos/">BANCO MUNICIPAL DE PROYECTOS DE INVERSIÓN</a></li>
                        <li><a href="<?php echo home_url('/'); ?>servicios/sesp/">SISTEMA DE EVALUACIÓN Y SEGUIMIENTO DE PROYECTOS</a></li>
                        <li><a href="<?php echo home_url('/'); ?>category/proyectos/">PROYECTOS</a></li>
                      </ul>
                    </div>
                    <div class="col-md-2 inferior-mapa">
                      INTERACCIÓN
                      <ul>
                        <li><a href="<?php echo home_url('/'); ?>category/blog/">BLOG</a></li>
                        <li><a href="<?php echo home_url('/'); ?>category/eventos/">EVENTOS</a></li>
                      </ul>
                    </div>
                    <div class="col-md-2 inferior-mapa">
                      <a href="<?php echo home_url('/'); ?>consejo/">CONSEJO DIRECTIVO</a>
                      <a href="<?php echo home_url('/'); ?>consejo/agenda-consejo-directivo/">AGENDA CONSEJO DIRECTIVO</a>
                      <a href="<?php echo home_url('/'); ?>consejo/agenda-comites-tecnicos/">AGENDA COMITÉS TÉCNICOS</a>
                    </div>
                    <div class="col-md-2 inferior-mapa inferior-mapa-ultimo">
                      <a href="<?php echo home_url('/'); ?>contacto/">CONTACTO</a>
                      <br>
                      <a href="<?php echo home_url('/'); ?>category/prensa/">SALA DE PRENSA</a>
                    </div>
 */

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
        $a[] = '          <li><a href="plan-estrategico-metropolitano/introduccion.html">Plan Estratégico</a></li>';
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
