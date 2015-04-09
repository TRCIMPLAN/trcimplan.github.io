<?php
/*
 * TrcIMPLAN Sitio Web - Consejo Directivo Imprenta
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
namespace ConsejoDirectivo;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'ConsejoDirectivo';
        $this->titulo                   = 'Consejo Directivo';
        $this->descripcion              = 'Consejo Directivo del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Consejo, Directivo, Comites, Tecnicos';
        $this->directorio               = 'consejo-directivo';
        $this->archivo_ruta             = 'consejo-directivo/index.html';
        $this->nombre_menu              = 'Consejo Directivo';
        $this->encabezado_color         = '#008000';
    } // constructor

} // Clase Imprenta

?>
