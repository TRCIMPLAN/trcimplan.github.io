<?php
/**
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase FranciscoIMaderoEjemploRescateEspacioPublico
 */
class FranciscoIMaderoEjemploRescateEspacioPublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Francisco I. Madero: Ejemplo de un rescate de Espacio Público';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2015-04-21T15:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'francisco-i-madero-ejemplo-rescate-espacio-publico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Corredor Peatonal Madero ha motivado el crecimiento comercial y favorecido la conservación sus edificios históricos, en lo que hoy es una calle sólo para transeúntes.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/FranciscoIMaderoEjemploRescateEspacioPublico.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase FranciscoIMaderoEjemploRescateEspacioPublico

?>
