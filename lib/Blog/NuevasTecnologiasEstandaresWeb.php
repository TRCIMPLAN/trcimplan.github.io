<?php
/*
 * TrcIMPLAN Sitio Web - Nuevas Tecnologías y Estándares para la Web
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase NuevasTecnologiasEstandaresWeb
 */
class NuevasTecnologiasEstandaresWeb extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Nuevas Tecnologías y Estándares para la Web';
        $this->autor           = 'Ing. Guillermo Valdés Lozano';
        $this->fecha           = '2015-04-07T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'nuevas-tecnologias-estandares-web';
        $this->imagen          = 'nuevas-tecnologias-estandares-web/imagen.png';
        $this->imagen_previa   = 'nuevas-tecnologias-estandares-web/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'Recopilación de las nuevas técnicas que se deben de usar para la elaboración de sitios web institucionales. Con el objetivo de mejorarlas tanto para los humanos como para los robots (motores de búsqueda).';
        $this->claves          = 'IMPLAN, Torreon, Sitios Web, Tecnologías, Responsivo, Esquemas, Web';
        $this->categorias      = array('Innovación', 'Gobierno Digital');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio      = 'blog';
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
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
        $this->contenido_archivo_markdown = 'lib/Blog/NuevasTecnologiasEstandaresWeb.md';
    } // constructor

} // Clase NuevasTecnologiasEstandaresWeb

?>
