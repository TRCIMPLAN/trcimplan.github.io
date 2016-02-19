<?php
/**
 * TrcIMPLAN - SMI Categorías Mercados (Creado por Central:SmiLanzadera)
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
 * Clase Mercados
 */
class Mercados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Mercados';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'mercados';
        $this->imagen           = '../imagenes/categorias/mercados.jpg';
        $this->imagen_previa    = '../imagenes/categorias/mercados.jpg';
        $this->imagen_id        = 'categorias-mercados';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Mercados';
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
    <td class="indicador color1">Cantidad de Créditos Hipotecarios (trimestral)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-cantidad-de-creditos-hipotecarios-trimestral.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">284</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-cantidad-de-creditos-hipotecarios-trimestral.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">85</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-cantidad-de-creditos-hipotecarios-trimestral.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">27</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-cantidad-de-creditos-hipotecarios-trimestral.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">5</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-cantidad-de-creditos-hipotecarios-trimestral.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">401</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Cartera Hipotecaria</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 4,664,619,926.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 614,765,352.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 334,888,287.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 57,702,472.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 5,671,976,037.00</a></td>
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
    <td class="indicador color1">Ciudad Fronteriza o Portuaria</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ciudad-fronteriza-o-portuaria.html" data-toggle="tooltip" title="Dummy (0,1,2), 31/12/2012, IMCO">0</a></td>
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
    <td class="indicador color1">Crédito a las Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 580.95</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 1,035.56</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 1,680.72</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 495.72</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-credito-a-las-empresas.html" data-toggle="tooltip" title="Pesos por cada mil pesos de PIB, 31/12/2012, IMCO">$ 725.64</a></td>
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
    <td class="indicador color1">Índice de Especialización Local en Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">9.0330 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">11.1544 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">16.6048 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">17.5070 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">9.7923 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">74.9639 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">68.4953 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">52.6319 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">68.2820 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">72.8484 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">2.3266 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">2.0232 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">0.5842 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">0.0023 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">2.1951 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Minería</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">1.4625 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">0.5269 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">2.3267 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">1.8292 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">1.2450 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">9.1291 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">5.6635 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">9.3554 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">9.6493 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">8.3759 %</a></td>
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
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">223.3132 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">20.3095 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">24.1582 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">34.9078 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Frenado el Crecimiento</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sectores-que-han-frenado-el-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">7.36 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-sectores-que-han-frenado-el-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">9.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-sectores-que-han-frenado-el-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">40.97 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-sectores-que-han-frenado-el-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">56.40 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-sectores-que-han-frenado-el-crecimiento.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">16.81 %</a></td>
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
    <td class="indicador color1">Tamaño del Mercado Hipotecario</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">14.0575</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">5.5430</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">4.8046</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">3.5920</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Créditos por cada mil habitantes, 31/12/2012, IMCO">9.7623</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">7.1935 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">7.9537 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">7.5766 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">7.4123 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">7.4282 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas al Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">40.5365 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">41.7020 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">44.0892 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">48.6102 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">41.6515 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">49.0168 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">46.1335 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">43.3638 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">40.9001 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">47.3005 %</a></td>
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

} // Clase Mercados

?>
