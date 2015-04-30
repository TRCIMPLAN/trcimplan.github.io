<?php
/*
 * SMIbeta - Las generaciones del cambio
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
 * Clase GeneracionesCambio
 */
class GeneracionesCambio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Las generaciones del cambio';
     // $this->autor            = '';
        $this->fecha            = '2015-02-04T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'generaciones-cambio';
        $this->imagen           = 'generaciones-cambio/presentacion-universitarios.jpg';
        $this->imagen_previa    = 'generaciones-cambio/presentacion-universitarios-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Los universitarios están involucrados con su sociedad, con las características de nuestra ciudad y sus necesidades, ya son parte de un entorno que si bien no es el mejor, están conscientes que se puede mejorar.';
        $this->claves           = 'IMPLAN, Torreon, Universidades, Generación, Cambio';
        $this->categorias       = array('Bienestar');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->image_show     = false; // No mostrar la imagen en el contenido
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/Blog/GeneracionesCambio.md');
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase GeneracionesCambio

?>
