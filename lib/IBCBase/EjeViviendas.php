<?php
/**
 * TrcIMPLAN IBCBase - EjeViviendas
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase abstract EjeViviendas
 */
abstract class EjeViviendas extends Eje {

    // protected $publicacion_ficha;
    // const     FECHA;
    protected $viviendas;         // Arreglo asociativo con datos de Viviendas
    protected $preparado = FALSE; // Bandera

    /**
     * Preparar
     */
    protected function prepapar() {
        // Si ya está preparado, no hace nada
        if ($this->preparado) {
            return;
        }
        // Tomar datos
        $datos = $this->publicacion_ficha->datos();
        if (isset($datos['Viviendas'][parent::FECHA])) {
            $this->viviendas = $datos['Viviendas'][parent::FECHA];
        } else {
            throw new EjeExceptionSinDatos("{$this->publicacion_ficha->nombre} sin datos sobre Viviendas.");
        }
        // Sin Hogares
        if (isset($this->viviendas['Hogares'])) {
            if ($this->viviendas['Hogares'] == 0) {
                throw new EjeExceptionSinDatos("La cantidad de Hogares es cero.");
            }
        } else {
            throw new EjeExceptionSinDatos("La cantidad de Hogares no está definida.");
        }
        // Levantar bandera
        $this->preparado = TRUE;
    } // preparar

    /**
     * Formatear
     *
     * @param  string Nombre del indicador
     * @return string Valor con formato
     */
    protected function formatear($nombre) {
        $this->prepapar();
        if (isset($this->viviendas[$nombre])) {
            switch ($nombre) {
                case 'Hogares':
                    return number_format($this->viviendas[$nombre], 0, ".", ","); // Cantidad
                    break;
                case 'Ocupación por Vivienda':
                    return number_format($this->viviendas[$nombre], 2, ".", ","); // Decimal
                    break;
                case 'Viviendas con Electricidad':
                case 'Viviendas con Agua':
                case 'Viviendas con Drenaje':
                case 'Viviendas con Televisión':
                case 'Viviendas con Automóvil':
                case 'Viviendas con Computadora':
                    return number_format($this->viviendas[$nombre], 2, ".", ",")." %"; // Porcentaje
                    break;
                default:
                    return '~ '.$this->viviendas[$nombre]; // Original
            }
        } else {
            return 'ND';
        }
    } // formatear

} // Clase abstract EjeViviendas

?>
