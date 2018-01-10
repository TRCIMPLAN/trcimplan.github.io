<?php
/**
 * TrcIMPLAN Sitio Web - LagunaY2040UnaOportunidadDeLiderazgoParaLosJovenes
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
 * Clase LagunaY2040UnaOportunidadDeLiderazgoParaLosJovenes
 */
class LagunaY2040UnaOportunidadDeLiderazgoParaLosJovenes extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Laguna Y2040: una oportunidad de liderazgo para los jóvenes';
        $this->autor                      = array('Lic. Alejandra Villarreal Meza', 'Lic. Adriana Vargas Flores');
        $this->fecha                      = '2018-01-10T11:14';
        // El nombre del archivo a crear
        $this->archivo                    = 'laguna-y2040-una-oportunidad-de-liderazgo-para-los-jovenes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Gracias a la amplia respuesta que se obtuvo en 2017, el 2 y 3 de marzo del 2018 se realizará la segunda edición del encuentro “Laguna Y2 040 2018”, se espera la participación de 600 universitarios que propondrán acciones de liderazgo para mejorar la región.';
        $this->claves                     = 'IMPLAN, Torreon, Y2040, Tec Monterrey, Laguna, Jóvenes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LagunaY2040UnaOportunidadDeLiderazgoParaLosJovenes.md';
        // Para el Organizador
        $this->categorias                 = array('Educación', 'Competitividad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LagunaY2040UnaOportunidadDeLiderazgoParaLosJovenes

?>
