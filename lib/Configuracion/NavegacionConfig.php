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
            'Plan Estratégico Metropolitano > Conoce el Plan' => 'plan-estrategico-metropolitano/introduccion.html',
            'Plan Estratégico Metropolitano > Mesa 1'         => 'plan-estrategico-metropolitano/mesa-1.html'),
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
        'Mesa 1'                    => 'fa fa-calendar',
        'Mesa 2'                    => 'fa fa-calendar-o',
        'Mesa 3'                    => 'fa fa-calendar-o',
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

} // Clase NavegacionConfig

?>
