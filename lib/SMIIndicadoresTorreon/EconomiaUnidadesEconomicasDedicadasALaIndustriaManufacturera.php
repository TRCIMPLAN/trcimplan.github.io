<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Economía Unidades Económicas Dedicadas a la Industria Manufacturera (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
 */
class EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Unidades Económicas Dedicadas a la Industria Manufacturera en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-unidades-economicas-dedicadas-a-la-industria-manufacturera';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.';
        $this->claves            = 'IMPLAN, Torreón, Empresas, Mercados';
        $this->categorias        = array('Empresas', 'Mercados');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Torreón';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        $schema->articleBody     = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</p>

      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/12/1998</td>
            <td>10.96 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>9.33 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>9.24 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>8.55 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Unidades Económicas Dedicadas a la Industria Manufacturera en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Unidades Económicas Dedicadas a la Industria Manufacturera</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Unidades Económicas Dedicadas a la Industria Manufacturera</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>2013-10-31</td>
            <td>8.55 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-10-31</td>
            <td>8.84 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-10-31</td>
            <td>8.52 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-10-31</td>
            <td>9.58 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-10-31</td>
            <td>8.69 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-10-31</td>
            <td>10.71 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $schema->extra           = <<<FINAL
      <h3>Publicaciones relacionadas</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>24/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/evolucion-del-mercado-hipotecario-en-torreon.html">Evolución del Mercado Hipotecario en Torreón</a></td>
            <td>La vivienda es una buena parte de la inversión y puede ser el mayor componente de la riqueza. El buen funcionamiento del mercado inmobiliario es clave para la salud de la economía.</td>
          </tr>
          <tr>
            <td>25/05/2015</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/salud-laguna.html">Salud Laguna</a></td>
            <td>Salud Laguna es una agrupación interactiva de pro­fesionales, instituciones, or­ga­nizaciones, integrados en torno a las actividades económicas que dan servicio y soportan al sec­tor salud.</td>
          </tr>
          <tr>
            <td>20/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/indicadores-economicos-primer-trimestre-2015-torreon.html">Indicadores Económicos del primer trimestre de 2015 para el Municipio de Torreón</a></td>
            <td>Análisis de los indicadores de inflación, apertura de empresas, trabajadores asegurados y salario promedio para el municipio de Torreón.</td>
          </tr>
          <tr>
            <td>19/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/sed-o-no-sed.html">¿Sed o no sed?</a></td>
            <td>El IMPLAN ve una región de grandes retos y de grandes oportunidades, capaz de rivalizar, si unimos voluntades, con avezados competidores en los mercados globalizados.</td>
          </tr>
          <tr>
            <td>09/02/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-nuevas-empresas.html">Nuevas Empresas en Torreón</a></td>
            <td>Número de nuevas empresas registradas en ventanilla universal en el periodo señalado.</td>
          </tr>
          <tr>
            <td>03/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/tasa-inflacion-precios-torreon-2014.html">Tasa de inflación y precios en Torreón 2014</a></td>
            <td>Un incremento en la inflación como el que sufrió Torreón en 2014 no es necesariamente una señal negativa pues puede ser causada por exceso de dinero en la economía.</td>
          </tr>
          <tr>
            <td>06/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/comercio-al-por-menor-alternativa-crecimiento-economico.html">Comercio al por menor como alternativa de crecimiento económico</a></td>
            <td>El comercio se vuelve tan importante como la industria tradicional para una localidad en la medida en que éste aumente el ingreso local y reduzca la fuga de consumo y empleo hacia otras ciudades.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-empresas-exportadoras.html">Empresas Exportadoras en Gómez Palacio</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-empresas-exportadoras.html">Empresas Exportadoras en La Laguna</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-empresas-exportadoras.html">Empresas Exportadoras en Lerdo</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-empresas-exportadoras.html">Empresas Exportadoras en Matamoros</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-empresas-exportadoras.html">Empresas Exportadoras en Torreón</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>12/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/industrial-metalmecanica-la-laguna.html">La industria metalmecánica y La Laguna</a></td>
            <td>A diferencia del año 2013 cuando la industria metalmecánica creció 4% a nivel nacional, la directora de Fabetch México pronosticó en Julio un crecimiento de 8% para el presente año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-apertura-de-negocios.html">Apertura de Negocios en Torreón</a></td>
            <td>Número de días necesarios para el trámite de apertura de un negocio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-cartera-hipotecaria.html">Cartera Hipotecaria en Gómez Palacio</a></td>
            <td>Monto total de créditos otorgados hasta la fecha indicada.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-cartera-hipotecaria.html">Cartera Hipotecaria en La Laguna</a></td>
            <td>Monto total de créditos otorgados hasta la fecha indicada.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-cartera-hipotecaria.html">Cartera Hipotecaria en Lerdo</a></td>
            <td>Monto total de créditos otorgados hasta la fecha indicada.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-cartera-hipotecaria.html">Cartera Hipotecaria en Matamoros</a></td>
            <td>Monto total de créditos otorgados hasta la fecha indicada.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-cartera-hipotecaria.html">Cartera Hipotecaria en Torreón</a></td>
            <td>Monto total de créditos otorgados hasta la fecha indicada.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Gómez Palacio</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html">Ejecución de Contratos en La Laguna</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Lerdo</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Matamoros</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Torreón</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-grandes-empresas.html">Grandes Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-grandes-empresas.html">Grandes Empresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-grandes-empresas.html">Grandes Empresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-grandes-empresas.html">Grandes Empresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-grandes-empresas.html">Grandes Empresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-medianas-empresas.html">Medianas Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-medianas-empresas.html">Medianas Empresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-medianas-empresas.html">Medianas Empresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-medianas-empresas.html">Medianas Empresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-medianas-empresas.html">Medianas Empresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-microempresas.html">Microempresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-microempresas.html">Microempresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-microempresas.html">Microempresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-microempresas.html">Microempresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-microempresas.html">Microempresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-obtencion-de-credito-creacion-de-garantias.html">Obtención de crédito - Creación de garantías en Torreón</a></td>
            <td>Días transcurridos en el proceso de obtención de un crédito.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-pequenas-empresas.html">Pequeñas Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-pequenas-empresas.html">Pequeñas Empresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-pequenas-empresas.html">Pequeñas Empresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-pequenas-empresas.html">Pequeñas Empresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-pequenas-empresas.html">Pequeñas Empresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-permiso-de-construccion.html">Permiso de Construcción en Torreón</a></td>
            <td>Número de días necesarios para conseguir un permiso de construcción.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en Gómez Palacio</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en La Laguna</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en Lerdo</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en Matamoros</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en Torreón</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en Gómez Palacio</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en La Laguna</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en Lerdo</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en Matamoros</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en Torreón</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en Gómez Palacio</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en La Laguna</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en Lerdo</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en Matamoros</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en Torreón</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-registro-de-propiedades.html">Registro de Propiedades en Torreón</a></td>
            <td>Días que toma el trámite para el registro de una propiedad.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-sectores-que-han-frenado-el-crecimiento-2008-2012.html">Sectores que Han Frenado el Crecimiento (2008-2012) en Gómez Palacio</a></td>
            <td>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-sectores-que-han-frenado-el-crecimiento-2008-2012.html">Sectores que Han Frenado el Crecimiento (2008-2012) en La Laguna</a></td>
            <td>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-sectores-que-han-frenado-el-crecimiento-2008-2012.html">Sectores que Han Frenado el Crecimiento (2008-2012) en Lerdo</a></td>
            <td>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-sectores-que-han-frenado-el-crecimiento-2008-2012.html">Sectores que Han Frenado el Crecimiento (2008-2012) en Matamoros</a></td>
            <td>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-sectores-que-han-frenado-el-crecimiento-2008-2012.html">Sectores que Han Frenado el Crecimiento (2008-2012) en Torreón</a></td>
            <td>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-sectores-que-han-presentado-alto-crecimiento-2008-2012.html">Sectores que Han Presentado Alto Crecimiento (2008-2012) en Gómez Palacio</a></td>
            <td>% de la producción en sectores con tasa promedio de crecimiento superior al promedio nacional en los últimos 5 años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-sectores-que-han-presentado-alto-crecimiento-2008-2012.html">Sectores que Han Presentado Alto Crecimiento (2008-2012) en La Laguna</a></td>
            <td>% de la producción en sectores con tasa promedio de crecimiento superior al promedio nacional en los últimos 5 años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-sectores-que-han-presentado-alto-crecimiento-2008-2012.html">Sectores que Han Presentado Alto Crecimiento (2008-2012) en Lerdo</a></td>
            <td>% de la producción en sectores con tasa promedio de crecimiento superior al promedio nacional en los últimos 5 años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-sectores-que-han-presentado-alto-crecimiento-2008-2012.html">Sectores que Han Presentado Alto Crecimiento (2008-2012) en Matamoros</a></td>
            <td>% de la producción en sectores con tasa promedio de crecimiento superior al promedio nacional en los últimos 5 años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-sectores-que-han-presentado-alto-crecimiento-2008-2012.html">Sectores que Han Presentado Alto Crecimiento (2008-2012) en Torreón</a></td>
            <td>% de la producción en sectores con tasa promedio de crecimiento superior al promedio nacional en los últimos 5 años.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-tamano-del-mercado-hipotecario.html">Tamaño del Mercado Hipotecario en Gómez Palacio</a></td>
            <td>Créditos dispuestos marginalmente durante el año indicado.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-tamano-del-mercado-hipotecario.html">Tamaño del Mercado Hipotecario en La Laguna</a></td>
            <td>Créditos dispuestos marginalmente durante el año indicado.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-tamano-del-mercado-hipotecario.html">Tamaño del Mercado Hipotecario en Lerdo</a></td>
            <td>Créditos dispuestos marginalmente durante el año indicado.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-tamano-del-mercado-hipotecario.html">Tamaño del Mercado Hipotecario en Matamoros</a></td>
            <td>Créditos dispuestos marginalmente durante el año indicado.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-tamano-del-mercado-hipotecario.html">Tamaño del Mercado Hipotecario en Torreón</a></td>
            <td>Créditos dispuestos marginalmente durante el año indicado.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en La Laguna</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Lerdo</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Matamoros</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Torreón</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en La Laguna</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Lerdo</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Matamoros</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Torreón</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en La Laguna</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Lerdo</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Matamoros</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Torreón</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-comercio.html">Índice de Especialización Local en Comercio en Gómez Palacio</a></td>
            <td>Producción bruta total del comercio al por mayor y al por menor entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-comercio.html">Índice de Especialización Local en Comercio en La Laguna</a></td>
            <td>Producción bruta total del comercio al por mayor y al por menor entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-comercio.html">Índice de Especialización Local en Comercio en Lerdo</a></td>
            <td>Producción bruta total del comercio al por mayor y al por menor entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-comercio.html">Índice de Especialización Local en Comercio en Matamoros</a></td>
            <td>Producción bruta total del comercio al por mayor y al por menor entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-comercio.html">Índice de Especialización Local en Comercio en Torreón</a></td>
            <td>Producción bruta total del comercio al por mayor y al por menor entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-industria-manufacturera.html">Índice de Especialización Local en Industria Manufacturera en Gómez Palacio</a></td>
            <td>Producción bruta total de la industria manufacturera entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-industria-manufacturera.html">Índice de Especialización Local en Industria Manufacturera en La Laguna</a></td>
            <td>Producción bruta total de la industria manufacturera entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-industria-manufacturera.html">Índice de Especialización Local en Industria Manufacturera en Lerdo</a></td>
            <td>Producción bruta total de la industria manufacturera entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-industria-manufacturera.html">Índice de Especialización Local en Industria Manufacturera en Matamoros</a></td>
            <td>Producción bruta total de la industria manufacturera entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-industria-manufacturera.html">Índice de Especialización Local en Industria Manufacturera en Torreón</a></td>
            <td>Producción bruta total de la industria manufacturera entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-servicios.html">Índice de Especialización Local en Servicios en Gómez Palacio</a></td>
            <td>Producción bruta total de los servicios entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-servicios.html">Índice de Especialización Local en Servicios en La Laguna</a></td>
            <td>Producción bruta total de los servicios entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-servicios.html">Índice de Especialización Local en Servicios en Lerdo</a></td>
            <td>Producción bruta total de los servicios entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-servicios.html">Índice de Especialización Local en Servicios en Matamoros</a></td>
            <td>Producción bruta total de los servicios entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-servicios.html">Índice de Especialización Local en Servicios en Torreón</a></td>
            <td>Producción bruta total de los servicios entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-construccion.html">Índice de Especialización Local en la Construcción en Gómez Palacio</a></td>
            <td>Producción bruta total de la actividad económica de construcción entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-construccion.html">Índice de Especialización Local en la Construcción en La Laguna</a></td>
            <td>Producción bruta total de la actividad económica de construcción entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-construccion.html">Índice de Especialización Local en la Construcción en Lerdo</a></td>
            <td>Producción bruta total de la actividad económica de construcción entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-construccion.html">Índice de Especialización Local en la Construcción en Matamoros</a></td>
            <td>Producción bruta total de la actividad económica de construcción entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-construccion.html">Índice de Especialización Local en la Construcción en Torreón</a></td>
            <td>Producción bruta total de la actividad económica de construcción entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-mineria.html">Índice de Especialización Local en la Minería en Gómez Palacio</a></td>
            <td>Producción bruta total de la actividad económica de minería entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-mineria.html">Índice de Especialización Local en la Minería en La Laguna</a></td>
            <td>Producción bruta total de la actividad económica de minería entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-mineria.html">Índice de Especialización Local en la Minería en Lerdo</a></td>
            <td>Producción bruta total de la actividad económica de minería entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-mineria.html">Índice de Especialización Local en la Minería en Matamoros</a></td>
            <td>Producción bruta total de la actividad económica de minería entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-mineria.html">Índice de Especialización Local en la Minería en Torreón</a></td>
            <td>Producción bruta total de la actividad económica de minería entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>07/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-sector-salud-laguna.html">Economía del Sector Salud en La Laguna</a></td>
            <td>El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.</td>
          </tr>
          <tr>
            <td>26/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/dinamica-pib-per-capita-laguna.html">Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)</a></td>
            <td>Entre los indicadores Banamex de 2011 y 2014 el PIB per cápita de La Laguna creció 22.82%.</td>
          </tr>
          <tr>
            <td>24/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/apertura-empresas-2014.html">Apertura de Empresas 2014</a></td>
            <td>La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.</td>
          </tr>
          <tr>
            <td>01/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gas-shale-impacto.html">El Gas Shale y su impacto</a></td>
            <td>La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.</td>
          </tr>
          <tr>
            <td>30/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/laguna-apostarle-industria-automotriz.html">La Laguna debe apostarle a la Industria Automotriz</a></td>
            <td>En industria automotriz hay mayor inversión en la investigación y desarrollo que origina una derrama de capacidades tecnológicas con aplicación en otros sectores como el eléctrico, electrónico y aeroespacial.</td>
          </tr>
          <tr>
            <td>03/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sectores-innovacion-sofisticacion.html">Sectores de Innovación y Sofisticación</a></td>
            <td>Análisis de los indicadores relativos a la innovación.</td>
          </tr>
          <tr>
            <td>01/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/productividad-zml.html">Productividad en la Zona Metropolitana de La Laguna</a></td>
            <td>Análisis de la productividad laboral, industria manufacturera y eficiencia del trabajo en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>24/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-estable.html">Economía Estable</a></td>
            <td>Análisis de las variables macroeconómicas como crédito, mercado hipotecario, cartera vencida, PIB y desempleo.</td>
          </tr>
          <tr>
            <td>17/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/mercado-factores-eficientes.html">Mercado de Factores Eficientes</a></td>
            <td>Análisis del mercado, las huelgas, el salario promedio mensual, productividad y demandas laborales en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>01/06/2014</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/plata-laguna.html">Plata Laguna</a></td>
            <td>Contribuir a que la plata de La Laguna sea un sector mundialmente competitivo; reconocida por su calidad e identificable por el consumidor.</td>
          </tr>
          <tr>
            <td>29/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/doing-business-torreon.html">Doing Business en Torreón</a></td>
            <td>Este índice sirve para señalar en cual ciudad es más fácil hacer negaocios. En 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas.</td>
          </tr>
          <tr>
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
          </tr>
          <tr>
            <td>28/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/la-laguna-metropoli-del-conocimiento.html">La Laguna: Metrópoli del Conocimiento</a></td>
            <td>Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento.</td>
          </tr>
          <tr>
            <td>25/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/estabilidad-de-precios-en-torreon.html">Estabilidad de Precios en Torreón</a></td>
            <td>En términos generales la inflación de Torreón se encuentra estable, lo cual genera certidumbre tanto a planta productiva local como extranjera.</td>
          </tr>
          <tr>
            <td>16/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/hacia-donde-debe-dirigirse-torreon.html">Hacia dónde debe dirigirse Torreón</a></td>
            <td>¿En realidad generan más valor las actividades tecnológicas y de servicios?</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // JavaScript
        $this->javascript        = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1998-12-31', dato: 10.9600 },{ fecha: '2003-12-31', dato: 9.3300 },{ fecha: '2008-12-31', dato: 9.2400 },{ fecha: '2013-10-31', dato: 8.5500 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 8.5500 },{ region: 'Gómez Palacio', dato: 8.8400 },{ region: 'Lerdo', dato: 8.5200 },{ region: 'Matamoros', dato: 9.5800 },{ region: 'La Laguna', dato: 8.6900 },{ region: 'Nacional', dato: 10.7100 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion        = <<<FINAL
      <h3>Descripción</h3>
<p>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</p>

      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/12/1998</td>
            <td>10.96 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>9.33 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>9.24 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>8.55 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

FINAL;
    } // constructor

} // Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera

?>
