<?php
/**
 * TrcIMPLAN Sitio Web - ElEstadoDeLaEconomiaLagunera
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
 * Clase ElEstadoDeLaEconomiaLagunera
 */
class ElEstadoDeLaEconomiaLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Estado de la Economía Lagunera';
        $this->autor                      = 'Dr. Iván de Luna Aldape';
        $this->fecha                      = '2020-08-18T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-estado-de-la-economia-lagunera-agosto-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El desarrollo consiste en transformar la vida de las personas, no sólo transformar las economías.”
― Joseph E. Stiglitz, Making Globalization Work ';
        $this->claves                     = 'IMPLAN, Torreon, economia, lagunera';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElEstadoDeLaEconomiaLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar','Macroeconomía');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElEstadoDeLaEconomiaLagunera

?>
