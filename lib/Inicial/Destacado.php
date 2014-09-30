<?php
/*
 * SMIbeta - Destacado
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 */

// Namespace
namespace Inicial;

/**
 * Clase Destacado
 */
class Destacado {

    /**
     * Twitter Bootstrap Thumbnail
     */
    protected function twitter_bootstrap_thumbnail($imagen, $titulo, $descripcion, $botones) {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // En la imagen ancha usamos el primer vínculo
        $vinculo = current($botones);
        // Acumular
        $a[] = '        <div class="thumbnail">';
        $a[] = "          <a href=\"$vinculo\"><img class=\"img-thumbnail imagen-previa\" src=\"$imagen\" alt=\"$titulo\"></a>";
        $a[] = '          <div class="caption">';
        $a[] = "            <h3>$titulo</h3>";
        $a[] = "            <p>$descripcion</p>";
        $b = array();
        foreach ($botones as $etiqueta => $vinculo) {
            if (strpos($vinculo, 'http') === 0) {
                $b[] = "<a href=\"$vinculo\" target=\"_blank\" class=\"btn btn-default\" role=\"button\">$etiqueta</a>";
            } else {
                $b[] = "<a href=\"$vinculo\" class=\"btn btn-default\" role=\"button\">$etiqueta</a>";
            }
        }
        $a[] = sprintf("            <p>%s</p>", implode(' ', $b));
        $a[] = '          </div>';
        $a[] = '        </div>';
        // Entregar
        return implode("\n", $a)."\n";
    } // twitter_bootstrap_thumbnail

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '  <!-- DESTACADO -->';
        $a[] = '  <section id="destacado">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $this->twitter_bootstrap_thumbnail(
            'plan-estrategico-metropolitano/introduccion/imagen-previa-ancha.jpg',
            'Plan Estratégico Metropolitano',
            'Súmate al esfuerzo de planeación participativa para atender la necesidad urgente de elevar el nivel de competitividad de La Laguna.',
            array(
                'Conoce el Plan'       => 'plan-estrategico-metropolitano/introduccion.html',
                'Entrega tu propuesta' => 'http://trcimplan.mx/interaccion-web/index.php/722512/lang-es-MX'));
        $a[] = '      </div>';
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $this->twitter_bootstrap_thumbnail(
            'smi/introduccion/imagen-previa-ancha.jpg',
            'Sistema Metropolitano de Indicadores',
            'Indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad.',
            array(
                'Qué son los Indicadores' => 'smi/introduccion.html',
                'Categorías'              => 'indicadores-categorias/index.html'));
        $a[] = '      </div>';
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $this->twitter_bootstrap_thumbnail(
            'sig/introduccion/imagen-previa-ancha.jpg',
            'Reconversión Tecnológica Led del Alumbrado Público',
            'Consulta día a día el mapa del avance de Reconversión del Alumbrado Público de Torreón',
            array(
                'Mapa Reconversión a Led' => 'sig/alumbrado-publico.html',
                'Mapa Zonificación'       => 'sig/zonificacion.html'));
        $a[] = '      </div>';
        $a[] = '    </div>'; // row
        $a[] = '  </section>';
        // Entregar
        return implode("\n", $a)."\n";
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Destacado

?>
