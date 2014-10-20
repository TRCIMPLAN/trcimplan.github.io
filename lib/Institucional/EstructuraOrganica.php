<?php
/*
 * SMIbeta - Institucional Estructura Orgánica
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
namespace Institucional;

/**
 * Clase EstructuraOrganica
 */
class EstructuraOrganica extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-01';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Estructura Orgánica';
        $this->nombre_menu   = 'Estructura Orgánica';
        $this->directorio    = 'institucional';
        $this->archivo       = 'estructura-organica';
        $this->descripcion   = 'La Estructura Orgánica del IMPLAN Torréon está formada por el Consejo Directivo, los Comités Técnicos, el Director General Ejecutivo y el Cuerpo Técnico.';
        $this->claves        = 'IMPLAN, Torreon, Estructura, Organica, Consejo, Comites, Tecnicos, Director, Cuerpo';
     // $this->imagen_previa = '/imagenes/implan.jpg';
        $this->categorias    = array('Institucional');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="estructura-organica/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<p><img class="img-responsive" src="estructura-organica/estructura-organica.png" alt="Estructura Orgánica"></p>

<h3>Consejo Directivo</h3>

<p>Órgano representativo de la ciudadanía y el gobierno municipal para concertar los planes y la visión de ciudad a largo plazo.</p>

<h3>Comités Técnicos</h3>

<p>Grupos de trabajo plurales para temas específicos donde convergen ciudadanos, académicos, funcionarios y equipo técnico del instituto.</p>

<h3>Director General Ejecutivo</h3>

<p>Un miembro de la sociedad que enlaza y encausa la visión ciudadana y el conocimiento técnico.</p>

<h3>Cuerpo Técnico</h3>

<p>Personal altamente capacitado para instrumentar la investigación, planeación y proyectos estratégicos.</p>

<p><img class="img-responsive" src="estructura-organica/estructura-cuerpo-tecnico.png" alt="Cuerpo Técnico"></p>
FINAL;
    } // constructor

} // Clase EstructuraOrganica

?>
