<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20210312ConvenioAytoYCoopAlemana
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
 * Clase ComunicadoPrensa20210312ConvenioAytoYCoopAlemana
 */
class ComunicadoPrensa20210312ConvenioAytoYCoopAlemana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Acuerdan convenio el Ayuntamiento de Torreón y la Cooperación Alemana al Desarrollo Sustentable en México (GIZ).';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-03-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-03-12-comunicado-giz';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Ayuntamiento de Torreón y la Cooperación Alemana al Desarrollo Sustentable en México (GIZ) sostuvieron el día de hoy una reunión para dar inicio a la colaboración por medio del Programa Protección del Clima en la Política Urbana de México (CiClim). ';
        $this->claves                     = 'IMPLAN, Torreon, giz, alemana, clima';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20210312ConvenioAytoYCoopAlemana.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20210312ConvenioAytoYCoopAlemana

?>
