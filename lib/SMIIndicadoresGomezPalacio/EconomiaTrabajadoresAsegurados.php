<?php
/**
 * TrcIMPLAN - SMI Indicadores Gómez Palacio Economía Trabajadores Asegurados (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Trabajadores Asegurados en Gómez Palacio';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-11-07T09:04';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'economia-trabajadores-asegurados';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves            = 'IMPLAN, Gómez Palacio, Empleo';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-gomez-palacio';
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
        $region->addressLocality = 'Gómez Palacio';
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
        $this->categorias        = array('Empleo');
        $this->fuentes           = array('Instituto Mexicano del Seguro Social (IMSS)');
        $this->regiones          = 'Gómez Palacio';
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
            <td>30/11/2013</td>
            <td>72,687</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>71,209</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>72,154</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>72,228</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>72,852</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>73,102</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>73,102</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>73,542</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>73,320</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>73,899</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>74,974</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 3,765 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>75,410</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>75,673</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>75,458</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>75,552</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>74,991</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>75,673</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>76,556</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>75,489</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>75,526</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2015</td>
            <td>75,788</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>76,240</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>75,868</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>75,622</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>75,613</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>74,514</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>75,077</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>75,898</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>75,262</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>75,604</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Trabajadores Asegurados en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Trabajadores Asegurados</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Trabajadores Asegurados</h3>
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
            <td>2016-04-30</td>
            <td>180,602</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2016-04-30</td>
            <td>75,604</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-04-30</td>
            <td>14,414</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2016-04-30</td>
            <td>8,387</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-04-30</td>
            <td>279,007</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
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
      data: [{ fecha: '2013-11-30', dato: 72687 },{ fecha: '2013-12-31', dato: 71209 },{ fecha: '2014-01-31', dato: 72154 },{ fecha: '2014-02-28', dato: 72228 },{ fecha: '2014-03-31', dato: 72852 },{ fecha: '2014-04-30', dato: 73102 },{ fecha: '2014-05-31', dato: 73102 },{ fecha: '2014-06-30', dato: 73542 },{ fecha: '2014-07-31', dato: 73320 },{ fecha: '2014-08-31', dato: 73899 },{ fecha: '2014-09-30', dato: 74974 },{ fecha: '2014-10-31', dato: 75410 },{ fecha: '2014-11-30', dato: 75673 },{ fecha: '2014-12-31', dato: 75458 },{ fecha: '2015-01-31', dato: 75552 },{ fecha: '2015-02-28', dato: 74991 },{ fecha: '2015-03-31', dato: 75673 },{ fecha: '2015-04-30', dato: 76556 },{ fecha: '2015-05-31', dato: 75489 },{ fecha: '2015-06-30', dato: 75526 },{ fecha: '2015-07-31', dato: 75788 },{ fecha: '2015-08-31', dato: 76240 },{ fecha: '2015-09-30', dato: 75868 },{ fecha: '2015-10-31', dato: 75622 },{ fecha: '2015-11-30', dato: 75613 },{ fecha: '2015-12-31', dato: 74514 },{ fecha: '2016-01-31', dato: 75077 },{ fecha: '2016-02-29', dato: 75898 },{ fecha: '2016-03-31', dato: 75262 },{ fecha: '2016-04-30', dato: 75604 }],
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
      data: [{ region: 'Torreón', dato: 180602 },{ region: 'Gómez Palacio', dato: 75604 },{ region: 'Lerdo', dato: 14414 },{ region: 'Matamoros', dato: 8387 },{ region: 'La Laguna', dato: 279007 }],
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
<p>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</p>

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
            <td>30/11/2013</td>
            <td>72,687</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>71,209</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>72,154</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>72,228</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>72,852</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>73,102</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>73,102</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>73,542</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>73,320</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>73,899</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>74,974</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 3,765 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>75,410</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>75,673</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>75,458</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>75,552</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>74,991</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>75,673</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>76,556</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>75,489</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>75,526</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2015</td>
            <td>75,788</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>76,240</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>75,868</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>75,622</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>75,613</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>74,514</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>75,077</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>75,898</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>75,262</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>75,604</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaTrabajadoresAsegurados

?>
