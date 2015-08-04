<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Sustentabilidad Uso de Automóvil Particular (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SustentabilidadUsoDeAutomovilParticular
 */
class SustentabilidadUsoDeAutomovilParticular extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Uso de Automóvil Particular en La Laguna';
     // $this->autor             = '';
        $this->fecha             = '2014-11-10T10:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'sustentabilidad-uso-de-automovil-particular';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Distribución porcentual del total de viajes cotidianos realizados por modalidad.';
        $this->claves            = 'IMPLAN, La Laguna, Movilidad, Vialidad';
        $this->categorias        = array('Movilidad', 'Vialidad');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-la-laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = '';
        $region->addressLocality = '';
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
            <td>31/12/2011</td>
            <td>49.00 %</td>
            <td>Logit</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Estudio realizado por Logit en 2011. Contempla los viajes de los municipios de Torreón y Matamoros.</p>

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
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-red-carretera-avanzada.html">Red Carretera Avanzada en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-red-carretera-avanzada.html">Red Carretera Avanzada en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El número de kilómetros de la red carretera troncal federal más la red de alimentadoras estatales como porcentaje del kilometraje total de su red carretera.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-sistema-de-transporte-masivo.html">Sistema de Transporte Masivo en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: Si una ciudad cuenta con un sistema de transporte masivo en operación, en construcción, en estatus de proyecto o ninguna de las tres.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-sistema-de-transporte-masivo.html">Sistema de Transporte Masivo en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: Si una ciudad cuenta con un sistema de transporte masivo en operación, en construcción, en estatus de proyecto o ninguna de las tres.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-sistema-de-transporte-masivo.html">Sistema de Transporte Masivo en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: Si una ciudad cuenta con un sistema de transporte masivo en operación, en construcción, en estatus de proyecto o ninguna de las tres.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-sistema-de-transporte-masivo.html">Sistema de Transporte Masivo en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: Si una ciudad cuenta con un sistema de transporte masivo en operación, en construcción, en estatus de proyecto o ninguna de las tres.</td>
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
<p>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</p>

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
            <td>31/12/2011</td>
            <td>49.00 %</td>
            <td>Logit</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Estudio realizado por Logit en 2011. Contempla los viajes de los municipios de Torreón y Matamoros.</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SustentabilidadUsoDeAutomovilParticular

?>
