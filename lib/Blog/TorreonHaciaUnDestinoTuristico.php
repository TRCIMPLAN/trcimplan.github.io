<?php
/**
 * TrcIMPLAN Sitio Web - TorreonHaciaUnDestinoTuristico
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
 * Clase TorreonHaciaUnDestinoTuristico
 */
class TorreonHaciaUnDestinoTuristico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón: hacia un destino turístico.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2018-10-08T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-hacia-un-destino-turistico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón, conocida también como la “Ciudad de los grandes esfuerzos” fue declarada ciudad el 15 de Septiembre de 1907 y a pesar de que es considerada una de las ciudades más jóvenes del país, se ha convertido en un importante centro industrial, comercial, agrícola y ganadero, impulsado por su población conformada por etnias de todo el mundo.';
        $this->claves                     = 'IMPLAN, Torreon, Turismo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonHaciaUnDestinoTuristico.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array('IMCO','Implan');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TorreonHaciaUnDestinoTuristico

?>
