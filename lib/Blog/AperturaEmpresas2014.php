<?php
/*
 * SMIbeta - Apertura de Empresas 2014
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
namespace Blog;

/**
 * Clase AperturaEmpresas2014
 */
class AperturaEmpresas2014 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha de la forma AAAA-MM-DD
        $this->nombre        = 'Apertura de Empresas 2014';
        $this->autor         = 'Lic. Alicia Valdez Ibarra';
        $this->fecha         = '2014-09-24';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales)
        $this->archivo       = 'apertura-empresas-2014';
        $this->imagen_previa = 'apertura-empresas-2014/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="apertura-empresas-2014/encabezado.jpg">';
        // La descripción y categorías son para las redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Empresas', 'Doing Business', 'Competitividad');
        // No cambie lo siguiente. Es común para Análisis Publicados
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="apertura-empresas-2014/imagen.jpg"></span>

<p>La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año en el mes de julio. Datos obtenidos de Dirección de Apertura de Empresas y Ventanilla Universal de la Dirección General de Desarrollo Económico, muestran que durante los primeros siete meses del año 2014 se han creado 997 nuevas empresas, de las cuales 329 fueron creadas en julio, cifra superior a las 128 registradas en julio de 2013.</p>

<img class="img-responsive contenido-imagen" src="apertura-empresas-2014/01-apertura-empresas-2014.png" alt="Apertura de Empresas en Torreón en 2014">

<p>Entre los giros más frecuentes se encuentran los restaurantes y el comercio al por menor y al por mayor, los cuales en conjunto representan más del 50% de las empresas constituidas en Julio, mientras las oficinas administrativas participan con el 10%.</p>

<p>En cuanto al comportamiento general en la cantidad de aperturas, al comparar el número de negocios en los periodos de enero a julio de los últimos seis años se observa una tendencia positiva, a pesar de las disminuciones en 2011 y 2013.</p>

<img class="img-responsive contenido-imagen" src="apertura-empresas-2014/02-apertura-empresas-2009-2014.png" alt="Apertura de Empresas en Torreón de 2009 a 2014">

<p>Si bien el 2014 no fue el mejor año en la creación de nuevas empresas, sí lo ha sido en la generación de empleos. Una encuesta realizada por Ventanilla Universal a los contribuyentes durante el proceso de apertura revela que el número aproximado de empleos creados a partir de los nuevos negocios es de 6,193 en lo que va del año. La cantidad es mayor a la de los cinco años anteriores:</p>

<img class="img-responsive contenido-imagen" src="apertura-empresas-2014/04-aproximacion-empleos-generados.png" alt="Aproximación de Empleos Generados en Torreón de 2009 a 2014">
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase AperturaEmpresas2014

?>
