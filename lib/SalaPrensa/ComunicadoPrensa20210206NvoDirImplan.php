<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210206NvoDirImplan
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
 * Clase ComunicadoPrensa20210206NvoDirImplan
 */
class ComunicadoPrensa20210206NvoDirImplan extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Se designa a nuevo Director Ejecutivo del IMPLAN.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-02-06T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-02-06-nuevo-dir-implan';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Sesión Extraordinaria del Consejo Directivo del Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN), se designó al nuevo Director General Ejecutivo del Instituto, siendo el Arq. José Antonio Ramírez Reyes el elegido.';
        $this->claves                     = 'IMPLAN, Torreon, consejo, director';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210206NvoDirImplan.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20210206NvoDirImplan

?>
