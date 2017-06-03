<?php
/**
 * TrcIMPLAN Sitio Web - EstructuraYTrazaUrbanaDeTorreon
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * Clase EstructuraYTrazaUrbanaDeTorreon
 */
class EstructuraYTrazaUrbanaDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Estructura y Traza Urbana de Torreón';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2016-01-26T12:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'estructura-y-traza-urbana-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La pérdida de orden en la morfología de Torreón, consecuencia de una falta de planeación urbana, trajo problemas como desconexión vial, cruceros conflictivos, alta necesidad de movilidad motorizada y condiciones viales propicias para la privatización y clausura de los fraccionamientos.';
        $this->claves                     = 'IMPLAN, Torreon, Planeacion, Urbana, Movilidad, Calles, Cuadradas, Rectangulares';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EstructuraYTrazaUrbanaDeTorreon.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Movilidad', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase EstructuraYTrazaUrbanaDeTorreon

?>
