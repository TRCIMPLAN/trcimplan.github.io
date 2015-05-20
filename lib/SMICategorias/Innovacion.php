<?php
/**
 * TrcIMPLAN SMIv2 - Innovacion
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
 * Clase Innovacion
 */
class Innovacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Innovación';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'innovacion';
        $this->descripcion   = 'Matriz de indicadores en la categoría Innovación';
        $this->imagen_previa = '../imagenes/categorias/innovacion.jpg';
        $this->icono         = 'fa fa-lightbulb-o';
        $this->claves        = 'IMPLAN, Indicadores, Innovación';
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
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 30/04/2014, CONACYT">11</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/03/2014, CONACYT">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Usuarios de Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-usuarios-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">NO TIENE</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-usuarios-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">NO TIENE</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-usuarios-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">NO TIENE</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-usuarios-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">NO TIENE</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-usuarios-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">NO TIENE</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Innovacion

?>
