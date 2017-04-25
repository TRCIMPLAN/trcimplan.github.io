<?php
/**
 * TrcIMPLAN Sitio Web - El consumo local: alternativa para una ciudad competitiva
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
 * Clase ConsumoLocalAlternativaCiudadCompetitiva
 */
class ConsumoLocalAlternativaCiudadCompetitiva extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El consumo local: alternativa para una ciudad competitiva';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2015-05-13T09:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'consumo-local-alternativa-ciudad-competitiva';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El consumo local es una herramienta coherente para el desarrollo equitativo de la sociedad; en el cual, sabemos de donde vienen los materiales, sabemos quienes son las personas que lo fabrican y quienes lo venden.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/ConsumoLocalAlternativaCiudadCompetitiva.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ConsumoLocalAlternativaCiudadCompetitiva

?>
