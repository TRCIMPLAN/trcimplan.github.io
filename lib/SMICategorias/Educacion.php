<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Educacion
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMICategorias;

/**
 * Clase Educacion
 */
class Educacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Educación';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'educacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Educación. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Educación';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/educacion.jpg';
        $this->imagen_previa = '../imagenes/categorias/educacion.jpg';
        $this->imagen_id     = 'categorias-educacion';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Iniciar el contenido que será un SchemaArticle
        $this->contenido = new \Base\SchemaArticle();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir propiedades del contenido que es un SchemaArticle
        $this->contenido->big_heading   = TRUE;
        $this->contenido->headline      = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->datePublished = $this->fecha;
        $this->contenido->image         = $this->imagen;
        $this->contenido->image_show    = $this->poner_imagen_en_contenido;
        $this->contenido->articleBody   = <<<FINAL
<h3>Zona Metropolitana de La Laguna</h3>
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 30/04/2014, CONACYT">11</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/03/2014, CONACYT">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad (por cada 100mil de PEA)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Avanzadas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">13.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">8.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">7.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">6.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">10.6 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Básicas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">17.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">16.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">16.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">17.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">17.0 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Iniciales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">54.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">61.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">63.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">65.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">58.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Prácticas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">15.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">12.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">12.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">10.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">13.6 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Avanzadas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">7.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">5.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">3.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">1.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">5.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Básicas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">31.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">27.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">27.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">27.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">29.4 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">42.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">52.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">56.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">60.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">48.4 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Prácticas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">19.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">15.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">12.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">10.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">16.4 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Científico-Matemático</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">46 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">35 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">43 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">41 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">42 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Gramático-Español</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">44 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">37 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">37 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">32 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">40 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Preescolar por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">24.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">22.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">22.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">25.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">23.9</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Primaria por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">29.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">26.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">25.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">26.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">27.9</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Secundaria por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">12.7</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">14.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">14.7</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">14.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">13.5</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Crecimiento en Población Altamente Calificada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.98 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">4.82 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-10.67 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-1.22 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-1.55 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Diferencial de Grado Promedio de Escolaridad por Género</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.32</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.20</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.06</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">0.02</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Escuelas de Calidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">26.63 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">19.11 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">16.67 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">3.23 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">20.18 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">16</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">10</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">13</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">13</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Grado Promedio de Escolaridad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-grado-promedio-de-escolaridad.html" data-toggle="tooltip" title="Grados aprobados, 31/12/2015, INEGI">10.58</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-grado-promedio-de-escolaridad.html" data-toggle="tooltip" title="Grados aprobados, 31/12/2015, INEGI">9.48</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-grado-promedio-de-escolaridad.html" data-toggle="tooltip" title="Grados aprobados, 31/12/2015, INEGI">9.30</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-grado-promedio-de-escolaridad.html" data-toggle="tooltip" title="Grados aprobados, 31/12/2015, INEGI">8.69</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón entre Mujeres y Hombres en la Enseñanza Media Superior</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.002</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.021</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.030</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.078</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rendimiento Académico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">43.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">38.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">36.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">28.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">39.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Educativo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">10.83 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">17.31 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">16.76 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">19.20 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">18</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">31</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades de Calidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
  </tr>
</tbody>
</table>
<h3>Otras regiones</h3>
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Coahuila</th>
    <th>Durango</th>
    <th>Nacional</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 30/04/2014, CONACYT">51</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 30/04/2014, CONACYT">15</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Avanzadas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">10.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">7.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">6.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Básicas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">18.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">18.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">18.9 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Iniciales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">56.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">60.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">60.5 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Científicas-Matemáticas Prácticas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">15.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">13.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">13.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Avanzadas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">3.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">2.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">2.6 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Básicas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">34.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">30.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">33.2 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">45.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">54.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">49.5 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Habilidades Gramáticas-Lingüísticas Prácticas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">17.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">13.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, SEP">14.6 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Preescolar por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">25.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">19.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">21.1</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Primaria por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">28.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">21.7</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">25.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Secundaria por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">14.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">13.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">16.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Grado Promedio de Escolaridad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-grado-promedio-de-escolaridad.html" data-toggle="tooltip" title="Grados aprobados, 31/12/2015, INEGI">9.90</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-grado-promedio-de-escolaridad.html" data-toggle="tooltip" title="Grados aprobados, 31/12/2015, INEGI">9.15</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-grado-promedio-de-escolaridad.html" data-toggle="tooltip" title="Grados aprobados, 31/12/2015, INEGI">9.16</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón entre Mujeres y Hombres en la Enseñanza Media Superior</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">0.994</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.023</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.014</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Educativo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">12.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">18.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">20.6 %</a></td>
  </tr>
</tbody>
</table>
FINAL;
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript
        $this->javascript = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Educacion

?>
