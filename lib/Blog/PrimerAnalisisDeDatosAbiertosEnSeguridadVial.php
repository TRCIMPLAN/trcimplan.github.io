<?php
/**
 * Sitio Web - Primer Análisis de Datos Abiertos en Seguridad Vial
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
 * Clase PrimerAnalisisDeDatosAbiertosEnSeguridadVial
 */
class PrimerAnalisisDeDatosAbiertosEnSeguridadVial extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Primer Análisis de Datos Abiertos en Seguridad Vial';
        $this->autor           = 'Ing. Guillermo Valdés Lozano';
        $this->fecha           = '2016-03-29T09:20';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'primer-analisis-de-datos-abiertos-en-seguridad-vial';
        $this->imagen          = 'primer-analisis-de-datos-abiertos-en-seguridad-vial/imagen.jpg';
        $this->imagen_previa   = 'primer-analisis-de-datos-abiertos-en-seguridad-vial/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'El año pasado la Dirección de Tránsito y Vialidad de Torreón modernizó la forma de llevar su registro de eventos sobre seguridad vial, al cambiar del formato físico al digital.';
        $this->claves          = 'IMPLAN, Torreon, Transito, Accidentes, Eventos, Viales, Datos Abiertos, Gobierno Abierto';
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
        $this->contenido_archivo_markdown = 'lib/Blog/PrimerAnalisisDeDatosAbiertosEnSeguridadVial.md';
        // Para el Organizador
        $this->categorias      = array('Gobierno Digital', 'Movilidad', 'Vialidad');
        $this->fuentes         = array('Ayuntamiento de Torreón');
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase PrimerAnalisisDeDatosAbiertosEnSeguridadVial

?>
