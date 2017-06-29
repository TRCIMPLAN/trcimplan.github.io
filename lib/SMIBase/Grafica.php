<?php
/**
 * TrcIMPLAN SMIBase - Grafica
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
 * Clase abstracta Grafica
 */
abstract class Grafica {

    protected $identificador;   // Texto único que lo identifica
    protected $clave_x;         // Clave de lo que sera el eje x
    protected $claves_y;        // Clave o claves de lo que sera el valor en el eje y
    protected $etiquetas_y;     // Etiqueta o etiquetas para los valores
    protected $colores_y;       // Color o colores de la serie
    protected $datos = array(); // Arreglo con arreglos, datos de las series a graficar
    protected $formato_x;       // Propiedad interna que señala si todos los datos x son yyyy-mm-dd o yyyy-mm

    /**
     * Constructor
     *
     * @param string Texto único que lo identifica
     */
    public function __construct($identificador) {
        $this->identificador = $identificador;
    } // constructor

    /**
     * Definir Clave X
     *
     * @param string Clave del eje X
     */
    public function definir_clave_x($in_clave) {
        $this->clave_x = $in_clave;
    } // definir_clave_x

    /**
     * Definir Claves Y
     *
     * @param mixed Claves del eje Y. Puede ser string o un arreglo con strings.
     * @param mixed Etiquetas del eje Y. Puede ser string o un arreglo con strings.
     * @param mixed Opcional. Colores de la serie. Puede ser string o un arreglo con strings.
     */
    public function definir_claves_y($in_claves, $in_etiquetas, $in_colores='') {
        // Parámetro claves
        if (is_string($in_claves)) {
            $this->claves_y = array($in_claves);
        } elseif (is_array($in_claves)) {
            $this->claves_y = $in_claves;
        }
        // Parámetro etiquetas
        if (is_string($in_etiquetas)) {
            $this->etiquetas_y = array($in_etiquetas);
        } elseif (is_array($in_etiquetas)) {
            $this->etiquetas_y = $in_etiquetas;
        }
        // Parámetro colores
        if (is_string($in_colores)) {
            $this->colores_y = array($in_colores);
        } elseif (is_array($in_colores)) {
            $this->colores_y = $in_colores;
        }
    } // definir_claves_y

    /**
     * Agregar Datos
     *
     * @param mixed Valor en X
     * @param mixed Arreglo de valores en Y.
     */
    public function agregar_datos($in_valor_x, $in_valores_y) {
        // Parámetro valores y
        if (is_array($in_valores_y)) {
            $yes = $in_valores_y;
        } else {
            $yes = array($in_valores_y);
        }
        // Descartar los valores que no sean números
        $valores_y = array();
        foreach ($yes as $y) {
            if (is_float($y)) {
                $valores_y[] = $y; // Es flotante
            } elseif (is_int($y)) {
                $valores_y[] = $y; // Es entero
            } elseif (is_string($y) && preg_match('/^\-?[0-9]*\.?[0-9]+$/', $y)) {
                $valores_y[] = $y; // Es un número
            } else {
                $valores_y[] = 0;  // Se descarta
            }
        }
        // Acumular
        $this->datos[$in_valor_x] = $valores_y;
        // Detectar formato del valor en x
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $in_valor_x)) {
            $formato_x = 'YYYY-MM-DD';
        } elseif (preg_match('/^\d{4}\-\d{1,2}$/', $in_valor_x)) {
            $formato_x = 'YYYY-MM';
        } else {
            $formato_x = NULL;
        }
        // Si es el primer dato se conserva el formato detectado, si cambia se pierde
        if (count($this->datos) == 1) {
            $this->formato_x = $formato_x;
        } elseif (($this->formato_x != '') && ($formato_x !== $this->formato_x)) {
            $this->formato_x = NULL;
        }
    } // agregar_datos

    /**
     * Validar
     */
    protected function validar() {
        // Validar identificador
        if (!isset($this->identificador)) {
            throw new \Exception("Error en Grafica: Identificador No definido.");
        }
        if (is_string($this->identificador) && !preg_match('/^[A-Za-z0-9_-]+$/', $this->identificador)) {
            throw new \Exception("Error en Grafica: Identificador No válido.");
        }
        // Validar clave x
        if (!is_string($this->clave_x) || ($this->clave_x == '')) {
            throw new \Exception("Error en Grafica: La clave del eje X es incorrecta.");
        }
        // Validar claves y
        if (is_array($this->claves_y)) {
            foreach ($this->claves_y as $y) {
                if (!is_string($y) || (trim($y) == '')) {
                    throw new \Exception("Error en Grafica: Una clave del eje Y es incorrecta.");
                }
            }
        } else {
            throw new \Exception("Error en Grafica: Las claves del eje Y NO están definidas.");
        }
        // Validar etiquetas y
        if (is_array($this->etiquetas_y)) {
            foreach ($this->etiquetas_y as $e) {
                if (!is_string($e) || (trim($e) == '')) {
                    throw new \Exception("Error en Grafica: Una etiqueta del eje Y es incorrecta.");
                }
            }
        } else {
            throw new \Exception("Error en Grafica: Las etiquetas del eje Y NO están definidas.");
        }
        // Validar colores y
        if (is_array($this->colores_y)) {
            foreach ($this->colores_y as $c) {
                if (!is_string($c) || (trim($c) == '')) {
                    throw new \Exception("Error en Grafica: Un color del eje Y es incorrecta.");
                }
            }
        } else {
            throw new \Exception("Error en Grafica: Los colores del eje Y NO están definidos.");
        }
        // Validar que la cantidad sea la misma
        if ((count($this->claves_y) != count($this->etiquetas_y)) || (count($this->claves_y) != count($this->colores_y))) {
            throw new \Exception("Error en Grafica: Las cantidades de datos para el eje Y no son iguales.");
        }
        // Validar que haya suficientes valores
        if (count($this->datos) < 2) {
            throw new GraficaExceptionSinValores("Aviso en Grafica: Sólo se tiene un valor. Debe haber dos o más.");
        }
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    abstract public function html();

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    abstract public function javascript();

} // Clase abstracta Grafica

?>
