<?php
/**
 * TrcIMPLAN SMIv2 - Educacion
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
 * Clase Educacion
 */
class Educacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Educación';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'educacion';
        $this->descripcion   = 'Matriz de indicadores en la categoría Educación';
        $this->imagen_previa = '../imagenes/categorias/educacion.jpg';
        $this->icono         = 'fa fa-book';
        $this->claves        = 'IMPLAN, Indicadores, Educación';
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
    <td class="indicador color4">Alumnos con Perfil Científico-Matemático</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientificomatematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">46 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-alumnos-con-perfil-cientificomatematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">35 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-perfil-cientificomatematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">43 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-perfil-cientificomatematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">41 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-alumnos-con-perfil-cientificomatematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">42 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Gramático-Español</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramaticoespanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">44 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-alumnos-con-perfil-gramaticoespanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">37 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-perfil-gramaticoespanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">37 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-perfil-gramaticoespanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">32 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-alumnos-con-perfil-gramaticoespanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">40 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Diferencial de Grado Promedio de Escolaridad por Género</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.32</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.20</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.06</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">0.02</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">16</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">10</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">13</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">13</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.002</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.021</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.030</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.078</a></td>
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
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">18</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">31</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Educacion

?>
