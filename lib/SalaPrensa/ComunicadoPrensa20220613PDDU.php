<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20220613PDDU
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
 * Clase ComunicadoPrensa20220613PDDU
 */
class ComunicadoPrensa20220613PDDU extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Se extiende periodo para recibir observaciones del Plan Director de Desarrollo Urbano de Torreón.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2022-06-13T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2022-06-13-comunicado-pddu';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se extiende el periodo para recibir observaciones por parte de cámaras, colegios, universidades, y asociaciones civiles que competen el Plan Director de Desarrollo Urbano.';
        $this->claves                     = 'IMPLAN, Torreon, plan, desarrollo, urbano, director';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20220613PDDU.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20220613PDDU

?>
