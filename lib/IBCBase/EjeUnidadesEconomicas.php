<?php
/**
 * TrcIMPLAN IBCBase - EjeUnidadesEconomicas
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

namespace IBCBase;

/**
 * Clase abstract EjeUnidadesEconomicas
 */
abstract class EjeUnidadesEconomicas extends Eje {

    // protected $publicacion_ficha;
    // const     FECHA;
    protected $unidades_economicas; // Arreglo asociativo con datos de Unidades Económicas
    protected $preparado = FALSE;   // Bandera

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
        if (isset($datos['Unidades Económicas'][parent::FECHA])) {
            $this->unidades_economicas = $datos['Unidades Económicas'][parent::FECHA];
        } else {
            throw new EjeExceptionSinDatos("{$this->publicacion_ficha->nombre} sin datos sobre Unidades Económicas.");
        }
        // Sin Unidades Económicas
        if (isset($this->unidades_economicas['Total Actividades Económicas'])) {
            if ($this->unidades_economicas['Total Actividades Económicas'] == 0) {
                throw new EjeExceptionSinDatos("El Total de Actividades Económicas es cero.");
            }
        } else {
            throw new EjeExceptionSinDatos("El Total de Actividades Económicas no está definido.");
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
        if (isset($this->unidades_economicas[$nombre])) {
            switch ($nombre) {
                case 'Total Actividades Económicas':
                    return number_format($this->unidades_economicas[$nombre], 0, ".", ","); // Cantidad
                    break;
                case 'Primer actividad porcentaje':
                case 'Segunda actividad porcentaje':
                case 'Tercera actividad porcentaje':
                case 'Cuarta actividad porcentaje':
                case 'Quinta actividad porcentaje':
                    return number_format($this->unidades_economicas[$nombre], 2, ".", ",")." %"; // Porcentaje
                    break;
                case 'Primer actividad nombre':
                    return '1° '.$this->unidades_economicas['Primer actividad nombre'];
                    break;
                case 'Segunda actividad nombre':
                    return '2° '.$this->unidades_economicas['Segunda actividad nombre'];
                    break;
                case 'Tercera actividad nombre':
                    return '3° '.$this->unidades_economicas['Tercera actividad nombre'];
                    break;
                case 'Cuarta actividad nombre':
                    return '4° '.$this->unidades_economicas['Cuarta actividad nombre'];
                    break;
                case 'Quinta actividad nombre':
                    return '5° '.$this->unidades_economicas['Quinta actividad nombre'];
                    break;
                default:
                    return '~ '.$this->unidades_economicas[$nombre]; // Original
            }
        } else {
            return 'ND';
        }
    } // formatear

} // Clase abstract EjeUnidadesEconomicas

?>
