<?php
/**
 * TrcIMPLAN SMIv2 - Infraestructura
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
 * Clase Infraestructura
 */
class Infraestructura extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Infraestructura';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'infraestructura';
        $this->descripcion   = 'Matriz de indicadores en la categoría Infraestructura';
        $this->imagen_previa = '../imagenes/categorias/infraestructura.jpg';
        $this->icono         = 'fa fa-building-o';
        $this->claves        = 'IMPLAN, Indicadores, Infraestructura';
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
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera de Alimentadoras Estatales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-red-carretera-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">111</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">43</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Total</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">226</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">361</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">314</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">266</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Troncal Federal</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">226</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">71</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">160</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">266</a></td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Infraestructura

?>
