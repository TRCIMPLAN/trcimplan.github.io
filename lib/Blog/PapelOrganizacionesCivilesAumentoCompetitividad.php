<?php
/*
 * SMIbeta - El Papel de las Organizaciones Civiles en el aumento de la competitividad
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
 * Clase PapelOrganizacionesCivilesAumentoCompetitividad
 */
class PapelOrganizacionesCivilesAumentoCompetitividad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'El papel de las Organizaciones Civiles en el aumento del bienestar y competitividad';
        $this->autor            = 'Ing. Guillermo Valdés Lozano';
        $this->fecha            = '2014-12-10';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'papel-organizaciones-civiles-aumento-competitividad';
        $this->imagen_previa    = 'papel-organizaciones-civiles-aumento-competitividad/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="papel-organizaciones-civiles-aumento-competitividad/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'En toda ciudad, estado o país debe haber sinergia entre ciudadanos, asociaciones civiles y empresas para definir programas a largo plazo que mejoren la calidad y el bienestar de todos nosotros.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Bienestar', 'Competitividad', 'Educación');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'revisar';
        // El contenido HTML y el JavaScript
        $this->contenido        = $this->cargar_archivo_markdown_extra('lib/Blog/PapelOrganizacionesCivilesAumentoCompetitividad.md');
        $this->javascript       = '';
    } // constructor

} // Clase PapelOrganizacionesCivilesAumentoCompetitividad

?>
