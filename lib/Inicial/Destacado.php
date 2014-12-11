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
     *
     * @param  string Ruta relativa al archivo con la imagen
     * @param  string Título
     * @param  string Descripción
     * @param  array  Arreglo asociativo con los botones 'etiqueta' => 'URL'
     * @return string Código HTML
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
        $a[] = "            <h3><a href=\"$vinculo\">$titulo</a></h3>";
        $a[] = "            $descripcion";
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
     * Plan Estratégico Metropolitano
     *
     * @return string Código HTML
     */
    protected function pem() {
        return $this->twitter_bootstrap_thumbnail(
            'plan-estrategico-metropolitano/introduccion/imagen-previa-ancha.jpg',
            'Plan Estratégico Metropolitano',
            '<p>Súmate al esfuerzo de planeación participativa para atender la necesidad urgente de elevar el nivel de competitividad de La Laguna.</p>',
            array(
                '<i class="fa fa-sun-o"></i> Conoce el Plan'                  => 'plan-estrategico-metropolitano/introduccion.html',
                '<i class="fa fa-calendar"></i> Diagnóstico-Pronóstico'       => 'plan-estrategico-metropolitano/mesa-1.html',
                '<i class="fa fa-external-link"></i> Participación Ciudadana' => 'http://trcimplan.mx/plan'));
    } // pem

    /**
     * Sistema de Información Geográfica
     *
     * @return string Código HTML
     */
    protected function sig() {
        return $this->twitter_bootstrap_thumbnail(
            'sig/introduccion/imagen-previa-ancha.jpg',
            'Sistema de Información Geográfica',
            'La representación de datos de diversas fuentes sobre mapas georreferenciados para su fácil análisis constituye una excelente herramienta para todos.',
            array(
                '<i class="fa fa-map-marker"></i> Abrir el SIG'            => 'sig/abrir-sig.html',
                '<i class="fa fa-map-marker"></i> Alumbrado Público'       => 'sig/alumbrado-publico.html',
                '<i class="fa fa-map-marker"></i> Zonificación Primaria'   => 'sig/zonificacion-primaria.html',
                '<i class="fa fa-map-marker"></i> Zonificación Secundaria' => 'sig/zonificacion-secundaria.html'));
    } // sig

    /**
     * Sistema Metropolitano de Indicadores
     *
     * @return string Código HTML
     */
    protected function smi() {
        return $this->twitter_bootstrap_thumbnail(
            'smi/introduccion/imagen-previa-ancha.jpg',
            'Sistema Metropolitano de Indicadores',
            '<p>Mantenemos al día indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad para los municipios de la Laguna.</p>',
            array(
                '<i class="fa fa-table"></i> Por Región'             => 'smi/por-region.html',
                '<i class="fa fa-th-list"></i> Por Categoría'        => 'indicadores-categorias/index.html',
                '<i class="fa fa-map-marker"></i> Georreferenciados' => 'smi/georreferenciados.html'));
    } // smi

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
        // Primer columna
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $this->pem();
        $a[] = '      </div>';
        // Segunda columna
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $this->sig();
        $a[] = '      </div>';
        // Tercer columna
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $this->smi();
        $a[] = '      </div>';
        // Terminar las columnas
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
        return false;
    } // javascript

} // Clase Destacado

?>
