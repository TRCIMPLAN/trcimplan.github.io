<?php
/*
 * SMIbeta - Torreón, camino a la redensificación II
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
 * Clase TorreonCaminoRedensificacion2
 */
class TorreonCaminoRedensificacion2 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Torreón, camino a la redensificación II';
        $this->autor            = 'Arq. Teresita Benítez Saludado';
        $this->fecha            = '2014-10-23';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'torreon-camino-redensificacion-2';
        $this->imagen_previa    = 'torreon-camino-redensificacion-2/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="torreon-camino-redensificacion-2/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Retomo el tema de la redensificación de ciudades, y de Torreón en especial, pues como ya lo había presentado, las cifras nos indican como el territorio ocupado en la ciudad es siete veces contra tres del crecimiento poblacional de la década de 1970 a la fecha.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Blog');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<span class="contenido-imagen-previa"><img src="torreon-camino-redensificacion-2/imagen.jpg"></span>

<blockquote>
    <p><i>¨La planificación de una ciudad es más que un conjunto de ideas o de opiniones dispersas de los individuos que la habitan, la planificación es una ciencia, o mejor dicho, un conjunto de ciencias que estudian la ciudad, considerándola ya como un organismo físico, ya como una entidad moral¨.</i></p>
    <p class="pull-right">E. Gleaser.</p>
</blockquote>

<p>Retomo el tema de la redensificación de ciudades, y de Torreón en especial, pues como <a href="torreon-camino-redensificacion.html">ya lo había presentado</a>, las cifras nos indican como el territorio ocupado en la ciudad es siete veces contra tres del crecimiento poblacional de la década de 1970 a la fecha.</p>

<h3>¿Cuáles son los principales costos de la expansión urbana?</h3>

<p>La expansión urbana está inmersa en un proceso más amplio de construcción que crea beneficios al generar nuevo valor agregado y empleos en el corto plazo. Sin embargo, la expansión también tiene costos para toda la sociedad, que pueden distinguirse en tres tipos: los fiscales generados por la provisión de infraestructura y equipamiento por parte del gobierno; los impuestos a los individuos en la forma de costos de transporte y las externalidades negativas generadas por la expansión, que se reflejan en impactos de salud y ambientales.</p>

<p>Todos estos cuando son valorizados permiten comprender por qué existe la necesidad de planear las ciudades y contener la expansión urbana descontrolada, promoviendo las redensificaciones  y así eficientar más lo contenido en infraestructura de las ciudades.</p>

<h3>Cuál es la situación de Torreón a detalle:</h3>

<p>a) La densidad poblacional media urbana de Torreón al 2010* es de 81.3 habitantes por Hectárea, mientras que comparativamente, la ciudad de Aguascalientes, con una superficie urbana semejante a la de Torreón trae una densidad poblacional de 108.2 habitantes por Hectárea.</p>

<p>b) La densidad más alta que encontramos en la ciudad, según información porAgebs (INEGI) es de 368.8 habitantes por  Hectárea, 4.5 veces la media para la ciudad.</p>

<p>c) Estos Agebs se ubican en la parte sur, y sur-poniente de la ciudad, y corresponden a colonias populares, y conjuntos habitacionales institucionales.</p>

<p>d) La dispersión deja grandes espacios baldíos en medio de la ciudad, creando especulación inmobiliaria y acrecentando distancias a recorrer diariamente.</p>

<h3>Densidad de Población de Torreón en 2013</h3>

<p><a href="torreon-camino-redensificacion-2/densidades-poblacion.jpg"><img class="img-responsive contenido-imagen" src="torreon-camino-redensificacion-2/densidades-poblacion-1024.jpg" alt="Densidad de Población de Torreón"></a><br>
<span style="font-size:0.8em;">Elaboración en IMPLAN.</span></p>

<p>La expansión de la ciudad tiene un efecto directo sobre el bienestar de los individuos y los hogares laguneros, pues al tener que recorrer mayores distancias se incrementan los gastos en transporte y se reduce el ingreso disponible para otras necesidades que incrementen el bienestar de las familias.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase TorreonCaminoRedensificacion2

?>
