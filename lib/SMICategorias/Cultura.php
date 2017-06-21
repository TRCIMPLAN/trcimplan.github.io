<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Cultura
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
 * Clase Cultura
 */
class Cultura extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título y fecha
        $this->nombre        = 'Cultura';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'cultura';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores - Categoría Cultura';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Cultura';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/cultura.jpg';
        $this->imagen_previa = '../imagenes/categorias/cultura.jpg';
        $this->imagen_id     = 'categorias-cultura';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir contenido HTML en el esquema
        $this->contenido = <<<FINAL
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
    <td class="indicador color1">Sitios UNESCO</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
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
    <td class="indicador color4">Espacios Culturales (según IMCO)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.36</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.15</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.22</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.11</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.26</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Visitas a Museos INAH</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">172.0800</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">90.4452</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase Cultura

?>
