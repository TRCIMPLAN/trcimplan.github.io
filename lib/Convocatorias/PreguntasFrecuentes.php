<?php
/*
 * SMIbeta - Preguntas Frecuentes
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
namespace PreguntasFrecuentes;

/**
 * Clase PreguntasFrecuentes
 */
class PreguntasFrecuentes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre            = 'Preguntas Frecuentes';
     // $this->autor             = 'Autor';
     // $this->fecha             = '2014-00-00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo           = 'preguntas-frecuentes';
        $this->imagen            = '../imagenes/imagen.jpg';
        $this->imagen_previa     = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion       = 'Las preguntas y respuestas más frecuentes del IMPLAN Torreón.';
        $this->claves            = 'IMPLAN, Torreon';
        $this->categorias        = array('Preguntas Frecuentes');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio        = 'preguntas-frecuentes';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu       = 'Contacto > Preguntas Frecuentes';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = false;
        // El contenido es estructurado en un esquema
        $articulo                = new \Base\SchemaArticle();
        $articulo->description   = $this->descripcion;
        $articulo->image         = $this->imagen;
        $articulo->image_show    = false;
        $articulo->name          = $this->nombre;
        $articulo->author        = $this->autor;
        $articulo->datePublished = $this->fecha;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $articulo;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el contenido desde archivo markdown
        $this->contenido->articleBody = $this->cargar_archivo_markdown_extra('lib/PreguntasFrecuentes/PreguntasFrecuentes.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase PreguntasFrecuentes

?>
