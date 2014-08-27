<?php
/*
 * SMIbeta - Mapa inferior Config
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
    public $logotipo     = 'imagenes/implan-barra-mediano.png';
    protected $opciones  = array(
        'Blog'              => 'blog/index.html',
        'S.M.I.'            => 'smi/introduccion.html',
        'S.I.G.'            => 'sig/introduccion.html',
        'B.M.P.I.'          => 'proyectos/introduccion.html',
        'Institucional'     => 'institucional/index.html',
        'Consejo Directivo' => 'consejo-directivo/consejo-directivo.html',
        'Eventos'           => 'eventos/index.html',
        'Sala de Prensa'    => 'sala-prensa/index.html',
        'Contacto'          => 'contacto/contacto.html');
    protected $iconos = array(
        'Blog'              => 'fa fa-file-text-o',
        'S.M.I.'            => 'fa fa-bar-chart',
        'S.I.G.'            => 'fa fa-map-marker',
        'B.M.P.I.'          => 'fa fa-paper-plane-o',
        'Institucional'     => 'fa fa-university',
        'Consejo Directivo' => 'fa fa-users',
        'Comunicados'       => 'fa fa-volume-up',
        'Contacto'          => 'fa fa-phone');

} // Clase MapaInferiorConfig

?>
