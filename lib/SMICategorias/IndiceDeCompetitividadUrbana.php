<?php
/**
 * TrcIMPLAN - SMI Categorías Índice de Competitividad Urbana (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase IndiceDeCompetitividadUrbana
 */
class IndiceDeCompetitividadUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Índice de Competitividad Urbana';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'indice-de-competitividad-urbana';
        $this->imagen           = '../imagenes/categorias/indice-de-competitividad-urbana.jpg';
        $this->imagen_previa    = '../imagenes/categorias/indice-de-competitividad-urbana.jpg';
        $this->imagen_id        = 'categorias-indice-de-competitividad-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Índice de Competitividad Urbana';
        $this->categorias       = array();
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-categorias';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores > Indicadores por Categoría';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
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
    <td class="indicador color1">Apertura de un Negocio (percentil promedio)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.3788</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.6770</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.6770</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.3788</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-apertura-de-un-negocio-percentil-promedio.html" data-toggle="tooltip" title="Percentil promedio, 31/12/2012, IMCO">0.5279</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Cartera Hipotecaria Vencida</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.91 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.44 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.94 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.38 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-cartera-hipotecaria-vencida.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">5.86 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Centros de Investigación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-centros-de-investigacion.html" data-toggle="tooltip" title="Centros de investigación por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ciudad Fronteriza o Portuaria</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
  </tr>
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento de la Población Ocupada sin Ingresos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-1.05 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-9.69 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-55.49 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-2.39 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-4.34 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del PIB Estatal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">3.12 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">1.73 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">1.73 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">3.12 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">2.75 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del Salario Promedio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-5.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-0.18 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-9.90 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">1.81 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-del-salario-promedio.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">-3.67 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en Jornadas Laborales Muy Largas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">1.86 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">0.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-10.04 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">6.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-en-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">0.15 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en los Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-5.66 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-9.77 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-14.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-4.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-7.46 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crédito a las Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 580.95</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 1,035.56</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 1,680.72</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 495.72</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 725.64</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Demandantes de Conflicto Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">10.7936</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">12.3553</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">0.1432</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">9.0768</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Densidad Poblacional</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Diversificación Económica</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">734</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">734</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">734</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">734</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-diversificacion-economica.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">734</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ejecución de Contratos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">270</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">243</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">243</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">270</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">256.5</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.8560 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">56.3498 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">34.1412 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">46.0290 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.7339 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">27.5685</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">23.2116</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">13.0615</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">6.4458</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas.html" data-toggle="tooltip" title="Empresas por cada mil de PEA, 31/12/2012, IMCO">23.1127</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas Certificadas con ISO-9000 y 14000</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">10.6011</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">14.9306</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">61.3409</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">279.3651</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas-certificadas-con-iso-9000-y-14000.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">21.4807</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Flujo de Pasajeros del o Hacia el Extranjero</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">14.44 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">14.44 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas (según CNN Expansión)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.1205</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.3472</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-grandes-empresas-segun-cnn-expansion.html" data-toggle="tooltip" title="Grandes empresas por cada mil, 31/12/2012, IMCO">0.1640</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa (Neta)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2012, IMCO">$ 63.20</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2012, IMCO">$ 609.79</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2012, IMCO">$ 64.53</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2012, IMCO">$ 4.99</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-inversion-extranjera-directa-neta.html" data-toggle="tooltip" title="Dólares per cápita, 31/12/2012, IMCO">$ 206.25</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Jornadas Laborales Muy Largas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">23.33 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">27.45 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.63 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">25.54 %</a></td>
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Patentes</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">5.6569</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">8.4125</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">8.4125</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">7.7962</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-patentes.html" data-toggle="tooltip" title="Por cada 100 mil de PEA, 31/12/2012, IMCO">5.3714</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Población Ocupada Sin Ingresos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">11.63 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">7.52 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.22 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">7.93 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">9.17 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad (por cada 100mil de PEA)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" data-toggle="tooltip" title="Posgrados por cada 100 mil de PEA, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Media Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 729.82</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 1,771.11</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 4,094.59</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 4,496.77</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-media-laboral.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2012, IMCO">$ 416.42</a></td>
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Salario Promedio Mensual para Trabajadores de Tiempo Completo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,347.41</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,148.37</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,085.09</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,059.74</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,778.02</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Presentado Alto Crecimiento</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">11.68 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">32.13 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">34.59 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.77 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-sectores-que-han-presentado-alto-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">27.04 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sitios UNESCO</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tamaño del Mercado Hipotecario</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">14.0575</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">5.5430</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">4.8046</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">3.5920</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">9.7623</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tierra Ejidal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">68.21 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">58.92 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">70.21 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">59.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tierra-ejidal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">63.34 %</a></td>
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
    <td class="indicador color2">Índice de Información Presupuestal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">100.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">30.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">33.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">100.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 08/12/2015, IMCO">65.75</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Propios</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.8231 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">46.4262 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">15.0065 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">8.7762 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">32.6557 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Muertes por Infecciones Instestinales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.7523</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.7886</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">2.0272</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.6283</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.5499</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Participación Ciudadana</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">64.66 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">58.31 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">59.57 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">66.29 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-participacion-ciudadana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">62.53 %</a></td>
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
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Competencia de Servicios Notariales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">19.9267</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">8.8655</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">3.7265</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">6.1389</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-competencia-de-servicios-notariales.html" data-toggle="tooltip" title="Por cada 100 mil PEA, 31/12/2012, IMCO">14.4016</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Monto Reportado en Robo de Mercancías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.07</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.16</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.03</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.01</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.09</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Percepción de Inseguridad</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">71.71 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">65.97 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">65.97 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">71.71 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">68.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2015, Elaboración propia con datos obtenidos del INEGI">19.7265</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">43.7146</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">41.8962</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">36.2831</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">77.5463</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de VehÍculos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">23.1372</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">7.5040</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">40.1776</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">8.3992</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">19.0018</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Acceso a Instituciones de Salud</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">41.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">48.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">31.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">37.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">42.0 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Acceso a Servicios Financieros</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">6.4959</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">4.8501</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">2.5370</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">3.9622</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-acceso-a-servicios-financieros.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">5.3925</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Camas de Hospital</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">0.7655</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">2.0983</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">2.5678</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">0.9071</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">1.3490</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Crecimiento en Acceso a Servicios de Salud</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.12 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-4.55 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-7.29 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">4.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Crecimiento en Población Altamente Calificada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.98 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">4.82 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-10.67 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-1.22 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-crecimiento-en-poblacion-altamente-calificada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-1.55 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Desigualdad en las Ciudades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-desigualdad-en-las-ciudades.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.3498</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Empresa Socialmente Responsable</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-empresa-socialmente-responsable.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0309</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-empresa-socialmente-responsable.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0214</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-empresa-socialmente-responsable.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-empresa-socialmente-responsable.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-empresa-socialmente-responsable.html" data-toggle="tooltip" title="Por cada 10 mil, 24/05/2016, Centro Mexicano para la Filantropía (Cemefi)">0.0241</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Escuelas de Calidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">26.63 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">19.11 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">16.67 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">3.23 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-escuelas-de-calidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">20.18 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales (según IMCO)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.36</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.15</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.22</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.11</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.26</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Ingreso Promedio de la Mujer</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">1.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-ingreso-promedio-de-la-mujer.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">0.8</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Médicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">2.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">4.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">6.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">4.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">3.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Infantil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">12.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">9.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">20.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">15.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">12.2</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por Diabetes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">8.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">6.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.5</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Muertes por Accidentes Relacionados con Transporte</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">11.5569</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">18.9430</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">18.2451</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">5.4425</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">13.8053</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mujeres en la Fuerza Laboral</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2012, IMCO">43.61 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2012, IMCO">42.52 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2012, IMCO">39.57 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2012, IMCO">36.66 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mujeres-en-la-fuerza-laboral.html" data-toggle="tooltip" title="Mujeres en la PEA como porcentaje del total de mujeres en edad laboral, 31/12/2012, IMCO">42.29 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">47.98</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">45.84</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">22.70</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">10.78</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">41.22</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Personas por Debajo de la Línea de Bienestar</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">3.32 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">4.49 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">2.68 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">6.07 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">3.78 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rendimiento Académico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">43.0 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">38.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">36.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">28.5 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-rendimiento-academico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">39.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades de Calidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-universidades-de-calidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Uso de Servicios Financieros</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">1.8228</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">1.3857</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0.3919</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0.6439</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-uso-de-servicios-financieros.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">1.4435</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Uso de Twitter como Proxy de Uso de Tecnologías de Información</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">8.2249</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.8366</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">2.1624</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">1.1490</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" data-toggle="tooltip" title="Twits por Hora por cada mil habitantes, 31/12/2012, IMCO">5.4432</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Visitas a Museos INAH</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">172.0800</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">90.4452</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Computadora</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">39.81 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">30.54 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">28.48 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">20.85 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">36.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Drenaje (sólo conexión a red pública)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">89.92 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">83.49 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">79.51 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">86.46 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">86.81 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Líneas Telefónicas Móviles</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">83.16 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">79.72 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">73.95 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">71.20 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-lineas-telefonicas-moviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">80.27 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Piso de Tierra</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">1.21 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">2.24 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">1.72 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">1.71 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-con-piso-de-tierra.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">1.58 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Aerolíneas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">10</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-aerolineas.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">10</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Aprovechamiento del Biogás en Rellenos Sanitarios</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Capacidad de Tratamiento de Agua en Operación</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">1.2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">0.5</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">0.1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">0.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">1.9</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Consumo de Agua</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2012, IMCO">127.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2012, IMCO">84.8</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2012, IMCO">94.1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2012, IMCO">109.6</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-consumo-de-agua.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2012, IMCO">110.2</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Consumo de Diesel en Transporte de Bienes</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" data-toggle="tooltip" title="Metros cúbicos de Diesel/10 mil habinates/Kilómetros de red carretera, 31/12/2012, IMCO">1.847</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Desastres Naturales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">3</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">5</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">5</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-desastres-naturales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">15</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disposición Adecuada de Residuos Sólidos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">94.7 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Economía Intensiva en Energía</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">2.6</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">4.5</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">17.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">1.3</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-economia-intensiva-en-energia.html" data-toggle="tooltip" title="Metros cúbicos de combustibes por cada millón de PIB, 31/12/2012, IMCO">3.4</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Emergencias Ambientales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">4</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-emergencias-ambientales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">4</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Empresas Certificadas como Limpias</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">1.2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">3.8</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">1.4</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">0.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">1.8</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Flujo de Pasajeros Aéreos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">301.7549</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">158.6023</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Índice de Gestión de Calidad del Aire</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Líneas de Autobús</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">11</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">13</a></td>
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
    <td class="indicador color5">Sistema de Transporte Masivo</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sobreexplotación del Acuífero</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">28.4 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">82.1 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Deshabitadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">22.97 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">22.74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">21.44 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">15.01 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">22.14 %</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL

FINAL;
    } // constructor

} // Clase IndiceDeCompetitividadUrbana

?>
