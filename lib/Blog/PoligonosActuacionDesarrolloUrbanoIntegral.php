<?php
/*
 * SMIbeta - Polígonos de Actuación para un Desarrollo Urbano Integral
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
 * Clase PoligonosActuacionDesarrolloUrbanoIntegral
 */
class PoligonosActuacionDesarrolloUrbanoIntegral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Polígonos de Actuación para un Desarrollo Urbano Integral';
        $this->autor         = 'Arq. Jair Miramontes Chávez';
        $this->fecha         = '2014-10-14';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'poligonos-actuacion-desarrollo-urbano-integral';
        $this->imagen_previa = 'poligonos-actuacion-desarrollo-urbano-integral/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="poligonos-actuacion-desarrollo-urbano-integral/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'El nuevo modelo de desarrollo urbano mexicano que se impulsa en el país es el de fomentar la consolidación de las ciudades y lograr que sean más competitivas, equilibradas, densas, prósperas, justas, seguras y sustentables.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Blog');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio    = 'blog';
        $this->nombre_menu   = 'Análisis Publicados';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="poligonos-actuacion-desarrollo-urbano-integral/imagen.jpg"></span>

<p>El nuevo modelo de desarrollo urbano mexicano que se impulsa en el país es el de fomentar la consolidación de las ciudades y lograr que sean más competitivas, equilibradas, densas, prósperas, justas, seguras y sustentables.</p>

<p>Para alcanzar este modelo, el Plan de Desarrollo Urbano de Torreón propone la implementación de polígonos de actuación como instrumento de planeación urbana.</p>

<h3>¿Que son los polígonos de actuación?</h3>

<p>Los polígonos de actuación son límites geográficos-espaciales del territorio definidos a partir de condicionantes o características similares del lugar, donde se pretende llevar a cabo acciones específicas de intervención urbana. Pueden ser zonas de influencia en la vida productiva de los habitantes, donde se aprovechen al máximo las ventajas de la urbanización, que generen un crecimiento coherente ordenado y compatible con la sustentabilidad ambiental y social.</p>

<p>Los polígonos se aplican a través de sistemas de actuación social, privada y por cooperación para el fomento y concertación de acciones, vinculados y regulados por la administración pública, dando prioridad a aquellos proyectos que tengan una orientación social.</p>

<p>Son susceptibles de definirse como polígonos de actuación:</p>

<ul>
    <li>Zonas que tienen terrenos sin construir, ubicados dentro de la mancha urbana, que cuentan con accesibilidad y servicios donde pueden llevarse a cabo proyectos de impacto urbano, apoyándose en programas de fomento social, económico y para la vivienda.</li>
    <li>Zonas habitacionales con potencial de mejoramiento, de población de bajos ingresos, con altos índices de deterioro y carencia de servicios urbanos, donde se requiere un fuerte impulso para equilibrar las condiciones y mejorar la integración con el resto de la ciudad.</li>
    <li>Áreas factibles de regeneración urbana, que cuentan con infraestructura vial y de transporte, y servicios urbanos adecuados, localizadas en zonas de gran accesibilidad, generalmente ocupadas por vivienda unifamiliar de uno o dos niveles con grados importantes de deterioro, las cuales podrían captar población adicional, un uso más densificado del suelo y ofrecer mejores condiciones de rentabilidad.</li>
    <li>Zonas industriales deterioradas o abandonadas que requieren reconvertirse para ser más competitivas y para evitar impactos ecológicos negativos, retomando la vocación y aprovechando la infraestructura del lugar.</li>
    <li>Áreas de conservación patrimonial que tienen valores históricos y culturales, así como en las que sin estar formalmente clasificadas como tales, presentan características de unidad formal que requieran atención especial para mantener y potenciar sus valores.</li>
    <li>Zonas susceptibles de rescate donde las condiciones naturales han sido alteradas por la presencia de usos inconvenientes o por el manejo indebido de recursos naturales y que requieren de acciones para restablecer en lo posible su condición original.</li>
    <li>Áreas naturales que no presentan alteraciones graves y que requieran medidas para el control del uso del suelo y para desarrollar en ellas actividades que sean compatibles con la función de preservar el ámbito natural.</li>
    <li>Zonas que por sus características, uso de suelo o vocación propician o conjugan los esfuerzos de los propietarios de predios para el desarrollo urbano.</li>
</ul>

<p>El Plan Director de Desarrollo Urbano de Torreón señala la implementación de polígonos de consolidación, crecimiento, mejoramiento, conservación y recreación que a su vez engloban subtemas específicos:</p>

<ul>
    <li>Polígonos de Consolidación:</li>
    <li>
        <ul>
            <li>Comercio y Servicios</li>
            <li>Comercio e Industria</li>
            <li>Desarrollo Social</li>
            <li>Educación y Desarrollo Tecnológico</li>
            <li>Vivienda</li>
        </ul>
    </li>
    <li>Polígonos de Crecimiento:</li>
    <li>
        <ul>
            <li>Agricultura Tecnificada</li>
            <li>Corredor Comercial</li>
            <li>Industria</li>
            <li>Vivienda</li>
        </ul>
    </li>
    <li>Polígonos de Mejoramiento:</li>
    <li>
        <ul>
            <li>Clúster de Salud</li>
            <li>Clúster de Cultura y Comercio</li>
            <li>Comercio</li>
            <li>Vivienda</li>
        </ul>
    </li>
</ul>

<h3>Polígonos de Conservación y Recreación</h3>

<p>La implementación de los polígonos de actuación se podrá realizar a través de políticas públicas e iniciativas privadas que le permitirán a Torreón transitar hacia un modelo de desarrollo urbano sustentable, integral e inteligente, procurando viviendas dignas y mejorando la calidad de vida de los torreonenses.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase PoligonosActuacionDesarrolloUrbanoIntegral

?>
