<?php
/**
 * TrcIMPLAN Sitio Web - CartografiaGeoestadistica
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
 * Clase CartografiaGeoestadistica
 */
class CartografiaGeoestadistica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cartografía Geoestadística, una herramienta para la planeación.';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2021-05-31T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'cartografia-geoestadistica-mayo-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el Censo de Población y Vivienda del 2020 del INEGI, en Torreón se contabilizaron un total de 12,866 manzanas, aumentando un 17.14% respecto al censo 2010.';
        $this->claves                     = 'IMPLAN, Torreon, censo, poblacion, vivienda, inegi';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CartografiaGeoestadistica.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CartografiaGeoestadistica

?>
