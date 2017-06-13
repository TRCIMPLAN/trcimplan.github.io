<?php
/**
 * TrcIMPLAN Sitio Web - Servicios
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

namespace PaginaInicial;

/**
 * Clase Servicios
 */
class Servicios {

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // SMI
        $smi              = new \PaginaInicial\Destacado();
        $smi->name        = 'Sistema Metropolitano de Indicadores';
        $smi->description = 'Mantenemos al día indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad para los municipios de la Laguna.';
        $smi->image       = 'servicio-smi';
        $smi->url         = 'indicadores-categorias/index.html';
        $smi->botones     = array(
            '<i class="fa fa-th-list"></i> Por Categoría'        => 'indicadores-categorias/index.html',
            '<i class="fa fa-table"></i> Por Región'             => 'smi/por-region.html',
            '<i class="fa fa-map-marker"></i> Georreferenciados' => 'smi-georreferenciados/index.html');
        // SIG
        $sig              = new \PaginaInicial\Destacado();
        $sig->name        = 'Sistema de Información Geográfica';
        $sig->description = 'La representación de datos de diversas fuentes sobre mapas georreferenciados para su fácil análisis constituye una excelente herramienta para todos.';
        $sig->image       = 'servicio-sig';
        $sig->url         = 'sig-mapas-torreon/index.html';
        $sig->botones     = array(
            '<i class="fa fa-server"></i> Planes'                      => 'sig-planes/index.html',
            '<i class="fa fa-map-marker"></i> S.I.G. de Torreón'       => 'sig-mapas-torreon/index.html',
            '<i class="fa fa-map-marker"></i> Zonificación Secundaria' => 'sig-mapas-torreon/zonificacion-secundaria.html');
        // PET
        $pet              = new \PaginaInicial\Destacado();
        $pet->name        = 'Plan Estratégico Torreón 2040';
        $pet->description = 'Súmate al esfuerzo de planeación participativa para atender la necesidad urgente de elevar el nivel de competitividad de La Laguna.';
        $pet->image       = 'servicio-pet';
        $pet->url         = 'pet/introduccion.html';
        $pet->botones     = array(
            '<i class="fa fa-list-ul"></i> Índice General'           => 'pet/indice.html',
            '<i class="fa fa fa-font"></i> Índice Alfabético'        => 'pet/index.html',
            '<i class="fa fa-download"></i> Descargar'               => 'plan-estrategico-torreon-enfoque-metropolitano-2040/index.html',
            '<i class="fa fa-calendar"></i> Descripción del Proceso' => 'plan-estrategico-metropolitano/descripcion-del-proceso.html',
            '<i class="fa fa-check-square"></i> Proyectos'           => 'proyectos/index.html');
        // Acumular
        $a   = array();
        $a[] = '  <section id="destacado">';
        $a[] = '    <div class="row">';
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $smi->html();
        $a[] = '      </div>';
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $sig->html();
        $a[] = '      </div>';
        $a[] = '      <div class="col-sm-6 col-md-4">';
        $a[] = $pet->html();
        $a[] = '      </div>';
        $a[] = '    </div>';
        $a[] = '  </section>';
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return NULL;
    } // javascript

} // Clase Servicios

?>
