<?php
/**
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
namespace Proyectos;

/**
 * Clase CalleCompleta
 */
class CalleCompleta extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Programa Calle Completa';
     // $this->autor            = '';
        $this->fecha            = '2015-05-25T12:20';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'calle-completa';
        $this->imagen           = 'calle-completa/imagen.jpg';
        $this->imagen_previa    = 'calle-completa/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Calle Completa es una calle que incluye al peatón y a todos los medios de transporte (ciclistas, motociclistas, autobuses, automovilistas), de todas las edades y con todo tipo de habilidades motoras.';
        $this->claves           = 'IMPLAN, Torreon, Calle, Completa';
        $this->categorias       = array('Movilidad', 'Vialidad');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'proyectos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Proyectos Estratégicos > Calle Completa';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/Proyectos/CalleCompleta.md');
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, si tiene una imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $schema->articleBody);
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase CalleCompleta

?>
