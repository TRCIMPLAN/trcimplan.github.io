<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20220726ComiteArbitraje
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
 * Clase ComunicadoPrensa20220726ComiteArbitraje
 */
class ComunicadoPrensa20220726ComiteArbitraje extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Avanza actualización del Plan Director de Desarrollo Urbano de Torreón.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2022-07-26T13:50';
        // El nombre del archivo a crear
        $this->archivo                    = '2022-07-26-comite-arbitraje';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Comité de Arbitraje para el Plan Director de Desarrollo Urbano, llevó a cabo cuatro sesiones de trabajo para avanzar en las observaciones que la ciudadanía hizo a la propuesta de dicho instrumento.';
        $this->claves                     = 'IMPLAN, Torreon, comite, arbitraje, plan, director, urbano';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20220726ComiteArbitraje.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20220726ComiteArbitraje

?>
