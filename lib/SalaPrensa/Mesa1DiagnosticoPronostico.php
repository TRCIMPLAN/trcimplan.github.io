<?php
/*
 * SMIbeta - DESCRIPCION
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
 * Clase Mesa1DiagnosticoPronostico
 */
class Mesa1DiagnosticoPronostico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Plan Estratégico Metropolitano, Mesa 1: Diagnóstico - Pronóstico';
     // $this->autor         = 'Autor';
        $this->fecha         = '2014-10-16';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = '2014-10-16-mesa-1-diagnostico-pronostico';
        $this->imagen_previa = '2014-10-16-mesa-1-diagnostico-pronostico/imagen-previa.jpg';
        $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="2014-10-16-mesa-1-diagnostico-pronostico/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'El pasado 9 de octubre de 2014 comenzaron formalmente los trabajos para la construcción del Plan Estratégico Metropolitano, un esfuerzo coparticipativo para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Sala de Prensa');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio    = 'sala-prensa';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu   = 'Comunicados > Sala de Prensa';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<h3>Mesa 1: Diagnóstico - Pronóstico</h3>

<p>El pasado 9 de octubre de 2014 comenzaron formalmente los trabajos para la construcción del Plan Estratégico Metropolitano, un esfuerzo coparticipativo para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.</p>

<img class="img-responsive contenido-imagen" src="2014-10-16-mesa-1-diagnostico-pronostico/foto-panoramica-previa.jpg" alt="Foto Panoramica">

<p>En dicho ejercicio de diagnóstico del estado que guarda la Zona Metropolitana  de La Laguna en temas como Gobierno y Coordinación Metropolitana, Desarrollo Social, Desarrollo Económico e Innovación, Sustentabilidad, Movilidad y Entorno Urbano participaron 146 expertos de los cuatro municipios metropolitanos entre académicos, representantes de la sociedad civil organizada, empresarios, servidores públicos y ciudadanos.</p>

<p>Agradecemos su participación y contamos con su participación para la conformación de la visión,  objetivos estratégicos y proyectos que conjugarán los esfuerzos de todos quienes construimos cotidianamente nuestra ciudad.</p>

<h3>Diagnóstico Básico de la ZML</h3>

<p>Le invitamos a descargar y leer el <a href="http://trcimplan.gob.mx/plan-estrategico-metropolitano/plan-estrategico-metropolitano-diagnostico-basico-zml.pdf" target="_blank">Diagnóstico Básico de la Zona Metropolitana de La Laguna</a>, que es una presentación como archivo PDF de 1 MB con un gran cantidad de información para los Comités Técnicos.</p>

<a href="http://trcimplan.gob.mx/plan-estrategico-metropolitano/plan-estrategico-metropolitano-diagnostico-basico-zml.pdf" target="_blank"><img class="img-responsive contenido-imagen" src="2014-10-16-mesa-1-diagnostico-pronostico/diagnostico-basico.jpg" alt="Diagnostico Basico"></a>

<h3>Participación Ciudadana</h3>

<p>La convocatoria está abierta para que Ciudadanos e Instituciones tengan un formulario en Internet dónde puedan entregar sus proyectos y aportaciones. Sólo se necesita tener una dirección de correo electrónico válida e ingresar a <a href="http://trcimplan.mx/plan" target="_blank">http://trcimplan.mx/plan</a> para hacer llegar su propuesta.</p>

<img class="img-responsive contenido-imagen" src="2014-10-16-mesa-1-diagnostico-pronostico/foto-movilidad.jpg" alt="Comite Tecnico Movilidad y Transporte">

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Mesa1DiagnosticoPronostico

?>
