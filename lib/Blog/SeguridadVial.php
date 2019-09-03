<?php
/**
 * TrcIMPLAN Sitio Web - SeguridadVial
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
 * Clase SeguridadVial
 */
class SeguridadVial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Seguridad Vial: ninguna vida debe perderse por el simple hecho de trasladarnos';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2019-09-02T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'seguridad-vial-sep2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El pasado 17 de agosto tuvo lugar la celebración del día del peatón, fecha instaurada por la Organización Mundial de la Salud (OMS) en conmemoración del primer incidente de tráfico que dejara una víctima mortal registrado en 1897 en Londres, Inglaterra; para recordar la importancia de la seguridad vial y promover el respeto entre los distintos usuarios de las vías.';
        $this->claves                     = 'IMPLAN, Torreon, peaton, vialidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SeguridadVial.md';
        // Para el Organizador
        $this->categorias                 = array('Vialidad');
        $this->fuentes                    = array('Centrico', 'OMS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SeguridadVial

?>
