<?php
/*
 * SMIbeta - Doing Business en Torreón
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
 * Clase DoingBusinessTorreon
 */
class DoingBusinessTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Doing Business en Torreón';
        $this->autor            = 'Lic. Alicia Valdez Ibarra';
        $this->fecha            = '2014-05-29T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'doing-business-torreon';
        $this->imagen_previa    = 'doing-business-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Este índice sirve para señalar en cual ciudad es más fácil hacer negaocios. En 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas.';
        $this->claves           = 'IMPLAN, Torreon, Doing Business';
        $this->categorias       = array('Competitividad', 'Empresas', 'Doing Business');
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
        $schema->image          = 'doing-business-torreon/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<span class="contenido-imagen-previa"><img src="doing-business-torreon/imagen.jpg"></span>

<p>El índice Doing Business en México 2014 fue presentado hoy en la Ciudad de México y publicado en el sitio oficial del proyecto del Banco Mundial, indicándonos en cuál ciudad es más fácil hacer negocios. El ranking evalúa a 32 ciudades de la república, una por cada entidad federativa en las áreas de: apertura de negocio, permiso de construcción, registro de propiedad y cumplimiento de contratos. En cada una de las áreas se califican factores como el número de trámites necesarios y los días y costos en que se incurre. El estudio fue realizado entre octubre de 2011 y Octubre de 2013.</p>

<p>El municipio de Torreón se encuentra dentro de las 32 ciudades calificadas en el índice, lo que nos permite comparar la facilidad de hacer negocios con otras ciudades de la república y del mundo, además de observar la evolución de los indicadores a través del tiempo. Al evaluar una ciudad de cada Estado, se está evaluando entro otros aspectos las leyes de cada uno de los estados y no sólo la normativa municipal. A continuación se presenta un breve resumen de los resultados en los tres último reportes publicados en 2007, 2012 y 2014.</p>

<h3>2007</h3>

<p>En el ranking subnacional de México en 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas por Doing Business. Como se observa en la tabla inferior, los mejores resultados de Torreón fueron en apertura de negocio y obtención de crédito, quedando en sexto lugar nacional en ambas categorías.</p>

<p>
  <img class="img-responsive contenido-imagen" src="doing-business-torreon/doing-business-2007.png" alt="Doing Business 2007"><br>
  Nota: En este año la metodología no incluía el área de permiso de construcción, evaluando en su lugar la obtención de crédito.<br>
  Fuente: Doing Business en México 2014.
</p>

<h3>2012</h3>

<p>En el índice 2012 Torreón se ubicó en el décimo lugar del índice, es decir subió tres lugares con respecto al 2007. El logro se debió en gran parte a la implementación de la ventanilla electrónica, la cual además de agilizar procesos, no tiene ningún costo.</p>

<p>En la tabla observamos cómo el tiempo para la apertura de negocios, registro de propiedades y ejecución de contratos disminuyó considerablemente.</p>

<p>
  <img class="img-responsive contenido-imagen" src="doing-business-torreon/doing-business-2012.png" alt="Doing Business 2012"><br>
  Nota: En este año la metodología incluye el área de permiso de construcción y elimina el área de obtención de créditos.<br>
  Fuente: Doing Business en México 2014.
</p>

<h3>2014</h3>

<p>Este año, Torreón descendió en el índice de facilidad para hacer negocios, ubicándose en el lugar 21. Sin embargo, algunos valores se conservaron respecto al año pasado e incluso otros mejoraron. Al analizar la tabla notamos cómo los indicadores del área de ejecución de contratos permanecieron iguales al 2012, mientras que los días en registro de propiedades y apertura de negocio disminuyeron.</p>

<p>Los indicadores que en realidad afectaron nuestra posición en el índice son los pertenecientes al área de permiso de construcción, así como el aumento en costos en la apertura de negocios y registro de propiedades.</p>

<p>
  <img class="img-responsive contenido-imagen" src="doing-business-torreon/doing-business-2014.png" alt="Doing Business 2014"><br>
  Fuente: Doing Business en México 2014.
</p>

<p>A pesar de nuestro lugar en el índice es importante considerar que los estándares nacionales se encuentran muy bien posicionados a nivel internacional, por lo que los valores de nuestros indicadores son competitivos al compararnos con países de América Latina e incluso con los países de la OCDE. Un ejemplo de esto son los resultados internacionales en materia de permiso de construcción, en dónde el mismo número de trámites cuesta aproximadamente 50% menos en nuestra ciudad y en una menor cantidad de tiempo:</p>

<p>
  <img class="img-responsive contenido-imagen" src="doing-business-torreon/permiso-construccion.png" alt="Permiso Construcción"><br>
  Fuente: doingbusiness.org
</p>

<p>Aunque estos datos nos ayudan a ubicarnos mejor en contexto el estar mejor que el resto de América Latina no quiere decir que debamos conformarnos, pues al tratar de atraer inversión o generar empleo con quien competimos realmente es con el resto de las ciudades de la república.</p>

<p>Los retos que presentan los indicadores para nuestro municipio abarcan aspectos tales como la mejora normativa municipal, la gestión para mejora regulatoria estatal, eficiencia judicial para el caso de ejecución de contratos e implementación de estrategias para la reducción de tramites con el uso de herramientas tecnológicas. Por ejemplo, en el caso específico de los permisos de construcción algunas medidas recomendadas son la digitalización de la cartografía y el mejorar la comunicación entre las dependencias gubernamentales.</p>

<p>C-Estrategia, consultora responsable del estudio en México anunció la posibilidad de que el estudio comience a realizarse anualmente por lo cual estamos en tiempo de emprender las políticas públicas necesarias.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase DoingBusinessTorreon

?>
