<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Gobierno
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
 * Clase Gobierno
 */
class Gobierno extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Gobierno';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'gobierno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Gobierno. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Gobierno';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/gobierno.jpg';
        $this->imagen_previa = '../imagenes/categorias/gobierno.jpg';
        $this->imagen_id     = 'categorias-gobierno';
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
    <td class="indicador color1">Promedio de Horas para la Realización del Trámite de Licencia para Negocio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-licencia-para-negocio.html" data-toggle="tooltip" title="Horas, 31/12/2014, Ayuntamiento de Torreón">30</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Promedio de Horas para la Realizacion del Trámite de Permiso de Construcción de una Adición Residencial o Comercial</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-permiso-de-construccion-de-una-adicion-residencial-o-comercial.html" data-toggle="tooltip" title="Horas, 30/06/2014, Ayuntamiento de Torreón">38</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de una Propiedad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-de-una-propiedad.html" data-toggle="tooltip" title="Días, 31/12/2015, Doing Business">24</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de una Propiedad (percentil promedio)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.52</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.64</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.64</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.52</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">1.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Barreras para candidatos independientes</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-barreras-para-candidatos-independientes.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">8.5 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-barreras-para-candidatos-independientes.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">3.0 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-barreras-para-candidatos-independientes.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">3.0 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-barreras-para-candidatos-independientes.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">8.5 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-barreras-para-candidatos-independientes.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6.0 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacitación a Empleados de Base</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-base.html" data-toggle="tooltip" title="Horas, 31/12/2014, Ayuntamiento de Torreón">0.4</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacitación a Empleados de Confianza</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-confianza.html" data-toggle="tooltip" title="Horas, 30/12/2014, Ayuntamiento de Torreón">3.15</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">22.48 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">31.88 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">33.04 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">29.05 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">26.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Disponibilidad de información</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-disponibilidad-de-informacion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">99.05 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Duración de Período para Ediles y Delegados</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">4.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">4.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.5</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Duración máxima de periodos de alcaldes</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-duracion-maxima-de-periodos-de-alcaldes.html" data-toggle="tooltip" title="Años, 31/12/2016, IMCO">6</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-duracion-maxima-de-periodos-de-alcaldes.html" data-toggle="tooltip" title="Años, 31/12/2016, IMCO">6</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-duracion-maxima-de-periodos-de-alcaldes.html" data-toggle="tooltip" title="Años, 31/12/2016, IMCO">6</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-duracion-maxima-de-periodos-de-alcaldes.html" data-toggle="tooltip" title="Años, 31/12/2016, IMCO">6</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-duracion-maxima-de-periodos-de-alcaldes.html" data-toggle="tooltip" title="Años, 31/12/2016, IMCO">6</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Empleados Municipales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-empleados-municipales.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, Ayuntamiento de Torreón">6.22</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Formulas cabildo</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-formulas-cabildo.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-formulas-cabildo.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-formulas-cabildo.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-formulas-cabildo.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-formulas-cabildo.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Institutos de Planeación Urbana</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-institutos-de-planeacion-urbana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2017, IMCO">25 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Litros de Combustible Gastados por Habitante</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-habitante.html" data-toggle="tooltip" title="Litros por Persona, 31/12/2014, Ayuntamiento de Torreón">2.400</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-litros-de-combustible-gastados-por-habitante.html" data-toggle="tooltip" title="Litros por Persona, 31/12/2016, Ayuntamiento de Torreón">496.633</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Marco regulatorio para la gestión integral de residuos sólidos urbanos</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-marco-regulatorio-para-la-gestion-integral-de-residuos-solidos-urbanos.html" data-toggle="tooltip" title="Puntos, 31/12/2015, IMCO">2.5</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Matrimonio igualitario</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-matrimonio-igualitario.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-matrimonio-igualitario.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-matrimonio-igualitario.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-matrimonio-igualitario.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-matrimonio-igualitario.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">1</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Percepción de corrupción estatal en las zonas urbanas</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-percepcion-de-corrupcion-estatal-en-las-zonas-urbanas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">36.1 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-percepcion-de-corrupcion-estatal-en-las-zonas-urbanas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">43.4 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-percepcion-de-corrupcion-estatal-en-las-zonas-urbanas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">43.4 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-percepcion-de-corrupcion-estatal-en-las-zonas-urbanas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">36.1 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-percepcion-de-corrupcion-estatal-en-las-zonas-urbanas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">39.0 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Periodistas Muertos o Desaparecidos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">8</a></td>
    <td class="nd">ND</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">8</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Policías Operativos de Seguridad Pública</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-policias-operativos-de-seguridad-publica.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, Ayuntamiento de Torreón">0.97</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Programas de Acción Climática</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-programas-de-accion-climatica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2017, IMCO">25 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Promedio de Horas para la Realización del Trámite de Carta de No Adeudo Predial</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-promedio-de-horas-para-la-realizacion-del-tramite-de-carta-de-no-adeudo-predial.html" data-toggle="tooltip" title="Horas, 30/06/2014, Ayuntamiento de Torreón">0.11</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Vehículos Automotores por Habitante</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-vehiculos-automotores-por-habitante.html" data-toggle="tooltip" title="Por habitante, 31/12/2014, Ayuntamiento de Torreón">0.19</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Competencia de Servicios Notariales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">61</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">11</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">13</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">55.05</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">57.55</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">31.30</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">11.01</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">49.14</a></td>
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
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">26.43</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">143.38</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">28.84</a></td>
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

} // Clase Gobierno

?>
