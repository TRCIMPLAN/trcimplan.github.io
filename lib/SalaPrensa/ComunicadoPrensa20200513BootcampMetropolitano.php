<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200513BootcampMetropolitano
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
 * Clase ComunicadoPrensa20200513BootcampMetropolitano
 */
class ComunicadoPrensa20200513BootcampMetropolitano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN y su Consejo Visión Metrópoli invitan a participar en el 1er. Bootcamp Metropolitano.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-05-13T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-05-13-comunicado-bootcamp-metropolitano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Gobernanza, Medio Ambiente, Movilidad y Salud Mental, son los temas con los que se trabajará en el Bootcamp.';
        $this->claves                     = 'IMPLAN, Torreon, bootcamp, metropolitano, vision metropoli';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200513BootcampMetropolitano.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20200513BootcampMetropolitano

?>
