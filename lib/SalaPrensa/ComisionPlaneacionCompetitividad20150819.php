<?php
/**
 * TrcIMPLAN Sitio Web - Sala Prensa Comision Planeacion Competitividad 20150819
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
 * Clase ComisionPlaneacionCompetitividad20150819
 */
class ComisionPlaneacionCompetitividad20150819 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Sesión de la Comisión de Planeación y Competitividad';
        $this->fecha                      = '2015-08-19T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-08-19-comision-planeacion-competitividad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El pasado 19 de agosto de 2015 se llevó a cabo la Sesión de la Comisión de Planeación y Competitividad.';
        $this->claves                     = 'IMPLAN, Torreon, Comision, Planeacion';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/SalaPrensa/ComisionPlaneacionCompetitividad20150819.html';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComisionPlaneacionCompetitividad20150819

?>
