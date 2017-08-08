<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Poblacion
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
 * Clase Poblacion
 */
class Poblacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Población';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'poblacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Población. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Población';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/poblacion.jpg';
        $this->imagen_previa = '../imagenes/categorias/poblacion.jpg';
        $this->imagen_id     = 'categorias-poblacion';
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
    <td class="indicador color4">Población Católica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">83.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">77.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Estimada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">708755</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">361144</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">156161</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">116078</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">1342139</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Promedio de Descendencia por Varón</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-promedio-de-descendencia-por-varon.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMPLAN">1.66</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Densidad Media Urbana</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">81.3</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">82.2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">52.6</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">58.8</a></td>
    <td class="nd">ND</td>
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
    <td class="indicador color4">Población Católica</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.7 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Estimada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">3029740</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">1799320</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2017, CONAPO">123518270</a></td>
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

} // Clase Poblacion

?>
