<?php
/**
 * TrcIMPLAN - SMI Indicadores Matamoros Sociedad Mortalidad Infantil (Creado por Central:SmiLanzadera)
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
 * Clase SociedadMortalidadInfantil
 */
class SociedadMortalidadInfantil extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Mortalidad Infantil en Matamoros';
     // $this->autor            = '';
        $this->fecha            = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'sociedad-mortalidad-infantil';
        $this->imagen           = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa    = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos';
        $this->claves           = 'IMPLAN, Matamoros, Salud, Objetivos del Milenio';
        $this->categorias       = array('Salud', 'Objetivos del Milenio');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-matamoros';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores';
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
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</p>

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
            <td>31/12/2009</td>
            <td>3.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>11.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>8.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>17.3900</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>15.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Mortalidad Infantil en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Mortalidad Infantil</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Mortalidad Infantil</h3>
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
            <td>2013-12-31</td>
            <td>12.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>9.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>20.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>15.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>12.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td>11.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td>14.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td>12.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $schema->extra          = <<<FINAL
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
            <td>25/05/2015</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/salud-laguna.html">Salud Laguna</a></td>
            <td>Salud Laguna es una agrupación interactiva de pro­fesionales, instituciones, or­ga­nizaciones, integrados en torno a las actividades económicas que dan servicio y soportan al sec­tor salud.</td>
          </tr>
          <tr>
            <td>27/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/objetivos-milenio.html">La Zona Metropolitana de La Laguna y los Objetivos del Milenio</a></td>
            <td>En septiembre del año 2000 fue celebrada la Cumbre del Milenio de las Naciones Unidas, durante la cual 147 jefes de estado firman y 189 países aprueban uno de los retos consensuados más ambicioso de las últimas décadas.</td>
          </tr>
          <tr>
            <td>14/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/mas-areas-verdes-proteger-salud-laguneros.html">Más áreas verdes para proteger la salud de los laguneros</a></td>
            <td>Manejar el tema de protección a la salud como punto estratégico en materia de ordenamiento territorial y urbano representa una oportunidad para el desarrollo de la región.</td>
          </tr>
          <tr>
            <td>07/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-sector-salud-laguna.html">Economía del Sector Salud en La Laguna</a></td>
            <td>El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-camas-censables.html">Camas Censables en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html">Diferencial de Grado Promedio de Escolaridad por Género en Matamoros</a></td>
            <td>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad-infantil.html">Mortalidad Infantil en Matamoros</a></td>
            <td>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad.html">Mortalidad en Matamoros</a></td>
            <td>Tasa de Mortalidad. Número de muertes por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html">Mortalidad por Diabetes en Matamoros</a></td>
            <td>Tasa de mortalidad por diabetes mellitus. Defunciones por diabetes por cada diez mil defunciones.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en Matamoros</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-medicos.html">Médicos en Matamoros</a></td>
            <td>Médicos en contacto con pacientes por cada diez mil personas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-poblacion-derechohabiente.html">Población Derechohabiente en Matamoros</a></td>
            <td>Población derechohabiente a los servicios de salud.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-pobreza-extrema.html">Pobreza Extrema en Matamoros</a></td>
            <td>Porcentaje de la población en situación de pobreza extrema.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior en Matamoros</a></td>
            <td>Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-razon-de-mortalidad-materna.html">Razón de Mortalidad Materna en Matamoros</a></td>
            <td>La razón de mortalidad materna es la medida de mortalidad materna más usada. Mide el riesgo obstétrico una vez que la mujer queda embarazada.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-rezago-educativo.html">Rezago Educativo en Matamoros</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-tasa-de-mortalidad-materna.html">Tasa de Mortalidad Materna en Matamoros</a></td>
            <td>La tasa de mortalidad materna mide el riesgo de morir e incluye tanto la posibilidad de quedar embarazada como de morir durante el embarazo o el puerperio.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-usuarios-de-internet.html">Usuarios de Internet en Matamoros</a></td>
            <td>Porcentaje de la población que usa internet.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-que-disponen-de-retrete.html">Viviendas que Disponen de Retrete en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas que disponen de retrete.</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // JavaScript
        $this->javascript       = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2009-12-31', dato: 3.9000 },{ fecha: '2010-12-31', dato: 11.5000 },{ fecha: '2011-12-31', dato: 8.6000 },{ fecha: '2012-12-31', dato: 17.3900 },{ fecha: '2013-12-31', dato: 15.0000 }],
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
      data: [{ region: 'Torreón', dato: 12.4000 },{ region: 'Gómez Palacio', dato: 9.1000 },{ region: 'Lerdo', dato: 20.5000 },{ region: 'Matamoros', dato: 15.0000 },{ region: 'La Laguna', dato: 12.2000 },{ region: 'Coahuila', dato: 11.9000 },{ region: 'Durango', dato: 14.1000 },{ region: 'Nacional', dato: 12.6000 }],
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
        $this->redifusion       = <<<FINAL
      <h3>Descripción</h3>
<p>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</p>

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
            <td>31/12/2009</td>
            <td>3.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>11.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>8.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>17.3900</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>15.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil.</p>
FINAL;
    } // constructor

} // Clase SociedadMortalidadInfantil

?>
