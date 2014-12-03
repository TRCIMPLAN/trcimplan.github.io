<?php
/*
 * SMIbeta - Sectores de Innovación y Sofisticación
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
 * Clase SectoresInnovacionSofisticacion
 */
class SectoresInnovacionSofisticacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-07-03';
        $this->autor         = 'Lic. Rodrigo González Morales';
        $this->nombre        = 'Sectores de Innovación y Sofisticación';
        $this->nombre_menu   = 'Etiqueta';
        $this->directorio    = 'blog';
        $this->archivo       = 'sectores-innovacion-sofisticacion';
        $this->descripcion   = 'Análisis de los indicadores relativos a la innovación.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'sectores-innovacion-sofisticacion/imagen-previa.jpg';
        $this->categorias    = array('Innovación', 'Empresas');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="sectores-innovacion-sofisticacion/imagen.jpg"></span>

<p>El subíndice de sectores de innovación y sofisticación tiene a la cabeza a la ciudad de Monterrey, en el se consideran las capacidades de investigación y las certificaciones de las empresas. La ZML se ubica en el lugar 29, mientras Gómez Palacio, Torreón y Lerdo se ubican por encima de la calificación global, Matamoros se encuentra un poco por debajo, pero aún encima de la media de ciudades.</p>

<img class="img-responsive contenido-imagen" src="sectores-innovacion-sofisticacion/sofisticacion.png" alt="Sofisticación">

<p>El primer indicador es el único que considera datos municipales, como lo es el número de empresas, relacionando con la población económicamente activa. En este aspecto la distribución se da por tamaño y población, ya que Torreón cuenta con 32 empresas por cada mil personas de PEA, cercano a Cd. Obregón, Sonora quien registra 40.5. En ese orden siguen Gómez Palacio, Lerdo y Matamoros con 23, 13 y 8 empresas por cada mil PEA respectivamente.</p>

<img class="img-responsive contenido-imagen" src="sectores-innovacion-sofisticacion/indicadores.png" alt="Indicadores">

<p>Los siguientes indicadores consideran datos estatales ya que todos ellos provienen del Consejo Nacional de Ciencia y Tecnología, aunque son referenciados a datos municipales, usando variables como el propio número de empresas o la PEA. En este sentido Torreón es quien presenta más baja proporción en empresas certificadas, número de investigadores en el Sistema Nacional de Investigadores (SNI) así como patentes registradas, a pesar de que Durango presenta menores registros que Coahuila en estos aspectos, pero la proporción a su población es superior para Gómez Palacio y Lerdo. Este subíndice evidencia la necesidad de contar con registros a nivel municipal en cuanto a innovación.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase SectoresInnovacionSofisticacion

?>
