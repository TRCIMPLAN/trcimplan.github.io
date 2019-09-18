<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Delincuencia
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
 * Clase Delincuencia
 */
class Delincuencia extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Delincuencia';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'delincuencia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Delincuencia. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Delincuencia';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/delincuencia.jpg';
        $this->imagen_previa = '../imagenes/categorias/delincuencia.jpg';
        $this->imagen_id     = 'categorias-delincuencia';
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
    <td class="indicador color3">Abuso de Confianza</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-abuso-de-confianza.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">84</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-abuso-de-confianza.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">78</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-abuso-de-confianza.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-abuso-de-confianza.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">5</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-abuso-de-confianza.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">182</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Abuso sexual</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-abuso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">155</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-abuso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">85</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-abuso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">37</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-abuso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">20</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-abuso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">297</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes de tránsito donde la persona responsable se fugó</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-de-transito-donde-la-persona-responsable-se-fugo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2018, INEGI">4.50 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-accidentes-de-transito-donde-la-persona-responsable-se-fugo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2018, INEGI">23.00 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-accidentes-de-transito-donde-la-persona-responsable-se-fugo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2018, INEGI">14.40 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-accidentes-de-transito-donde-la-persona-responsable-se-fugo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2018, INEGI">4.70 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-accidentes-de-transito-donde-la-persona-responsable-se-fugo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2018, INEGI">11.36 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Acoso sexual</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-acoso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">87</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-acoso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-acoso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-acoso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-acoso-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">89</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Allanamiento de morada</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-allanamiento-de-morada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">109</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-allanamiento-de-morada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">23</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-allanamiento-de-morada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">23</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-allanamiento-de-morada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">14</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-allanamiento-de-morada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">169</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Amenazas</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-amenazas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1017</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-amenazas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">385</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-amenazas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">93</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-amenazas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">69</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-amenazas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1564</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Daño a la propiedad</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-dano-a-la-propiedad.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1521</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-dano-a-la-propiedad.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">483</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-dano-a-la-propiedad.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">124</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-dano-a-la-propiedad.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">117</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-dano-a-la-propiedad.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2245</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1381</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">590</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">190</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">176</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2337</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos Patrimoniales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">243</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">41</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">21</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">320</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Despojo</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-despojo.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">116</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-despojo.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">106</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-despojo.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-despojo.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-despojo.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">241</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Extorsión</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-extorsion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">5</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-extorsion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-extorsion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-extorsion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-extorsion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">16</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Falsificación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-falsificacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">76</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-falsificacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">77</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-falsificacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-falsificacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-falsificacion.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">167</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Feminicidio</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-feminicidio.html" data-toggle="tooltip" title="Personas, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-feminicidio.html" data-toggle="tooltip" title="Personas, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-feminicidio.html" data-toggle="tooltip" title="Personas, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-feminicidio.html" data-toggle="tooltip" title="Personas, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-feminicidio.html" data-toggle="tooltip" title="Personas, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">7</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Fraude</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-fraude.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">269</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-fraude.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">197</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-fraude.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">34</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-fraude.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">7</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-fraude.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">507</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Hogares con integrante víctima de extorsión</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-hogares-con-integrante-victima-de-extorsion.html" data-toggle="tooltip" title="Porcentaje, 30/06/2019, Encuesta Nacional de Seguridad Pública Urbana">9 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Hogares con integrante víctima de robo parcial de vehículo</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-hogares-con-integrante-victima-de-robo-parcial-de-vehiculo.html" data-toggle="tooltip" title="Porcentaje, 30/06/2019, Encuesta Nacional de Seguridad Pública Urbana">13.9 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Hogares víctima de al menos un delito</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-hogares-victima-de-al-menos-un-delito.html" data-toggle="tooltip" title="Porcentaje, 30/06/2019, Encuesta Nacional de Seguridad Pública Urbana">28.4 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">10</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">5</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">23</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Hostigamiento sexual</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-hostigamiento-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-hostigamiento-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-hostigamiento-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-hostigamiento-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-hostigamiento-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">11</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Incumplimiento de obligaciones de asistencia familiar</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-incumplimiento-de-obligaciones-de-asistencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">21</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-incumplimiento-de-obligaciones-de-asistencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">20</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-incumplimiento-de-obligaciones-de-asistencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-incumplimiento-de-obligaciones-de-asistencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-incumplimiento-de-obligaciones-de-asistencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">45</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Lesiones</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-lesiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1358</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-lesiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1040</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-lesiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">261</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-lesiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">183</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-lesiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2842</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Narcomenudeo</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-narcomenudeo.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">145</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-narcomenudeo.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">12</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-narcomenudeo.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-narcomenudeo.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">29</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-narcomenudeo.html" data-toggle="tooltip" title="Cantidad, 31/08/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">43</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Otros delitos contra el patrimonio</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-otros-delitos-contra-el-patrimonio.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">289</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-otros-delitos-contra-el-patrimonio.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">43</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-otros-delitos-contra-el-patrimonio.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">10</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-otros-delitos-contra-el-patrimonio.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">24</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-otros-delitos-contra-el-patrimonio.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">366</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Otros delitos contra la familia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-otros-delitos-contra-la-familia.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">69</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-otros-delitos-contra-la-familia.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">51</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-otros-delitos-contra-la-familia.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-otros-delitos-contra-la-familia.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-otros-delitos-contra-la-familia.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">141</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Otros delitos del Fuero Común</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-otros-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">17.68</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Otros delitos que atentan contra la libertad y la seguridad sexual</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-otros-delitos-que-atentan-contra-la-libertad-y-la-seguridad-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-otros-delitos-que-atentan-contra-la-libertad-y-la-seguridad-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-otros-delitos-que-atentan-contra-la-libertad-y-la-seguridad-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-otros-delitos-que-atentan-contra-la-libertad-y-la-seguridad-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-otros-delitos-que-atentan-contra-la-libertad-y-la-seguridad-sexual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">20</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Común</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">31455</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">2561</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Federal</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">11</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">78</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Población que se siente insegura en el transporte público</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-poblacion-que-se-siente-insegura-en-el-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 30/06/2019, Encuesta Nacional de Seguridad Pública Urbana">53.1 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Población que se siente insegura en la ciudad</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-poblacion-que-se-siente-insegura-en-la-ciudad.html" data-toggle="tooltip" title="Porcentaje, 30/06/2019, Encuesta Nacional de Seguridad Pública Urbana">54.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">6647</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">13584</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">1100</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">90</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">9</a></td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">19</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Negocios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">24</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">32</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">63</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Transeuntes</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">19</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">38</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de automóviles</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-de-automoviles.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">32</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-de-automoviles.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-de-automoviles.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-de-automoviles.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-de-automoviles.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">54</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de vehículos (registrados)</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-de-vehiculos-registrados.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">149850</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-de-vehiculos-registrados.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">159574</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-de-vehiculos-registrados.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">47557</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-de-vehiculos-registrados.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">20694</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">56</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">54</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">19</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">138</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos Totales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">149</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">185</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">55</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">22</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/05/2019, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">411</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros (mensual)</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-secuestros-mensual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-secuestros-mensual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-secuestros-mensual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-secuestros-mensual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-secuestros-mensual.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">76</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">30</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">11.0711</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de VehÍculos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">23.1372</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">7.5040</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">40.1776</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">8.3992</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2014, IMCO">3.4958</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tráfico de menores</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-trafico-de-menores.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-trafico-de-menores.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-trafico-de-menores.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-trafico-de-menores.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Trata de personas</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-trata-de-personas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-trata-de-personas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-trata-de-personas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-trata-de-personas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-trata-de-personas.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Violación equiparada</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-violacion-equiparada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">28</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-violacion-equiparada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-violacion-equiparada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-violacion-equiparada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-violacion-equiparada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">37</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Violación simple</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-violacion-simple.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">66</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-violacion-simple.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">33</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-violacion-simple.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">20</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-violacion-simple.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">10</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-violacion-simple.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">129</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Violencia de género en todas sus modalidades distinta a la violencia familiar</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-violencia-de-genero-en-todas-sus-modalidades-distinta-a-la-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">7</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-violencia-de-genero-en-todas-sus-modalidades-distinta-a-la-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-violencia-de-genero-en-todas-sus-modalidades-distinta-a-la-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-violencia-de-genero-en-todas-sus-modalidades-distinta-a-la-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-violencia-de-genero-en-todas-sus-modalidades-distinta-a-la-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">7</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Violencia familiar</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2631</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1170</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">432</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">391</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-violencia-familiar.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4624</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Estimación de Menores Huérfanos por Agresiones</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-estimacion-de-menores-huerfanos-por-agresiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMPLAN">1253</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Feminicidio</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-feminicidio.html" data-toggle="tooltip" title="Personas, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">12</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-feminicidio.html" data-toggle="tooltip" title="Personas, 31/12/2018, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas privadas de la libertad en centros penitenciarios femeniles</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-personas-privadas-de-la-libertad-en-centros-penitenciarios-femeniles.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, Encuesta Nacional de Población Privada de la Libertad">101</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-personas-privadas-de-la-libertad-en-centros-penitenciarios-femeniles.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, Encuesta Nacional de Población Privada de la Libertad">167</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-nacional/seguridad-personas-privadas-de-la-libertad-en-centros-penitenciarios-femeniles.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, Encuesta Nacional de Población Privada de la Libertad">10611</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas privadas de la libertad en centros penitenciarios varoniles</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-personas-privadas-de-la-libertad-en-centros-penitenciarios-varoniles.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, Encuesta Nacional de Población Privada de la Libertad">1933</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-personas-privadas-de-la-libertad-en-centros-penitenciarios-varoniles.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, Encuesta Nacional de Población Privada de la Libertad">5704</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-nacional/seguridad-personas-privadas-de-la-libertad-en-centros-penitenciarios-varoniles.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, Encuesta Nacional de Población Privada de la Libertad">200380</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/07/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">86</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Extorsión</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0.00 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0.55 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Homicidio Doloso</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">4.22 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6.28 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Robo de Vehículo con Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2.54 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">6.56 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Robo de Vehículo Sin Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13.30 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">32.73 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa mensual estatal de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-coahuila/seguridad-tasa-mensual-estatal-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0.20 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-durango/seguridad-tasa-mensual-estatal-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 30/06/2017, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0.61 %</a></td>
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

} // Clase Delincuencia

?>
