<?php
/*
 * SMIbeta - Productividad en la Zona Metropolitana de La Laguna
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
 * Clase ProductividadEnZML
 */
class ProductividadEnZML extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Productividad en la Zona Metropolitana de La Laguna';
        $this->autor            = 'Lic. Alicia Valdez Ibarra';
        $this->fecha            = '2014-07-01T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'productividad-zml';
        $this->imagen_previa    = 'productividad-zml/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Análisis de la productividad laboral, industria manufacturera y eficiencia del trabajo en la Zona Metropolitana de la Laguna.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Empresas', 'Empleo', 'Mercados');
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
        $schema->image          = 'productividad-zml/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>En 2011 el Centro de Investigación para el Desarrollo, A.C. (CIDAC) publicó el Índice de Productividad México, en el cual Coahuila califica en tercer lugar de las 32 entidades de la república según su eficiencia en el uso de los insumos de trabajo y capital.</p>

<p>CIDAC no realiza estudios de productividad a nivel municipal, sin embargo sí nos comparte su metodología, lo que nos permite realizar este análisis sobre la productividad en los municipios de la Zona Metropolitana de La Laguna.</p>

<p>En la gráfica y tabla inferiores se muestran los resultados del cálculo de productividad por sector de la zona y su comportamiento en el tiempo. Algunas observaciones relevantes son el aumento considerable de la productividad de los servicios financieros en el 2004 seguida por una gran disminución en 2009, así como el aumento de la productividad en la Industria manufacturera en 2009.</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/01-productividad-por-actividad.png" alt="Productividad por Actividad">

<img class="img-responsive contenido-imagen" src="productividad-zml/02-productividad-por-actividad-tabla.png" alt="Productividad por Actividad">

<p>Calculando ahora la productividad laboral por municipio encontramos a Torreón como el más productivo en el año 2009, a pesar de ser el único en presentar disminución en el 2004.</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/03-productividad-por-municipio.png" alt="Productividad por Municipio">

<img class="img-responsive contenido-imagen" src="productividad-zml/04-productividad-por-municipio-tabla.png" alt="Productividad por Municipio">

<p>En 2009 la actividad económica de la zona con mejor desempeño respecto a la media nacional fue la industria manufacturera, con una productividad 53.55% mayor a la media nacional.</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/05-productividad-media-nacional.png" alt="Productividad respecto a la media nacional">

<p>La industria manufacturera presentó también la mayor tasa de crecimiento entre 2004 y 2009, seguida por el sector de transporte y almacenamiento. Las tasas de dichos sectores fueron de 127.16% y 49.73% respectivamente.</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/06-productividad-cambio-por-sector.png" alt="Cambio en la productividad por sector">

<p>En cuanto a la eficiencia de capital, el sector con mayor desempeño respecto a la media nacional fue el de construcción, colocándose 146.54% arriba de ella.</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/07-capital-por-trabajador.png" alt="Capital por trabajador respecto a la media nacional">

<p>El sector de construcción presentó la mayor tasa de crecimiento de 2004 a 2009, en cuanto al capital por trabajador, la cual fue de 227.21%.</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/08-cambio-capital-por-trabajador.png" alt="Cambio en el capital por trabajador">

<p>De las gráficas anteriores notamos que los sectores con mayor eficiencia en el insumo de trabajo no son necesariamente los de mejor eficiencia en el capital. En la siguiente tabla hacemos la comparativa para el año 2009:</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/09-actividades-economicas.png" alt="Actividades económicas">

<p>Por último, al comparar los municipios de la zona con otras ciudades de la república, San Pedro Garza García es el número uno en productividad, seguido por Reynosa y Saltillo, mientras Torreón ocupa el cuarto lugar con 730 mil pesos por trabajador:</p>

<img class="img-responsive contenido-imagen" src="productividad-zml/10-productividad-laboral-comparativa.png" alt="Productividad laboral comparativa con otros municipios">

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase ProductividadEnZML

?>
