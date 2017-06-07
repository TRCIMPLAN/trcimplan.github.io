<?php
/**
 * TrcIMPLAN Sitio Web - IMPLAN Torreón impulsa la creación del Plan de Movilidad no Motorizada
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
 * Clase PlanEstrategicoMetropolitanoMovilidadNoMotorizada
 */
class PlanEstrategicoMetropolitanoMovilidadNoMotorizada extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'IMPLAN Torreón impulsa la creación del Plan de Movilidad no Motorizada';
        $this->fecha                      = '2015-08-13T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-08-13-plan-estrategico-metropolitano-movilidad-no-motorizada';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Integrantes de colectivos ciclistas, autoridades municipales, ciudadanos y profesionistas especializados en el tema se reunirán para elaborar una visión, objetivos, metas y estrategias a mediano y largo plazo que conduzcan a elevar la calidad de vida de los peatones y ciclistas en nuestra región.';
        $this->claves                     = 'IMPLAN, Torreon, Movilidad, No Motorizada, Ciclistas, Peatones, Vialidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/PlanEstrategicoMetropolitanoMovilidadNoMotorizada.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlanEstrategicoMetropolitanoMovilidadNoMotorizada

?>
