<?php
/*
 * SMIbeta - "DOT" Desarrollo Orientado al Transporte
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
 * Clase DOTDesarrolloOrientadoTransporte
 */
class DOTDesarrolloOrientadoTransporte extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'DOT: Desarrollo Orientado al Transporte';
        $this->autor           = 'Ing. Luis Campos Hinojosa';
        $this->fecha           = '2014-11-05T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'dot-desarrollo-orientado-transporte';
        $this->imagen          = 'dot-desarrollo-orientado-transporte/imagen.png';
        $this->imagen_previa   = 'dot-desarrollo-orientado-transporte/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'En las últimas décadas, han surgido nuevos modelos urbanos que retoman el componente humano como eje principal de la planeación, buscando el equilibrio entre una ciudad altamente competitiva pero con servicios e infraestructura orientada al confort y las necesidades del ser humano.';
        $this->claves          = 'IMPLAN, Torreon, Trasporte';
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
        $this->contenido_archivo_html = 'lib/Blog/DOTDesarrolloOrientadoTransporte.html';
        // Para el Organizador
        $this->categorias      = array('Transporte', 'Infraestructura', 'Vialidad');
        $this->fuentes         = array('IMPLAN', 'Secretaría de Desarrollo Social (SEDESOL)');
        $this->regiones        = array('Torreón', 'Matamoros', 'La Laguna', 'Nacional');
    } // constructor

} // Clase DOTDesarrolloOrientadoTransporte

?>
