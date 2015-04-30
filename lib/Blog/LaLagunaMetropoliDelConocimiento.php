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
        // Título, autor y fecha
        $this->nombre           = 'La Laguna: Metrópoli del Conocimiento';
        $this->autor            = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha            = '2014-04-28T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'la-laguna-metropoli-del-conocimiento';
        $this->imagen           = 'la-laguna-metropoli-del-conocimiento/imagen.jpg';
        $this->imagen_previa    = 'la-laguna-metropoli-del-conocimiento/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento.';
        $this->claves           = 'IMPLAN, Torreon, Conocimiento, Tecnologias, Informacion, Comunicacion, TICs';
        $this->categorias       = array('Innovación', 'Empresas');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento. Elegir la opción de no llevarlo a cabo supondría condenar a la región a mantenerse al margen de las aldeas globales más competitivas, con las consecuencias que ello supone en materia de generación de riqueza social. Los organismos multilaterales que miden la posición mundial de una urbe en los rankings de competitividad le otorgan mejor calificación a aquellas que se esfuerzan e invierten sustantivamente en cultura, educación, patentes, diseño, investigación, innovación y desarrollo. Ello equivale a afirmar que las metrópolis que permanezcan al margen de la economía del conocimiento no serán visualizadas como las más capaces para atraer y retener inversiones y talento. Equivale a aceptar que las empresas de calidad mundial y de gran calado sigan prefiriendo aldeas de otras latitudes y que un gran número de profesionistas y/o emprendedores emigren en búsqueda de empleos y oportunidades.</p>

<p>En tal virtud el Consejo Ciudadano del IMPLAN Torreón ha votado la decisión de convertir al instituto en una institución que contribuya a facilitar que La Laguna transite a la economía del conocimiento. Ello implica impulsar, priorizar y ordenar en el tiempo las acciones públicas y privadas que deberán emprender los diversos sectores que conforman la comunidad lagunera para lograr procesos de innovación en los subsistemas básicos de un modelo de competitividad holístico: buen gobierno, seguridad ciudadana, medio ambiente y entorno urbano, desarrollo económico y desarrollo social.</p>

<p>El accionar público y privado, promovido por el IMPLAN, conducirá a programas, proyectos, iniciativas; y a, por primera vez, la integración de un plan regional: el Gran Plan: Metrópoli del Conocimiento Globalmente Competitiva. Un gran plan que implica la previa concertación, el previo acuerdo con los actores gubernamentales, políticos, sociales y económicos de las ciudades comarcanas. Cabe destacar la obligatoriedad de otorgarle un carácter metropolitano a cualquier plan que pretenda levantar los indicadores locales de competitividad, dado que los rankings globales en la materia nos visualizan como región y no como ciudades aisladas.</p>

<p>También es oportuno mencionar que el adoptar un modelo del conocimiento no equivale a únicamente fomentar la industria de las Tecnologías de la Información y de la Comunicación (TICS). Ello es importante, pero igualmente importante es levantar los indicadores de calidad de vida de la región y mejorar la productividad de los sectores industrial, comercial, agropecuario y minero, mediante esfuerzos e inversiones en Investigación, Desarrollo e Innovación. Actividades productivas de suma importancia en La Laguna que merecen de apoyos estratégicos que incrementes su productividad.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase LaLagunaMetropoliDelConocimiento

?>
