<?php
/*
 * SMIbeta - Segunda generación del sitio web
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
 * Clase SegundaGeneracionSitioWeb
 */
class SegundaGeneracionSitioWeb extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Segunda generación del sitio web';
        $this->autor            = 'Ing. Guillermo Valdés';
        $this->fecha            = '2015-01-20';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'segunda-generacion-sitio-web';
        $this->imagen_previa    = 'segunda-generacion-sitio-web/imagen-previa.png';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="segunda-generacion-sitio-web/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'A partir de enero de 2015 se puso en línea el nuevo sitio web del IMPLAN Torreón. Se integraron todos los servicios y se adapta a teléfonos celulares y tablets.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('SMI', 'SIG');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
     // $this->para_compartir   = true;
        // El contenido HTML y el JavaScript
        $this->contenido        = $this->cargar_archivo_markdown_extra('lib/Blog/SegundaGeneracionSitioWeb.md');
        $this->javascript       = '';
    } // constructor

} // Clase SegundaGeneracionSitioWeb

?>
