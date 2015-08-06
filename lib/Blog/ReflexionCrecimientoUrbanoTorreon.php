<?php
/**
 * TrcIMPLAN - Reflexión del Crecimiento Urbano en Torreón
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
 * Clase ReflexionCrecimientoUrbanoTorreon
 */
class ReflexionCrecimientoUrbanoTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Reflexión del Crecimiento Urbano en Torreón';
        $this->autor           = 'Arq. Ilse Ávila García';
        $this->fecha           = '2015-05-27T16:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo         = 'reflexion-crecimiento-urbano-torreon';
        $this->imagen          = 'reflexion-crecimiento-urbano-torreon/imagen.jpg';
        $this->imagen_previa   = 'reflexion-crecimiento-urbano-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion     = 'La ciudad de Torreón nace a partir de la visión de Sr. Andrés Guillermo Eppen con trazos ordenados, calles anchas, manzanas cuadradas y alineadas con la vía de ferrocarril.';
        $this->claves          = 'IMPLAN, Torreon, Historia, Calles, Manzanas, Trazos, Crecimiento, Ordenado';
        $this->categorias      = array('Infraestructura', 'Vialidad');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
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
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/ReflexionCrecimientoUrbanoTorreon.md';
    } // constructor

} // Clase ReflexionCrecimientoUrbanoTorreon

?>
