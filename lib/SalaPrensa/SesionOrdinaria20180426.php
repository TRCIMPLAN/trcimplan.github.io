<?php
/**
 * TrcIMPLAN Sitio Web - SesionOrdinaria20180426
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
 * Clase SesionOrdinaria20180426
 */
class SesionOrdinaria20180426 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plan de Movilidad Activa busca un Torreón más humano y sustentable';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2018-04-26T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2018-04-26-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Durante la Cuarta Sesión de Consejo Directivo celebrada este jueves 26 de abril, el Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón, realizó la presentación del Plan de Movilidad Activa, en conjunto con la dirección de Movilidad No Motorizada.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion ordinaria, Movilidad activa, no motorizada';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20180426.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase SesionOrdinaria20180426

?>
