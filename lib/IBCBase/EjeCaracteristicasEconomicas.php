<?php
/**
 * TrcIMPLAN IBCBase - EjeCaracteristicasEconomicas
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
 * Clase abstracta EjeCaracteristicasEconomicas
 */
abstract class EjeCaracteristicasEconomicas extends Eje {

    // protected $publicacion_ficha;
    // const     FECHA;
    protected $caracteristicas_economicas; // Arreglo asociativo con datos de Carcaterísticas Económicas
    protected $preparado = FALSE;          // Bandera

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
        if (isset($datos['Características Económicas'][parent::FECHA])) {
            $this->caracteristicas_economicas = $datos['Características Económicas'][parent::FECHA];
        } else {
            throw new EjeExceptionSinDatos("{$this->publicacion_ficha->nombre} sin datos sobre Características Económicas.");
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
        if (isset($this->caracteristicas_economicas[$nombre])) {
            switch ($nombre) {
                case 'Población Económicamente Activa':
                case 'Población Económicamente Activa masculina':
                case 'Población Económicamente Activa femenina':
                case 'Población Ocupada':
                case 'Población Ocupada masculina':
                case 'Población Ocupada femenina':
                case 'Población Desocupada':
                case 'Derechohabiencia':
                    return number_format($this->caracteristicas_economicas[$nombre], 2, ".", ",")." %"; // Porcentaje
                    break;
                default:
                    return '~ '.$this->caracteristicas_economicas[$nombre]; // Original
            }
        } else {
            return 'ND';
        }
    } // formatear

} // Clase abstracta EjeCaracteristicasEconomicas

?>
