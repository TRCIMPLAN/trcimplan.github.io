<?php
/**
 * TrcIMPLAN Sitio Web - Plan Estratégico Metropolitano, Mesa 1: Diagnóstico - Pronóstico
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
 * Clase Mesa1DiagnosticoPronostico
 */
class Mesa1DiagnosticoPronostico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plan Estratégico Metropolitano, Mesa 1: Diagnóstico - Pronóstico';
        $this->fecha                      = '2014-10-16T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2014-10-16-mesa-1-diagnostico-pronostico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El pasado 9 de octubre de 2014 comenzaron formalmente los trabajos para la construcción del Plan Estratégico Metropolitano, un esfuerzo coparticipativo para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Plan, Estrategico, Metropolitano, Mesa 1, Diagnostico, Pronostico';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/SalaPrensa/Mesa1DiagnosticoPronostico.html';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase Mesa1DiagnosticoPronostico

?>
