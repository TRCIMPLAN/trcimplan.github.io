<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20201109MultiCityChallenge
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
 * Clase ComunicadoPrensa20201109MultiCityChallenge
 */
class ComunicadoPrensa20201109MultiCityChallenge extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ceremonia de Premiación del Multi - City Challenge México 2020';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2020-11-09T13:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-11-09-premiacion-multicity-challenge-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se lleva a cabo la Ceremonia de Premiación del Multi - City Challenge México 2020, programa promovido por la Universidad de Nueva York (NYU) en coordinación con el IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, multicity challenge, premiacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20201109MultiCityChallenge.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20201109MultiCityChallenge

?>
