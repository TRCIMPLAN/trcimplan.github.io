<?php
/**
 * TrcIMPLAN Sitio Web - LaTransformacionDeLaPeriferiaUrbanaDeTorreon
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
 * Clase LaTransformacionDeLaPeriferiaUrbanaDeTorreon
 */
class LaTransformacionDeLaPeriferiaUrbanaDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Transformación de la Periferia Urbana de Torreón';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2019-12-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-transformacion-de-la-periferia-urbana-de-torreon-dic2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La crisis económica de 1994 dejó un rezago habitacional importante a nivel nacional. Fue durante los sexenios del 2000-2012 en que se crearon las Políticas Nacionales de Desarrollo Urbano y Habitacional que buscaron impulsar el desarrollo de vivienda social nueva por medio de apoyos financieros.';
        $this->claves                     = 'IMPLAN, Torreon, periferia, habitacional';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaTransformacionDeLaPeriferiaUrbanaDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda', 'Población');
        $this->fuentes                    = array('Coneval','ONU-HABITAT');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaTransformacionDeLaPeriferiaUrbanaDeTorreon

?>
