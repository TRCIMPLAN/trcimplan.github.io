<?php
/**
 * TrcIMPLAN - SMI Indicadores Matamoros Economía Personal Ocupado en el Comercio (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaPersonalOcupadoEnElComercio
 */
class EconomiaPersonalOcupadoEnElComercio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Personal Ocupado en el Comercio en Matamoros';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-personal-ocupado-en-el-comercio';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.';
        $this->claves            = 'IMPLAN, Matamoros, Empleo, Mercados';
        $this->categorias        = array('Empleo', 'Mercados');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-matamoros';
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
        $region->addressLocality = 'Matamoros';
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
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el HTML de las lengüetas
        $this->contenido->articleBody = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
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
            <td>38.42 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>45.97 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>34.32 %</td>
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
      <h3>Gráfica de Personal Ocupado en el Comercio en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Personal Ocupado en el Comercio</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Personal Ocupado en el Comercio</h3>
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
            <td>2008-12-31</td>
            <td>27.65 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td>27.61 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td>31.07 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td>34.32 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td>28.03 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td>30.50 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        // Cargar en el Schema el HTML con los artículos relacionados
        $this->contenido->extra = <<<FINAL
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
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-salario-promedio.html">Salario promedio en Gómez Palacio</a></td>
            <td>Salario promedio mensual para personal ocupado con jornadas laborales de 35 a 48 horas semanales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-salario-promedio.html">Salario promedio en La Laguna</a></td>
            <td>Salario promedio mensual para personal ocupado con jornadas laborales de 35 a 48 horas semanales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-salario-promedio.html">Salario promedio en Lerdo</a></td>
            <td>Salario promedio mensual para personal ocupado con jornadas laborales de 35 a 48 horas semanales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-salario-promedio.html">Salario promedio en Matamoros</a></td>
            <td>Salario promedio mensual para personal ocupado con jornadas laborales de 35 a 48 horas semanales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-salario-promedio.html">Salario promedio en Torreón</a></td>
            <td>Salario promedio mensual para personal ocupado con jornadas laborales de 35 a 48 horas semanales.</td>
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
            <td>10/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/efectos-informalidad-politicas-prevenirla.html">Efectos de la informalidad y políticas para prevenirla</a></td>
            <td>La informalidad tiene repercusiones directas sobre la competitividad y el crecimiento económico. Es cierto que ocupa a población desempleada en el sector formal y sus insumos e inversión apoyan a la economía, sin embargo es mayor el daño generado en el crecimiento a largo plazo.</td>
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
            <td>11/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-tasa-de-informalidad.html">Tasa de informalidad en Gómez Palacio</a></td>
            <td>Tasa de empleos informales.</td>
          </tr>
          <tr>
            <td>11/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-tasa-de-informalidad.html">Tasa de informalidad en La Laguna</a></td>
            <td>Tasa de empleos informales.</td>
          </tr>
          <tr>
            <td>11/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-tasa-de-informalidad.html">Tasa de informalidad en Lerdo</a></td>
            <td>Tasa de empleos informales.</td>
          </tr>
          <tr>
            <td>11/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-tasa-de-informalidad.html">Tasa de informalidad en Matamoros</a></td>
            <td>Tasa de empleos informales.</td>
          </tr>
          <tr>
            <td>11/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-tasa-de-informalidad.html">Tasa de informalidad en Torreón</a></td>
            <td>Tasa de empleos informales.</td>
          </tr>
          <tr>
            <td>12/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/industrial-metalmecanica-la-laguna.html">La industria metalmecánica y La Laguna</a></td>
            <td>A diferencia del año 2013 cuando la industria metalmecánica creció 4% a nivel nacional, la directora de Fabetch México pronosticó en Julio un crecimiento de 8% para el presente año.</td>
          </tr>
          <tr>
            <td>07/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-trabajadores-asegurados.html">Trabajadores Asegurados en Gómez Palacio</a></td>
            <td>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</td>
          </tr>
          <tr>
            <td>07/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-trabajadores-asegurados.html">Trabajadores Asegurados en La Laguna</a></td>
            <td>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</td>
          </tr>
          <tr>
            <td>07/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-trabajadores-asegurados.html">Trabajadores Asegurados en Lerdo</a></td>
            <td>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</td>
          </tr>
          <tr>
            <td>07/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-trabajadores-asegurados.html">Trabajadores Asegurados en Matamoros</a></td>
            <td>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</td>
          </tr>
          <tr>
            <td>07/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-trabajadores-asegurados.html">Trabajadores Asegurados en Torreón</a></td>
            <td>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</td>
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
            <td><a href="../indicadores-gomez-palacio/economia-desempleo.html">Desempleo en Gómez Palacio</a></td>
            <td>Cantidad de personas desempleadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-desempleo.html">Desempleo en La Laguna</a></td>
            <td>Cantidad de personas desempleadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-desempleo.html">Desempleo en Lerdo</a></td>
            <td>Cantidad de personas desempleadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-desempleo.html">Desempleo en Matamoros</a></td>
            <td>Cantidad de personas desempleadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-desempleo.html">Desempleo en Torreón</a></td>
            <td>Cantidad de personas desempleadas.</td>
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
            <td><a href="../indicadores-gomez-palacio/economia-productividad-laboral.html">Productividad Laboral en Gómez Palacio</a></td>
            <td>PIB sin petróleo / PEA.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-productividad-laboral.html">Productividad Laboral en La Laguna</a></td>
            <td>PIB sin petróleo / PEA.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-productividad-laboral.html">Productividad Laboral en Lerdo</a></td>
            <td>PIB sin petróleo / PEA.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-productividad-laboral.html">Productividad Laboral en Matamoros</a></td>
            <td>PIB sin petróleo / PEA.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-productividad-laboral.html">Productividad Laboral en Torreón</a></td>
            <td>PIB sin petróleo / PEA.</td>
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
            <td><a href="../indicadores-gomez-palacio/economia-tasa-de-desempleo-abierto.html">Tasa de Desempleo Abierto en Gómez Palacio</a></td>
            <td>Número total de desempleados entre la Población económicamente activa.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-tasa-de-desempleo-abierto.html">Tasa de Desempleo Abierto en La Laguna</a></td>
            <td>Número total de desempleados entre la Población económicamente activa.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-tasa-de-desempleo-abierto.html">Tasa de Desempleo Abierto en Lerdo</a></td>
            <td>Número total de desempleados entre la Población económicamente activa.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-tasa-de-desempleo-abierto.html">Tasa de Desempleo Abierto en Matamoros</a></td>
            <td>Número total de desempleados entre la Población económicamente activa.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-tasa-de-desempleo-abierto.html">Tasa de Desempleo Abierto en Torreón</a></td>
            <td>Número total de desempleados entre la Población económicamente activa.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-trabajadores-asegurados-region.html">Trabajadores Asegurados (Región) en Torreón</a></td>
            <td>Evolución del empleo medida en trabajadores asegurados por el IMSS.</td>
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
            <td>21/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/vision-vencedores.html">La visión de los vencedores</a></td>
            <td>El regreso de La Laguna a los primeros lugares en el ranking de competitividad nacional demanda de una comunidad que retome los valores y el empuje de “Los Fundadores”, de los hombres y mujeres que lejos de considerarse victimas de las adversidades, de su entorno natural y político, construyeron una de las regiones más prósperas de México.</td>
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
            <td><a href="../blog/retrospectiva-estado-actual-empleo.html">Retrospectiva y estado actual del empleo en Torreón y la ZML</a></td>
            <td>El empleo es uno de los principales indicadores, que muestra el desempeño económico de una ciudad, región o país. Desde hace 9 años Torreón y la Zona Metropolitana de la Laguna se habían separado a la alza de la media nacional.</td>
          </tr>
          <tr>
            <td>19/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-genero-informatica.html">Equidad de Género en Informática</a></td>
            <td>Aunque vivimos el mejor momento de las Ciencias Computacionales, el género femenino tiene muy poca participación en el sector.</td>
          </tr>
          <tr>
            <td>06/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-laboral-cotidiana-zml.html">Movilidad laboral cotidiana en la ZML</a></td>
            <td>Población ocupada que tiene trabajo en su PROPIO municipio y que tiene trabajo en OTRO Municipio de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>04/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/contribucion-tic-competitividad-productividad.html">Contribución de las TICs en la competitividad y productividad</a></td>
            <td>La implementación de las TICs en las actividades económicas se ha vuelto indispensable para el óptimo desarrollo de una región.</td>
          </tr>
          <tr>
            <td>30/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/laguna-apostarle-industria-automotriz.html">La Laguna debe apostarle a la Industria Automotriz</a></td>
            <td>En industria automotriz hay mayor inversión en la investigación y desarrollo que origina una derrama de capacidades tecnológicas con aplicación en otros sectores como el eléctrico, electrónico y aeroespacial.</td>
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
            <td>28/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/indicadores-por-municipio-metodologia-imco.html">Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO</a></td>
            <td>Índice de Competitividad Urbana de la Zona Metropolitana de la Laguna, Torreón, Gómez Palacio, Lerdo y Matamoros en 2012.</td>
          </tr>
          <tr>
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
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
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // JavaScript
        $this->javascript[] = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1998-12-31', dato: 38.4200 },{ fecha: '2003-12-31', dato: 45.9700 },{ fecha: '2008-12-31', dato: 34.3232 }],
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
      data: [{ region: 'Torreón', dato: 27.6529 },{ region: 'Gómez Palacio', dato: 27.6120 },{ region: 'Lerdo', dato: 31.0701 },{ region: 'Matamoros', dato: 34.3232 },{ region: 'La Laguna', dato: 28.0342 },{ region: 'Nacional', dato: 30.5000 }],
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
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion = <<<FINAL
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
            <td>38.42 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>45.97 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>34.32 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaPersonalOcupadoEnElComercio

?>
