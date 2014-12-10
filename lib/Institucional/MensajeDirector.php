<?php
/*
 * SMIbeta - Institucional Mensaje del Director
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
namespace Institucional;

/**
 * Clase MensajeDirector
 */
class MensajeDirector extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha            = '2014-01-05';
     // $this->autor            = 'TrcIMPLAN';
        $this->nombre           = 'Mensaje del Director';
        $this->nombre_menu      = 'Institucional > Mensaje del Director';
        $this->directorio       = 'institucional';
        $this->archivo          = 'mensaje-director';
        $this->descripcion      = 'Mensaje del Director General Ejecutivo del IMPLAN Torreón Lic. Eduardo Olguín.';
        $this->claves           = 'IMPLAN, Torreon, Mensaje, Director';
     // $this->imagen_previa    = '/imagenes/implan.jpg';
        $this->categorias       = array('Institucional');
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="mensaje-director/encabezado.jpg">';
        $this->encabezado_color = '#800400';
        $this->para_compartir   = false;
        $this->contenido        = <<<FINAL
<span class="contenido-imagen-previa"><img src="mensaje-director/eduardo-olguin.jpg" alt="Eduardo Olguín"></span>

<p>Ciudadano, ciudadana:</p>

<p>El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) es un espacio de gobernanza donde ciudadanos y gobierno diseñarán, planearán, programarán el futuro de La Laguna. Donde ciudadanos y gobierno promoverán los proyectos necesarios y suficientes para integrar a La Región de los Grandes Esfuerzos a la Sociedad del Conocimiento y a las metrópolis globalmente competitivas.</p>

<p>La Laguna debe integrarse, lo antes posible, a la Sociedad del Conocimiento y a las aldeas globales que rivalizan con éxito en el esfuerzo que emprenden las economías mundiales por la atracción de talentos e inversiones.</p>

<p>En el Tercer Milenio la Economía del Conocimiento genera los mayores valores agregados y los mayores indicadores de bienestar. Las inversiones y el gasto público y privado destinados a impulsar cadenas productivas relacionadas con el conocimiento producen importantes efectos multiplicadores en cuanto a productividad, generación de empleos de alta calidad, captación de recursos fiscales, amén de construir un entrono socialmente equitativo, capaz de retener con éxito a los profesionistas altamente calificados, evitando de tal manera la fuga de cerebros que tanto daña a una comunidad.</p>

<p>El Consejo del IMPLAN evaluará los proyectos que los laguneros sometan a su consideración, le dará prioridad a aquellos que tengan mayor impacto en los indicadores del conocimiento y la competitividad, negociará las fuentes de recursos públicas y privadas disponibles tanto nacionales como internacionales, y promoverá su ejecución ante los cabildos de los ayuntamiento de las ciudades laguneras.</p>

<p>El Consejo del IMPLAN evaluará y promoverá proyectos que incidan en la seguridad, en el buen gobierno, en el medio ambiente, en el entorno urbano, en la cultura, en el desarrollo económico y en el desarrollo social. Lo hará así entendiendo que la competitividad es un concepto holístico y que el Modelo del Conocimiento exige de un enfoque sistémico.</p>

<p>La labor de los consejeros estará sustentada en el esquema de información denominado Sistema Municipal de Indicadores, mismo que permitirá a la ciudadanía evaluar, en términos cuantitativos, la pertinencia de las políticas publicas y del accionar privado en relación al Modelo del Conocimiento y a la competitividad.</p>

<p>Por su parte el Sistema de Información Geográfica (SIG), de calidad mundial, que en breve montaremos en este sitio web, facilitará el fomento de inversiones, el desarrollo inmobiliario y el ordenamiento territorial.</p>

<p>Los profesionistas, la mayoría jóvenes, que conforman el cuerpo ejecutivo del IMPLAN auxiliarán a los consejeros a sustentar técnicamente sus análisis y la toma de decisiones, alejando a la planeación urbana de la improvisación y la ocurrencia.</p>

<p>Que mejor corolario para éste mensaje que el mencionar la visión del IMPLAN: Que La Laguna transite a una región vanguardista, globalmente competitiva y que sus habitantes logren una vida sana, segura, productiva, en armonía con sus tradiciones, valores culturales y espirituales; es decir, un equilibrio entre el desarrollo humano, la prosperidad económica, individual, colectiva y el respeto de los ecosistemas.</p>

<p style="text-align:right">Eduardo Holguin</p>
FINAL;
    } // constructor

} // Clase MensajeDirector

?>
