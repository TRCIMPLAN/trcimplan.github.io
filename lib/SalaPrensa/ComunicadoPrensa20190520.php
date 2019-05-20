<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20190520
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
 * Clase ComunicadoPrensa20190520
 */
class ComunicadoPrensa20190520 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Realizan Conversatorio entre Academia, Gobierno y Empresas';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-05-20T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2019-05-20-taller-vinculacion-academia-gobierno-empresa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón en conjunto con Rectores de las universidades pertenecientes a la Comunidad de Instituciones de Educación Superior de La Laguna (CIESLAG), así como empresarios laguneros, llevaron a cabo un taller de vinculación para desarrollar y retener el talento regional.';
        $this->claves                     = 'IMPLAN, Torreon, talento regional, vinculacion, universidades';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20190520.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ComunicadoPrensa20190520

?>
