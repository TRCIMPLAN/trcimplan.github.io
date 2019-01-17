<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias IndiceDeCompetitividadUrbana
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
 * Clase IndiceDeCompetitividadUrbana
 */
class IndiceDeCompetitividadUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Índice de Competitividad Urbana';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'indice-de-competitividad-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Índice de Competitividad Urbana. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Índice de Competitividad Urbana';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/indice-de-competitividad-urbana.jpg';
        $this->imagen_previa = '../imagenes/categorias/indice-de-competitividad-urbana.jpg';
        $this->imagen_id     = 'categorias-indice-de-competitividad-urbana';
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
    <td class="indicador color1">Apertura de un Negocio (percentil promedio)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.38</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.39</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.39</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0.38</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2016, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Cartera Hipotecaria Vencida</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.91 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.44 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.94 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.38 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.86 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Centros de Investigación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2016, IMCO">1.3</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ciudad Fronteriza o Portuaria</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2016, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento de la Mancha Urbana</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2016, IMCO">0.4000 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento de la Población Ocupada sin Ingresos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-1.05 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-9.69 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-55.49 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-2.39 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2016, IMCO">4.20 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del PIB Estatal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">1.97 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">2.38 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">2.38 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">1.97 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">2.10 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del Salario Promedio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-5.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-0.18 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-9.90 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">1.81 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">1.60 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en Jornadas Laborales Muy Largas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">1.86 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">0.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-10.04 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">6.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">0.15 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en los Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-5.66 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-9.77 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-14.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-4.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-7.46 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crédito a las Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2016, IMCO">$ 37,857,566.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2016, IMCO">$ 12,699,918.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2016, IMCO">$ 12,699,918.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2016, IMCO">$ 37,857,566.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2016, IMCO">$ 57.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Demandantes de Conflicto Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2016, IMCO">3351</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2016, IMCO">1058</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2016, IMCO">0.0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2016, IMCO">0.0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2016, IMCO">0.7 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Densidad Poblacional</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2016, IMCO">54.4100</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Diversificación Económica</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">721</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">721</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">721</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">721</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">721</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ejecución de Contratos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2016, IMCO">200</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2016, IMCO">228</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2016, IMCO">228</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2016, IMCO">200</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2016, IMCO">211</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.8560 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">56.3498 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">34.1412 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">46.0290 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.7339 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">9,130.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">3,044.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">756.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">357.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2016, IMCO">21.68</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas Certificadas con ISO-9000 y 14000</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">10.6011</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">14.9306</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">61.3409</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">279.3651</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">21.4807</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Flujo de Pasajeros del o Hacia el Extranjero</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">14.44 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas (según CNN Expansión)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">2.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2016, IMCO">6.02</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa (Neta)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2016, IMCO">$ 1,420.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2016, IMCO">$ 186.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2016, IMCO">$ 186.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2016, IMCO">$ 1,420.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2016, IMCO">$ 363.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Jornadas Laborales Muy Largas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">78193</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">50093</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">10766</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">27668</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">29 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ocupación Hotelera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">1858862</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">49 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6168</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Patentes</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">49</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">49</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2016, IMCO">16</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Población Ocupada Sin Ingresos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">48403</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">23376</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">8989</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">11944</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">16 %</a></td>
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Media Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 729.82</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 1,771.11</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 4,094.59</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 4,496.77</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 289.33</a></td>
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Salario Promedio Mensual para Trabajadores de Tiempo Completo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 30/09/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 7,340.49</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,254.41</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,603.44</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 4,705.54</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 30/09/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,926.25</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Presentado Alto Crecimiento</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">$ 139,894,042.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">$ 21,527,736.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">$ 2,395,472.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">$ 3,034,970.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">64.3 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sitios UNESCO</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2016, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tamaño del Mercado Hipotecario</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2016, IMCO">15644</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2016, IMCO">5943</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2016, IMCO">3102</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2016, IMCO">1099</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2016, IMCO">19.42</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tierra Ejidal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">68.21 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">58.92 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">70.21 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">59.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">63.34 %</a></td>
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
    <td class="indicador color2">Duración de Período para Ediles y Delegados</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">4.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">4.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.5</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Índice de Información Presupuestal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">100.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">30.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">33.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">100.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">65.75</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Propios</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">34.20 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">30.17 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">19.63 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">13.15 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">34.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Muertes por Infecciones Instestinales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">27.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">12.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">3.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">0.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">3.16</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Participación Ciudadana</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">47.20 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">37.35 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">39.02 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">8.61 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">31.00 %</a></td>
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
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Competencia de Servicios Notariales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">61</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">11</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2016, IMCO">13</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Monto Reportado en Robo de Mercancías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.07</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.16</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.03</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.01</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.09</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Percepción de Inseguridad</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">50.44 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">51.81 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">51.81 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">50.44 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">51.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">76</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">30</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">9.34</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de VehÍculos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">23.1372</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">7.5040</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">40.1776</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">8.3992</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">19.0018</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Acceso a Instituciones de Salud</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 30/06/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">51.95 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">78599</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">25036</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">37406</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 30/09/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">53.25 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Acceso a Servicios Financieros</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">510</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">190</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">40</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">30</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">7.95</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Camas de Hospital</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">1792</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">818</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">114</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">71</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">45.59</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Crecimiento en Acceso a Servicios de Salud</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.12 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-4.55 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-7.29 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">4.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.84 %</a></td>
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
    <td class="indicador color4">Desigualdad en las Ciudades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Empresas Socialmente Responsables</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-empresas-socialmente-responsables.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0309</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-empresas-socialmente-responsables.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0214</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-empresas-socialmente-responsables.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-empresas-socialmente-responsables.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-empresas-socialmente-responsables.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0241</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Escuelas de Calidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">29.71 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">13.92 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">20.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">5.56 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">22.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales (según IMCO)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">57.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">24.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.06</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Ingreso Promedio de la Mujer</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">1.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.8</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Médicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">2.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">4.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">6.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">4.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">3.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Infantil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">18.08</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">13.17</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">6.75</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">2.47</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">14.77</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por Diabetes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">816.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">360.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">49.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">71.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2016, IMCO">9.76</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Muertes por Accidentes Relacionados con Transporte</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">2047</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">957</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">103</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">96</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">241.23</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mujeres en la Fuerza Laboral</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2016, IMCO">126979</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2016, IMCO">60291</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2016, IMCO">24582</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2016, IMCO">32042</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2016, IMCO">10 %</a></td>
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
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Personas por Debajo de la Línea de Bienestar</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">36118</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">19327</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">5276</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">8791</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2016, IMCO">11 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rendimiento Académico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">5.98 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">4.38 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6.69 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">2.37 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">5.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades de Calidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Uso de Servicios Financieros</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">1069511</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">392208</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">39251</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">50141</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">1.6</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Uso de Twitter como Proxy de Uso de Tecnologías de Información</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">8.2249</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.8366</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.1624</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">1.1490</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">5.4432</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Visitas a Museos INAH</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">57,074.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.00</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">42.98</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Computadora</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">60706</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">30573</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">12784</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6384</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">29.35 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Drenaje (sólo conexión a red pública)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">191451</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">74367</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">35001</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">20667</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">86 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Líneas Telefónicas Móviles</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">165314</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">90746</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">35794</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">28362</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">85.09 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Piso de Tierra</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">3141</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">1899</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">560</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">305</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">2 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Aerolíneas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">7</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO-CONAGUA">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">7</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Aprovechamiento del Biogás en Rellenos Sanitarios</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Capacidad de Tratamiento de Agua en Operación</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2016, IMCO">2,135.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2016, IMCO">698.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2016, IMCO">221.8</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2016, IMCO">1.5</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2016, IMCO">2.3</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Consumo de Agua</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2016, IMCO">85429000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2016, IMCO">29321000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2016, IMCO">13828000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2016, IMCO">11893000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2016, IMCO">105.79</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Consumo de Diesel en Transporte de Bienes</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Desastres Naturales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">2</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disposición Adecuada de Residuos Sólidos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">98.87 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">88.04 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">86.75 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">75.59 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">92.80 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Economía Intensiva en Energía</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">2.6</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">4.5</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">17.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">1.3</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">3.4</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Emergencias Ambientales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">3</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">4</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Empresas Certificadas como Limpias</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">3.00</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">11.00</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">1.00</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">0.00</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2016, IMCO">1.13</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Flujo de Pasajeros Aéreos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">317472</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">0.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2016, IMCO">239.1</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Índice de Gestión de Calidad del Aire</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Líneas de Autobús</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">12</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">7</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">20</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Avanzada</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.00 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">50.42 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">64.65 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.00 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">75.15 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sistema de Transporte Masivo</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2016, IMCO">2</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sobreexplotación del Acuífero</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">28.4 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">82.1 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Deshabitadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">22.97 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">22.74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">21.44 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">15.01 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">22.14 %</a></td>
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
    <td class="indicador color1">Salario Promedio Mensual para Trabajadores de Tiempo Completo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 7,225.63</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,217.26</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2017, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,543.52</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Presentado Alto Crecimiento</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 01/01/2009, Elaboración propia con datos obtenidos del INEGI">26.44 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Índice de Información Presupuestal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-coahuila/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, IMCO">100</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-durango/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 01/12/2015, IMCO">72</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Médicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">4.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">8.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">8.3</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Infantil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">11.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">14.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">12.6</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por Diabetes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">8.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">6.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">26.43</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">143.38</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">28.84</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Capacidad de Tratamiento de Agua en Operación</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-coahuila/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2010, IMCO-CONAGUA">1.39</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-durango/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2010, IMCO-CONAGUA">1.60</a></td>
    <td class="nd">ND</td>
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

} // Clase IndiceDeCompetitividadUrbana

?>
