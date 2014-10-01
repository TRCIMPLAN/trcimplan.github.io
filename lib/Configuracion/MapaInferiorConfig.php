<?php
/*
 * SMIbeta - Mapa Inferior Configuración
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
 * Clase MapaInferiorConfig
 */
class MapaInferiorConfig {

    public $sitio_titulo = 'IMPLAN Torreón';
    public $logotipo     = 'imagenes/implan-transparente-gris.png';
    protected $opciones  = array(
        'Análisis Publicados' => 'blog/index.html',
        'SMI'                 => 'smi/introduccion.html',
        'SIG'                 => 'sig/introduccion.html',
        'BMPI'                => 'proyectos/introduccion.html',
        'Institucional'       => 'institucional/index.html',
        'Consejo Directivo'   => 'consejo-directivo/consejo-directivo.html',
        'Eventos'             => 'eventos/index.html',
        'Sala de Prensa'      => 'sala-prensa/index.html',
        'Contacto'            => 'contacto/contacto.html');
    protected $iconos = array(
        'Análisis Publicados' => 'fa fa-lightbulb-o',
        'SMI'                 => 'fa fa-bar-chart',
        'SIG'                 => 'fa fa-map-marker',
        'BMPI'                => 'fa fa-paper-plane-o',
        'Institucional'       => 'fa fa-university',
        'Consejo Directivo'   => 'fa fa-users',
        'Comunicados'         => 'fa fa-volume-up',
        'Contacto'            => 'fa fa-phone');

} // Clase MapaInferiorConfig

?>
