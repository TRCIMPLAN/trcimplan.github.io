<?php
/**
 * TrcIMPLAN SMIv2 - DoingBusiness
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
 * Clase DoingBusiness
 */
class DoingBusiness extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Doing Business';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'doing-business';
        $this->descripcion   = 'Matriz de indicadores en la categoría Doing Business';
        $this->imagen_previa = '../imagenes/categorias/doing-business.jpg';
        $this->icono         = 'fa fa-check-circle-o';
        $this->claves        = 'IMPLAN, Indicadores, Doing Business';
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Apertura de Negocios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-apertura-negocios.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">9.5</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ejecución de Contratos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ejecucion-contratos.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">270</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Permiso de Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-permiso-construccion.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">107</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de Propiedades</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-propiedades.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">28</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase DoingBusiness

?>
