<?php
/**
 * Plataforma de Conocimiento - Vinculos
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase Abstracta Vinculos
 */
abstract class Vinculos {

    public $identificador = 'vinculos-acordeones'; // Texto identificador para el grupo de Acordeones
    protected $vinculos   = array();               // Arreglo con instancias de Vinculo

    /**
     * Agregar
     *
     * @param mixed Instancia de Vinculo
     */
    public function agregar(Vinculo $vinculo) {
        $this->vinculos[] = $vinculo;
    } // agregar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    abstract function html();

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    abstract function javascript();

} // Clase Abstracta Vinculos

?>
