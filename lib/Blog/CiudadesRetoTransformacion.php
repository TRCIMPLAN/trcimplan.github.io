<?php
/*
 * SMIbeta - Las ciudades y el reto de su transformación
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
 * Clase CiudadesRetoTransformacion
 */
class CiudadesRetoTransformacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Las ciudades y el reto de su transformación';
        $this->autor            = 'Arq. Victoria Aranzábal';
        $this->fecha            = '2014-10-28';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'ciudades-reto-transformacion';
        $this->imagen_previa    = 'ciudades-reto-transformacion/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="ciudades-reto-transformacion/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'El futuro de la humanidad está intrínsecamente relacionado al futuro de las ciudades. A partir de la revolución industrial hubo una movilización de personas del campo a la ciudad, lo que trajo consigo una revolución urbana.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Infraestructura', 'Recursos Naturales', 'Bienestar');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<span class="contenido-imagen-previa"><img src="ciudades-reto-transformacion/imagen.jpg"></span>

<p>El futuro de la humanidad está intrínsecamente relacionado al futuro de las ciudades. A partir de la revolución industrial hubo una movilización de personas del campo a la ciudad, lo que trajo consigo una revolución urbana, para el 2008 el Fondo de Población de las Naciones Unidas declaró que desde ese momento, más del 50% de la población vivía en ciudades. Esta tendencia continúa en la mayor parte de los países, sobre todo del hemisferio sur, convirtiéndose en los principales puntos de concentración, presente y futura de la población.</p>

<p>Debido a este crecimiento exponencial y a los cambios globales, las urbes han enfrentado muchos retos y vivido fuertes transformaciones. La falta de capacidad de respuesta y la inadecuada toma de decisiones han conducido a las ciudades a diversas crisis económicas, sociales, ambientales, etc. pero… <em>“la ciudad no es el problema, es la solución”</em> (Jaime Lerner, ex presidente municipal de Curitiba, 2007)</p>

<p>En nuestro país, a inicios de 1900 únicamente el 10.30 % de la población urbana estaba distribuida en 33 ciudades, entre 1940-1950, el país contaba con 84 ciudades pasando del 20% al 28% al final de la década. En los años 80´s alrededor 6.8 millones de personas migraron del campo a la ciudad elevando el porcentaje de urbanización a un 55%, terminando la década en 63.4%.; por mencionar los movimientos más grandes del siglo. Torreón, por su parte, fue de las zonas urbanas que más creció a nivel nacional en la década de 1930-1940, y entre 1970-1980 formaba parte del polo central de concentración de población urbana nacional conformada por tan sólo 8 ciudades del país (Garza Villarreal 2002).</p>

<p>El espacio urbano hoy en día se caracteriza por la segregación socio-espacial, feminización de la pobreza, desintegración del tejido social, rezago en el abasto de servicios públicos, problemas ambientales, socio-culturales, desempleo, asentamientos irregulares, crisis laboral, violencia, entre otros problemas no menos importantes.</p>

<p>En la era de las ciudades, donde estas influyen en las relaciones políticas, económicas y sociales, un porvenir próspero para la humanidad depende de qué tan responsables y comprometidos seamos con las decisiones que se tomen hoy para construir el futuro sostenible, ciudades que signifiquen ganar-ganar para todos. Todos los días escuchamos, leemos y vemos crisis pero poco se habla de las soluciones tal vez porque, citando a Raimon Samso, <em>“las soluciones verdaderas suelen ser incómodas, piden cambio, exigen reinventarse…”</em>, pero reinvertirse ¿en qué o hacia dónde?. <em>“Donde no hay visión, el pueblo se extravía…”</em> (Salomón Proverbios 29:18).</p>

<p>¿Cuál es esa visión que tenemos para la Zona Metropolitana de la Laguna (ZML)?, ¿Cómo la vemos en 25 años?, ¿bajo qué condiciones la ZML será incluyente, sustentable, próspera, verde, limpia, etc.?, ¿estamos dispuestos a crearla? Una visión clara, de dónde estamos y hacia dónde vamos, apoyará a trazar objetivos y metas alcanzables con los cuales podamos identificar las acciones claves que funcionen como base para la toma de decisiones que permita a la ZML alcanzar un nivel de competitividad alto, con visibilidad nacional e internacional que ofrezca a sus ciudadanos y visitantes una buena calidad de vida.</p>

<p>A nivel mundial ciudades como Singapur, New York, Barcelona, París, Bilbao, Medellín, Santiago, Curitiba, entre otras, han generado para sí transformaciones exitosas encaminadas a un desarrollo sostenible. ¿Pero en donde radica la diferencia entre estas ciudades y las que no han logrado reinventarse?</p>

<p>Muchas ciudades han apostado por una participación ciudadana fuerte y amplia, que generó el compromiso y corresponsabilidad necesarios para transformar las ciudades como es el caso de Barcelona, Santiago y Medellín, además de la participación, Curitiba apostó por la educación sobre todo en los niños para lograr sus grandes objetivos, como lo fue la política ambiental. Singapur por su parte logro un salto del tercer al primer mundo en 30 años, a pesar de su tamaño, su carencia de recursos y su población, apostó por la construcción de capital social y fuertes cambios de mentalidad que llevaron a transformaciones económicas y sociales.</p>

<p>En todos los casos la planificación a largo plazo ha sido fundamental para el desarrollo de estas ciudades, una planificación que permita centrar energías y esfuerzos en proyectos a corto y mediano plazo, pensados para construir la metrópoli que la sociedad desea y está dispuesta a construir.</p>

<p>Para el desarrollo sustentable de la ZML no hay un único camino, no existe sólo un modelo de desarrollo, no hay sólo una respuesta, ni mucho menos verdades absolutas. Por ello el desarrollo de la Comarca Lagunera deberá ser manifestación de la sociedad que la vive, una visión donde quepan todas las visiones de los laguneros, acorde con su identidad y aspiraciones, deberá ser manifestación de los diversos intereses particulares, de otra manera no será sostenible.</p>

<p>Una trasformación hacia un desarrollo sustentable lleva tiempo y para ello se requiere una planeación a largo plazo que fomente la continuidad de los esfuerzos hacia las metas trazadas; y ante la rapidez en la que ocurren los cambios, habrá que identificar cuanto recurso (humano, social, económico, ambiental) debemos invertir a cada objetivo y meta, ante distintos escenarios posibles, con demandas crecientes y recursos limitados, haciendo cada vez más imperativo centrar las energías y esfuerzos a respuestas creativas e innovadoras orientadas a alcanzar objetivos y metas claras. Ciertamente un tema importante es la disponibilidad de los recursos, pero entonces ¿ya todo está perdido?, <em>“la creatividad inicia cuando le quitas un 0 al presupuesto”</em> (Jaime Lerner, ex presidente municipal de Curitiba, 2007).</p>

<p>A medida que pasa el tiempo las urbes toman cada vez más peso en el desarrollo global, la ZML ha dejado de jugar un papel preponderante como otrora a nivel nacional, las consecuencias del rápido crecimiento urbano del siglo pasado y la elecciones tomadas han dejado fuertes demandas y carencias, pero también han construido fortalezas. Lo más importante es que aquí como en Singapur, el pasado y la evidencia del presente nada tiene que ver con el futuro, la oportunidad de reinventarse, de visualizar el futuro deseable y de generar las acciones necesarias siempre está presente.</p>

<blockquote>“La locura es: seguir haciendo lo mismo y esperar resultados diferentes” (Albert Einstein)</blockquote>

<p>Garza Villarreal, Gustavo. Evolución de las ciudades mexicanas en el siglo XX. Datos, hechos y lugares. No. 19, 2002.</p>

<p>Lerner, Jaime (2007). A song of the city, en <a href="http://www.ted.com" target="_blank">www.ted.com</a>.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase CiudadesRetoTransformacion

?>
