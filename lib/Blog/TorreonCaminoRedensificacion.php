<?php
/*
 * SMIbeta - Torreón, camino a la redensificación
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
 * Clase TorreonCaminoRedensificacion
 */
class TorreonCaminoRedensificacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Torreón, camino a la redensificación';
        $this->autor            = 'Arq. Teresita Benítez Saludado';
        $this->fecha            = '2014-08-28T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'torreon-camino-redensificacion';
        $this->imagen_previa    = 'torreon-camino-redensificacion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Torreón no ha aprovechado su territorio e infraestructura contenida, de una manera óptima, debido a su baja densidad de ocupación en su área urbana.';
        $this->claves           = 'IMPLAN, Torreon, Infraestructura';
        $this->categorias       = array('Infraestructura');
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
        $schema->image          = 'torreon-camino-redensificacion/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>Hoy, más que nunca, el aprovechamiento y eficientización de los recursos e infraestructuras de las ciudades deben optimizarse en beneficio de la sociedad que las ocupa.</p>

<p>Una de las situaciones por las que la ciudad de Torreón, y en general, toda la Zona Metropolitana de la Laguna, busca una Planificación acorde a las políticas urbanas actuales y qué a nivel internacional se están promoviendo, se refiere a la expansión de ocupación de los Territorios urbanos y los problemas colaterales que provoca, donde se observa que el ritmo en la dinámica demográfica no corresponde al ritmo de expansión de la mancha urbana que ha crecido 7 veces, en comparación a la población que ha crecido solo 3 veces más desde 1970.</p>

<p>
    <em>Gráfico estadístico de crecimiento poblacional vs ocupación expansiva del territorio:</em><br>
    <img class="img-responsive contenido-imagen" src="torreon-camino-redensificacion/crecimiento.jpg" alt="Crecimiento">
</p>

<p>En el caso de Torreón, ciudad con una historia de apenas 106 años, y una población estimada al año 2014 de 683,914 habitantes (CONAPO), se puede decir que no ha aprovechado su territorio e infraestructura contenida, de una manera óptima, debido a su baja densidad de ocupación en su área urbana.</p>

<p>Esto se refleja en la densidad poblacional general que tenemos, y que, comparativamente con otras ciudades del país es relativamente baja, por ejemplo:</p>

<p>
    <em>Comparativa de densidades en Zonas Metropolitanas y densidad media urbana, según ciudad principal, año 2010:</em><br>
    <img class="img-responsive contenido-imagen" src="torreon-camino-redensificacion/mancha-urbana-densidad-media-urbana.png" alt="Mancha Urbana/Densidad Media Urbana">
</p>

<p>La expansión de la ciudad provoca presión para la cobertura y mantenimiento de la infraestructura y servicios públicos, a su vez que el vaciamiento de amplios sectores de la mancha urbana, repercute en la cohesión comunitaria. Esto se ilustra al revisar que el 40 % de las 312 Áreas Geo estadísticas Básicas (AGEBS) urbanas que delimita el INEGI para el municipio de Torreón sufrieron un decrecimiento de su población entre 2005 y 2010.</p>

<img class="img-responsive contenido-imagen" src="torreon-camino-redensificacion/crecimiento-torreon.jpg" alt="Crecimiento Torreón">

<p>La imagen superior nos ilustra sobre la situación de expansión de mancha urbana y las densificaciones que ocupan los sectores de la ciudad.</p>

<p>El Plan Director de Desarrollo Urbano de Torreón, publicado en el periódico oficial en el mes de febrero del presente año, propone como prioridad, la re densificación del centro de la ciudad, promoviendo a través de políticas de mejoramiento y regeneración los   polígonos de actuación detectados dentro de la zona central de la ciudad, polígonos que cuentan con infraestructura básica, tienen cercanía con equipamientos educativos, recreacionales, comerciales, administrativos, etc., y que tienen capacidad para incrementar y así optimizar en uso la infraestructura albergada en sitio, y no continuar dispersando injustificadamente la ciudad.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase TorreonCaminoRedensificacion

?>
