<?php
/*
 * SMIbeta - Gobiernos Eficaces y Eficientes
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
 * Clase GobiernosEficacesEficientes
 */
class GobiernosEficacesEficientes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Gobiernos eficaces y eficientes';
        $this->autor            = 'Lic. Rodrigo González Morales';
        $this->fecha            = '2014-06-12T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'gobiernos-eficaces-eficientes';
        $this->imagen           = 'gobiernos-eficaces-eficientes/imagen.jpg';
        $this->imagen_previa    = 'gobiernos-eficaces-eficientes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'La eficiencia de los gobiernos es el subíndice peor evaluado para la metrópoli ubicándonos en el lugar 63 de 77.';
        $this->claves           = 'IMPLAN, Torreon, Gobierno, Eficiente, Doing Business';
        $this->categorias       = array('Gobierno', 'Doing Business', 'Competitividad');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>Después del Sistema de Derecho, la eficiencia de los gobiernos es el subíndice peor evaluado para la metrópoli ubicándonos en el lugar 63 de 77. Esto resulta aún más significativo si consideramos que ambos subíndice eran fortalezas de la región en la primera edición del ICU en 2007. Lerdo y Matamoros de forma aislada se encuentran muy cercanos a la valoración de Tlaxcala, que es la ciudad peor evaluada del subíndice, mientras Torreón y Gómez Palacio ocupan posiciones superiores pero aun por debajo de la media.</p>

<img class="img-responsive contenido-imagen" src="gobiernos-eficaces-eficientes/gobierno.png" alt="Gobierno">

<p>Los primeros indicadores están relacionados a las finanzas públicas municipales, como es la proporción de deuda pública sobre el total de participaciones. Para el año de referencia (2010) la ZML presento un .08 de deuda, sin embargo Matamoros y Torreón mostraban deuda cero, mientras Gómez Palacio de un .13 y Lerdo de un .38, situándose en la parte baja del ranking pero aun muy lejos de 1.4 de endeudamiento sobre participaciones que presentan Tijuana o Cancún.</p>

<img class="img-responsive contenido-imagen" src="gobiernos-eficaces-eficientes/indicadores.png" alt="Indicadores">

<p>La proporción de ingresos propios de los municipios sobre su presupuesto de ingresos, muestra la solvencia e independencia financiera de un municipio. La ZML registró un 41 % de ingresos propios, sin embargo existen amplias diferencias entre municipios ya que mientras los dos municipios del estado de Durango muestran un alto porcentaje que ronda el 60 %, Torreón registró 33 % y Matamoros 16 % de ingresos propios. En cambio en el porcentaje de ingresos por predial Torreón registra 8 % lo cual se encuentra por encima de la media de ciudades, mientras Gómez Palacio, Lerdo y Matamoros presentan 6%, 3% y 2 % respectivamente, situando a la ZML con 6.8 %. El IMCO a partir de 2009 publica anualmente un Índice de Información Presupuestal, que evalúa la transparencia financiera de los municipios, y a su vez forma parte de los indicadores del subíndice de gobiernos eficaces. En 2010 este indicador califico con 5 sobre 100 a la ZML, siendo Gómez Palacio el único que obtuvo valoración superior a cero con 20 de 100.</p>

<p>La eficiencia gubernamental también es medida por la facilidad de sus trámites por lo cual considera dos indicadores más generados por Doing Business del Banco Mundial: apertura de un negocio y registro de una propiedad. Dichos indicadores se toman a nivel estatal por lo cual para la ZML se considera el promedio entra la calificación de Durango y Coahuila. Estos indicadores muestran una debilidad a nivel metropolitano y de los estados involucrados, ya que en ambos tanto la ZML como los cuatro municipios aparecen en las peores calificaciones, que tiene que ver con la mejora regulatoria y la duración de trámites que interfieren directamente en el dinamismo económico.</p>

<p>Otros indicadores de eficiencia de los gobiernos tienen que ver con la posibilidad de regular mercados y el crecimiento de la propia ciudad. El porcentaje de PEA en los mercados formales, representan a su vez la capacidad gubernamental de controlar la informalidad, en este sentido la ZML se encuentra a la par de la media nacional (53%) al igual que Torreón, lejos de niveles óptimos. Gómez Palacio registra 57 % de PEA en la economía formal, siendo el mejor valor de la Zona, sin embargo Lerdo y Matamoros tienen un rezago al registrar 42% y 43% respectivamente.</p>

<p>Se evalúa también a los gobiernos por su control del crecimiento urbano, ya que la compactación de las ciudades se considera un importante factor de competitividad. La información al respecto es a nivel metropolitano y muestra que entre 2005 y 2010 la mancha urbana de la ZML creció 1.3 veces más que su población, lo cual se relaciona con el último indicador de este subíndice que es la densidad poblacional, donde nos encontramos en la media de ciudades con 6,401 habitantes por kilómetro cuadrado.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase GobiernosEficacesEficientes

?>
