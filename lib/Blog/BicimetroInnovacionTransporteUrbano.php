<?php
/*
 * SMIbeta - Bicimetro: La innovación del Transporte Urbano
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
 * Clase BicimetroInnovacionTransporteUrbano
 */
class BicimetroInnovacionTransporteUrbano extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Bicimetro: La innovación del Transporte Urbano';
        $this->autor            = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha            = '2014-11-19';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'bicimetro-innovacion-transporte-urbano';
        $this->imagen_previa    = 'bicimetro-innovacion-transporte-urbano/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="bicimetro-innovacion-transporte-urbano/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Cada vez son más los ciudadanos que optan por dejar sus carros y se animan a desempolvar las bicicletas guardadas en los garajes y utilizarlas como medio de transporte ya sea habitual o por recreación..';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Blog');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = $this->cargar_archivo_markdown_extra('lib/Blog/BicimetroInnovacionTransporteUrbano.md');
        $this->javascript       = '';
    } // constructor

} // Clase BicimetroInnovacionTransporteUrbano

?>
