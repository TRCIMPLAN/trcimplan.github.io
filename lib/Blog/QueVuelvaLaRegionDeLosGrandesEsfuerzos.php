<?php
/**
 * TrcIMPLAN Sitio Web - Que vuelva la región de los grandes esfuerzos
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
 * Clase QueVuelvaLaRegionDeLosGrandesEsfuerzos
 */
class QueVuelvaLaRegionDeLosGrandesEsfuerzos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Que vuelva la región de los grandes esfuerzos';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2014-02-25T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'que-vuelva-la-region-de-los-grandes-esfuerzos';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'La Calificadora Internacional Moodys elevó por primera vez la nota soberana de México a la categoría A3 gracias a las reformas estructurales.';
        $this->claves                     = 'IMPLAN, Torreon, Mexico, Reformas, Estructurales, Competitividad';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/QueVuelvaLaRegionDeLosGrandesEsfuerzos.html';
        // Para el Organizador
        $this->categorias                 = array('Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase QueVuelvaLaRegionDeLosGrandesEsfuerzos

?>
