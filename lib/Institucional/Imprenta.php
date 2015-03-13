<?php
/*
 * TrcIMPLAN Sitio Web - Institucional Imprenta
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
namespace Institucional;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'Institucional';
        $this->titulo                   = 'Institucional';
        $this->descripcion              = 'Información institucional del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Institucional';
        $this->directorio               = 'institucional';
        $this->ruta                     = 'institucional/index.html';
        $this->nombre_menu              = 'Institucional';
        $this->encabezado_color         = '#008000';
    } // constructor

} // Clase Imprenta

?>
