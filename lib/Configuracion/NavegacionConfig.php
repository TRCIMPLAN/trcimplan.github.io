<?php
/*
 * SMIbeta - Navegación Configuración
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
namespace Configuracion;

/**
 * Clase NavegacionConfig
 */
class NavegacionConfig {

    protected $sitio_titulo = 'IMPLAN Torreón';
    protected $logotipo     = 'imagenes/implan-barra-logo-chico-gris.png';
    protected $opciones     = array(
        'Análisis Publicados' => 'blog/index.html',
        'Plan Estratégico Metropolitano' => array(
            'Conoce el Plan'         => 'plan-estrategico-metropolitano/introduccion.html',
            'Buen Gobierno'          => 'plan-estrategico-metropolitano/buen-gobierno-coordinacion-metropolitana.html',
            'Desarrollo Económico'   => 'plan-estrategico-metropolitano/desarrollo-economico-innovacion.html',
            'Desarrollo Social'      => 'plan-estrategico-metropolitano/desarrollo-social.html',
            'Entorno Urbano'         => 'plan-estrategico-metropolitano/entorno-urbano.html',
            'Movilidad y Transporte' => 'plan-estrategico-metropolitano/movilidad-transporte.html',
            'S. y Medio Ambiente'    => 'plan-estrategico-metropolitano/sustentabilidad-medio-ambiente.html'),
        'Indicadores' => array(
            'Introducción al SMI'       => 'smi/introduccion.html',
            'Categorías'                => 'indicadores-categorias/index.html',
            'Indicadores Torreón'       => 'indicadores-torreon/index.html',
            'Indicadores Gómez Palacio' => 'indicadores-gomez-palacio/index.html',
            'Indicadores Lerdo'         => 'indicadores-lerdo/index.html',
            'Indicadores Matamoros'     => 'indicadores-matamoros/index.html',
            'Indicadores La Laguna'     => 'indicadores-la-laguna/index.html'),
        'Información Geográfica' => array(
            'Introduccion al SIG' => 'sig/introduccion.html',
            'Alumbrado Público'   => 'sig/alumbrado-publico.html',
            'Zonificación'        => 'sig/zonificacion.html',
            'Abrir el SIG'        => 'sig/abrir-sig.html'),
        'Banco de Proyectos' => array(
            'Introducción al BMPI' => 'proyectos/introduccion.html',
            'Plata Laguna'         => 'proyectos/plata-laguna.html'),
        'Institucional' => array(
            'Visión / Misión'        => 'institucional/vision-mision.html',
            'Mensaje del Director'   => 'institucional/mensaje-director.html',
            'Quienes Somos'          => 'institucional/quienes-somos.html',
            'Estructura Orgánica'    => 'institucional/estructura-organica.html',
            'Reglamentos'            => 'institucional/reglamentos.html',
            'Información Financiera' => 'institucional/informacion-financiera.html',
            'Transparencia'          => 'http://www.icai.org.mx/ipmn/dependencias/impyc'),
        'Consejo Directivo' => 'consejo-directivo/integrantes.html',
        'Comunicados' => array(
            'Eventos'        => 'eventos/index.html',
            'Sala de Prensa' => 'sala-prensa/index.html'),
        'Contacto' => 'contacto/contacto.html');
    protected $iconos = array(
        'Análisis Publicados'       => 'fa fa-lightbulb-o',
        'Buen Gobierno'             => 'fa fa-university',
        'Desarrollo Económico'      => 'fa fa-usd',
        'Desarrollo Social'         => 'fa fa-users',
        'Entorno Urbano'            => 'fa fa-building',
        'Movilidad y Transporte'    => 'fa fa-car',
        'S. y Medio Ambiente'       => 'fa fa-leaf',
        'Indicadores'               => 'fa fa-area-chart',
        'Introducción al SMI'       => 'fa fa-file-text-o',
        'Categorías'                => 'fa fa-th-list',
        'Indicadores Torreón'       => 'fa fa-table',
        'Indicadores Gómez Palacio' => 'fa fa-table',
        'Indicadores Lerdo'         => 'fa fa-table',
        'Indicadores Matamoros'     => 'fa fa-table',
        'Indicadores La Laguna'     => 'fa fa-table',
        'Información Geográfica'    => 'fa fa-map-marker',
        'Introduccion al SIG'       => 'fa fa-file-text-o',
        'Banco de Proyectos'        => 'fa fa-check-square',
        'Plata Laguna'              => 'fa fa-certificate',
        'Institucional'             => 'fa fa-building-o',
        'Consejo Directivo'         => 'fa fa-users',
        'Comunicados'               => 'fa fa-comments',
        'Eventos'                   => 'fa fa-folder-o',
        'Sala de Prensa'            => 'fa fa-folder-o',
        'Contacto'                  => 'fa fa-phone');
/*
 * Indicadores:            <i class="fa fa-area-chart"></i>
 * Introducción al SMI:    <i class="fa fa-file-text-o"></i>
 * Categorias:             <i class="fa fa-th-list"></i>
 * Información geográfica: <i class="fa fa-map-marker"></i>
 * Introducción al SIG:    <i class="fa fa-file-text-o"></i>
 * Abrir el SIG:           <i class="fa fa-crosshairs"></i>
 * Banco de Proyectos:     <i class="fa fa-check-square"></i>
 * Introducción al BMPI:   <i class="fa fa-file-text-o"></i>
 * Plata Laguna:           <i class="fa fa-certificate"></i>
 * Institucional:          <i class="fa fa-building-o"></i>
 * Comunicados:            <i class="fa fa-comments"></i>

    protected $iconos = array(
        'Análisis Publicados'       => 'fa fa-lightbulb-o',
        'Indicadores'               => 'fa fa-bar-chart',
        'Categorías'                => 'fa fa-tags',
        'Indicadores Torreón'       => 'fa fa-table',
        'Indicadores Gómez Palacio' => 'fa fa-table',
        'Indicadores Lerdo'         => 'fa fa-table',
        'Indicadores Matamoros'     => 'fa fa-table',
        'Indicadores La Laguna'     => 'fa fa-table',
        'Información Geográfica'    => 'fa fa-map-marker',
        'Banco de Proyectos'        => 'fa fa-paper-plane-o',
        'Institucional'             => 'fa fa-university',
        'Consejo Directivo'         => 'fa fa-users',
        'Comunicados'               => 'fa fa-volume-up',
        'Eventos'                   => 'fa fa-folder-o',
        'Sala de Prensa'            => 'fa fa-folder-o',
        'Contacto'                  => 'fa fa-phone');

 */
} // Clase NavegacionConfig

?>
