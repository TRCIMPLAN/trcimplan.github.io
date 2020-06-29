<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200629Bootcamp
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
 * Clase ComunicadoPrensa20200629Bootcamp
 */
class ComunicadoPrensa20200629Bootcamp extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Culmina el 1er. Bootcamp Metropolitano organizado por el IMPLAN y su Consejo Visión Metrópoli.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-06-29T01:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-06-29-comunicado-bootcamp';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) a través de su Consejo Juvenil “Visión Metrópoli” llevaron a cabo el 1er. Bootcamp Metropolitano durante los meses de mayo y junio, con la participación de 6 equipos de jóvenes, mismos que residen en la Zona Metropolitana de La Laguna, ZML.';
        $this->claves                     = 'IMPLAN, Torreon, bootcamp, vision, metropoli';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200629Bootcamp.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200629Bootcamp

?>
