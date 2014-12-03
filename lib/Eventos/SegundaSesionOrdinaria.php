<?php
/*
 * SMIbeta - Segunda Sesión Ordinaria - Presentacion SMI
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
 * Clase SegundaSesionOrdinaria
 */
class SegundaSesionOrdinaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-21';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Segunda Sesión Ordinaria - Presentación del Sistema Metropolitano de Indicadores';
        $this->nombre_menu   = 'Comunicados > Eventos';
        $this->directorio    = 'eventos';
        $this->archivo       = 'segunda-sesion-ordinaria';
        $this->descripcion   = 'Se presentó el Sistema Metropolitano de Indicadores, SMI, el cual es un banco de información sobre temas de interés de nuestra Ciudad y su área Metropolitana.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'segunda-sesion-ordinaria/imagen-previa.jpg';
        $this->categorias    = array('Plan Estratégico Metropolitano');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<img class="img-responsive contenido-imagen" src="segunda-sesion-ordinaria/imagen.jpg" alt="Segunda Sesión Ordinaria">

<p>El día de hoy en punto de las 8 de la mañana en el marco de la Segunda Sesión del Consejo Directivo del Instituto Municipal de Planeación y Competitividad de Torreón IMPLAN, se presentó el Sistema Metropolitano de Indicadores, SMI, el cual es un banco de información sobre temas de interés de nuestra Ciudad y su área Metropolitana.</p>

<p>El SMI, agrupa información e indicadores en temas como: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad, provenientes de fuentes primarias como el INEGI, SEGOB, CONAGUA así como organismos que generan indicadores como IMCO y CIDE, sin embargo también se cotejan fuentes directas procurando una periodicidad menor como Aeronáutica Civil, IMSS, CONACYT entre otros, aprovechando además los registros administrativos municipales y estatales, con información verificable y lo más oportuna posible.</p>

<p>Una de las funciones principales del SMI es brindar indicadores reales de cómo está la ciudad y donde hay que mejorar, una de las tareas principales del IMPLAN, mejorar el nivel de competitividad como ciudad y ser atractivo para las inversiones y de igual forma mejorar el nivel de vida de quienes la habitan.</p>

<p>Para seguir de cerca el SMI solo accede en el menú superior de la página o a través del siguiente <a href="http://trcimplan.gob.mx/smi/">enlace</a>.</p>
FINAL;
    } // constructor

} // Clase SegundaSesionOrdinaria

?>
