<?php
/**
 * TrcIMPLAN Sitio Web - Zonas Metropolitanas de México
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
 * Clase ZonasMetropolitanasMexico
 */
class ZonasMetropolitanasMexico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Zonas Metropolitanas de México';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2015-05-12T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'zonas-metropolitanas-mexico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Un número importante de las ciudades de México rebasan hoy los límites del municipio que originalmente las contuvo y se han extendido sobre las circunscripciones vecinas.';
        $this->claves                     = 'IMPLAN, Torreon, Mexico, Metropolitana, Zonas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ZonasMetropolitanasMexico.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ZonasMetropolitanasMexico

?>
