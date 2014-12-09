<?php
/*
 * SMIbeta - La urgencia de ser estratégicos
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
 * Clase UrgenciaSerEstrategicos
 */
class UrgenciaSerEstrategicos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'La urgencia de ser estratégicos';
        $this->autor            = 'Arq. Victoria Aranzábal';
        $this->fecha            = '2014-12-09';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'urgencia-ser-estrategicos';
        $this->imagen_previa    = 'urgencia-ser-estrategicos/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="urgencia-ser-estrategicos/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'El futuro tiene cada vez más peso en las decisiones presentes, traer los probables escenarios futuros al presente nos pide innovar, ser más creativos y también nos invita a ser urgentes.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Bienestar');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = $this->cargar_archivo_markdown_extra('lib/Blog/UrgenciaSerEstrategicos.md');
        $this->javascript       = '';
    } // constructor

} // Clase UrgenciaSerEstrategicos

?>
