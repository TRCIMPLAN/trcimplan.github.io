<?php
/*
 * TrcIMPLAN Sitio Web - Términos de Uso del Sitio Web
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
namespace Terminos;

/**
 * Clase TerminosSitio
 */
class TerminosSitio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Términos del Sitio Web';
     // $this->autor           = '';
        $this->fecha           = '2015-01-05T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo         = 'terminos-sitio';
     // $this->imagen          = 'titulo/imagen.jpg';
     // $this->imagen_previa   = 'titulo/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'Términos de Uso del Sitio Web del IMPLAN Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Terminos, Uso, Sitio, Web';
        $this->categorias      = array('Términos');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'terminos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Términos de Uso > Del sitio web';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir  = false;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaArticle();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = false;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaArticle
        $this->contenido       = $schema;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo markdown y convertirlo a HTML
        $this->contenido->articleBody = $this->cargar_archivo_markdown_extra('lib/Terminos/TerminosSitio.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Cargar el archivo markdown y convertirlo a HTML
        $markdown = $this->cargar_archivo_markdown_extra('lib/Terminos/TerminosSitio.md');
        // Si tiene la imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion = "<img src=\"{$this->imagen}\"><br>\n\n{$markdown}";
        } else {
            $this->redifusion = $markdown;
        }
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase TerminosSitio

?>
