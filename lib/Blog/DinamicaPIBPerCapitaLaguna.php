<?php
/*
 * SMIbeta - Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)
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
 * Clase DinamicaPIBPerCapitaLaguna
 */
class DinamicaPIBPerCapitaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)';
        $this->autor            = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha            = '2014-09-26T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'dinamica-pib-per-capita-laguna';
        $this->imagen           = 'dinamica-pib-per-capita-laguna/imagen.jpg';
        $this->imagen_previa    = 'dinamica-pib-per-capita-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Entre los indicadores Banamex de 2011 y 2014 el PIB per cápita de La Laguna creció 22.82%.';
        $this->claves           = 'IMPLAN, Torreon, PIB, Laguna';
        $this->categorias       = array('Empresas', 'Macroeconomía');
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
        $schema->image_show     = false; // No mostrar la imagen en el contenido
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>De acuerdo a los Indicadores Regionales de Actividad Económica de Banamex (IRAEs) 2011, 2014 el <strong>PIB de La Laguna (Zona Metropolitana)</strong> creció de 145.3 Miles de millones de pesos a 191.8 Mmp; es decir, <strong>subió 32%</strong> (IRAEs Banamex 2011,2014).</p>

<ul>
    <li>Cabe señalar que la información de IRAEs Banamex 2011 fue construida con datos del 2009. Y el del 2014 con datos del 2012 (IRAEs Banamex 2011, 2014).</li>
    <li>De acuerdo a los mismos indicadores disminuyó la participación del PIB Lagunero en el PIB Estatal y Nacional. Dichas participaciones eran de 42.5% y de 1.3%, respectivamente en 2009 y de 36.3% y 1.23% en 2012 (IRAEs Banamex 2011,2014).</li>
    <li>Entre los indicadores Banamex de 2011 y 2014 el <strong>PIB per cápita de La Laguna</strong> creció de 121,728 pesos anuales a 149,501 pesos anuales, lo que representó un <strong>incremento de 22.82%</strong> (IRAEs Banamex 2011,2014).</li>
</ul>

<h3>Asunto: Dinámica del PIB per cápita de las Zonas Metropolitanas de Saltillo y Durango (IRAEs Banamex 2011, 2014).</h3>

<ul>
    <li>El PIB per cápita de Saltillo creció 63.67% (IRAEs Banamex 2011, 2014).</li>
    <li>El PIB per cápita de Durango creció 29.67% (IRAEs Banamex 2011, 2014).</li>
</ul>

<img class="img-responsive contenido-imagen" src="dinamica-pib-per-capita-laguna/pib.png" alt="PIB per cápita en Torreón, Saltillo, Durango, años 2009 y 2012">

<h3>NOTAS:</h3>

<ul>
    <li>El INEGI no publica datos del PIB Municipal solamente publica datos estatales.</li>
    <li>Los datos del PIB Metropolitano publicados por Banamex fueron elaborados por el Departamento de Estudios Económicos del banco: <a href="http://www.banamex.com/resources/pdf/es/estudios_finanzas/mercados/publicacio nes/IRAE-2014-HD.pdf" target="_blank">IRAE-2014-HD.pdf</a>, <a href="http://www.banamex.com/resources/pdf/es/estudios_finanzas/mercados/publicacio nes/iraes-mar11.pdf" target="_blank">iraes-mar11.pdf</a>.</li>
    <li>LA INFORMACIÓN PROPORCIONADA POR EL IMPLAN NO FUE ESTIMADA NI PROYECTADA POR EL INSTITUTO. SE REPRODUJO FIELMENTE LA INFORMACIÓN DEL DEPARTAMENTO DE ESTUDIOS ECONÓMICOS DE BANAMEX.</li>
    <li>LA INFORMACIÓN PROPORCIONADA POR EL SIGLO DE TORREÓN (CAE RIQUEZA REGIONAL), PUBLICADA EL 25 DE SEPTIEMBRE DE 2014, SI UTILIZA INFORMACIÓN ESTIMADA, AL PROYECTAR EL PIB PER CÁPITA DEL 2008. DICHA ESTIMACIÓN PUEDE OBSERVARSE EN LA GRÁFICA INCLUIDA.</li>
    <li>LA ESTIMACIÓN 2008 QUE ALTERA LA TENDENCIA PUBLICADA POR EL SIGLO DE TORREÓN NO INDICA METODOLOGÍA ALGUNA, LO CUAL PONE EN DUDA SU ANÁLISIS.</li>
    <li>DESTACA EL HECHO DE QUE INFORMACIÓN DEL IMCO MUESTRA UNA TENDENCIA DE CRECIMIENTO DEL PIB DE LA LAGUNA Y DEL PIB DE TORREÓN. DE ACUERDO A LA BASE DE DATOS DEL ÚLTIMO ÍNDICE DE COMPETITIVIDAD URBANA DEL 2008 A 2012 EL PIB DE LA ZONA METROPOLITANA DE LA LAGUNA AUMENTO 8.42% Y LA DE TORREÓN 7.91%. LA COINCIDENCIA DE TENDENCIAS ENTRE EL IMCO Y BANAMEX, AMBAS INSTITUCIONES ESPECIALIZADAS Y CON AMPLIO RECONOCIMIENTO EN EL TEMA, NOS BRINDA CERTEZA DE QUE NO HAY INDICIOS DE UNA SUPUESTA CAÍDA EN LA RIQUEZA REGIONAL, SINO AL CONTRARIO LA INFERENCIA ES A LA ALZA.</li>
</ul>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase DinamicaPIBPerCapitaLaguna

?>
