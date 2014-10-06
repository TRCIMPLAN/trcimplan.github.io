<?php
/*
 * SMIbeta - Plan Estratégico Metropolitano - Imprenta
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 */

// Namespace
namespace PlanEstrategicoMetropolitano;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'PlanEstrategicoMetropolitano';
        $this->titulo                   = 'Plan Estratégico Metropolitano';
        $this->descripcion              = 'El Plan Estratégico Metropolitano es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.';
        $this->claves                   = 'IMPLAN, Torreon, Plan, Estratégico, Metropolitano';
        $this->directorio               = 'plan-estrategico-metropolitano';
        $this->ruta                     = 'plan-estrategico-metropolitano/index.html';
        $this->nombre_menu              = 'Conoce el Plan';
    } // constructor

} // Clase Imprenta

?>
