<?php
/**
 * TrcIMPLAN Sitio Web - InflacionYCrecimientoEconomico
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
 * Clase InflacionYCrecimientoEconomico
 */
class InflacionYCrecimientoEconomico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Inflación y crecimiento económico en México y Torreón';
        $this->autor                      = 'Lic. Carlos Andrés Chairez Ibarra';
        $this->fecha                      = '2022-11-07T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'inflacion-y-crecimiento-economico-nov-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Desde hace algunos meses, la actividad económica mundial está experimentando una desaceleración generalizada y más acentuada de lo previsto, con la inflación más alta en cuatro décadas.';
        $this->claves                     = 'IMPLAN, Torreon, inflacion, crecimiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InflacionYCrecimientoEconomico.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase InflacionYCrecimientoEconomico

?>
