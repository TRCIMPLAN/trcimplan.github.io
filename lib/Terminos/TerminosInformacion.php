<?php
/*
 * SMIbeta - Términos Información
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
namespace Terminos;

/**
 * Clase TerminosInformacion
 */
class TerminosInformacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Términos de Libre Uso de la Información del IMPLAN Torreón';
     // $this->autor            = 'Autor';
        $this->fecha            = '2015-01-05';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'terminos-informacion';
     // $this->imagen_previa    = 'terminos-informacion/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="terminos-informacion/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Términos de libre uso de la información del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon, Terminos de Libre Uso de la Informacion';
        $this->categorias       = array('Términos');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'terminos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Términos de Uso > De la información';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = false;
        // El contenido HTML y el JavaScript
        $this->contenido        = $this->cargar_archivo_markdown_extra('lib/Terminos/TerminosInformacion.md');
        $this->javascript       = '';
    } // constructor

} // Clase TerminosInformacion

?>
