<?php
/*
 * SMIbeta - Polígonos de Actuación para un Desarrollo Urbano Integral
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
 * Clase PoligonosActuacionDesarrolloUrbanoIntegral
 */
class PoligonosActuacionDesarrolloUrbanoIntegral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Polígonos de Actuación para un Desarrollo Urbano Integral';
        $this->autor           = 'Arq. Jair Miramontes Chávez';
        $this->fecha           = '2014-10-14T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'poligonos-actuacion-desarrollo-urbano-integral';
        $this->imagen          = 'poligonos-actuacion-desarrollo-urbano-integral/imagen.jpg';
        $this->imagen_previa   = 'poligonos-actuacion-desarrollo-urbano-integral/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'El nuevo modelo de desarrollo urbano mexicano que se impulsa en el país es el de fomentar la consolidación de las ciudades y lograr que sean más competitivas, equilibradas, densas, prósperas, justas, seguras y sustentables.';
        $this->claves          = 'IMPLAN, Torreon';
        $this->categorias      = array('Infraestructura', 'Recursos Naturales', 'Vivienda');
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
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html = 'lib/Blog/PoligonosActuacionDesarrolloUrbanoIntegral.html';
    } // constructor

} // Clase PoligonosActuacionDesarrolloUrbanoIntegral

?>
