<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Gobierno
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
 * Clase Gobierno
 */
class Gobierno extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título y fecha
        $this->nombre        = 'Gobierno';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'gobierno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores - Categoría Gobierno';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Gobierno';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/gobierno.jpg';
        $this->imagen_previa = '../imagenes/categorias/gobierno.jpg';
        $this->imagen_id     = 'categorias-gobierno';
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
    <td class="indicador color1">Promedio de Horas para la Realización del Trámite de Licencia para Negocio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-licencia-para-negocio.html" data-toggle="tooltip" title="Horas, 31/12/2014, Ayuntamiento de Torreón">30</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Promedio de Horas para la Realizacion del Trámite de Permiso de Construcción de una Adición Residencial o Comercial</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-permiso-de-construccion-de-una-adicion-residencial-o-comercial.html" data-toggle="tooltip" title="Horas, 30/06/2014, Ayuntamiento de Torreón">38</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de una Propiedad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-de-una-propiedad.html" data-toggle="tooltip" title="Días, 31/12/2015, Doing Business">24</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de una Propiedad (percentil promedio)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.5800</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.7953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.7953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.5800</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-registro-de-una-propiedad-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.6877</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacitación a Empleados de Base</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-base.html" data-toggle="tooltip" title="Horas, 31/12/2014, Ayuntamiento de Torreón">0.4</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacitación a Empleados de Confianza</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-confianza.html" data-toggle="tooltip" title="Horas, 30/12/2014, Ayuntamiento de Torreón">3.15</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">1.77 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">4.52 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.15 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">39.67 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">6.70 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Duración de Período para Ediles y Delegados</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">4.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">4.0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" data-toggle="tooltip" title="Años, 31/12/2012, IMCO">3.5</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Empleados Municipales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-empleados-municipales.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, Ayuntamiento de Torreón">6.22</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Litros de Combustible Gastados por Habitante</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-habitante.html" data-toggle="tooltip" title="Litros por Persona, 31/12/2014, Ayuntamiento de Torreón">2.4</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Periodistas Muertos o Desaparecidos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">5</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">6</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Policías Operativos de Seguridad Pública</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-policias-operativos-de-seguridad-publica.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, Ayuntamiento de Torreón">0.97</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Promedio de Horas para la Realización del Trámite de Carta de No Adeudo Predial</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-promedio-de-horas-para-la-realizacion-del-tramite-de-carta-de-no-adeudo-predial.html" data-toggle="tooltip" title="Horas, 30/06/2014, Ayuntamiento de Torreón">0.11</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Vehículos Automotores por Habitante</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-vehiculos-automotores-por-habitante.html" data-toggle="tooltip" title="Por habitante, 31/12/2014, Ayuntamiento de Torreón">0.19</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Competencia de Servicios Notariales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">19.9267</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">8.8655</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">3.7265</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">6.1389</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">14.4016</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">55.05</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">57.55</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">31.30</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">11.01</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 25/11/2016, RFOSC">49.14</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase Gobierno

?>
