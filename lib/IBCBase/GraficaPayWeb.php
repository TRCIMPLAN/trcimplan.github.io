<?php
/**
 * TrcIMPLAN IBCBase - GraficaPayWeb
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
 * Clase GraficaPayWeb
 */
class GraficaPayWeb extends Grafica implements SalidaWeb {

    // protected $identificador;
    // protected $titulo;
    // protected $etiquetas_valores;
    // protected $etiquetas_colores;
    // protected $post_nota;
    // const     COLOR_POR_DEFECTO;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Si al validar no hay valores, pondrá un mensaje
        try {
            $this->validar();
        } catch (GraficaExceptionSinValores $e) {
            $mensaje = new MensajeWeb();
            $mensaje->definir_mensaje_aviso('Gráfica de pay', $e->getMessage());
            return $mensaje->html();
        }
        // Entregar
        return "    <div id=\"{$this->identificador}\" class=\"grafica\"></div>";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Si al validar no hay valores, pondrá un mensaje
        try {
            $this->validar();
        } catch (GraficaExceptionSinValores $e) {
            return "      // GraficaBarrasWeb {$this->identificador} sin valores";
        }
        // Acumular
        $a   = array();
        $a[] = "      // GraficaPayWeb {$this->identificador}";
        // Google Charts
        $a[] = "      google.charts.setOnLoadCallback(elaborar{$this->identificador});";
        $a[] = "      function elaborar{$this->identificador}() {";
        $a[] = "        var data = google.visualization.arrayToDataTable([";
        $a[] = "          ['Etiqueta', 'Valor'],";
        $b   = array();
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $b[] = sprintf("              ['%s', %s]", $etiqueta, $valor);
        }
        $a[] = implode(",\n", $b);
        $a[] = "        ]);";
        $a[] = "        var options = {";
        $a[] = "          chartArea: { width: '100%', height: '80%' },";
        if ($this->titulo !== NULL) {
            $a[] = "          title: '{$this->titulo}',";
        }
        $c   = array();
        foreach ($this->etiquetas_colores as $color) {
            $c[] = "{color: '$color'}";
        }
        $a[] = sprintf("          slices: [%s]", implode(', ', $c));
        $a[] = "        };";
        $a[] = "        var chart = new google.visualization.PieChart(document.getElementById('{$this->identificador}'));";
        $a[] = "        chart.draw(data, options);";
        $a[] = "      }";
        // Morris.js
    /*  $a[] = "if (typeof varGrafica{$this->identificador} === 'undefined') {";
        $a[] = "    varGrafica{$this->identificador} = Morris.Donut({";
        $a[] = "        element: '{$this->identificador}',";
        $a[] = "        formatter: function(y){return y + ' %'},";
        $a[] = '        data: [';
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $a[] = "            {label: \"$etiqueta\", value: \"$valor\"},";
        }
        $a[] = '        ],';
        $a[] = sprintf("        colors: ['%s']", implode("', '", $this->etiquetas_colores));
        $a[] = '    });';
        if ($this->indice_valor_a_resaltar !== false) {
            $a[] = "    varGrafica{$this->identificador}.select({$this->indice_valor_a_resaltar});";
        }
        $a[] = '}'; */
        // Entregar
        return implode("\n", $a);
    } // javascript

} // Clase GraficaPayWeb

?>
