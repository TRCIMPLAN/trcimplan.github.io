<?php
/*
 * TrcIMPLAN - DESCRIPCION
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
 * Clase FranciscoIMaderoEjemploRescateEspacioPublico
 */
class FranciscoIMaderoEjemploRescateEspacioPublico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Francisco I. Madero: Ejemplo de un rescate de Espacio Público';
        $this->autor            = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha            = '2015-04-21T15:25';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'francisco-i-madero-ejemplo-rescate-espacio-publico';
        $this->imagen           = 'francisco-i-madero-ejemplo-rescate-espacio-publico/imagen.jpg';
        $this->imagen_previa    = 'francisco-i-madero-ejemplo-rescate-espacio-publico/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'El Corredor Peatonal Madero ha motivado el crecimiento comercial y favorecido la conservación sus edificios históricos, en lo que hoy es una calle sólo para transeúntes.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Movilidad', 'Vialidad');
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
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/Blog/FranciscoIMaderoEjemploRescateEspacioPublico.md');
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como se repite en el contenido la imagen previa, se omite
        $this->redifusion       = $schema->articleBody;
    } // constructor

} // Clase FranciscoIMaderoEjemploRescateEspacioPublico

?>
