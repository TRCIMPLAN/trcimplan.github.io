<?php
/*
 * SMIbeta - DESCRIPCION
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
 * Clase ObjetivosMilenio
 */
class ObjetivosMilenio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Zona Metropolitana de La Laguna y los Objetivos del Milenio';
        $this->autor           = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha           = '2015-01-27T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'objetivos-milenio';
        $this->imagen          = 'objetivos-milenio/imagen.jpg';
        $this->imagen_previa   = 'objetivos-milenio/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'En septiembre del año 2000 fue celebrada la Cumbre del Milenio de las Naciones Unidas, durante la cual 147 jefes de estado firman y 189 países aprueban uno de los retos consensuados más ambicioso de las últimas décadas.';
        $this->claves          = 'IMPLAN, Torreon, Cumbre, Milenio, Naciones Unidas, ONU, Retos, Objetivos';
        $this->categorias      = array('Bienestar', 'Educación', 'Salud', 'Recursos Naturales');
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
        $this->contenido_archivo_markdown = 'lib/Blog/ObjetivosMilenio.md';
    } // constructor

} // Clase ObjetivosMilenio

?>
