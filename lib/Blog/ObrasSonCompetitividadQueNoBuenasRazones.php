<?php
/**
 * TrcIMPLAN Sitio Web - Obras son competitividad, que no buenas razones
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
 * Clase ObrasSonCompetitividadQueNoBuenasRazones
 */
class ObrasSonCompetitividadQueNoBuenasRazones extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Obras son competitividad, que no buenas razones';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-12-14T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'obras-son-competitividad-que-no-buenas-razones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Complejo Cultural y Deportivo La Jabonera, La Línea Verde, el Metrobús o el Paseo Morelos, son obras que van de acuerdo con las visiones y proyectos del Plan TRC2040 y que buscan ayudar a crear  una ciudad más densificada e incluyente.';
        $this->claves                     = 'IMPLAN, Torreon, Obras, Competitividad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ObrasSonCompetitividadQueNoBuenasRazones.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ObrasSonCompetitividadQueNoBuenasRazones

?>
