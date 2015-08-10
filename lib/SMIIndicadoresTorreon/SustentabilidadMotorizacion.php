<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Sustentabilidad Motorización (Creado por Central:SmiLanzadera)
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
 * Clase SustentabilidadMotorizacion
 */
class SustentabilidadMotorizacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Motorización en Torreón';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sustentabilidad-motorizacion';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Vehículos automotores registrados en circulación.';
        $this->claves            = 'IMPLAN, Torreón, Recursos Naturales, Movilidad, Vialidad';
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
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // Para el Organizador
        $this->categorias        = array('Recursos Naturales', 'Movilidad', 'Vialidad');
        $this->fuentes           = array('INEGI');
        $this->regiones          = 'Torreón';
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
            <td>31/12/2000</td>
            <td>147</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2001</td>
            <td>222</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2002</td>
            <td>270</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>243</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2004</td>
            <td>246</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>242</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2006</td>
            <td>240</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>243</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>255</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>236</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>239</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>219</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>226</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>223</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil habitantes.</p>
      <h3>Observaciones</h3>
<p>Índice de motorización. Consulta la <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/vehiculos.asp?s=est&amp;c=13158&amp;proy=vmrc_vehiculos">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Motorización en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Motorización</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Motorización</h3>
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
            <td>223</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>333</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>251</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>163</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>251</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td>251</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td>291</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td>310</td>
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
            <td>30/07/2015</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/plan-centro-laguna.html">Plan Centro Laguna</a></td>
            <td>Proyecto de regeneración urbana que promueve la integración social, la reactivación económica, la valorización del patrimonio histórico y cultural y la habitabilidad de uno de los espacios públicos emblemáticos de la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-unidad-recolectora-de-residuos-solidos-propiedad-del-municipio.html">Litros de Combustible Gastados por Unidad Recolectora de Residuos Sólidos Propiedad del Municipio en Torreón</a></td>
            <td>Determina la relación de litros de combustible gastados por unidad recolectora de residuos sólidos del municipio.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-lineas-de-autobus.html">Líneas de Autobús en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de líneas de autobuses foráneos que conectan a la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-lineas-de-autobus.html">Líneas de Autobús en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de líneas de autobuses foráneos que conectan a la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-lineas-de-autobus.html">Líneas de Autobús en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de líneas de autobuses foráneos que conectan a la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-lineas-de-autobus.html">Líneas de Autobús en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de líneas de autobuses foráneos que conectan a la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-lineas-de-autobus.html">Líneas de Autobús en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de líneas de autobuses foráneos que conectan a la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-flujo-de-pasajeros-aereos.html">Flujo de Pasajeros Aéreos en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de pasajeros en vuelos que salen o llegan a las ciudades con aeropuerto cada año ajustado por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-flujo-de-pasajeros-aereos.html">Flujo de Pasajeros Aéreos en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de pasajeros en vuelos que salen o llegan a las ciudades con aeropuerto cada año ajustado por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-flujo-de-pasajeros-aereos.html">Flujo de Pasajeros Aéreos en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de pasajeros en vuelos que salen o llegan a las ciudades con aeropuerto cada año ajustado por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-flujo-de-pasajeros-aereos.html">Flujo de Pasajeros Aéreos en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de pasajeros en vuelos que salen o llegan a las ciudades con aeropuerto cada año ajustado por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-flujo-de-pasajeros-aereos.html">Flujo de Pasajeros Aéreos en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de pasajeros en vuelos que salen o llegan a las ciudades con aeropuerto cada año ajustado por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-avanzada.html">Red Carretera Avanzada en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-red-carretera-avanzada.html">Red Carretera Avanzada en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-red-carretera-avanzada.html">Red Carretera Avanzada en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
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
      data: [{ fecha: '2000-12-31', dato: 147 },{ fecha: '2001-12-31', dato: 222 },{ fecha: '2002-12-31', dato: 270 },{ fecha: '2003-12-31', dato: 243 },{ fecha: '2004-12-31', dato: 246 },{ fecha: '2005-12-31', dato: 242 },{ fecha: '2006-12-31', dato: 240 },{ fecha: '2007-12-31', dato: 243 },{ fecha: '2008-12-31', dato: 255 },{ fecha: '2009-12-31', dato: 236 },{ fecha: '2010-12-31', dato: 239 },{ fecha: '2011-12-31', dato: 219 },{ fecha: '2012-12-31', dato: 226 },{ fecha: '2013-12-31', dato: 223 }],
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
      data: [{ region: 'Torreón', dato: 223 },{ region: 'Gómez Palacio', dato: 333 },{ region: 'Lerdo', dato: 251 },{ region: 'Matamoros', dato: 163 },{ region: 'La Laguna', dato: 251 },{ region: 'Coahuila', dato: 251 },{ region: 'Durango', dato: 291 },{ region: 'Nacional', dato: 310 }],
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
<p>Vehículos automotores registrados en circulación.</p>

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
            <td>31/12/2000</td>
            <td>147</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2001</td>
            <td>222</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2002</td>
            <td>270</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>243</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2004</td>
            <td>246</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>242</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2006</td>
            <td>240</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>243</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>255</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>236</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>239</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>219</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>226</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>223</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil habitantes.</p>
      <h3>Observaciones</h3>
<p>Índice de motorización. Consulta la <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/vehiculos.asp?s=est&amp;c=13158&amp;proy=vmrc_vehiculos">Base de Datos</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SustentabilidadMotorizacion

?>
