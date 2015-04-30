<?php
/*
 * TrcIMPLAN Sitio Web - SMI Imprenta
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
namespace SMI;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'SMI';
        $this->titulo                   = 'Sistema Metropolitano de Indicadores';
        $this->descripcion              = 'El Sistema Metropolitano de Indicadores contiene información de Torreón, Gómez Palacio, Lerdo, Matamoros y La Laguna.';
        $this->claves                   = 'IMPLAN, Torreon, Indicadores, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->directorio               = 'smi';
        $this->archivo_ruta             = 'smi/index.html';
        $this->nombre_menu              = 'Indicadores';
        $this->encabezado_color         = '#CA198A';
    } // constructor

} // Clase Imprenta

?>
