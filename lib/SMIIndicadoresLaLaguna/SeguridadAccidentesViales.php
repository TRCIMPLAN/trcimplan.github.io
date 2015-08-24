<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Seguridad Accidentes Viales (Creado por Central:SmiLanzadera)
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
 * Clase SeguridadAccidentesViales
 */
class SeguridadAccidentesViales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Accidentes Viales en La Laguna';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'seguridad-accidentes-viales';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Cantidad de accidentes viales por año.';
        $this->claves            = 'IMPLAN, La Laguna, Vialidad';
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
        // Para el Organizador
        $this->categorias        = array('Vialidad');
        $this->fuentes           = array('INEGI');
        $this->regiones          = 'La Laguna';
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
            <td>31/12/1997</td>
            <td>4,404</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1998</td>
            <td>5,709</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1999</td>
            <td>6,208</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2000</td>
            <td>8,169</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2001</td>
            <td>8,933</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2002</td>
            <td>8,986</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>8,507</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>9,366</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2006</td>
            <td>10,324</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>9,612</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>8,831</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>6,995</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>5,577</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4,568</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>4,107</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>3,362</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Accidentes Viales en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Accidentes Viales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Accidentes Viales</h3>
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
            <td>1,831</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>1,128</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>242</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>161</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>3,362</td>
            <td>INEGI</td>
            <td></td>
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
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1997-12-31', dato: 4404 },{ fecha: '1998-12-31', dato: 5709 },{ fecha: '1999-12-31', dato: 6208 },{ fecha: '2000-12-31', dato: 8169 },{ fecha: '2001-12-31', dato: 8933 },{ fecha: '2002-12-31', dato: 8986 },{ fecha: '2003-12-31', dato: 8507 },{ fecha: '2005-12-31', dato: 9366 },{ fecha: '2006-12-31', dato: 10324 },{ fecha: '2007-12-31', dato: 9612 },{ fecha: '2008-12-31', dato: 8831 },{ fecha: '2009-12-31', dato: 6995 },{ fecha: '2010-12-31', dato: 5577 },{ fecha: '2011-12-31', dato: 4568 },{ fecha: '2012-12-31', dato: 4107 },{ fecha: '2013-12-31', dato: 3362 }],
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
      data: [{ region: 'Torreón', dato: 1831 },{ region: 'Gómez Palacio', dato: 1128 },{ region: 'Lerdo', dato: 242 },{ region: 'Matamoros', dato: 161 },{ region: 'La Laguna', dato: 3362 }],
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
<p>Cantidad de accidentes viales por año.</p>

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
            <td>31/12/1997</td>
            <td>4,404</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1998</td>
            <td>5,709</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/1999</td>
            <td>6,208</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2000</td>
            <td>8,169</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2001</td>
            <td>8,933</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2002</td>
            <td>8,986</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>8,507</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>9,366</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2006</td>
            <td>10,324</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>9,612</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>8,831</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>6,995</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>5,577</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4,568</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>4,107</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>3,362</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SeguridadAccidentesViales

?>
