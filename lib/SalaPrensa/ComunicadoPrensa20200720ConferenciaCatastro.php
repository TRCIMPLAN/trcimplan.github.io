<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200720ConferenciaCatastro
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20200720ConferenciaCatastro
 */
class ComunicadoPrensa20200720ConferenciaCatastro extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón presentó la videoconferencia “El Catastro y la Valuación Catastral”.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-07-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-07-20-videoconferencia-catastro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) presentó la videoconferencia “El Catastro y la Valuación Catastral” impartida por la Dra. Sofía Flores Morales y el Físico Rocco Rabilotta, especialistas en Sistemas de Información Urbana.';
        $this->claves                     = 'IMPLAN, Torreon, videoconferencia, catastro, valuacion catastral';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200720ConferenciaCatastro.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200720ConferenciaCatastro

?>
