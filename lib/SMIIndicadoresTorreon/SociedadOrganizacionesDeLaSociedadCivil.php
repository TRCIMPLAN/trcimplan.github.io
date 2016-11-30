<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Sociedad Organizaciones de la Sociedad Civil (Creado por Central:SmiLanzadera)
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadOrganizacionesDeLaSociedadCivil
 */
class SociedadOrganizacionesDeLaSociedadCivil extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Organizaciones de la Sociedad Civil en Torreón';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19:49';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sociedad-organizaciones-de-la-sociedad-civil';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Dentro del Índice de Competitividad Urbana del IMCO forma parte de subíndice de "Sistema Político Estable y Funcional". Este indicador busca captar la capacidad de la sociedad para organizarse y ejercer presión social sobre las autoridades. Se incluyen iglesias y organizaciones religiosas.';
        $this->claves            = 'IMPLAN, Torreón, Participación Ciudadana, Gobierno, Índice de Competitividad Urbana';
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
        $this->categorias        = array('Participación Ciudadana', 'Gobierno', 'Índice de Competitividad Urbana');
        $this->fuentes           = array('IMCO', 'RFOSC');
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
    <li><a href="#smi-indicador-grafica-1" data-toggle="tab">Gráfica 1</a></li>
    <li><a href="#smi-indicador-grafica-2" data-toggle="tab">Gráfica 2</a></li>
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
            <td>31/12/2008</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>11.2568</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>47.9800</td>
            <td>RFOSC</td>
            <td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
          </tr>
          <tr>
            <td>25/11/2016</td>
            <td>55.0500</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Unidades: Organizaciones por cada 100 mil habitantes. Fuente: Secretaría de Gobernación (SEGOB), 2013. 
Registro Federal de Organizaciones de la Sociedad Civil. Consulta <a href="http://www.corresponsabilidad.gob.mx/">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica-1">
      <h3>Gráfica de Organizaciones de la Sociedad Civil en Torreón con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica-2">
      <h3>Gráfica de Organizaciones de la Sociedad Civil en Torreón con fuente RFOSC</h3>
      <div id="graficaDatosRfosc" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Organizaciones de la Sociedad Civil</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Organizaciones de la Sociedad Civil</h3>
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
            <td>2016-11-25</td>
            <td>55.0500</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2016-11-25</td>
            <td>57.5500</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-11-25</td>
            <td>31.3000</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2016-11-25</td>
            <td>11.0100</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-11-25</td>
            <td>49.1400</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2016-11-25</td>
            <td>26.4300</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2016-11-25</td>
            <td>143.3800</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2016-11-25</td>
            <td>28.8400</td>
            <td>RFOSC</td>
            <td>http://www.corresponsabilidad.gob.mx/ http://166.78.45.36/portal/</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
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
// LENGUETA smi-indicador-grafica-1
$('#smi-indicador a[href="#smi-indicador-grafica-1"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatosImco === 'undefined') {
    vargraficaDatosImco = Morris.Line({
      element: 'graficaDatosImco',
      data: [{ fecha: '2008-12-31', dato: 5.9166 },{ fecha: '2009-12-31', dato: 5.9166 },{ fecha: '2010-12-31', dato: 5.9166 },{ fecha: '2011-12-31', dato: 5.9166 },{ fecha: '2012-12-31', dato: 11.2568 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-grafica-2
$('#smi-indicador a[href="#smi-indicador-grafica-2"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatosRfosc === 'undefined') {
    vargraficaDatosRfosc = Morris.Line({
      element: 'graficaDatosRfosc',
      data: [{ fecha: '2014-03-31', dato: 47.9800 },{ fecha: '2016-11-25', dato: 55.0500 }],
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
      data: [{ region: 'Torreón', dato: 55.0500 },{ region: 'Gómez Palacio', dato: 57.5500 },{ region: 'Lerdo', dato: 31.3000 },{ region: 'Matamoros', dato: 11.0100 },{ region: 'La Laguna', dato: 49.1400 },{ region: 'Coahuila', dato: 26.4300 },{ region: 'Durango', dato: 143.3800 },{ region: 'Nacional', dato: 28.8400 }],
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
<p>Dentro del Índice de Competitividad Urbana del IMCO forma parte de subíndice de "Sistema Político Estable y Funcional". Este indicador busca captar la capacidad de la sociedad para organizarse y ejercer presión social sobre las autoridades. Se incluyen iglesias y organizaciones religiosas.</p>

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
            <td>31/12/2008</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>5.9166</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>11.2568</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>47.9800</td>
            <td>RFOSC</td>
            <td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
          </tr>
          <tr>
            <td>25/11/2016</td>
            <td>55.0500</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Unidades: Organizaciones por cada 100 mil habitantes. Fuente: Secretaría de Gobernación (SEGOB), 2013. 
Registro Federal de Organizaciones de la Sociedad Civil. Consulta <a href="http://www.corresponsabilidad.gob.mx/">Base de Datos</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadOrganizacionesDeLaSociedadCivil

?>
