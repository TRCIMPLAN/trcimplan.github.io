<?php
/**
 * Plataforma de Conocimiento - Vinculos Compactos
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
 * Clase VinculosCompactos
 */
class VinculosCompactos extends Vinculos {

    // public $identificador;
    // protected $vinculos;
    public $imagen_tamano = 64;

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
        $a[] = '    <div class="row">';
        // Bucle por los vinculos
        foreach ($this->vinculos as $vinculo) {
            // Acumular
            $a[] = '      <div class="col-xs-6 col-md-4 col-lg-3">';
            $a[] = '      <div class="media compactos">';
            // Determinar el URL a la imagen
            $imagen_url = $vinculo->imagen_url($this->imagen_tamano);
            // Si tiene URL se pondrán vínculos, de lo contrario no
            if ($vinculo->url() != '') {
                // Tiene URL
                if ($imagen_url != '') {
                    $a[] = '        <div class="media-left">';
                    $a[] = sprintf('        <a href="%s"><img class="media-object" src="%s"></a>', $vinculo->url(), $imagen_url);
                    $a[] = '        </div>';
                }
                $a[] = '        <div class="media-body compactos-cuerpo">';
                $a[] = sprintf('          <h4 class="media-heading"><a href="%s">%s</a></h4>', $vinculo->url(), $vinculo->nombre);
            } else {
                // NO tiene URL
                if ($imagen_url != '') {
                    $a[] = '        <div class="media-left">';
                    $a[] = sprintf('        <img class="media-object" src="%s">', $imagen_url);
                    $a[] = '        </div>';
                }
                $a[] = '        <div class="media-body">';
                $a[] = sprintf('          <h3 class="media-heading">%s</h3>', $vinculo->nombre);
            }
            $a[] = '        </div>'; // media-body
            $a[] = '      </div>'; // col-xs-6 col-md-4 col-lg-3
            $a[] = '      </div>'; // media compactos
        }
        $a[] = '    </div>';
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

} // Clase VinculosCompactos

?>
