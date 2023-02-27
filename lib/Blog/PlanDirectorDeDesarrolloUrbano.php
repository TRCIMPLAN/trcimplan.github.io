<?php
/**
 * TrcIMPLAN Sitio Web - PlanDirectorDeDesarrolloUrbano
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
 * Clase PlanDirectorDeDesarrolloUrbano
 */
class PlanDirectorDeDesarrolloUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plan Director de Desarrollo Urbano: Aportes y beneficios.';
        $this->autor                      = 'Ing. José Juan Astorga Cabrales';
        $this->fecha                      = '2023-02-27T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'pddu-aportes-y-beneficios-feb-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La finalidad principal del Plan Director de Desarrollo Urbano es regular el crecimiento de la ciudad, pues a través de él se establecen políticas públicas para el suelo urbano. ';
        $this->claves                     = 'IMPLAN, Torreon, plan, director, desarrollo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlanDirectorDeDesarrolloUrbano.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase PlanDirectorDeDesarrolloUrbano

?>
