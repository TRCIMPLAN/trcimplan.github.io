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
namespace Blog;

/**
 * Clase ZMLManejoSustentableDelMedioAmbiente
 */
class ZMLManejoSustentableDelMedioAmbiente extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-06-04';
        $this->autor         = 'Lic. Rodrigo González Morales';
        $this->nombre        = 'La Zona Metropolitana de La Laguna y sus municipios en manejo sustentable del medio ambiente';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'zml-manejo-sustentable-del-medio-ambiente';
        $this->descripcion   = 'De acuerdo al ICU 2012, en cuanto a medio ambiente La Laguna ocupa el lugar 35 de 77.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'zml-manejo-sustentable-del-medio-ambiente/imagen-previa.jpg';
        $this->categorias    = array('Blog');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="zml-manejo-sustentable-del-medio-ambiente/imagen.jpg"></span>

<p>De acuerdo al ICU 2012, en cuanto a medio ambiente La Laguna ocupa el lugar 35 de 77, con Gómez Palacio a un nivel equivalente al metropolitano y con Torreón con indicadores un poco mejores. Lerdo presenta valoraciones un poco inferiores a las de la ZML, mientras Matamoros de forma aislada ocuparía el antepenúltimo puesto con niveles similares al Valle de México.</p>

<img class="img-responsive contenido-imagen" src="zml-manejo-sustentable-del-medio-ambiente/medio-ambiente.png" alt="Medio Ambiente">

<p>El primer indicador de este subíndice se refiere a la sobre explotación del acuífero, donde solamente Lerdo no presenta una sobreexplotación del 100% según CONAGUA. En cuanto a consumo de agua por persona la ZML presenta mayor consumo que la media de ciudades, sin embargo Gómez Palacio y Lerdo presentan un consumo inferior. Nuestra ciudad (zona metropolitana) se encuentra entre las 15 con mayor proporción de aguas residuales tratadas, sin embargo Lerdo y Matamoros no presentaban tratamiento de aguas en el año de estudio.</p>

<p>El Índice de calidad del aire, retomado del Instituto Nacional de Ecología, muestra a los municipios de la ZML dentro de las ciudades que obtienen la máxima valoración. La valoración del manejo de residuos sólidos urbanos, pondera el peso de la economía ligada el reciclaje sobre el total de la economía, indicador en el cual Gómez Palacio y Torreón presenta niveles de economía de reciclaje superiores a la media, sin embargo Matamoros y especialmente Lerdo muestran este sector incipiente. En cuanto al porcentaje de disposición de residuos en rellenos sanitarios , la ZML tiene aún mucho que mejorar ya que a pesar de que Gómez Palacio y Lerdo cuentan con 90 % y Torreón 95 %, la meta realizable que tienen diez ciudades como Zacatecas o Nuevo Laredo es del 100 %, y Matamoros no registra ningún tipo de disposición. Relacionado también con el manejo de residuos es el indicador de aprovechamiento del biogás en rellenos sanitarios, que en el caso de la ZML ninguno de los municipios cuentan con algún tipo de aprovechamiento registrado.</p>

<img class="img-responsive contenido-imagen" src="zml-manejo-sustentable-del-medio-ambiente/indicadores.gif" alt="Indicadores">

<p>En el rubro de empresas certificadas como limpias por cada mil empresas, la ZML en lo general se encuentra por debajo de la media, sin embargo el peor indicador lo lleva el municipio de Torreón quien registra solo 3 de cada mil empresas certificadas. En cuanto a desastres naturales y emergencias industriales, no es un foco rojo en la región y especialmente en Torreón donde no se han registrado ni desastres ni emergencias industriales.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase ZMLManejoSustentableDelMedioAmbiente

?>
