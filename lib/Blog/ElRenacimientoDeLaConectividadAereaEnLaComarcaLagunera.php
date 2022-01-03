<?php
/**
 * TrcIMPLAN Sitio Web - ElRenacimientoDeLaConectividadAereaEnLaComarcaLagunera
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
 * Clase ElRenacimientoDeLaConectividadAereaEnLaComarcaLagunera
 */
class ElRenacimientoDeLaConectividadAereaEnLaComarcaLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Renacimiento de la Conectividad Aérea en la Comarca Lagunera';
        $this->autor                      = 'Gilberto Eduardo Rios Buendia';
        $this->fecha                      = '2022-01-03T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'renacimiento-de-la-conectividad-aerea-en-comarca-lagunera-enero-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Aeropuerto Internacional de Torreón “Francisco Sarabia”, es considerado como el más importante del Estado de Coahuila, es el único en el estado que cuenta con vuelos comerciales internacionales, así como también con vuelos nacionales y de carga, la ubicación privilegiada, así como la cercanía con Estados Unidos, está convirtiendo a la región en un importante centro estratégico para el transporte de pasajeros, tanto en el aspecto comercial, como el ejecutivo, así como para la aviación carguera, la ubicación de una de las cuencas lecheras más importantes de Latinoamérica, así como la pujante industria metalúrgica, textil, y agrícola, hacen de la región un atractivo a nivel nacional.';
        $this->claves                     = 'IMPLAN, Torreon, aeropuerto, sarabia, vuelos, transporte';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElRenacimientoDeLaConectividadAereaEnLaComarcaLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Competitividad');
        $this->fuentes                    = array('SCT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElRenacimientoDeLaConectividadAereaEnLaComarcaLagunera

?>
