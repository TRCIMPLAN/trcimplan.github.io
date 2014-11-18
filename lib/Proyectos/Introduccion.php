<?php
/*
 * SMIbeta - Proyectos Introducción
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
namespace Proyectos;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-01';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Banco Municipal de Proyectos';
        $this->nombre_menu   = 'Banco de Proyectos > Introducción';
        $this->directorio    = 'proyectos';
        $this->archivo       = 'introduccion';
        $this->descripcion   = 'El BMPI es un instrumento dinámico de gestión pública, orientado a consolidar una cultura municipal de formulación (preparación), planeación, seguimiento y evaluación de programas y proyectos de inversión, por medio de sus componentes y funciones.';
        $this->claves        = 'IMPLAN, Torreon, Banco, Proyectos, BMPI';
     // $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('Proyectos');
        $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="introduccion/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<p>El Instituto Municipal de Planeación y Competitividad, a través de la Dirección de Proyectos Estratégicos, tiene como objetivos gestionar, evaluar y dar seguimiento a los proyectos derivados del Plan Estratégico de Ciudad del IMPLAN, así como promover la participación ciudadana, a través del acompañamiento y mejora de aquellos ideas y proyectos formulados por la sociedad. Para aportar al logro de este objetivo, el IMPLAN desarrolla dos instrumentos que apoyen los procesos de planeación, inversión y ejecución de los proyectos promoviendo la eficiencia, eficacia y equidad de los mismos.</p>

<p><img src="introduccion/logo-bmpi.png" alt="BMPI"></p>

<p><strong>¿Qué es el BMPI?</strong> El BMPI es un instrumento dinámico de gestión pública, orientado a consolidar una cultura municipal de formulación (preparación), planeación, seguimiento y evaluación de programas y proyectos de inversión, por medio de sus componentes y funciones.</p>

<p>¿Qué hace?</p>

<ul>
  <li>Interopera con el Sistema de Evaluación y Seguimiento de Proyectos.</li>
  <li>Recopila y clasifica la información referente a cada proyecto.</li>
  <li>Procesar la información en entregables útiles para la toma de decisiones como estadísticas, reportes, mapas, cédulas de evaluación, etc. Resguarda la información a lo largo del tiempo (fomenta la memoria institucional).</li>
</ul>

<p><img src="introduccion/logo-sesp.png" alt="SESP"></p>

<p><strong>¿Qué es el SESP?</strong> El Sistema de Evaluación y Seguimiento de Proyectos es un conjunto articulado de métodos y herramientas que facilitan la formulación, priorización, evaluación y seguimiento de los proyectos de inversión. Aportando los criterios al BMPI para la clasificación, recopilación e inventariado de proyectos.</p>

<p>¿Qué hace?</p>

<ul>
  <li>Evalúa la viabilidad de los proyectos. (económica, social, ambiental, técnica)</li>
  <li>Determina la prioridad en base a los planes de desarrollo vigentes.</li>
  <li>Evalúa el desempeño y el impacto de los proyectos.</li>
  <li>Monitorea el estado de los proyectos.</li>
</ul>

<h3>Proyectos Ciudadanos</h3>

<p>El Instituto Municipal de Planeación Estratégica y Competitividad abre la convocatoria a proyectos ciudadanos, que permita la coordinación de los diversos actores sociales, sinergizando esfuerzos y gestionando recursos para la efectiva implementación de los proyectos ciudadanos de calidad y de impacto positivo en la calidad de vida de los Laguneros. Con esto en mente, el Banco Municipal de Proyectos se convierte en un espacio virtual permanente para la recepción de ideas y proyectos ciudadanos que sean susceptibles de inversión municipal, mediante la siguiente mecánica:</p>

<h3>Registro de Proyectos Ciudadanos (Próximamente)</h3>

<ol>
  <li>Descarga la ficha EBIL (Ficha de Estadística Básica de Inversión Local) en el caso de que sea un proyecto desarrollado, sino descarga la ficha IP (Idea de Proyecto).</li>
  <li>Llénalas antes de entrar al Banco Municipal de Proyectos de Inversión.</li>
  <li>Ingresa al BMPI con tu usuario, si no tienes una generala en el acceso principal al BMPI.</li>
  <li>Ingresa y sigue las instrucciones.</li>
  <li>Una vez registrado el proyecto, espera respuesta del sistema.</li>
</ol>

<p><img class="img-responsive" src="introduccion/proyecto-ciudadano-infografia.png" alt="Infografía Proyecto Ciudadano"></p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Introduccion

?>
