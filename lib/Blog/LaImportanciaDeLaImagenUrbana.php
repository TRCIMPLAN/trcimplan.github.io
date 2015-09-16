<?php
/**
 * TrcIMPLAN - La Importancia de la Imagen Urbana
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
 * @package
 */

// Namespace
namespace Blog;

/**
 * Clase LaImportanciaDeLaImagenUrbana
 */
class LaImportanciaDeLaImagenUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Importancia de la Imagen Urbana';
        $this->autor           = 'Arq. Teresita Benítez Saludado';
        $this->fecha           = '2015-09-15T20:50';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-importancia-de-la-imagen-urbana';
        $this->imagen          = 'la-importancia-de-la-imagen-urbana/imagen.jpg';
        $this->imagen_previa   = 'la-importancia-de-la-imagen-urbana/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Al darle a la ciudad una buena calidad visual, los usuarios son capaces de desarrollar conductas y comportamientos dignos y creativos. Sin embargo en Torreón el distrito del Centro Histórico sufre un deterioro en su imagen urbana.';
        $this->claves          = 'IMPLAN, Torreon, Imagen, Urbana, Visual, Centro Historico';
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
        $this->contenido_archivo_markdown = 'lib/Blog/LaImportanciaDeLaImagenUrbana.md';
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Infraestructura');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase LaImportanciaDeLaImagenUrbana

?>
