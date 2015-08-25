<?php
/*
 * SMIbeta - La industria metalmecánica y La Laguna
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
 * Clase IndustriaMetalmecanicaLaLaguna
 */
class IndustriaMetalmecanicaLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La industria metalmecánica y La Laguna';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2014-11-12T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'industrial-metalmecanica-la-laguna';
        $this->imagen          = 'industrial-metalmecanica-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'industrial-metalmecanica-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'A diferencia del año 2013 cuando la industria metalmecánica creció 4% a nivel nacional, la directora de Fabetch México pronosticó en Julio un crecimiento de 8% para el presente año.';
        $this->claves          = 'IMPLAN, Torreon, Industria, Metalmecánica, Empleo';
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
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html = 'lib/Blog/IndustriaMetalmecanicaLaLaguna.html';
        // Para el Organizador
        $this->categorias      = array('Empresas', 'Empleo');
        $this->fuentes         = array('Secretaría de Economía', 'INEGI');
        $this->regiones        = array('Torreón', 'Gómez Palacio');
    } // constructor

} // Clase IndustriaMetalmecanicaLaLaguna

?>
