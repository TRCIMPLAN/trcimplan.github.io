<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Bienestar
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
 * Clase Bienestar
 */
class Bienestar extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Bienestar';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'bienestar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Bienestar. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Bienestar';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/bienestar.jpg';
        $this->imagen_previa = '../imagenes/categorias/bienestar.jpg';
        $this->imagen_id     = 'categorias-bienestar';
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
    <td class="indicador color1">Créditos personales otorgados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-creditos-personales-otorgados.html" data-toggle="tooltip" title="Cantidad de Créditos, 30/04/2018, Comisión Nacional Bancaria y de Valores (CNBV)">12732</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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
    <td class="indicador color1">Índice de Gini</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0.39</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0.39</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0.39</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0.39</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2016, IMCO">0.40</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Monto de préstamos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-monto-de-prestamos.html" data-toggle="tooltip" title="Pesos, 30/04/2018, Comisión Nacional Bancaria y de Valores (CNBV)">$ 14,575.54</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa promedio de apreciación de la vivienda</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-promedio-de-apreciacion-de-la-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/03/2018, Sociedad Hipotecaria Federal (SHF)">7.71 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-promedio-de-apreciacion-de-la-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/03/2018, Sociedad Hipotecaria Federal (SHF)">7.27 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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
    <td class="indicador color4">Desigualdad en las Ciudades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de Desarrollo Humano (IDH)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8976</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8681</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8661</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8404</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8680</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de Hacinamiento</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-indice-de-hacinamiento.html" data-toggle="tooltip" title="Personas, 31/12/2015, INEGI">0.80</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-indice-de-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">0.97</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-indice-de-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">1.05</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-indice-de-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">1.09</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-indice-de-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">1.06</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de Marginación</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-indice-de-marginacion.html" data-toggle="tooltip" title="Puntos, 31/12/2015, CONAPO">-1.722</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-indice-de-marginacion.html" data-toggle="tooltip" title="Puntos, 31/12/2015, CONAPO">-1.488</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-indice-de-marginacion.html" data-toggle="tooltip" title="Puntos, 31/12/2015, CONAPO">-1.215</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-indice-de-marginacion.html" data-toggle="tooltip" title="Puntos, 31/12/2015, CONAPO">-1.098</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por VIH-SIDA</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">4.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">2.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">1.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.4</a></td>
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
    <td class="indicador color4">Pobreza</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">26.80 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">37.29 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">47.98 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">33.84 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">32.74 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">2.84 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">5.30 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">6.80 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">3.90 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">4.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Moderada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">24.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">31.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">41.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">29.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">28.6 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2011, SINAIS (SSA)">55.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">62.7</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Alimentario</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">17.77 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">18.11 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">20.89 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">25.10 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas desarrolladas en el perímetro de contención urbana 1</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-1.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">0.78 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-1.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">17.86 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-1.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">25.77 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas desarrolladas en el perímetro de contención urbana 2</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-2.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">33.53 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-2.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">43.57 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-2.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">74.23 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-2.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">22.67 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas desarrolladas en el perímetro de contención urbana 3</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-3.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">62.98 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-3.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">17.86 %</a></td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-desarrolladas-en-el-perimetro-de-contencion-urbana-3.html" data-toggle="tooltip" title="Porcentaje, 30/04/2018, SNIIV">77.33 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas con Techos Precarios</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-con-techos-precarios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">0.2 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que Disponen de Computadora</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-computadora.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI. Censos de Población y Vivienda">65001</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que Disponen de Drenaje</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-drenaje.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI. Censos de Población y Vivienda">164799</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que Disponen de Energía Eléctrica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-energia-electrica.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI. Censos de Población y Vivienda">167111</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que Disponen de Excusado o Sanitario</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-excusado-o-sanitario.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI. Censos de Población y Vivienda">165607</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que Disponen de Lavadora</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-lavadora.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI. Censos de Población y Vivienda">138596</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Pantalla Plana</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-pantalla-plana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">59.6 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Teléfono Celular</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-telefono-celular.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">87 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Teléfono Fijo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-telefono-fijo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">45 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Televisión de Paga</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-television-de-paga.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">46.6 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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
    <td class="indicador color1">Tasa promedio de apreciación de la vivienda</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-tasa-promedio-de-apreciacion-de-la-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/03/2018, Sociedad Hipotecaria Federal (SHF)">7.37 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-tasa-promedio-de-apreciacion-de-la-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/03/2018, Sociedad Hipotecaria Federal (SHF)">7.93 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de Desarrollo Humano (IDH)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.776</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.732</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-indice-de-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.750</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por VIH-SIDA</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.7</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">2.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">4.2</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">27.70 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">50.34 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">45.59 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">2.94 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">10.12 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">11.20 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Moderada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">24.76 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">40.22 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">34.39 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">26.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">43.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">39.2</a></td>
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

} // Clase Bienestar

?>
