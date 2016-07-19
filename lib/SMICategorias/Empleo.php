<?php
/**
 * TrcIMPLAN - SMI Categorías Empleo (Creado por Central:SmiLanzadera)
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
 * Clase Empleo
 */
class Empleo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Empleo';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'empleo';
        $this->imagen           = '../imagenes/categorias/empleo.jpg';
        $this->imagen_previa    = '../imagenes/categorias/empleo.jpg';
        $this->imagen_id        = 'categorias-empleo';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Empleo';
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
    <td class="indicador color1">Crecimiento de la Población Ocupada sin Ingresos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-1.05 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-9.69 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-55.49 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-2.39 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" data-toggle="tooltip" title="Tasa promedio anual, 31/12/2012, IMCO">-4.34 %</a></td>
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
    <td class="indicador color1">Demandantes de Conflicto Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">10.7936</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">12.3553</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">0.1432</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-demandantes-de-conflicto-laboral.html" data-toggle="tooltip" title="Por cada mil de la PEA, 31/12/2012, IMCO">9.0768</a></td>
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
    <td class="indicador color1">Jornadas Laborales Muy Largas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">23.33 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">27.45 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.63 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-jornadas-laborales-muy-largas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">25.54 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">26.9458 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">29.4578 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">24.1890 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">35.3180 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">27.6995 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">25.1459 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">32.3272 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">46.1564 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">37.4666 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">28.7366 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">39.0245 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">28.5100 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">20.3095 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">24.1582 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">34.9078 %</a></td>
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
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 530,143.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 462,597.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 51,284.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 45,744.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 421,204.00</a></td>
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
    <td class="indicador color1">Salario Promedio Mensual para Trabajadores de Tiempo Completo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 6,347.41</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,148.37</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,085.09</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,059.74</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" data-toggle="tooltip" title="Pesos, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">$ 5,778.02</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Condiciones Críticas de Ocupación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">8.77 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">11.40 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">8.89 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">18.45 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-condiciones-criticas-de-ocupacion.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">10.50 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Desempleo Abierto</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">5.4775 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">4.7131 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">6.2500 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">1.9048 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">4.9520 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Informalidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">41.1590 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">42.3656 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">51.1111 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">43.6893 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2016, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">42.1462 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2016, Instituto Mexicano del Seguro Social (IMSS)">180,602</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2016, Instituto Mexicano del Seguro Social (IMSS)">75,604</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2016, Instituto Mexicano del Seguro Social (IMSS)">14,414</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2016, Instituto Mexicano del Seguro Social (IMSS)">8,387</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/04/2016, Instituto Mexicano del Seguro Social (IMSS)">279,007</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados (Región)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados-region.html" data-toggle="tooltip" title="Personas, 31/12/2013, IMSS Subdelegación Torreón">187,050</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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

} // Clase Empleo

?>
