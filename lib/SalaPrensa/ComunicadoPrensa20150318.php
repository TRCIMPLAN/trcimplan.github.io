<?php
/*
 * TrcIMPLAN Sitio Web - DESCRIPCION
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
namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20150318
 */
class ComunicadoPrensa20150318 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Comunicado de Prensa 18.3.15';
     // $this->autor            = 'Autor';
        $this->fecha            = '2015-03-18T17:30';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = '2015-03-18-comunicado-prensa';
        $this->imagen_previa    = '2015-03-18-comunicado-prensa/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'El 18 de marzo de 2015 fue aprobado el decreto de creación del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon, Congreso, Coahuila, Creacion';
        $this->categorias       = array('Sala de Prensa');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'sala-prensa';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Comunicados > Sala de Prensa';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = '2015-03-18-comunicado-prensa/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/SalaPrensa/ComunicadoPrensa20150318.md');
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase ComunicadoPrensa20150318

?>
