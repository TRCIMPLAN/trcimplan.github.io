<?php
/*
 * SMIbeta - Mapa Inferior
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
 * Clase MapaInferior
 */
class MapaInferior {

    // public $sitio_titulo;
    // public $logotipo;
    // public $opciones;
    public $en_raiz = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '    <div class="row inferior">';
        if ($this->en_raiz) {
            $a[] = "        <a href=\"index.html\"><img class=\"inferior-logo\" src=\"{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
        } else {
            $a[] = "        <a href=\"../index.html\"><img class=\"inferior-logo\" src=\"../{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
        }
        $a[] = '    </div>'; // row inferior
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase MapaInferior

?>
