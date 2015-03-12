<?php
/*
 * SMIbeta - Economía Estable
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
 * Clase EconomiaEstable
 */
class EconomiaEstable extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Economía Estable';
        $this->autor            = 'Lic. Rodrigo González Morales';
        $this->fecha            = '2014-06-24T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'economia-estable';
        $this->imagen_previa    = 'economia-estable/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Análisis de las variables macroeconómicas como crédito, mercado hipotecario, cartera vencida, PIB y desempleo.';
        $this->claves           = 'IMPLAN, Torreon, Macroeconomia, Credito, Mercado, Hipotecario, Cartera Vencida, PIB, Desempleo';
        $this->categorias       = array('Macroeconomía', 'Empleo', 'Empresas');
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
        $schema->image          = 'economia-estable/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>Las variables macroeconómicas locales son registradas en ICU por este subíndice en el cual la ZML ocupa el lugar 31, mientras los municipios de Gómez Palacio y Torreón ocuparían por si solos las posiciones 21 y 22 respectivamente. Lerdo se encuentra por debajo de la media de ciudades en la posición 52 y Matamoros en la 73, reflejando el tamaño del mercado hipotecario y de crédito en cada municipio, así como la producción entre otros indicadores.</p>

<p>La información proveniente de la Comisión Nacional Bancaría y de Valores es fuente fundamental de información para este subíndice. El crédito al sector primado para la ZML representa $ 15,510 pesos por habitante ocupando el octavo puesto nacional, solo por debajo de Culiacán, Valle de México, Monterrey, Tampico-Pánuco, Cancún, Ciudad del Carmen y Chihuahua. Sin embargo destaca que Gómez Palacio, por si solo ocuparía el primer lugar nacional con otorgamiento de crédito de $35,115, pesos per cápita, y Torreón a pesar de promediar una cifra considerablemente menor ocuparía también un lugar muy por encima de la media en el lugar 11.</p>

<img class="img-responsive contenido-imagen" src="economia-estable/economia.png">

<p>En cuanto al tamaño hipotecario representado por los créditos por cada mil habitantes, la ZML se encuentra en competitividad media, mientras Torreón ocuparía el lugar 10 por sí solo.</p>

<img class="img-responsive contenido-imagen" src="economia-estable/indicadores.png">

<p>Ya que sólo cuentan con aproximaciones del PIB municipal, la tasa de crecimiento del PIB estatal nos da una idea del crecimiento de los municipios, indicador en el que la ZML ocupa el lugar 66, con una tasa de 0.0044. Dicha tasa fue obtenida del promedio de los estados de Coahuila y Durango, los cuales crecieron 0.0027 y 0.0086 respectivamente. Con una tasa de 0.037 Tabasco es el estado con mayor tasa de crecimiento, por lo que tanto el municipio de Cárdenas como Villahermosa tienen los mejores resultados del indicador.</p>

<p>Por último, en el tema de desempleo la ZML se ubica el lugar 58, siendo desempleados el 7.5% de la PEA. Dentro de la Zona Metropolitana el municipio con menor tasa de desempleo es Lerdo, con 4.4% de la PEA. A nivel nacional, la menor tasa de desempleo es de 2.06% en la zona metropolitana de Guaymas, Sonora.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase EconomiaEstable

?>
