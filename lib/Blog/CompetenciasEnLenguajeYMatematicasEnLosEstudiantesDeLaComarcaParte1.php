<?php
/**
 * TrcIMPLAN Sitio Web - Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca, parte 1
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1
 */
class CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca (parte 1)';
        $this->autor           = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha           = '2016-01-12T10:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1';
        $this->imagen          = 'competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1/imagen.jpg';
        $this->imagen_previa   = 'competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Contextualización de la prueba PLANEA, cuestiones metodológicas y la forma de organizar la información, así como los resultados generales de primaria con la intención de ir adentrándonos en los números.';
        $this->claves          = 'IMPLAN, Torreon, PLANEA, Competencias, Lenguaje, Matematicas, Estudiantes';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
        // $this->poner_imagen_en_contenido = false;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1.md';
        // Para el Organizador
        $this->categorias      = array('Educación');
        $this->fuentes         = array('Instituto Nacional para la Evaluación de la Educación (INEE)', 'SEP');
        $this->regiones        = array('Torreón', 'La Laguna');
        /* 'Gómez Palacio', 'Lerdo', 'Matamoros', , 'Coahuila', 'Durango', 'Nacional' */
    } // constructor

} // Clase CompetenciasEnLenguajeYMatematicasEnLosEstudiantesDeLaComarcaParte1

?>
