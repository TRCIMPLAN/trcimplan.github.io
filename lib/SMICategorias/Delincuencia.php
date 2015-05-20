<?php
/**
 * TrcIMPLAN SMIv2 - Delincuencia
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
 * Clase Delincuencia
 */
class Delincuencia extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Delincuencia';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'delincuencia';
        $this->descripcion   = 'Matriz de indicadores en la categoría Delincuencia';
        $this->imagen_previa = '../imagenes/categorias/delincuencia.jpg';
        $this->icono         = 'fa fa-exclamation-triangle';
        $this->claves        = 'IMPLAN, Indicadores, Delincuencia';
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
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">600</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">425</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">78</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">72</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1,175</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">30</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-personas-involucradas-en-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">31,455</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">2,561</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-personas-involucradas-en-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">11</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">78</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">6,647</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-presuntos-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">13,584</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-presuntos-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">1,100</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">90</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-presuntos-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-presuntos-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">19</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Negocios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-negocios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">79</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robo-negocios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">34</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-negocios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-negocios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">7</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robo-negocios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">122</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Transeuntes</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">68</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robo-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">16</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">5</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robo-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">92</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Vehículos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">34</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robo-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">54</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robo-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">97</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">42</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robos-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">22</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">7</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">8</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robos-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">79</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos Totales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">253</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">177</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">32</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">25</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">487</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Extorsión</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidio Doloso</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo con Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-robo-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-robo-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-robo-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-robo-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-robo-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo sin Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-robo-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-robo-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-robo-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-robo-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-robo-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
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
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Delincuencia

?>
