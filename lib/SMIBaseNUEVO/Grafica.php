<?php
/**
 * TrcIMPLAN SMIBaseNUEVO - Grafica
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

namespace SMIBase;

/**
 * Clase abstracta Grafica
 */
abstract class Grafica {

    protected $identificador; // Texto único que lo identifica

    /**
     * Constructor
     *
     * @param string Texto único que lo identifica
     */
    public function __construct($identificador) {
        $this->identificador = $identificador;
    } // constructor

} // Clase abstracta Grafica

?>
