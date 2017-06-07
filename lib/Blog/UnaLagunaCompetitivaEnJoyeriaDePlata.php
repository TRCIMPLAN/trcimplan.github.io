<?php
/**
 * TrcIMPLAN Sitio Web - Una Laguna Competitiva En Joyeria De Plata
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
 * Clase UnaLagunaCompetitivaEnJoyeriaDePlata
 */
class UnaLagunaCompetitivaEnJoyeriaDePlata extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Una Laguna competitiva en joyería de plata';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2015-11-03T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'una-laguna-competitiva-en-joyeria-de-plata';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La producción de joyería bajo la marca "Plata Laguna" avanza para convertirse en un sector de calidad y competitivo a nivel nacional, con un conjunto de pequeñas empresas exportaoras.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UnaLagunaCompetitivaEnJoyeriaDePlata.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Innovación', 'Mercados');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase UnaLagunaCompetitivaEnJoyeriaDePlata

?>
