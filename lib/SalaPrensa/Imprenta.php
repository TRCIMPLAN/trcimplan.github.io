<?php
/*
 * SMIbeta - Sala de Prensa Imprenta
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
namespace SalaPrensa;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'SalaPrensa';
        $this->titulo                   = 'Sala de Prensa';
        $this->descripcion              = 'Comunicados de Prensa del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Comunicados, Prensa, Sala';
        $this->directorio               = 'sala-prensa';
        $this->ruta                     = 'sala-prensa/index.html';
        $this->nombre_menu              = 'Comunicados > Sala de Prensa';
        $this->encabezado_color         = '#008000';
    } // constructor

} // Clase Imprenta

?>
