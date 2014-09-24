<?php
/*
 * SMIbeta - Infraestructura (Sectores precursores de clase mundial)
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
 * Clase Infraestructura
 */
class Infraestructura extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-06-26';
        $this->autor         = 'Lic. Rodrigo González Morales';
        $this->nombre        = 'Infraestructura (Sectores precursores de clase mundial)';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'infraestructura';
        $this->descripcion   = 'Análisis de los indicadores sobre infraestructura en tecnologías de la información, carreteras avanzadas y tasa de accidentes viales.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'infraestructura/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="infraestructura/imagen.jpg"></span>

<p>Este subíndice considera características que facilitan la inserción de una ciudad en estándares de ciudades de calidad mundial, como puede ser el acceso a Tecnologías de información o los sistemas de transporte integrado o BRT (Bus Rapid Transit), conocidos en México como Metrobús. Dado que algunos indicadores de un municipio aplican a toda la zona metropolitana como es el aeropuerto, la posición de la ZML (32) es superior a la de los cuatro municipios por separado.</p>

<img class="img-responsive contenido-imagen" src="infraestructura/infraestructura.png" alt="Infraestructura">

<p>Los primeros indicadores se orientan al acceso a tecnología en la vivienda, específicamente telefonía móvil y computadoras. En ambos indicadores al igual que en los servicios públicos en vivienda del subíndice de Sociedad es clara la brecha entre Torreón y el resto de municipios, sin embargo la telefonía móvil tiene una mayor penetración ya que aún en Lerdo que es quien cuenta con un menor registro es de 52 % muy superior al 38 % de La Piedad, que es la ciudad con menor penetración. En el caso de la computadora en vivienda Torreón se encuentra muy por encima de la media de ciudades e igual que Saltillo, por ejemplo con 29 % de viviendas con computadora. Sin embargo Gómez Palacio y Lerdo con 22 % y 21 % respectivamente se sitúan muy por debajo de la media nacional, al igual que Matamoros con 16 %.</p>

<img class="img-responsive contenido-imagen" src="infraestructura/indicadores.png" alt="Indicadores">

<p>En accidentes por mala condición del camino, el IMCO solamente presenta registro para Torreón con 4.85 accidentes por cada 100 mil habitantes. Por lo cual el resto de municipios registran 0 al igual que Xalapa y otras 20 ciudades que lideran este indicador.</p>

<p>En el caso del sistema integrado de autobuses o BRT, son sólo 7 ciudades los que cuentan con él, aunque el IMCO contabiliza también los sistemas en proceso de acuerdo a la Secretaría de Comunicaciones y Transportes. Este indicador tiene tal valor en la competitividad internacional de acuerdo al IMCO, que si sólo el municipio de Torreón contara con BRT, la calificación de la ZML en este subíndice pasaría de 43.67 a 72.24, y su lugar global del 44 al 31.</p>

<p>Otro indicador de este subíndice es el porcentaje de carretera avanzada (cuatro carriles) sobre el total de carretera en el cual por su localización el municipio de Torreón es el que menos aporta en este aspecto. Sin embargo los dos indicadores siguientes corresponden al aeropuerto y número de destinos aéreos con que cuenta el municipio de Torreón y que coloca a nuestra ZML entre las 20 ciudades con mejor conectividad aérea.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Infraestructura

?>
