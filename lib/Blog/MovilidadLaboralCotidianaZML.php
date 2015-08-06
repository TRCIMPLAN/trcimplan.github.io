<?php
/*
 * SMIbeta - Movilidad laboral cotidiana en la ZML
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
 * Clase MovilidadLaboralCotidianaZML
 */
class MovilidadLaboralCotidianaZML extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Movilidad laboral cotidiana en la ZML';
        $this->autor           = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha           = '2014-08-06T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'movilidad-laboral-cotidiana-zml';
        $this->imagen          = 'movilidad-laboral-cotidiana-zml/imagen.jpg';
        $this->imagen_previa   = 'movilidad-laboral-cotidiana-zml/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'Población ocupada que tiene trabajo en su PROPIO municipio y que tiene trabajo en OTRO Municipio de la Zona Metropolitana de la Laguna.';
        $this->claves          = 'IMPLAN, Torreon, Poblacion, Ocupada, Trabajo, Municipio, La Laguna';
        $this->categorias      = array('Movilidad', 'Infraestructura', 'Vialidad', 'Empleo');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio      = 'blog';
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión
        $this->poner_imagen_en_contenido = false;
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
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html = 'lib/Blog/MovilidadLaboralCotidianaZML.html';
    } // constructor

} // Clase MovilidadLaboralCotidianaZML

?>
