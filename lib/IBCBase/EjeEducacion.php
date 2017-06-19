<?php
/**
 * TrcIMPLAN IBCBase - EjeEducacion
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
 * Clase abstracta EjeEducacion
 */
abstract class EjeEducacion extends Eje {

    // protected $publicacion_ficha;
    // const     FECHA;
    protected $educacion;         // Arreglo asociativo con datos de Educación
    protected $preparado = FALSE; // Bandera

    /**
     * Preparar
     */
    protected function prepapar() {
        // Tomar datos
        $datos = $this->publicacion_ficha->datos();
        if (isset($datos['Educación'][parent::FECHA])) {
            $this->educacion = $datos['Educación'][parent::FECHA];
        } else {
            throw new EjeExceptionSinDatos("{$this->publicacion_ficha->nombre} sin datos sobre Educación.");
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
        if (isset($this->educacion[$nombre])) {
            switch ($nombre) {
                case 'Grado Promedio de Escolaridad':
                case 'Grado Promedio de Escolaridad masculina':
                case 'Grado Promedio de Escolaridad femenina':
                    return number_format($this->educacion[$nombre], 2, ".", ","); // Decimal
                    break;
                default:
                    return '~ '.$this->educacion[$nombre]; // Original
            }
        } else {
            return 'ND';
        }
    } // formatear

} // Clase abstracta EjeEducacion

?>
