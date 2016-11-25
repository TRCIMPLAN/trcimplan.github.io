<?php
/**
 * Plataforma de Conocimiento - Vinculos Listado
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
 * Clase VinculosListado
 */
class VinculosListado extends Vinculos {

    // public $identificador;
    // protected $vinculos;
    public $imagen_tamano = 0;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Si no hay vinculos no se entrega nada
        if (count($this->vinculos) == 0) {
            return '<!-- Sin vínculos -->';
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Bucle por los vinculos
        $a[] = '      <ul>';
        foreach ($this->vinculos as $vinculo) {
            // Si tiene URL se pondrán vínculos, de lo contrario no
            if ($vinculo->url() != '') {
                // Tiene URL
                //~ $a[] = sprintf('        <li><a href="%s">%s</a></li>', $vinculo->url(), $vinculo->nombre);
                $a[] = sprintf('        <li><a href="%s">%s %s</a></li>', $vinculo->url(), $vinculo->directorio, $vinculo->nombre);
            } else {
                // NO tiene URL
                $a[] = sprintf('        <li>%s</li>', $vinculo->nombre);
            }
        }
        $a[] = '      </ul>';
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase VinculosListado

?>
