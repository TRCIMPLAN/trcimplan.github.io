<?php
/**
 * TrcIMPLAN - La Cultura: un importante indicador en la calidad de vida
 *
 * Copyright (C) 2015 Guillermo Valdes Lozano
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
 * @package TrcIMPLAN
 */

namespace Blog;

/**
 * Clase LaCulturaUnImportanteIndicadorEnLaCalidadDeVida
 */
class LaCulturaUnImportanteIndicadorEnLaCalidadDeVida extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Cultura: un importante indicador en la calidad de vida';
        $this->autor           = 'Lic. Adriana Vargas Flores';
        $this->fecha           = '2015-09-03T15:22';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-cultura-un-importante-indicador-en-la-calidad-de-vida';
        $this->imagen          = 'la-cultura-un-importante-indicador-en-la-calidad-de-vida/imagen.jpg';
        $this->imagen_previa   = 'la-cultura-un-importante-indicador-en-la-calidad-de-vida/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La Laguna tiene un promedio muy bajo de espacios culturales por cada mil habitantes. A favor, hay un renovado impulso a la cultura gracias a iniciativas independientes, colectivos y programas de gobierno.';
        $this->claves          = 'IMPLAN, Torreon, Espacio, Cultural, Cultura';
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
        $this->contenido_archivo_markdown = 'lib/Blog/LaCulturaUnImportanteIndicadorEnLaCalidadDeVida.md';
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Cultura');
        $this->fuentes         = array('IMPLAN', 'IMCO', 'Instituto Nacional de Bellas Artes (INBA)', 'Instituto Nacional de Antropología e Historia (INAH)');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaCulturaUnImportanteIndicadorEnLaCalidadDeVida

?>
