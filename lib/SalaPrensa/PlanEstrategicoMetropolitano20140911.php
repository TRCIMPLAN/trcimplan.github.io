<?php
/*
 * SMIbeta - Plan Estratégico Metropolitano
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
namespace SalaPrensa;

/**
 * Clase PlanEstrategicoMetropolitano20140911
 */
class PlanEstrategicoMetropolitano20140911 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-09-11';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Convocatoria del Plan Estratégico Metropolitano';
        $this->nombre_menu   = 'Comunicados > Sala de Prensa';
        $this->directorio    = 'sala-prensa';
        $this->archivo       = '2014-09-11-plan-estrategico-metropolitano';
        $this->descripcion   = 'El Plan Estratégico Metropolitano es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = '2014-09-11-plan-estrategico-metropolitano/imagen-previa.jpg';
        $this->categorias    = array('Plan Estratégico Metropolitano');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<img class="img-responsive contenido-imagen" src="2014-09-11-plan-estrategico-metropolitano/plan-estrategico-metropolitano.jpg" alt="Convocatoria del Plan Estratégico Metropolitano">

<p>El Plan Estratégico Metropolitano es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.</p>

<p>Este jueves 11 de septiembre, damos inicio a la convocatoria para reunir datos, diagnósticos, ideas, proyectos y cualquier iniciativa que los ciudadanos y las organizaciones, públicas, privadas y sociales, puedan aportar para la integración de este Plan de gran visión.</p>

<p>De manera formal el Plan Estratégico se irá construyendo mediante las aportaciones ciudadanas y concretamente en talleres de trabajo que arrancarán en la primera semana de octubre, para lo cual se estará haciendo una invitación a personas que por su experiencia profesional, empresarial, social y gubernamental puedan aportar en seis mesas temáticas: sustentabilidad, del entorno urbano, movilidad y transporte, del buen gobierno y la coordinación metropolitana, del desarrollo social y de la competitividad económica.</p>

<p>El Consejo Directivo del IMPLAN está organizado mediante Comisiones Técnicas, bajo este esquema los Consejeros del Instituto estarán encabezando los trabajos en las mencionadas mesas temáticas.</p>

<h3>Calendario</h3>

<table class="table table-bordered">
  <tr>
    <th>EVENTO</th>
    <th>TEMA</th>
    <th>FECHA</th>
  </tr>
  <tr>
    <td>Taller 1</td>
    <td>DIAGNÓSTICO - PRONÓSTICO</td>
    <td>2 Octubre 2014</td>
  </tr>
  <tr>
    <td>Taller 2</td>
    <td>PLANEACIÓN (visión, objetivos y estrategias)</td>
    <td>23 Octubre 2014</td>
  </tr>
  <tr>
    <td>Taller 3</td>
    <td>PROYECTOS</td>
    <td>20 Noviembre 2014</td>
  </tr>
  <tr>
    <td>Presentación</td>
    <td>PLAN ESTRATÉGICO DE DESARROLLO</td>
    <td>19 Febrero 2015</td>
  </tr>
</table>

<h3>Formas de Participación</h3>

<ul>
    <li>Trabajos técnicos documentales, investigaciones y publicaciones.</li>
    <li>Recopilación de información “oficial” por dependencia o sector.</li>
    <li>Consulta a expertos con técnicas de focus group o entrevistas.</li>
    <li>Talleres con expertos y organismos.</li>
    <li>Talleres por municipio.</li>
    <li>Consulta ciudadana vía internet.</li>
    <li>Foros de propuestas sobre visión y proyectos.</li>
    <li>Convocatoria para postulación de proyectos con un grupo promotor.</li>
</ul>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase PlanEstrategicoMetropolitano20140911

?>
