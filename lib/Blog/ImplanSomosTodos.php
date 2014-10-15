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
namespace Blog;

/**
 * Clase ImplanSomosTodos
 */
class ImplanSomosTodos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'El IMPLAN somos todos';
     // $this->autor         = 'Autor';
        $this->fecha         = '2014-10-08';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'implan-somos-todos';
        $this->imagen_previa = 'implan-somos-todos/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="titulo/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'Al iniciar este año se puso en marcha las labores del IMPLAN Torreón, con la firme intención de brindar a la ciudad y su zona metropolitana la posibilidad de crecer de manera ordenada...';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Blog');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio    = 'blog';
        $this->nombre_menu   = 'Análisis Publicados';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="implan-somos-todos/imagen.jpg"></span>

<p><i>“La ciudad no es una suma de piedras, sino una suma de individuos.”</i><br>
PhilippeStarck</p>

<p>Al iniciar este año se puso en marcha las labores del Instituto Municipal de Planeación y Competitividad de la ciudad de Torreón, IMPLAN, con la firme intención de brindar a la ciudad y su zona metropolitana la posibilidad de crecer de manera ordenada, pero principalmente la posibilidad de trascender en el tiempo como ciudad y sociedad que mira hacia el futuro.</p>

<p>El primer paso del Instituto se centró en sentar las bases de la planeación al desarrollar un Sistema Metropolitano de Información (SMI), que pudiera ofrecer una radiografía de la situación en la que vive la ciudad y sus Zona Metropolitana.</p>

<p>De igual forma nos dimos a la tarea de ubicar geográficamente toda la información y sus incidencias, Sistema de Información Geográfica (SIG), para tener la capacidad real de ubicar los diagnósticos.</p>

<p>Estos esfuerzos coordinados han dado como resultado la posibilidad de entrar en la etapa fundamental del desarrollo del IMPLAN como lo es, la planeación participativa, ya que con base a la información obtenida con el SMI y el SIG tenemos la posibilidad de convocar a la construcción de un Plan Estratégico Metropolitano, cuyo punto de partida será el taller de “Diagnostico-Pronostico” el cual se llevará acabo el jueves 09 de octubre en las Instalaciones de Tecnológico de Monterrey.</p>

<p>Este taller de participación ciudadana se llevará a cabo con expertos de la materia, miembros del Consejo, representantes de ONG´s, Universidades, Funcionarios de dependencias públicas y ciudadanos teniendo como principal objetivo poner sobre las diferentes mesas de trabajo información para llevar a cabo un diagnóstico de la región.</p>

<p>Los temas o mesas de trabajo se dividen en los siguientes temas:</p>

<ul>
<li>Movilidad</li>
<li>Entorno Urbano</li>
<li>Sustentabilidad</li>
<li>Desarrollo Social</li>
<li>Desarrollo Económico</li>
<li>Buen Gobierno</li>
</ul>

<p>Esta nueva etapa que vive el IMPLAN no es individual ya que a corto plazo se tienen programados más talleres como: “Visión, Estrategia y Objetivos” en una segunda etapa y “Proyectos Estratégicos”, tercera etapa, con los que se busca establecer las líneas de acción y soluciones a los grandes retos que enfrenta Torreón y su Zona Metropolitana para voltear al futuro como una ciudad que busca situarse en las mejores de Coahuila y México.</p>

<p>Inicia una nueva etapa, una etapa de apertura y participación, conoce este proceso de innovación con el que se dirige los destinos de la ciudad, en breve estará disponible en las redes sociales y la página web del IMPLAN, las bases para participar, síguenos, necesitamos de tu cooperación, porque el IMPLAN somos todos.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase ImplanSomosTodos

?>
