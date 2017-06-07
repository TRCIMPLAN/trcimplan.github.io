<?php
/**
 * TrcIMPLAN Sitio Web - IMPLAN busca hacer de La Laguna “Capital de la Robótica”
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
 * Clase LagunaRobotChallange2015Presentacion
 */
class LagunaRobotChallange2015Presentacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN busca hacer de La Laguna “Capital de la Robótica”';
        $this->fecha                      = '2015-11-12T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-11-12-laguna-robot-challange-2015-presentacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Ante empresarios y la comunidad educativa, se dio a conocer el evento “Laguna Robot Challenge”, en el cual niños entre 9 y 14 años, tienen la oportunidad de aprender a diseñar, programar y poner en marcha robots LEGO Mindstorms NXT.';
        $this->claves                     = 'IMPLAN, Torreon, Robotica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/LagunaRobotChallange2015Presentacion.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase LagunaRobotChallange2015Presentacion

?>
