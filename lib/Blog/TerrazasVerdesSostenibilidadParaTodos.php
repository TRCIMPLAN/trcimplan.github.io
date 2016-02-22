<?php
/**
 * Sitio Web - Terrazas Verdes Sostenibilidad Para Todos
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
 * Clase TerrazasVerdesSostenibilidadParaTodos
 */
class TerrazasVerdesSostenibilidadParaTodos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Terrazas Verdes, Sostenibilidad para todos';
        $this->autor           = 'Oscar David Ely Caro';
        $this->fecha           = '2016-02-22T16:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'terrazas-verdes-sostenibilidad-para-todos';
        $this->imagen          = 'terrazas-verdes-sostenibilidad-para-todos/imagen.jpg';
        $this->imagen_previa   = 'terrazas-verdes-sostenibilidad-para-todos/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Debido que Torreón es una ciudad semidesértica de clima extremoso no lluvioso y con pocas extensiones de áreas verdes, es importante tomar en cuenta esta estrategia de espacios verdes que pueden ser aprovechados para pasar un tiempo agradable en familia.';
        $this->claves          = 'IMPLAN, Torreon, Terrazas, Verdes, Sustentable';
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
        $this->contenido_archivo_markdown = 'lib/Blog/TerrazasVerdesSostenibilidadParaTodos.md';
        // Para el Organizador
        $this->categorias      = array('Recursos Naturales');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón', 'La Laguna');
    } // constructor

} // Clase TerrazasVerdesSostenibilidadParaTodos

?>
