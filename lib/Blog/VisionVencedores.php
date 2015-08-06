<?php
/*
 * SMIbeta - La visión de los vencedores
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
 * Clase VisionVencedores
 */
class VisionVencedores extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La visión de los vencedores';
        $this->autor           = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha           = '2014-10-21T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'vision-vencedores';
        $this->imagen          = 'vision-vencedores/imagen.jpg';
        $this->imagen_previa   = 'vision-vencedores/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'El regreso de La Laguna a los primeros lugares en el ranking de competitividad nacional demanda de una comunidad que retome los valores y el empuje de “Los Fundadores”, de los hombres y mujeres que lejos de considerarse victimas de las adversidades, de su entorno natural y político, construyeron una de las regiones más prósperas de México.';
        $this->claves          = 'IMPLAN, Torreon, La Laguna, Competitividad, Nacional, Empleo';
        $this->categorias      = array('Competitividad', 'Empleo', 'Macroeconomía');
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
        $this->contenido_archivo_html = 'lib/Blog/VisionVencedores.html';
    } // constructor

} // Clase VisionVencedores

?>
