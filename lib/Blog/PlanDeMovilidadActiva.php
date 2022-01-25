<?php
/**
 * TrcIMPLAN Sitio Web - PlanDeMovilidadActiva
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
 * Clase PlanDeMovilidadActiva
 */
class PlanDeMovilidadActiva extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plan de Movilidad Activa, por una ciudad más humana y sustentable.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2022-01-25T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'plan-de-movilidad-activa-ene-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Datos de la Dirección de Vialidad y Movilidad de Torreón, van 275 hechos viales atendidos del 1 al 20 de enero del 2022.';
        $this->claves                     = 'IMPLAN, Torreon, vialidad, movilidad, plan';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlanDeMovilidadActiva.md';
        // Para el Organizador
        $this->categorias                 = array('Vialidad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlanDeMovilidadActiva

?>
