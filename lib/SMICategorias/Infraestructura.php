<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Infraestructura
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
 * Clase Infraestructura
 */
class Infraestructura extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título y fecha
        $this->nombre        = 'Infraestructura';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'infraestructura';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores - Categoría Infraestructura';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Infraestructura';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/infraestructura.jpg';
        $this->imagen_previa = '../imagenes/categorias/infraestructura.jpg';
        $this->imagen_id     = 'categorias-infraestructura';
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
    <td class="indicador color1">Crecimiento de la Mancha Urbana</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-de-la-mancha-urbana.html" data-toggle="tooltip" title="Número de veces, 31/12/2012, IMCO">1.2467</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Acceso a Vialidades Pavimentadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">94 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">91 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">89 %</a></td>
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
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disponibilidad de Banqueta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">86 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">83 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">66 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">60 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">81 %</a></td>
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
    <td class="indicador color5">Red Carretera de Alimentadoras Estatales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">111</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">43</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Total</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">226</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">361</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">314</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">266</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Troncal Federal</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">226</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">71</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">160</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">266</a></td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase Infraestructura

?>
