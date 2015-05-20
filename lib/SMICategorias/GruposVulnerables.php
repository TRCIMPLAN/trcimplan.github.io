<?php
/**
 * TrcIMPLAN SMIv2 - GruposVulnerables
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
 */

// Namespace
namespace SMICategorias;

/**
 * Clase GruposVulnerables
 */
class GruposVulnerables extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Grupos Vulnerables';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'grupos-vulnerables';
        $this->descripcion   = 'Matriz de indicadores en la categoría Grupos Vulnerables';
        $this->imagen_previa = '../imagenes/categorias/grupos-vulnerables.jpg';
        $this->icono         = 'fa fa-chain-broken';
        $this->claves        = 'IMPLAN, Indicadores, Grupos Vulnerables';
        $this->categorias    = array('Indicadores');
        $this->contenido     = <<<FINAL
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
    <td class="indicador color4">Adultos Mayores</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">45,139</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">20,263</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">9,479</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">7,447</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">82,328</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Femenino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">25,310</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">10,863</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">4,950</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">3,668</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">44,790</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Masculino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">19,829</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">9,400</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">4,529</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">3,780</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">37,538</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Discapacidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">4.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">4.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">4.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">4.4 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">4.3 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Estimación de Menores Huérfanos por Agresiones</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-estimacion-menores-huerfanos-por-agresiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMPLAN">1,253</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Madres Adolescentes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-madres-adolescentes.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SINAIS (SSA)">1,778</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por VIH-SIDA</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-por-vihsida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">4.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-mortalidad-por-vihsida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">2.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-por-vihsida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-por-vihsida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">1.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-mortalidad-por-vihsida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Alimentario</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">17.77 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">18.11 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">20.89 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">25.10 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Educativo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">10.83 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">17.31 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">16.76 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">19.20 %</a></td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase GruposVulnerables

?>
