<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20190912
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
 * Clase ComunicadoPrensa20190912
 */
class ComunicadoPrensa20190912 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Presentan resultados del Conversatorio entre Rectores, IMPLAN y Empresarios';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-09-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-09-12-resultado-conversatorio-rectores-implan-empresa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Director del Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN), Eduardo Holguín y el Presidente de la Comunidad de Instituciones de Educación Superior de La Laguna (CIESLAG), Luis Arturo Dávila de León; presentaron los resultados del Conversatorio realizado entre Rectores, IMPLAN y Empresarios, evento que se llevó a cabo el pasado mes de mayo del presente año con el objetivo de establecer un diálogo de apertura entre las empresas y universidades locales en torno a su vinculación.';
        $this->claves                     = 'IMPLAN, Torreon, conversatorio, empresas, universidades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20190912.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20190912

?>
