<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Competitividad
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
 * Clase Competitividad
 */
class Competitividad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título y fecha
        $this->nombre        = 'Competitividad';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'competitividad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores - Categoría Competitividad';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Competitividad';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/competitividad.jpg';
        $this->imagen_previa = '../imagenes/categorias/competitividad.jpg';
        $this->imagen_id     = 'categorias-competitividad';
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
    <td class="indicador color1">Índice de Competitividad Urbana</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">50.67</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">42.57</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">37.39</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">41.54</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">45.11</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ocupación Hotelera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">47.01 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">44.32 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">44.32 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ocupacion-hotelera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.36 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">68.37 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">34.54 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">34.54 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">68.37 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">58.85 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Usuarios de Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-usuarios-de-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">No tiene</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase Competitividad

?>
