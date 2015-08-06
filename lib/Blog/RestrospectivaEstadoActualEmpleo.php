<?php
/*
 * SMIbeta - Retrospectiva y estado actual del empleo en Torreón y la Zona Metropolitana de La Laguna
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
 * Clase RestrospectivaEstadoActualEmpleo
 */
class RestrospectivaEstadoActualEmpleo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Retrospectiva y estado actual del empleo en Torreón y la ZML';
        $this->autor           = 'Lic. Rodrigo González Morales';
        $this->fecha           = '2014-09-26T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'retrospectiva-estado-actual-empleo';
        $this->imagen          = 'retrospectiva-estado-actual-empleo/imagen.jpg';
        $this->imagen_previa   = 'retrospectiva-estado-actual-empleo/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'El empleo es uno de los principales indicadores, que muestra el desempeño económico de una ciudad, región o país. Desde hace 9 años Torreón y la Zona Metropolitana de la Laguna se habían separado a la alza de la media nacional.';
        $this->claves          = 'IMPLAN, Torreon, Empleo';
        $this->categorias      = array('Empleo');
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
        $this->contenido_archivo_html = 'lib/Blog/RestrospectivaEstadoActualEmpleo.html';
    } // constructor

} // Clase RestrospectivaEstadoActualEmpleo

?>
