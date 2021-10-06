<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20211005OctubreUrbano
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
 * Clase ComunicadoPrensa20211005OctubreUrbano
 */
class ComunicadoPrensa20211005OctubreUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón busca crear consciencia ambiental con Octubre Urbano.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2021-10-05T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2021-10-05-octubre-urbano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La conferencia inaugural estará a cargo del Dr. Elkin Velásquez, director regional de ONU-Habitat para América Latina y el Caribe. Se transmitirán conferencias, videos, entrevistas y un panel de discusión sobre estrategias de resiliencia para ciudades semidesérticas.';
        $this->claves                     = 'IMPLAN, Torreon, resilencia, ciudades, ambiental';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20211005OctubreUrbano.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20211005OctubreUrbano

?>
