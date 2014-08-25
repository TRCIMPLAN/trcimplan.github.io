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
    protected $opciones     = array(
        'Institucional' => array(
            'Visión / Misión'        => 'institucional/vision-mision.html',
            'Mensaje del Director'   => 'institucional/mensaje-director.html',
            'Quienes Somos'          => 'institucional/quienes-somos.html',
            'Estructura Orgánica'    => 'institucional/estructura-organica.html',
            'Transparencia'          => 'http://www.icai.org.mx/ipmn/Principal.php?sujeto=0',
            'Reglamentos'            => 'institucional/reglamentos.html',
            'Información Financiera' => 'institucional/informacion-financiera.html'),
        'Servicios' => array(
            'Sistema Metropolitano de Indicadores' => 'smi/index.html',
            'Sistema de Información Geográfica'    => 'sig/index.html',
            'Banco Municipal de Proyectos'         => 'proyectos/banco-municipal-proyectos.html',
            'Cartera de Proyectos'                 => 'proyectos/cartera-proyectos.html'),
        'Interacción' => array(
            'Blog'    => 'blog/index.html',
            'Eventos' => 'eventos/index.html'),
        'Consejo Directivo' => array(
            'Consejo Directivo' => 'consejo-directivo/index.html',
            'Agenda'            => 'consejo-directivo/agenda.html',
            'Comités Técnicos'  => 'consejo-directivo/comites-tecnicos-agenda.html'),
        'Sala de Prensa' => 'sala-de-prensa/index.html',
        'Contacto'       => 'contacto/index.html');

} // Clase MapaInferiorConfig

?>
