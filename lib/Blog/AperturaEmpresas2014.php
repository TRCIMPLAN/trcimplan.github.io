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
        // Título, autor y fecha
        $this->nombre           = 'Apertura de Empresas 2014';
        $this->autor            = 'Lic. Alicia Valdez Ibarra';
        $this->fecha            = '2014-09-24T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'apertura-empresas-2014';
        $this->imagen_previa    = 'apertura-empresas-2014/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.';
        $this->claves           = 'IMPLAN, Torreon, Apertura de empresas';
        $this->categorias       = array('Empresas', 'Doing Business', 'Competitividad');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = 'apertura-empresas-2014/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL
<p>La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año en el mes de julio. Datos obtenidos de Dirección de Apertura de Empresas y Ventanilla Universal de la Dirección General de Desarrollo Económico, muestran que durante los primeros siete meses del año 2014 se han creado 997 nuevas empresas, de las cuales 329 fueron creadas en julio, cifra superior a las 128 registradas en julio de 2013.</p>

<img class="img-responsive contenido-imagen" src="apertura-empresas-2014/01-apertura-empresas-2014.png" alt="Apertura de Empresas en Torreón en 2014">

<p>Entre los giros más frecuentes se encuentran los restaurantes y el comercio al por menor y al por mayor, los cuales en conjunto representan más del 50% de las empresas constituidas en Julio, mientras las oficinas administrativas participan con el 10%.</p>

<p>En cuanto al comportamiento general en la cantidad de aperturas, al comparar el número de negocios en los periodos de enero a julio de los últimos seis años se observa una tendencia positiva, a pesar de las disminuciones en 2011 y 2013.</p>

<img class="img-responsive contenido-imagen" src="apertura-empresas-2014/02-apertura-empresas-2009-2014.png" alt="Apertura de Empresas en Torreón de 2009 a 2014">

<p>Si bien el 2014 no fue el mejor año en la creación de nuevas empresas, sí lo ha sido en la generación de empleos. Una encuesta realizada por Ventanilla Universal a los contribuyentes durante el proceso de apertura revela que el número aproximado de empleos creados a partir de los nuevos negocios es de 6,193 en lo que va del año. La cantidad es mayor a la de los cinco años anteriores:</p>

<img class="img-responsive contenido-imagen" src="apertura-empresas-2014/04-aproximacion-empleos-generados.png" alt="Aproximación de Empleos Generados en Torreón de 2009 a 2014">
FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase AperturaEmpresas2014

?>
