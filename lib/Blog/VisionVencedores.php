<?php
/**
 * TrcIMPLAN Sitio Web - La visión de los vencedores
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
 * Clase VisionVencedores
 */
class VisionVencedores extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La visión de los vencedores';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2014-10-21T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'vision-vencedores';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El regreso de La Laguna a los primeros lugares en el ranking de competitividad nacional demanda de una comunidad que retome los valores y el empuje de “Los Fundadores”, de los hombres y mujeres que lejos de considerarse victimas de las adversidades, de su entorno natural y político, construyeron una de las regiones más prósperas de México.';
        $this->claves                     = 'IMPLAN, Torreon, La Laguna, Competitividad, Nacional, Empleo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/VisionVencedores.html';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Empleo', 'Macroeconomía');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase VisionVencedores

?>
