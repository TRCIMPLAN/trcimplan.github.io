<?php
/*
 * TrcIMPLAN Sitio Web - SIG Imprenta
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
namespace SIG;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'SIG';
        $this->titulo                   = 'Información Geográfica';
        $this->descripcion              = 'Información Geográfica del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Sistema, Informacion, Geografica, SIG, GIS';
        $this->directorio               = 'sig';
        $this->archivo_ruta             = 'sig/index.html';
        $this->nombre_menu              = 'Información Geográfica';
        $this->encabezado_color         = '#008000';
        $this->encabezado_icono         = \Configuracion\NavegacionConfig::$iconos['Información Geográfica'];
    } // constructor

} // Clase Imprenta

?>
