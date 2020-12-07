<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20201203GanadoresManosALaCebra
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
 * Clase ComunicadoPrensa20201203GanadoresManosALaCebra
 */
class ComunicadoPrensa20201203GanadoresManosALaCebra extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reconocen a ganadores de la convocatoria “Manos a la Cebra”';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-12-03T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-12-03-ganadores-manos-a-la-cebra';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) en coordinación con el R. Ayuntamiento de Torreón, a través de la Dirección General de Vialidad y Movilidad Urbana, la Dirección de Movilidad No Motorizada, la Dirección de la Juventud, la Dirección General de Cultura de Torreón y la Dirección del Centro Histórico de Torreón, entregaron los premios a los equipos ganadores de la convocatoria “Manos a la Cebra” 2ª. edición.';
        $this->claves                     = 'IMPLAN, Torreon, Manos a la cebra, convocatoria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20201203GanadoresManosALaCebra.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20201203GanadoresManosALaCebra

?>
