<?php
/*
 * SMIbeta - DESCRIPCION
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
namespace SIG;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-08-01';
    //  $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Sistema de Información Geográfica';
        $this->nombre_menu   = 'Información Geográfica > Introducción';
        $this->directorio    = 'sig';
        $this->archivo       = 'introduccion';
        $this->descripcion   = 'Sistema de Información Geográfica del IMPLAN Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Informacion, Geografica, SIG, GIS';
    //  $this->imagen_previa = 'directorio/imagen-previa.jpg';
        $this->categorias    = array('SIG');
        $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="introduccion/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<p>Un Sistema de Información Geográfica (SIG) más que una importante herramienta tecnológica es una estructura de personas y equipos computacionales dedicados a la recopilación, procesamiento, almacenamiento y análisis de datos con información valiosa para una adecuada toma de decisiones.</p>

<p>La base de datos integrada al SIG, permitirá representar visualmente variables muy diversas (estadísticas, infraestructura, equipamiento, programas, proyectos) de distintas fuentes (imágenes de satélite, INEGI, CONEVAL, IMCO, IMPLAN y dependencias municipales) generando mapas de análisis, temáticos o informativos con datos de utilidad que permitan impulsar la competitividad de la ciudad y la zona metropolitana mediante la planeación a corto, mediano y largo plazo.</p>

<p>La principal característica de este sistema es que está diseñado para ser una herramienta que permita el acceso a la ciudadanía como medio de consulta de información de la situación del municipio y de la zona metropolitana.</p>

<p><img class="img-responsive contenido-imagen" src="introduccion/gis-01-relieve.jpg" alt="GIS Relieve"></p>

<p><img class="img-responsive contenido-imagen" src="introduccion/gis-02-poligonos-pobreza.jpg" alt="GIS Poligonos Pobreza"></p>

<p><img class="img-responsive contenido-imagen" src="introduccion/gis-03-poligonos-cruzados.jpg" alt="GIS Polígonos Cruzados"></p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Introduccion

?>
