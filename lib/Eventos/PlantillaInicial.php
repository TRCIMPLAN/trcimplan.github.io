<?php
/*
 * SMIbeta - Eventos Plantilla Eventos
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
namespace Eventos;

/**
 * Clase PlantillaInicial
 */
class PlantillaInicial extends \Base\PlantillaCompleta {

    /**
     * Constructor
     */
    public function __construct() {
        $this->titulo        = 'Eventos';
        $this->autor         = 'TrcIMPLAN';
        $this->descripcion   = 'IMPLAN Torreón, Eventos.';
        $this->claves        = 'IMPLAN, Torreon, Eventos';
        $this->directorio    = 'eventos';
        $this->ruta          = "{$this->directorio}/index.html";
        $this->imagen_previa = '/imagenes/implan.jpg';
        $this->encabezado    = '';
        $this->contenido     = <<<FINAL
FINAL;
        $this->javascript    = '';
    } // constructor

} // Clase PlantillaInicial

?>
