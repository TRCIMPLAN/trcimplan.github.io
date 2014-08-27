<?php
/*
 * SMIbeta - DESCRIPCION
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
 * Clase Navegacion
 */
class Navegacion {

    protected $sitio_titulo = 'IMPLAN Torreón';
    protected $logotipo     = 'imagenes/implan-barra-logo-chico.png';
    protected $opciones     = array(
        'Blog' => 'blog/index.html',
        'Indicadores' => array(
            'Introducción al SMI'       => 'smi/introduccion.html',
            'Indicadores Torreón'       => 'indicadores-torreon/',
            'Indicadores Gómez Palacio' => 'indicadores-gomez-palacio/',
            'Indicadores Lerdo'         => 'indicadores-lerdo/',
            'Indicadores Matamoros'     => 'indicadores-matamoros/',
            'Indicadores La Laguna'     => 'indicadores-la-laguna/',
            'Categorías'                => 'smi-categorias/'),
        'Información Geográfica' => array(
            'Introduccion al SIG'   => 'sig/introduccion.html',
            'Abrir el SIG'          => 'sig/instrucciones.html',
            'Plan M. de Desarrollo' => 'sig/pmd.html',
            'Alumbrado Público'     => 'sig/alumbrado.html'),
        'Banco de Proyectos' => array(
            'Introducción al BMPI' => 'proyectos/introduccion.html',
            'Plata Laguna'         => 'proyectos/plata-laguna.html'),
        'Institucional' => array(
            'Visión / Misión'        => 'institucional/vision-mision.html',
            'Mensaje del Director'   => 'institucional/mensaje-director.html',
            'Quienes Somos'          => 'institucional/quienes-somos.html',
            'Estructura Orgánica'    => 'institucional/estructura-organica.html',
            'Transparencia'          => 'http://www.icai.org.mx/ipmn/Principal.php?sujeto=0',
            'Reglamentos'            => 'institucional/reglamentos.html',
            'Información Financiera' => 'institucional/informacion-financiera.html'),
        'Consejo Directivo' => array(
            'Integrantes'      => 'consejo-directivo/integrantes.html',
            'Agenda'           => 'consejo-directivo/agenda.html',
            'Comités Técnicos' => 'consejo-directivo/comites-tecnicos.html'),
        'Comunicados' => array(
            'Eventos'        => 'eventos/index.html',
            'Sala de Prensa' => 'sala-prensa/index.html'),
        'Contacto' => 'contacto/contacto.html');
    protected $iconos = array(
        'Blog'                   => 'fa fa-file-text-o',
        'Indicadores'            => 'fa fa-bar-chart',
        'Información Geográfica' => 'fa fa-map-marker',
        'Banco de Proyectos'     => 'fa fa-paper-plane-o',
        'Institucional'          => 'fa fa-university',
        'Consejo Directivo'      => 'fa fa-users',
        'Comunicados'            => 'fa fa-volume-up',
        'Contacto'               => 'fa fa-phone');

} // Clase Navegacion

?>
