<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20181129
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
 * Clase ComunicadoPrensa20181129
 */
class ComunicadoPrensa20181129 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Posición de La Laguna en el Índice de Competitividad Urbana 2018';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2018-11-29T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2018-11-29-imco-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Índice de Competitividad Urbana (ICU) 2018, elaborado por el Instituto Mexicano para la Competitividad (IMCO), mide la capacidad de las ciudades para atraer y retener inversión. El estudio se hace cada dos años y en su versión 2018, utiliza información de 2016.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20181129.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad');
        $this->fuentes                    = array('IMCO','IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20181129

?>
