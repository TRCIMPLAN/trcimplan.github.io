<?php
/*
 * SMIbeta - Tasa de inflación y precios en Torreón 2014
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
 * Clase TasaInflacionPreciosTorreon2014
 */
class TasaInflacionPreciosTorreon2014 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Tasa de inflación y precios en Torreón 2014';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2015-02-03T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'tasa-inflacion-precios-torreon-2014';
        $this->imagen          = 'tasa-inflacion-precios-torreon-2014/imagen.jpg';
        $this->imagen_previa   = 'tasa-inflacion-precios-torreon-2014/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'Un incremento en la inflación como el que sufrió Torreón en 2014 no es necesariamente una señal negativa pues puede ser causada por exceso de dinero en la economía.';
        $this->claves          = 'IMPLAN, Torreon, Inflacion';
        $this->categorias      = array('Mercados');
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
        $this->contenido_archivo_markdown = 'lib/Blog/TasaInflacionPreciosTorreon2014.md';
    } // constructor

} // Clase TasaInflacionPreciosTorreon2014

?>
