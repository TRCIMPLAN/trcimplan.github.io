<?php
/**
 * Plataforma de Conocimiento - Vinculos Tarjetas
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
 * Clase VinculosTarjetas
 */
class VinculosTarjetas extends Vinculos {

    // public $identificador;
    // protected $vinculos;
    public $imagen_tamano = 256;

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
        $a[] = '      <div class="row">';
        foreach ($this->vinculos as $vinculo) {
            // Acumular
            $a[] = '        <div class="col-sm-6 col-md-3">';
            $a[] = '          <div class="thumbnail tarjetas-thumbnail">';
            // Determinar el URL a la imagen
            $imagen_url = $vinculo->imagen_url($this->imagen_tamano);
            // Si tiene URL se pondrán vínculos, de lo contrario no
            if ($vinculo->url() != '') {
                // Tiene URL
                if ($imagen_url != '') {
                    $a[] = sprintf('            <a href="%s"><img class="img-thumbnail tarjetas-imagen" src="%s" alt="%s"></a>', $vinculo->url(), $imagen_url, $vinculo->nombre);
                }
                $a[] = '            <div class="caption">';
                $a[] = sprintf('              <h4 class="tarjetas-nombre"><a href="%s">%s</a></h4>', $vinculo->url(), $vinculo->nombre);
                if ($vinculo->descripcion != '') {
                    $a[] = sprintf('              <p class="tarjetas-descripcion">%s</p>', $vinculo->descripcion);
                }
                if ($vinculo->boton_etiqueta != '') {
                    $a[] = sprintf('              <a href="%s" class="btn btn-default" role="button">%s</a>', $vinculo->url(), $vinculo->boton_etiqueta);
                }
            } else {
                // NO tiene URL
                if ($imagen_url != '') {
                    $a[] = sprintf('            <img class="img-thumbnail tarjetas-imagen" src="%s" alt="%s">', $imagen_url, $vinculo->nombre);
                }
                $a[] = '            <div class="caption">';
                $a[] = sprintf('              <h4 class="tarjetas-nombre">%s</h4>', $vinculo->nombre);
                if ($vinculo->descripcion != '') {
                    $a[] = sprintf('              <p class="tarjetas-descripcion">%s</p>', $vinculo->descripcion);
                }
            }
            $a[] = '            </div>'; // caption
            $a[] = '          </div>'; // thumbnail
            $a[] = '        </div>'; // col-sm-6 col-md-3
        }
        $a[] = '      </div>'; // row
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

} // Clase VinculosTarjetas

?>
