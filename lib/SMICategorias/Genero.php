<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Genero
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
 * Clase Genero
 */
class Genero extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Género';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'genero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Género. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Género';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/genero.jpg';
        $this->imagen_previa = '../imagenes/categorias/genero.jpg';
        $this->imagen_id     = 'categorias-genero';
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
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Femenino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">29751</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">12829</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">5739</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">4312</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">52631</a></td>
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
    <td class="indicador color4">Fecundidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.50</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.34</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.23</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.60</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Hogares con Jefatura Femenina</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">27.92 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">27.98 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">28.57 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">24.45 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">27.74 %</a></td>
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
    <td class="indicador color4">Madres Adolescentes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-madres-adolescentes.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SINAIS (SSA)">1778</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-madres-adolescentes.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, SINAIS (SSA)">114.58</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Maternidad Adolescente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">13.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">16.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">17.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">19.9 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mujeres en la administración municipal</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mujeres-en-la-administracion-municipal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">12.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mujeres-en-la-administracion-municipal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">12.90 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mujeres-en-la-administracion-municipal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">23.40 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mujeres-en-la-administracion-municipal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">17.65 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mujeres-en-la-administracion-municipal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">18.00 %</a></td>
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
    <td class="indicador color4">Razón de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.3000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2011, SINAIS (SSA)">55.3000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">62.7000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, SINAIS (SSA)">42.3968</a></td>
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
    <td class="indicador color4">Tasa de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">4.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">8.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">6.2</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.3</a></td>
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
    <td class="indicador color4">Adultos Mayores Femenino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">117267</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">71212</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">4801687</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">26.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">43.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">39.2</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón entre Mujeres y Hombres en la Enseñanza Media Superior</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">0.994</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.023</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.014</a></td>
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

} // Clase Genero

?>
