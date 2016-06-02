<?php
/**
 * Sitio Web - Menos tiempo en transporte, mayor calidad de vida
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
 * Clase MenosTiempoEnTransporteMayorCalidadDeVida
 */
class MenosTiempoEnTransporteMayorCalidadDeVida extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Menos tiempo en transporte, mayor calidad de vida';
        $this->autor           = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha           = '2016-06-02T13:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'menos-tiempo-en-transporte-mayor-calidad-de-vida';
        $this->imagen          = 'menos-tiempo-en-transporte-mayor-calidad-de-vida/imagen.jpg';
        $this->imagen_previa   = 'menos-tiempo-en-transporte-mayor-calidad-de-vida/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La relación entre transporte público efectivo y competitividad es directa, pero para que la competitividad se traduzca en calidad de vida se debe reducir el tiempo de traslado de estudiantes y trabajadores. Con la llegada del Metrobus se podría lograr que el 70% de la población trabajadora invierta menos de media hora en cada traslado.';
        $this->claves          = 'IMPLAN, Torreon';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
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
        $this->contenido_archivo_markdown = 'lib/Blog/MenosTiempoEnTransporteMayorCalidadDeVida.md';
        // Para el Organizador
        $this->categorias      = array('Movilidad', 'Vialidad');
        $this->fuentes         = array('INEGI');
        $this->regiones        = array('Torreón', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MenosTiempoEnTransporteMayorCalidadDeVida

?>
