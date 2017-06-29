<?php
/**
 * TrcIMPLAN SMIBase - GraficaBarrasWeb
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
 * Clase GraficaBarrasWeb
 */
class GraficaBarrasWeb extends Grafica implements SalidaWeb {

    // protected $identificador;
    // protected $clave_x;
    // protected $claves_y;
    // protected $etiquetas_y;
    // protected $colores_y;
    // protected $datos;
    // protected $formato_x;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        $this->validar();
        // Entregar
        return "    <div id=\"{$this->identificador}\" class=\"grafica\"></div>";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Validar
        $this->validar();
        // Iniciar acumulador
        $a = array();
        // Acumular element
        $a[] = "element: '{$this->identificador}'";
        // Acumular datos
        $d = array();
        foreach ($this->datos as $x => $drreglo_y) {
            $b = array();
            foreach ($drreglo_y as $i => $y) {
                $b[] = "{$this->claves_y[$i]}: $y";
            }
            $d[] = "{ {$this->clave_x}: '$x', ".implode(', ', $b)." }";
        }
        $a[] = "data: [".implode(",", $d)."]";
        // Acumular clave del eje x
        $a[] = "xkey: '{$this->clave_x}'";
        // Acumular claves del eje y
        $c = array();
        foreach ($this->claves_y as $clave) {
            $c[] = "'$clave'";
        }
        $a[] = "ykeys: [".implode(', ', $c)."]";
        // Acumular etiquetas del eje y
        $e = array();
        foreach ($this->etiquetas_y as $etiqueta) {
            $e[] = "'$etiqueta'";
        }
        $a[] = "labels: [".implode(', ', $e)."]";
        // Acumular colores
        $c = array();
        foreach ($this->colores_y as $color) {
            $c[] = "'$color'";
        }
        $a[] = "barColors: [".implode(', ', $c)."]";
        // Entregar
        $interior = implode(",\n      ", $a);
        return <<<FINAL
  if (typeof var{$this->identificador} === 'undefined') {
    var{$this->identificador} = Morris.Bar({
      $interior
    });
  }
FINAL;
    } // javascript

} // Clase GraficaBarrasWeb

?>
