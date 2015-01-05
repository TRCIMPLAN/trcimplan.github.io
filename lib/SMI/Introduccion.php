<?php
/*
 * SMIbeta - SMI Introducción
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
namespace SMI;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Sistema Metropolitano de Indicadores';
     // $this->autor            = 'Autor';
        $this->fecha            = '2014-05-15';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'introduccion';
     // $this->imagen_previa    = 'introduccion/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="introduccion/encabezado.jpg">';
        $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Introducción al Sistema Metropolitano de Indicadores del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon, Indicadores, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        $this->categorias       = array('SMI');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'smi';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Indicadores > Introducción';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FINAL
<div class="row">
  <div class="col-md-4">
    <table>
      <tr>
        <td><a href="../indicadores-categorias/index.html"><img src="introduccion/icono-sistema.png" alt="Sistema Metropolitano de Indicadores"></a></td>
        <td><a href="../indicadores-categorias/index.html">Sistema Metropolitano de Indicadores</a></td>
      </tr>
      <tr>
        <td><a href="introduccion/competitividad-zml-de-acuerdo-al-imco.pdf"><img src="introduccion/icono-documento.png" alt=""></a></td>
        <td><a href="introduccion/competitividad-zml-de-acuerdo-al-imco.pdf">Competitividad de la ZML de acuerdo al IMCO<br>(archivo PDF 0.7 MB)</a></td>
      </tr>
      <tr>
        <td><a href="introduccion/smi.pdf"><img src="introduccion/icono-presentacion.png" alt=""></a></td>
        <td><a href="introduccion/smi.pdf">Presentación del Sistema Metropolitano de Indicadores<br>(archivo PDF 9.3 MB)</a></td>
      </tr>
    </table>
  </div>
  <div class="col-md-8">
    <h3>¿Qué es el Sistema Metropolitano de Indicadores (SMI)?</h4>
    <p>Es un banco de información sobre los temas de interés de nuestra ciudad y su zona metropolitana, para conocer el estado de distintos fenómenos comparables en el tiempo, pero también con otras ciudades y con estándares internacionales.</p>
    <h3>¿Por ejemplo?</h4>
    <p>Torreón tiene un Índice de Desarrollo Humano (IDH) .897, y eso ¿es mucho o es poco? Depende, en un país cercano como Guatemala es de .581 y en Estados Unidos .937, Torreón se encuentra a niveles superiores que Polonia o Portugal. En México el IDH que mide aspectos de ingresos, salud y educación, nos muestra que Torreón ocupa el lugar 35 de entre los 2443 municipios medidos para México, mientras Atlixtac, Guerrero tiene .455 y San Pedro Garza García .909.</p>
    <h3>¿Para qué sirve el SMI?</h4>
    <p>El SMI ordena y recopila información dispersa para convertirla en conocimiento útil, para que el gobierno, empresas y sociedad conozcan las condiciones de nuestra ciudad y así sepamos hacia donde orientar nuestras acciones, y con el tiempo podamos medir el impacto no sólo de las políticas públicas sino también de los proyectos empresariales y las iniciativas sociales.</p>
    <h3>¿Qué metodología utiliza?</h4>
    <p>El SMI retoma metodologías probadas por instituciones expertas en diversos temas y mide lo mismo que toman en cuenta organizaciones como el Instituto Mexicano para la Competitividad (IMCO) o el Centro de investigación y Docencia Económica (CIDE) para medir la capacidad de Torreón y La Laguna para atraer y retener inversiones y talentos. Pero no solo eso, usará los mismos métodos del Programa de Naciones Unidas para el Desarrollo (PNUD) para medir el Índice de Desarrollo Humano de nuestra población y replicará las herramientas del Banco Mundial para medir la facilidad para abrir un negocio. Considera además estándares internacionales como los puestos por la Organización Mundial de la Salud para prevenir riesgos sanitarios o la OCDE para asegurar que la educación tenga la calidad a la atura de la aldea global.</p>
    <h3>¿Cómo se organiza la Información?</h4>
    <p>El SMI agrupa información e indicadores en 5 grandes temas: Seguridad, Gobierno, Sustentabilidad, Economía y Sociedad, que son los gabinetes en los que se agrupa según el Reglamento Orgánico del Municipio de Torreón, la política pública en nuestra ciudad y a su vez son los ejes del Plan Municipal de Desarrollo 2014-2017, retomados de la Norma ISO 18091 para Gobiernos Confiables, aprobada en Suiza a inicios de este año.</p>
    <p>Sin embargo el sistema es flexible y agrupará paulatinamente indicadores de acuerdo a otras clasificaciones para poder compararnos con otras ciudades y facilitar el trabajo de organismos nacionales e internacionales que se interesan por el estado de nuestra ciudad. Es decir esta misma información contiene y puede agruparse en los 10 subíndices de competitividad del IMCO, los 4 componentes de las ciudades competitivas según el CIDE o las 5 dimensiones inteligentes que propone Smart Cities, entre otros.</p>
    <h3>¿De dónde Proviene la información?</h4>
    <p>La información se recopila de fuentes primarias como el INEGI, SEGOB, CONAGUA, así como organismos que generan indicadores como IMCO o CIDAC, sin embargo también  vamos a las fuentes directas procurando una periodicidad menor como Aeronáutica Civil, IMSS, CONACYT, entre otros, aprovechando además los registros administrativos municipales y estatales, con información verificable, para generar información lo más oportuna posible.</p>
    <p>Con esta información el SMI calculará indicadores con metodologías transparentes y promoviendo los datos abiertos, para que observatorios ciudadanos, otros investigadores, estudiantes, académicos y cualquier persona pueda construir sus propios estudios e investigaciones</p>
    <h3>¿De cuantos indicadores consta el SMI?</h4>
    <p>El sistema se compondrá de cuantos indicadores con información verificable se puedan contruir. Su primer publicación consta de 96 indicadores, sin embargo se irán sumando constantemente otros indicadores ya concentrados como los 60 indicadores del Índice de Competitividad Urbana (ICU) 2012 del IMCO y próximamente los 30 nuevos indicadores que contendrá el ICU 2014. Así mismo se irán complementando las series históricas y proyecciones de los indicadores publicados. El SMI podrá ir creciendo, incorporando todos los indicadores que nos puedan ser útiles y con información verificable, estructurándola de forma amigable para convertirla en conocimiento para el desarrollo y bienestar de nuestra ciudad y su zona metropolitana.</p>
  </div>
</div>

FINAL;
        $this->javascript       = '';
    } // constructor

} // Clase Introduccion

?>
