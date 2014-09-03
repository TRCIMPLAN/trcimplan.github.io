<?php
/*
 * SMIbeta - La Laguna: Metrópoli del Conocimiento
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
 * Clase LaLagunaMetropoliDelConocimiento
 */
class LaLagunaMetropoliDelConocimiento extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-04-28';
        $this->autor         = 'Lic. Eduardo Holguín Zehfuss';
        $this->nombre        = 'La Laguna: Metrópoli del Conocimiento';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'la-laguna-metropoli-del-conocimiento';
        $this->descripcion   = 'Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'la-laguna-metropoli-del-conocimiento/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="la-laguna-metropoli-del-conocimiento/imagen.jpg"></span>

<p>Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento. Elegir la opción de no llevarlo a cabo supondría condenar a la región a mantenerse al margen de las aldeas globales más competitivas, con las consecuencias que ello supone en materia de generación de riqueza social. Los organismos multilaterales que miden la posición mundial de una urbe en los rankings de competitividad le otorgan mejor calificación a aquellas que se esfuerzan e invierten sustantivamente en cultura, educación, patentes, diseño, investigación, innovación y desarrollo. Ello equivale a afirmar que las metrópolis que permanezcan al margen de la economía del conocimiento no serán visualizadas como las más capaces para atraer y retener inversiones y talento. Equivale a aceptar que las empresas de calidad mundial y de gran calado sigan prefiriendo aldeas de otras latitudes y que un gran número de profesionistas y/o emprendedores emigren en búsqueda de empleos y oportunidades.</p>

<p>En tal virtud el Consejo Ciudadano del IMPLAN Torreón ha votado la decisión de convertir al instituto en una institución que contribuya a facilitar que La Laguna transite a la economía del conocimiento. Ello implica impulsar, priorizar y ordenar en el tiempo las acciones públicas y privadas que deberán emprender los diversos sectores que conforman la comunidad lagunera para lograr procesos de innovación en los subsistemas básicos de un modelo de competitividad holístico: buen gobierno, seguridad ciudadana, medio ambiente y entorno urbano, desarrollo económico y desarrollo social.</p>

<p>El accionar público y privado, promovido por el IMPLAN, conducirá a programas, proyectos, iniciativas; y a, por primera vez, la integración de un plan regional: el Gran Plan: Metrópoli del Conocimiento Globalmente Competitiva. Un gran plan que implica la previa concertación, el previo acuerdo con los actores gubernamentales, políticos, sociales y económicos de las ciudades comarcanas. Cabe destacar la obligatoriedad de otorgarle un carácter metropolitano a cualquier plan que pretenda levantar los indicadores locales de competitividad, dado que los rankings globales en la materia nos visualizan como región y no como ciudades aisladas.</p>

<p>También es oportuno mencionar que el adoptar un modelo del conocimiento no equivale a únicamente fomentar la industria de las Tecnologías de la Información y de la Comunicación (TICS). Ello es importante, pero igualmente importante es levantar los indicadores de calidad de vida de la región y mejorar la productividad de los sectores industrial, comercial, agropecuario y minero, mediante esfuerzos e inversiones en Investigación, Desarrollo e Innovación. Actividades productivas de suma importancia en La Laguna que merecen de apoyos estratégicos que incrementes su productividad.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase LaLagunaMetropoliDelConocimiento

?>
