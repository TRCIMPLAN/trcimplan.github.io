<?php
/**
 * TrcIMPLAN Sitio Web - TomaProtestaNuevosConsejerosDelImplan20180119
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
 * Clase TomaProtestaNuevosConsejerosDelImplan20180119
 */
class TomaProtestaNuevosConsejerosDelImplan20180119 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Alcalde Jorge Zermeño toma protesta a nuevos consejeros del IMPLAN';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2018-01-19T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'toma-protesta-implan-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón llevó a cabo su primera sesión de Consejo Directivo en el 2018, con la presencia del alcalde Jorge Zermeño Infante, quien tomó protesta a los nuevos consejeros funcionarios y consejeros ciudadanos del organismo.';
        $this->claves                     = 'IMPLAN, Torreon, Protesta';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/TomaProtestaNuevosConsejerosDelImplan20180119.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase TomaProtestaNuevosConsejerosDelImplan20180119

?>
