<?php
/*
 * SMIbeta - DESCRIPCION
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
 * Clase EstructuraOrganica
 */
class EstructuraOrganica extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = '';
        $this->directorio  = '';
        $this->archivo     = '';
        $this->descripcion = '.';
        $this->claves      = '';
        $this->categorias  = array('');
        $this->contenido   = <<<FINAL
FINAL;
        $this->javascript  = <<<FINAL
FINAL;
    } // constructor

} // Clase EstructuraOrganica

?>
