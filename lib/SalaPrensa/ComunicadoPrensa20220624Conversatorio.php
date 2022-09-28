<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20220624Conversatorio
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
 * Clase ComunicadoPrensa20220624Conversatorio
 */
class ComunicadoPrensa20220624Conversatorio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'CIESLAG e IMPLAN realizarán conversatorio con egresadas y egresados.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2022-06-24T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2022-06-24-conversatorio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En seguimiento al Plan de Política Industrial y la vinculación universidades y empresas, la Comunidad de Instituciones de Educación Superior de La Laguna (CIESLAG) y el Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) realizarán la segunda edición del conversatorio con egresadas y egresados de educación superior.';
        $this->claves                     = 'IMPLAN, Torreon, cieslag, politica, industrial';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20220624Conversatorio.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20220624Conversatorio

?>
