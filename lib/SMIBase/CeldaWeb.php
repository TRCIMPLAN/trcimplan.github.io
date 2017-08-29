<?php
/**
 * TrcIMPLAN SMIBase - CeldaWeb
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
 * Clase CeldaWeb
 */
class CeldaWeb implements SalidaWeb {

    protected $valor;                         // Dato crudo
    protected $formato                = NULL; // Texto: 'cantidad', 'caracter', 'decimal', 'dinero', 'fecha', 'nd', 'porcentaje', 'texto'
    protected $alineacion             = NULL; // Texto: 'izquierda', 'centro', 'derecha'
    protected $pulpa                  = NULL; // Texto que será el contenido formateado de la celda
    static public $cantidad_decimales = 4;    // Cantidad de decimales por defecto

    /**
     * Constructor
     *
     * @param mixed  Valor
     * @param string Formato
     */
    public function __construct($valor, $formato=NULL) {
        $this->valor = $valor;
        if (is_string($formato) && in_array($formato, array('cantidad', 'caracter', 'decimal', 'dinero', 'fecha', 'nd', 'porcentaje', 'texto'))) {
            $this->formato = $formato;
        }
    } // constructor

    /**
     * Formatear Cantidad
     *
     * @return string Cantidad con formato
     */
    public function formatear_cantidad() {
        $this->formato    = 'cantidad';
        $this->alineacion = 'derecha';
        $this->pulpa      = number_format($this->valor, 0, ".", ",");
        return $this->pulpa;
    } // formatear_cantidad

    /**
     * Formatear Caracter
     *
     * @param  string Arreglo asociativo con las descripciones
     * @return string Decimal con formato
     */
    public function formatear_caracter($descripciones=NULL) {
        if (is_array($descripciones) && in_array($this->valor, $descripciones)) {
            $this->pulpa = $descripciones[$this->valor];
        } else {
            $this->pulpa = $this->valor;
        }
        $this->formato    = 'caracter';
        $this->alineacion = 'izquierda';
        return $this->pulpa;
    } // formatear_caracter

    /**
     * Formatear Decimal
     *
     * @param  integer Cantidad de decimales
     * @return string  Decimal con formato
     */
    public function formatear_decimal($decimales=NULL) {
        if ($decimales === NULL) {
            $decimales = self::$cantidad_decimales;
        }
        $this->formato    = 'decimal';
        $this->alineacion = 'derecha';
        $this->pulpa      = number_format($this->valor, $decimales, ".", ",");
        return $this->pulpa;
    } // formatear_decimal

    /**
     * Formatear Dinero
     *
     * @return string Dinero con formato
     */
    public function formatear_dinero() {
        $this->formato    = 'dinero';
        $this->alineacion = 'derecha';
        $this->pulpa      = '$ '.number_format($this->valor, 2, ".", ",");
        return $this->pulpa;
    } // formatear_dinero

    /**
     * Formatear Fecha
     *
     * @return string Fecha con formato YYYY-MM-DD (se tiene año/mes/dia para que se pueda ordenar bien)
     */
    public function formatear_fecha() {
        $this->formato    = 'fecha';
        $this->alineacion = 'centro';
        $this->pulpa      = $this->valor;
        return $this->pulpa;
    } // formatear_fecha

    /**
     * Formatear ND
     *
     * @return string Texto 'ND'
     */
    public function formatear_nd() {
        $this->formato    = 'nd';
        $this->alineacion = 'centrado';
        $this->pulpa      = 'ND';
        return $this->pulpa;
    } // formatear_nd

    /**
     * Formatear Porcentaje
     *
     * @param  integer Cantidad de decimales
     * @return string  Porcentaje con formato
     */
    public function formatear_porcentaje($decimales=NULL) {
        if ($decimales === NULL) {
            $decimales = self::$cantidad_decimales;
        }
        $this->formato    = 'porcentaje';
        $this->alineacion = 'derecha';
        $this->pulpa      = number_format($this->valor, $decimales, ".", ",").' %';
        return $this->pulpa;
    } // formatear_porcentaje

    /**
     * Formatear Texto
     *
     * @return string El mismo texto
     */
    public function formatear_texto() {
        $this->formato    = 'texto';
        $this->alineacion = 'izquierda';
        $this->pulpa      = $this->valor;
        return $this->pulpa;
    } // formatear_texto

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Si NO se ha formateado
        if ($this->pulpa == NULL) {
            if ($this->formato != NULL) {
                switch ($this->formato) {
                    case 'cantidad':
                        $this->formatear_cantidad();
                        break;
                    case 'caracter':
                        $this->formatear_caracter();
                        break;
                    case 'decimal':
                        $this->formatear_decimal();
                        break;
                    case 'dinero':
                        $this->formatear_dinero();
                        break;
                    case 'fecha':
                        $this->formatear_fecha();
                        break;
                    case 'nd':
                        $this->formatear_nd();
                        break;
                    case 'porcentaje':
                        $this->formatear_porcentaje();
                        break;
                    case 'texto':
                        $this->formatear_texto();
                }
            } elseif (($this->valor == 'nd') || ($this->valor == 'ND')) {
                $this->pulpa = $this->formatear_nd();
            } else {
                $this->pulpa = $this->valor;
            }
        }
        // Definir cáscara
        if ($this->formato == 'nd') {
            $cascara = sprintf('<td class="nd">%s</td>', $this->pulpa);
        } elseif ($this->alineacion == 'centro') {
            $cascara = sprintf('<td class="centrado">%s</td>', $this->pulpa);
        } elseif ($this->alineacion == 'derecha') {
            $cascara = sprintf('<td class="derecha">%s</td>', $this->pulpa);
        } else {
            $cascara = sprintf('<td>%s</td>', $this->pulpa);
        }
        // Entregar
        return $cascara;
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return NULL;
    } // javascript

} // Clase CeldaWeb

?>
