<?php
/**
 * TrcIMPLAN Sitio Web - TorreonYLaLagunaNecesitanUnaVisionCero
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
 * Clase TorreonYLaLagunaNecesitanUnaVisionCero
 */
class TorreonYLaLagunaNecesitanUnaVisionCero extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón y La Laguna necesitan una Visión Cero';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-07-17T14:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-y-la-laguna-necesitan-una-vision-cero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los incidentes de tránsito siguen siendo la principal causa de muerte en los jóvenes de Coahuila y la tasa de atropellamiento a peatones en Torreón mostró un aumento de 4.8 a 5.2 por cada mil habitantes.';
        $this->claves                     = 'IMPLAN, Torreon, Vision Cero, Vialidad, Accidentes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonYLaLagunaNecesitanUnaVisionCero.md';
        // Para el Organizador
        $this->categorias                 = array('Seguridad', 'Vialidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase TorreonYLaLagunaNecesitanUnaVisionCero

?>
