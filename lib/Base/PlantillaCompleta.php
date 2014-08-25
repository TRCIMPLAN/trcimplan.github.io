<?php
/*
 * SMIbeta - Plantilla Completa
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
namespace Base;

/**
 * Clase PlantillaCompleta
 */
class PlantillaCompleta extends Plantilla {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '  <div id="page-complete">';
        $a[] = '    <div class="container">';
        $a[] = '      <div class="row contenido">';
        if ($this->encabezado != '') {
            $a[] = $this->encabezado;
        } else {
            if ($this->titulo == '') {
                $a[] = "  <h1>{$this->sitio_titulo}</h1>";
            } else {
                $a[] = "  <h1>{$this->titulo}</h1>";
            }
        }
        $a[] = $this->contenido;
        $a[] = '      </div>'; // row contenido
        $a[] = $this->mapa_inferior->html();
        $a[] = '    </div>';   // container
        $a[] = '  </div>';     // page-complete
        // Redefinir contenido
        $this->contenido    = implode("\n", $a);
        // Acumular el Javascript del Mapa Inferior
        $this->javascript[] = $this->mapa_inferior->javascript();
        // Ejecutar método del padre
        return parent::html();
    } // html

} // Clase PlantillaCompleta

?>
