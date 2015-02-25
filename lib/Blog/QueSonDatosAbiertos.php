<?php
/*
 * TrcIMPLAN Sitio Web - DESCRIPCION
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
 * Clase QueSonDatosAbiertos
 */
class QueSonDatosAbiertos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = '¿Qué son los datos abiertos?';
        $this->autor            = 'Ing. Guillermo Valdés Lozano';
        $this->fecha            = '2015-02-26';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'que-son-datos-abiertos';
        $this->imagen_previa    = 'que-son-datos-abiertos/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="que-son-datos-abiertos/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Los datos abiertos son los datos digitales de carácter público que son accesibles en línea y que también pueden ser usados, reutilizados y redistribuidos por cualquier interesado.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Transparencia', 'Finanzas Públicas', 'Gobierno Digital');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
     // $this->para_compartir   = true;
        // El contenido HTML y el JavaScript
        $this->contenido        = $this->cargar_archivo_markdown_extra('lib/Blog/QueSonDatosAbiertos.md');
     // $this->javascript       = '';
    } // constructor

} // Clase QueSonDatosAbiertos

?>
