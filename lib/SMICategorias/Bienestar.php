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
    <td class="indicador color1">Densidad Poblacional</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Gini</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2015, CONEVAL">0.4100</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2015, CONEVAL">0.3900</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2015, CONEVAL">0.4000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2015, CONEVAL">0.4100</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, CONEVAL">0.4238</a></td>
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
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-indice-de-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">0.88</a></td>
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
    <td class="indicador color4">Población con al menos tres carencias sociales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-al-menos-tres-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">9.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-al-menos-tres-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">8.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-al-menos-tres-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">8.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-al-menos-tres-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">11.4 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con al menos una carencia social</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-al-menos-una-carencia-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">50.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-al-menos-una-carencia-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">56.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-al-menos-una-carencia-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">63.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-al-menos-una-carencia-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">60.1 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con carencia a la seguridad social</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-carencia-a-la-seguridad-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">33.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-carencia-a-la-seguridad-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">32.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-carencia-a-la-seguridad-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">44.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-carencia-a-la-seguridad-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">37.2 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con carencia alimentaria.</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-carencia-alimentaria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">20.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-carencia-alimentaria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">19.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-carencia-alimentaria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">19.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-carencia-alimentaria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">21.0 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con carencia de acceso a la salud</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-carencia-de-acceso-a-la-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">20.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-carencia-de-acceso-a-la-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">16.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-carencia-de-acceso-a-la-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">15.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-carencia-de-acceso-a-la-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">17.6 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con carencia de servicios básicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-carencia-de-servicios-basicos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">1.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-carencia-de-servicios-basicos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">8.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-carencia-de-servicios-basicos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">6.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-carencia-de-servicios-basicos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">9.0 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con carencia de vivienda</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-carencia-de-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">3.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-carencia-de-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">2.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-carencia-de-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">4.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-carencia-de-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">7.1 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con carencia educativa</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-carencia-educativa.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">10.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-carencia-educativa.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">14.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-carencia-educativa.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">15.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-carencia-educativa.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">16.2 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con ingreso inferior a la línea de bienestar.</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">40.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">45.10 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">50.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">52.80 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">3.78 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población con ingreso inferior a la línea de bienestar mínimo.</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar-minimo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">10.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar-minimo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">8.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar-minimo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">11.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-con-ingreso-inferior-a-la-linea-de-bienestar-minimo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">17.5 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población no pobre y no vulnerable</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-no-pobre-y-no-vulnerable.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">35.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-no-pobre-y-no-vulnerable.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">29.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-no-pobre-y-no-vulnerable.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">22.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-no-pobre-y-no-vulnerable.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">22.8 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población vulnerable por carencias sociales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-vulnerable-por-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">24.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-vulnerable-por-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">25.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-vulnerable-por-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">27.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-vulnerable-por-carencias-sociales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">24.4 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población vulnerable por ingresos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-vulnerable-por-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">13.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-vulnerable-por-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">14.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-vulnerable-por-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">13.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-vulnerable-por-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">17.1 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">26.20 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">30.50 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">36.30 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">35.70 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">32.74 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">2.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">0.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">1.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">3.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">4.0 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Moderada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">23.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">29.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">35.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">32.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">28.6 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón de ingreso de población con pobreza extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-de-ingreso-de-poblacion-con-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">13 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-razon-de-ingreso-de-poblacion-con-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">18 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-de-ingreso-de-poblacion-con-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">16 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-de-ingreso-de-poblacion-con-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, CONEVAL">13 %</a></td>
    <td class="nd">ND</td>
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
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Desastres Naturales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, IMCO">7</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, IMCO">6</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, IMCO">15</a></td>
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
