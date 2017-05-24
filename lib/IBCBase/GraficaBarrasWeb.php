<?php
/**
 * TrcIMPLAN IBCBase - GraficaBarrasWeb
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
 * Clase GraficaBarrasWeb
 */
class GraficaBarrasWeb extends Grafica implements SalidaWeb {

    // protected $identificador;
    // protected $titulo;
    // protected $etiquetas_valores;
    // protected $etiquetas_colores;
    // protected $post_nota;
    // const     COLOR_POR_DEFECTO;
    protected $valor_minimo;
    protected $valor_maximo;
    protected $eje_horizontal_etiqueta;
    protected $eje_horizontal_minimo;
    protected $eje_horizontal_maximo;

    /**
     * Definir eje horizontal
     *
     * @param string Etiqueta para el eje
     * @param float  Opcional, valor mínimo
     * @param float  Opcional, valor máximo
     */
    public function definir_eje_horizontal($etiqueta, $minimo = NULL, $maximo = NULL) {
        $this->eje_horizontal_etiqueta = $etiqueta;
        $this->eje_horizontal_minimo   = $minimo;
        $this->eje_horizontal_maximo   = $maximo;
    } // definir_eje_horizontal

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
            $mensaje->definir_mensaje_aviso('Gráfica de barras', $e->getMessage());
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
        $a[] = "      // GraficaBarrasWeb {$this->identificador}";
        // Google Charts
        $a[] = "      google.charts.setOnLoadCallback(elaborar{$this->identificador});";
        $a[] = "      function elaborar{$this->identificador}() {";
        $a[] = "          var data = google.visualization.arrayToDataTable([";
        $a[] = "              ['Etiqueta', 'Valor', { role: 'style' }, { role: 'annotation' }],";
        $b   = array();
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $b[] = sprintf("              ['%s', %s, '%s', '%s']", $etiqueta, $valor, $this->etiquetas_colores[$etiqueta], $valor.$this->post_nota);
        }
        $a[] = implode(",\n", $b);
        $a[] = "          ]);";
        $a[] = "          var options = {";
        $a[] = "            chartArea: { width: '60%' },";
        if ($this->titulo !== NULL) {
            $a[] = "            title: '{$this->titulo}',";
        }
        $b   = array();
        if ($this->eje_horizontal_etiqueta !== NULL) {
            $b[] = "title: '{$this->eje_horizontal_etiqueta}'";
        }
        if ($this->eje_horizontal_minimo !== NULL) {
            $b[] = "minValue: {$this->eje_horizontal_minimo}";
        }
        if ($this->eje_horizontal_maximo !== NULL) {
            $b[] = "maxValue: {$this->eje_horizontal_maximo}";
        }
        $a[] = sprintf("            hAxis: { %s },", implode(', ', $b));
        $a[] = "            legend: { position: 'none' }";
        $a[] = "          };";
        $a[] = "          var chart = new google.visualization.BarChart(document.getElementById('{$this->identificador}'));";
        $a[] = "          chart.draw(data, options);";
        $a[] = "      }";
        // Morris.js
    /*  $a[] = "if (typeof varGrafica{$this->identificador} === 'undefined') {";
        $a[] = "    varGrafica{$this->identificador} = Morris.Bar({";
        $a[] = "        element: '{$this->identificador}',";
        $a[] = "        data: [";
        foreach ($this->etiquetas_valores as $etiqueta => $valor) {
            $a[] = "            {y: '$etiqueta', a: $valor},";
        }
        $a[] = "        ],";
        $a[] = "        xkey: 'y',";
        $a[] = "        ykeys: ['a'],";
        $a[] = sprintf("        labels: ['%s'],", implode("', '", array_keys($this->etiquetas_valores)));
        $a[] = sprintf("        barColors: ['%s'],", implode("', '", $this->etiquetas_colores));
        $a[] = "        hideHover: false"; // false para mostrar siempre las leyendas en cada barra, true sólo cuando pasa el puntero
        $a[] = "    });";
        $a[] = "}"; */
        return implode("\n", $a);
    } // javascript

} // Clase GraficaBarrasWeb

?>
