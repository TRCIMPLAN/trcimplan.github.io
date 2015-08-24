<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Sociedad Promedio de Descendencia por Varón (Creado por Central:SmiLanzadera)
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
 * Clase SociedadPromedioDeDescendenciaPorVaron
 */
class SociedadPromedioDeDescendenciaPorVaron extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Promedio de Descendencia por Varón en Torreón';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sociedad-promedio-de-descendencia-por-varon';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Calcula el promedio estimado de hijos por cada varón.';
        $this->claves            = 'IMPLAN, Torreón, Población';
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
        $this->categorias        = array('Población');
        $this->fuentes           = array('IMPLAN');
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
            <td>1.8100</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>1.7700</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>1.7200</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>1.6900</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>1.6600</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Estimación propia en base al dato de Ocupación por Vivienda</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Promedio de Descendencia por Varón en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
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
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2008-12-31', dato: 1.8100 },{ fecha: '2009-12-31', dato: 1.7700 },{ fecha: '2010-12-31', dato: 1.7200 },{ fecha: '2011-12-31', dato: 1.6900 },{ fecha: '2012-12-31', dato: 1.6600 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
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
<p>Calcula el promedio estimado de hijos por cada varón.</p>

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
            <td>1.8100</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>1.7700</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>1.7200</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>1.6900</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>1.6600</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Estimación propia en base al dato de Ocupación por Vivienda</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadPromedioDeDescendenciaPorVaron

?>
