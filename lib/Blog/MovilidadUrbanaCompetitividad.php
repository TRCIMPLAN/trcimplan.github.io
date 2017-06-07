<?php
/**
 * TrcIMPLAN Sitio Web - Movilidad Urbana y Competitividad
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
 * Clase MovilidadUrbanaCompetitividad
 */
class MovilidadUrbanaCompetitividad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Movilidad Urbana y Competitividad';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2015-04-28T11:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-urbana-competitividad';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'La movilidad es eje fundamental del desarrollo; al no considerar el transporte como parte de la planeación urbana, se generan graves deficiencias, como dispersión, distanciamiento y desconexión urbana.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MovilidadUrbanaCompetitividad.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase MovilidadUrbanaCompetitividad

?>
