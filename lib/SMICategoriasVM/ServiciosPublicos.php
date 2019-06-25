<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias ServiciosPublicos
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
 * Clase ServiciosPublicos
 */
class ServiciosPublicos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Servicios Públicos';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'servicios-publicos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Servicios Públicos. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Servicios Públicos';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/servicios-publicos.jpg';
        $this->imagen_previa = '../imagenes/categorias/servicios-publicos.jpg';
        $this->imagen_id     = 'categorias-servicios-publicos';
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
    <td class="indicador color1">Costo de electricidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-costo-de-electricidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">26.3116</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-costo-de-electricidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">26.3116</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-costo-de-electricidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">26.3116</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-costo-de-electricidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">26.3116</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-costo-de-electricidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">26.3000</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Intensidad energética en la economía</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-intensidad-energetica-en-la-economia.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">3,745.37</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-intensidad-energetica-en-la-economia.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">2,242.93</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-intensidad-energetica-en-la-economia.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">298.83</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-intensidad-energetica-en-la-economia.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">255.25</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-intensidad-energetica-en-la-economia.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">6,542.39</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Inversión en transporte público</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-inversion-en-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9.72 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-inversion-en-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9.72 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-inversion-en-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9.72 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-inversion-en-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9.72 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-inversion-en-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9.72 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Agua Entubada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-agua-entubada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">96.30 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-agua-entubada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">99.05 %</a></td>
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
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Alumbrado Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">3.53 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">5.58 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">9.09 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">15.42 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">5.61 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Camiones de bomberos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-camiones-de-bomberos.html" data-toggle="tooltip" title="Cantidad, 31/01/2018, Bomberos de Torreón">34</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Consumo eléctrico en servicios municipales</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-consumo-electrico-en-servicios-municipales.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">67.2849</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Consumo eléctrico residencial</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-consumo-electrico-residencial.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">1,708.475</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Recolección de residuos sólidos</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-recoleccion-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">92.34 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red de Transporte Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-de-transporte-publico.html" data-toggle="tooltip" title="Kilómetros, 31/03/2014, IMPLAN">250</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Residuos sólidos producidos</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-residuos-solidos-producidos.html" data-toggle="tooltip" title="Por habitante, 31/12/2014, IMCO">268.6108</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Tomas con micromedición</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-tomas-con-micromedicion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">39.97 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viajes en transporte público por persona</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-viajes-en-transporte-publico-por-persona.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, IMCO">5</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Zonas verdes</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-zonas-verdes.html" data-toggle="tooltip" title="Hectáreas, 31/12/2017, Ayuntamiento de Torreón">82.3</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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

} // Clase ServiciosPublicos

?>
