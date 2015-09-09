<?php
/**
 * TrcIMPLAN Central - MODULO RegeneracionUrbanaParaUnaMejorCalidadDeVida
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
 * Clase RegeneracionUrbanaParaUnaMejorCalidadDeVida
 */
class RegeneracionUrbanaParaUnaMejorCalidadDeVida extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Regeneración Urbana para una Mejor Calidad de Vida';
        $this->autor           = 'Arq. Jair Miramontes Chávez';
        $this->fecha           = '2015-09-09T13:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'regeneracion-urbana-para-una-calidad-de-vida';
        $this->imagen          = 'regeneracion-urbana-para-una-calidad-de-vida/imagen.jpg';
        $this->imagen_previa   = 'regeneracion-urbana-para-una-calidad-de-vida/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La regeneración implica recuperar la funcionalidad y la revitalización de la trama urbana del municipio, para lograr el modelo de ciudad sostenible que en la actualidad se quiere alcanzar.';
        $this->claves          = 'IMPLAN, Torreon, Regeneracion, Urbana';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
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
        $this->contenido_archivo_markdown = 'lib/Blog/RegeneracionUrbanaParaUnaMejorCalidadDeVida.md';
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Cultura', 'Infraestructura');
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

} // Clase RegeneracionUrbanaParaUnaMejorCalidadDeVida

?>
