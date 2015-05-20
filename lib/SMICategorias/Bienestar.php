<?php
/**
 * TrcIMPLAN SMIv2 - Bienestar
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
 * Clase Bienestar
 */
class Bienestar extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Bienestar';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'bienestar';
        $this->descripcion   = 'Matriz de indicadores en la categoría Bienestar';
        $this->imagen_previa = '../imagenes/categorias/bienestar.jpg';
        $this->icono         = 'fa fa-child';
        $this->claves        = 'IMPLAN, Indicadores, Bienestar';
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
    <td class="indicador color4">Índice de Desarrollo Humano (IDH)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-indice-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8976</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-indice-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8681</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-indice-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8661</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-indice-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8404</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-indice-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8680</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de hacinamiento</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-indice-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">0.88</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-indice-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">0.97</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-indice-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">1.05</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-indice-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">1.09</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-indice-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">1.06</a></td>
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
    <td class="indicador color4">Pobreza</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">26.80 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">37.29 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">47.98 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">33.84 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">32.74 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">2.84 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">5.30 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">6.80 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">3.90 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">4.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Moderada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">24.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">31.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">41.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">29.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">28.6 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-razon-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2011, SINAIS (SSA)">55.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">62.7</a></td>
    <td class="nd">ND</td>
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
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Bienestar

?>
