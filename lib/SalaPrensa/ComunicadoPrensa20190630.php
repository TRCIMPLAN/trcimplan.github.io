<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20190630
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
 * Clase ComunicadoPrensa20190630
 */
class ComunicadoPrensa20190630 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Comunicado 6ta. Sesión de Consejo';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-06-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-06-30-sexta-sesion-consejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante la Sexta Sesión del Consejo Directivo del Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón, se presentó entre otros temas, el Plan de Desarrollo Cultural por parte de Elías Agüero Díaz Durán, Director del Instituto Municipal de Cultura y Educación en Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, sexta sesion, desarrollo cultural';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20190630.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20190630

?>
