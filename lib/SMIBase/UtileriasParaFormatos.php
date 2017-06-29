<?php
/**
 * TrcIMPLAN SMIBase - UtileriasParaFormatos
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

namespace SMIBase;

/**
 * Clase abstracta UtileriasParaFormatos
 */
abstract class UtileriasParaFormatos {

    /**
     * Caracteres para clase
     *
     * @param  string  Nombre a convertir
     * @return string  Texto convertido a caracteres para web
     */
    public static function caracteres_para_clase($in_texto) {
        // Cambiar caracteres acentuados a NO acentuados
        $buscados    = array('ñ', 'Ñ', 'ü', 'Ü', 'á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú');
        $cambios     = array('n', 'n', 'u', 'u', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
        $sin_acentos = str_replace($buscados, $cambios, $in_texto);
        // Cambiar estos caracteres a espacios
        $especiales  = array('(', ')', '.', ',', ';', '_', '-', '°');
        $minusculas  = strtolower(str_replace($especiales, ' ', $sin_acentos));
        // Poner en mayusculas la primer letra de cada palabra
        $palabras_camel_case = array();
        foreach (explode(' ', $minusculas) as $p) {
            if ($p !== '') {
                $palabras_camel_case[] = ucfirst($p);
            }
        }
        // Entregar
        return implode('', $palabras_camel_case);
    } // caracteres_para_clase

} // Clase abstracta UtileriasParaFormatos

?>
