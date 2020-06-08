<?php
/**
 * TrcIMPLAN Sitio Web - PuedeEstructuraDeCiudadSerViolenta
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

namespace Blog;

/**
 * Clase PuedeEstructuraDeCiudadSerViolenta
 */
class PuedeEstructuraDeCiudadSerViolenta extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '¿Puede la Estructura de una Ciudad ser Violenta?';
        $this->autor                      = 'Lic. Nina Graciela Hernández Jayme';
        $this->fecha                      = '2020-06-08T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'puede-estructura-de-ciudad-ser-violenta-junio-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La violencia de infraestructura hace referencia a la infraestructura diseñada para agredir al habitante de una ciudad, ya sea en su implementación o en su funcionamiento.';
        $this->claves                     = 'IMPLAN, Torreon, violencia, infraestructura, ciudad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PuedeEstructuraDeCiudadSerViolenta.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PuedeEstructuraDeCiudadSerViolenta

?>
