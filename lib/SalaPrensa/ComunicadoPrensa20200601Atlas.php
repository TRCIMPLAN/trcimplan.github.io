<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200601Atlas
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
 * Clase ComunicadoPrensa20200601Atlas
 */
class ComunicadoPrensa20200601Atlas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN avanza en la realización del Atlas de Riesgos de Torreón.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-06-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-06-01-comunicado-atlas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Dirección de Planeación Urbana Sustentable, perteneciente al Instituto Municipal de Planeación y Competitividad de Torreón (IMPLAN) se encuentra trabajando en la consolidación del Atlas de Riesgos.';
        $this->claves                     = 'IMPLAN, Torreon, atlas, riesgo, planeacion, urbana';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200601Atlas.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20200601Atlas

?>
