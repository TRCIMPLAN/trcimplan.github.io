<?php
/*
 * SMIbeta - Primera Sesión Ordinaria
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
namespace Eventos;

/**
 * Clase PrimeraSesionOrdinaria
 */
class PrimeraSesionOrdinaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-04-18';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Primera Sesión Ordinaria';
        $this->nombre_menu   = 'Eventos';
        $this->directorio    = 'eventos';
        $this->archivo       = 'primera-sesion-ordinaria';
        $this->descripcion   = 'Primera Reunión Ordinaria del Consejo Directivo del Instituto Municipal de Planeación y Competitividad de Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Sesion, Reunion, Ordinaria';
        $this->imagen_previa = 'primera-sesion-ordinaria/imagen-previa.jpg';
        $this->categorias    = array('Sesiones');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><a href="primera-sesion-ordinaria/primera-sesion-ordinaria.jpg"><img src="primera-sesion-ordinaria/imagen.jpg"></a></span>

<p>El día nueve de abril del presente, se llevó acabo en las instalaciones de la sala de prensa del la Presidencia Municipal de Torreón, la primer Reunión Ordinaria del Consejo Directivo del IMPLAN con el firme propósito de generar acuerdos y estrategias que nos ayuden a planear el destino de nuestra ciudad y su zona metropolitana.</p>

<p>En punto de las 10:00 de la mañana el Consejo Directivo, integrado por ciudadanos distinguidos, miembros del Ayuntamiento, representantes Sectoriales, acompañados del personal del Instituto iniciamos la labor de organizar, proponer y planear el crecimiento de la región.</p>

<p>Durante la reunión se expuso de manera clara y precisa las funciones del Instituto Municipal de Planeación, lo que se busca y el papel que debe de jugar el Consejo, llegando a acuerdos que nos permitirán trabajar de manera inmediata por el mejoramiento de Torreón y su zona metropolitana a través de su modelo de ciudad: Metrópoli del Conocimiento Globalmente Competitivo.</p>
FINAL;
    } // constructor

} // Clase PrimeraSesionOrdinaria

?>
