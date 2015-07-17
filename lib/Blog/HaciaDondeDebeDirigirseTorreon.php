<?php
/*
 * SMIbeta - Hacia dónde debe dirigirse Torreón
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
 * Clase HaciaDondeDebeDirigirseTorreon
 */
class HaciaDondeDebeDirigirseTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Hacia dónde debe dirigirse Torreón';
        $this->autor            = 'Lic. Alicia Valdez Ibarra';
        $this->fecha            = '2014-04-16T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'hacia-donde-debe-dirigirse-torreon';
        $this->imagen           = 'hacia-donde-debe-dirigirse-torreon/imagen.jpg';
        $this->imagen_previa    = 'hacia-donde-debe-dirigirse-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '¿En realidad generan más valor las actividades tecnológicas y de servicios?';
        $this->claves           = 'IMPLAN, Torreon, Actividades, Tecnológicas, Servicios';
        $this->categorias       = array('Empleo', 'Empresas');
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

<p>Con ayuda de la tecnología, la economía se ha mantenido en constante cambio a través del tiempo. El primer gran cambio fue con la revolución industrial en el siglo XVIII, ya que permitió la transición de una economía basada en actividades primarias como la agricultura y la extracción a una basada en la transformación, lo cual aporta mucho mayor valor a la economía. Fue entonces que las grandes potencias comenzaron a modernizarse, y a dejar atrás a otros países basados aun en la agricultura.</p>

<p>Hoy en día, los productos y servicios tecnológicos y de conocimiento han superado a la manufactura en la creación de valor, por lo que cada vez más países basan sus economías en productos y servicios tecnológicos de alto valor agregado. De hecho, en 2011 la mayoría de los países de la OCDE ya obtenía el 60% de su valor agregado bruto en actividades económicas de servicios. En contraste, en 2009 la economía de México aún generaba el 58.10% de su valor agregado a partir de actividades económicas de extracción y manufactura. El dato es preocupante, pues a este paso no podremos cerrar la brecha que nos separa de los países desarrollados, al contrario, seguiremos sirviéndoles de peldaño con la exportación de productos intermedios de poco valor y la importación de productos finales generadores de valor para las potencias.</p>

<p>Ya en este contexto, analizando al municipio de Torreón encontramos que la contribución de los servicios a la economía es muy pequeña en comparación con la industria manufacturera, lo cual nos indica que Torreón, al igual que México, aun basa su economía en el sector secundario. Los porcentajes de participación en el valor agregado de Torreón así como la distribución del empleo por actividad económica para el último año censal aparecen abajo en los gráficos A y B:</p>

<h3>Gráfico A</h3>

<p><img class="img-responsive contenido-imagen" src="hacia-donde-debe-dirigirse-torreon/01-valor-agregado-censal-bruto.png" alt="Valor Agregado Censal Bruto"><br>
Fuente: INEGI. Censos Económicos 2009.</p>

<h3>Gráfico B</h3>

<p><img class="img-responsive contenido-imagen" src="hacia-donde-debe-dirigirse-torreon/02-personal-ocupado-total.png" alt="Personal Ocupado Total"><br>
Fuente: INEGI. Censos Económicos 2009.</p>

<p>Como se observa en el gráfico A, la industria manufacturera aportó en 2009 el 63% del valor agregado del municipio, mientras que los servicios, en conjunto, aportaron 15%. Además, como es de esperarse, la mayoría de los empleos son también generados por ésta, dando empleo al 26% del personal ocupado. Por otro lado, el comercio al por menor y el conjunto de servicios emplean al 21 y 30 por ciento del personal, respectivamente.</p>

<p>Sin embargo, aun cuando la Industria genera un gran número de empleos, eso no significa que brinde los mejores salarios y oportunidades para el personal. Un estudio realizado por FOMEC en 2012 revela que el personal mejor pagado en La Laguna es el perteneciente al área de investigación y desarrollo, seguido por el área de las TICs (Tecnologías de Información y Comunicación) con salarios promedio de $ 25,968.42 y $ 21,127.78 mensuales respectivamente. En contraste, el salario recibido por el personal del área industrial es de tan sólo $ 14, 540.06. Esta diferencia en las retribuciones es una muestra de cómo se traduce el valor en la sociedad.</p>

<p>¿En realidad generan más valor las actividades tecnológicas y de servicios?</p>

<p>Según datos del último censo económico realizado por INEGI, de la producción bruta total de servicios profesionales, científicos y técnicos en el país, el 56.67% es valor agregado, en cambio el valor generado por la manufactura representa sólo un 30.36% de su producción. Además, la inversión total realizada en las actividades económicas de servicios es menor a la realizada en la manufactura y presenta un mejor rendimiento: por cada peso invertido en la industria manufacturera, se obtienen aproximadamente 12.51 pesos en valor agregado, contra 33.49 obtenidos por un peso invertido en la actividad económica de servicios profesionales, científicos y técnicos.</p>

<p>En cuanto al municipio de Torreón, los sectores de mayor valor agregado son también los pertenecientes al sector terciario, más específicamente las actividades de servicios educativos, servicios culturales y servicios profesionales y técnicos, los cuales, cabe resaltar, pertenecen a la nueva economía del conocimiento. En el diagrama de dispersión mostrado abajo, se encuentran las actividades económicas del municipio, ubicadas según su rentabilidad y su valor agregado como porcentaje de su producción.</p>

<p><img class="img-responsive contenido-imagen" src="hacia-donde-debe-dirigirse-torreon/03-valor-agregado-de-las-actividades-economicas-en-torreon.png" alt="Valor Agregado de las Actividades Económicas en Torreón"><br>
Fuente: INEGI. Censos Económicos 2009.</p>

<p>En el eje horizontal de la gráfica se mide la “rentabilidad” de las actividades económicas, en otras palabras, indica cuántos pesos se generan por cada peso invertido en la actividad económica correspondiente. Por ejemplo, en el caso de Torreón, los servicios profesionales, científicos y técnicos son los más rentables, pues por cada peso invertido en ellos se obtienen 70 pesos de valor agregado. Por su parte, el eje vertical nos indica el porcentaje de valor generado por cada actividad económica con respecto a su producción bruta total: en este caso los servicios educativos tienen el primer lugar en generación de valor, al añadir a la economía el 74% del valor de su producción.</p>

<p>Cabe resaltar la ubicación que ocupan en la gráfica las actividades primarias y secundarias como la agricultura, la construcción y la manufactura, siendo las que aportan menor valor agregado; la minería, por otro lado, se separa un poco del resto, aportando como valor casi el 40% de su producción.</p>

<p>La intención de mostrar la rentabilidad de las actividades no es abandonar la agricultura y la transformación para dedicarnos enteramente al comercio y los servicios, sino el añadir a estas actividades procesos de innovación que de verdad enriquezcan a nuestra sociedad, y para lograrlo, necesitamos invertir en tecnología, centros de investigación y desarrollo, educación y cultura, pues si nuestros profesionistas y técnicos no están preparados con los conocimientos y habilidades que una economía competitiva necesita, nunca podremos estar a la altura de las ciudades globalmente competitivas y peor aún si generamos el capital humano más no las condiciones para que se desarrollen en nuestra ciudad.</p>

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

} // Clase HaciaDondeDebeDirigirseTorreon

?>
