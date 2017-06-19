<?php
/**
 * TrcIMPLAN IBCBase - EjeDemografia
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
 * Clase abstracta EjeDemografia
 */
abstract class EjeDemografia extends Eje {

    // protected $publicacion_ficha;
    // const     FECHA;
    protected $demografia;        // Arreglo asociativo con datos de Demografía
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
        if (isset($datos['Demografía'][parent::FECHA])) {
            $this->demografia = $datos['Demografía'][parent::FECHA];
        } else {
            throw new EjeExceptionSinDatos("{$this->publicacion_ficha->nombre} sin datos sobre Demografía.");
        }
        // Sin Población Total
        if (isset($this->demografia['Población total'])) {
            if ($this->demografia['Población total'] == 0) {
                throw new EjeExceptionSinDatos("La Población Total es cero.");
            }
        } else {
            throw new EjeExceptionSinDatos("La Población Total no está definida.");
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
        if (isset($this->demografia[$nombre])) {
            switch ($nombre) {
                case 'Población total':
                    return number_format($this->demografia[$nombre], 0, ".", ","); // Cantidad
                    break;
                case 'Porcentaje de población masculina':
                case 'Porcentaje de población femenina':
                case 'Porcentaje de población de 0 a 14 años':
                case 'Porcentaje de población de 15 a 64 años':
                case 'Porcentaje de población de 65 y más años':
                case 'Porcentaje de población no especificada':
                case 'Porcentaje de población nacida en otro estado':
                case 'Porcentaje de población con discapacidad':
                    return number_format($this->demografia[$nombre], 2, ".", ",")." %"; // Porcentaje
                    break;
                case 'Fecundidad promedio':
                    return number_format($this->demografia[$nombre], 2, ".", ","); // Decimal
                    break;
                default:
                    return '~ '.$this->demografia[$nombre]; // Original
            }
        } else {
            return 'ND';
        }
    } // formatear

} // Clase abstracta EjeDemografia

?>
