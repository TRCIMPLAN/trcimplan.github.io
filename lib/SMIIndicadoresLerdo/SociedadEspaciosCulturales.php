<?php
/**
 * TrcIMPLAN - SMI Indicadores Lerdo Sociedad Espacios Culturales (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadEspaciosCulturales
 */
class SociedadEspaciosCulturales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Espacios Culturales en Lerdo';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sociedad-espacios-culturales';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Espacios culturales físicamente delimitados.';
        $this->claves            = 'IMPLAN, Lerdo, Educación, Cultura';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-lerdo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Durango';
        $region->addressLocality = 'Lerdo';
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
        // Para el Organizador
        $this->categorias        = array('Educación', 'Cultura');
        $this->fuentes           = array('CONACULTA-IMPLAN');
        $this->regiones          = 'Lerdo';
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
            <td>31/03/2014</td>
            <td>13</td>
            <td>CONACULTA-IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Se realizó un filtrado básico de la totalidad de los espacios culturales considerados por CONACULTA, ya que ellos consideran programas, fondos y proyectos a sus estadísticas totales, así como eventos que fueron realizados en una ocasión y datan de hace más de 5 años. Consulta la <a href="http://www.sic.gob.mx">Base de Datos completa</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Espacios Culturales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Espacios Culturales</h3>
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
            <td>2014-03-31</td>
            <td>16</td>
            <td>CONACULTA-IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td>10</td>
            <td>CONACULTA-IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td>13</td>
            <td>CONACULTA-IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td>8</td>
            <td>CONACULTA-IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td>13</td>
            <td>CONACULTA-IMPLAN</td>
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
            <td>28/07/2015</td>
            <td>GIS</td>
            <td><a href="../sig-mapas-torreon/centros-educativos.html">Centros Educativos</a></td>
            <td>Ubicación centros educativos en Torreón de nivel básico a superior. Fuente: INEGI 2010.</td>
          </tr>
          <tr>
            <td>28/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/es-mas-facil-cambiar-la-ciudad-que-cambiar-nosotros.html">Es más fácil cambiar la ciudad que cambiar nosotros</a></td>
            <td>Debemos de tomar acciones que nos lleven a revalorizar nuestro centro histórico, donde está la historia del nacimiento de nuestra ciudad.</td>
          </tr>
          <tr>
            <td>24/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/panorama-educacion-superior-zml-parte-2.html">Panorama de la Educación Superior en la Z.M.L. (parte 2)</a></td>
            <td>Análisis de las cantidades de estudiantes a nivel licenciatura, comparando los datos nacionales contra los de la Zona Metropolitana de La Laguna.</td>
          </tr>
          <tr>
            <td>15/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/alumnos-por-docente-parte-2.html">Alumnos por docente, indicador clave para la mejora de la educación (parte 2)</a></td>
            <td>Estudio sobre si debe considerarse la cantidad de alumnos por profesor como un factor en la mejora educativa.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en La Laguna</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Lerdo</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Matamoros</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html">Posgrados de Calidad (por cada 100mil de PEA) en Torreón</a></td>
            <td>Incluido en el subíndice de "Innovación en los Sectores Económicos". Mide el número de posgrados registrados en el Programa Nacional de Posgrados de Calidad de CONACYT. Esta variable es estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-sitios-unesco.html">Sitios UNESCO en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el número de sitios declarados como patrimonio de la humanidad por la UNESCO que se encuentran a no más de 50 km de la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-sitios-unesco.html">Sitios UNESCO en La Laguna</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el número de sitios declarados como patrimonio de la humanidad por la UNESCO que se encuentran a no más de 50 km de la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-sitios-unesco.html">Sitios UNESCO en Lerdo</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el número de sitios declarados como patrimonio de la humanidad por la UNESCO que se encuentran a no más de 50 km de la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-sitios-unesco.html">Sitios UNESCO en Matamoros</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el número de sitios declarados como patrimonio de la humanidad por la UNESCO que se encuentran a no más de 50 km de la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-sitios-unesco.html">Sitios UNESCO en Torreón</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el número de sitios declarados como patrimonio de la humanidad por la UNESCO que se encuentran a no más de 50 km de la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-crecimiento-en-poblacion-altamente-calificada.html">Crecimiento en Población Altamente Calificada en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la tasa de cambio entre 2008 y 2012 de la PEA que cuenta con estudios de licenciatura o más.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-escuelas-de-calidad.html">Escuelas de Calidad en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el porcentaje de escuelas con calificación excelente dentro del municipio. Se calificó con 0 a aquellas ciudades en donde menos de 80% de los alumnos presentaron la prueba.</td>
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
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 16 },{ region: 'Gómez Palacio', dato: 10 },{ region: 'Lerdo', dato: 13 },{ region: 'Matamoros', dato: 8 },{ region: 'La Laguna', dato: 13 }],
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
      <h3>Descripción</h3>
<p>Espacios culturales físicamente delimitados.</p>

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
            <td>31/03/2014</td>
            <td>13</td>
            <td>CONACULTA-IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Se realizó un filtrado básico de la totalidad de los espacios culturales considerados por CONACULTA, ya que ellos consideran programas, fondos y proyectos a sus estadísticas totales, así como eventos que fueron realizados en una ocasión y datan de hace más de 5 años. Consulta la <a href="http://www.sic.gob.mx">Base de Datos completa</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadEspaciosCulturales

?>
