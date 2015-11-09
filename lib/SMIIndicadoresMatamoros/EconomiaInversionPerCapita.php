<?php
/**
 * TrcIMPLAN - SMI Indicadores Matamoros Economía Inversión Per cápita (Creado por Central:SmiLanzadera)
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
 * Clase EconomiaInversionPerCapita
 */
class EconomiaInversionPerCapita extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Inversión Per cápita en Matamoros';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'economia-inversion-per-capita';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Gasto en obras públicas y acciones sociales entre población total. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).';
        $this->claves            = 'IMPLAN, Matamoros, Macroeconomía, Finanzas Públicas';
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
        // Para el Organizador
        $this->categorias        = array('Macroeconomía', 'Finanzas Públicas');
        $this->fuentes           = array('Elaboración propia con datos obtenidos del INEGI');
        $this->regiones          = 'Matamoros';
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
            <td>31/12/2007</td>
            <td>$ 304.33</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>$ 396.24</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>$ 627.35</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>$ 405.29</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 327.41</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 44.62</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 0.00</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>$ 585.97</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La inversión nacional per cápita es de:</p>

<ul>
<li>2012 = $553.80 </li>
<li>2011 = $747.22 </li>
<li>2010 = $698.38 </li>
<li>2009 = $765.24 </li>
<li>2008 = $636.13 </li>
<li>2007 = $484.72 </li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&amp;c=11289&amp;proy=efipem_fmun">INEGI. Estadística de finanzas públicas estatales y municipales</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Inversión Per cápita en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Inversión Per cápita</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Inversión Per cápita</h3>
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
            <td>2014-12-31</td>
            <td>$ 570.42</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-12-31</td>
            <td>$ 339.25</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-12-31</td>
            <td>$ 546.12</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-12-31</td>
            <td>$ 585.97</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-12-31</td>
            <td>$ 506.52</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-12-31</td>
            <td>$ 475.91</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-12-31</td>
            <td>$ 659.04</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-12-31</td>
            <td>$ 534.84</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
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
      data: [{ fecha: '2007-12-31', dato: 304.33 },{ fecha: '2008-12-31', dato: 396.24 },{ fecha: '2009-12-31', dato: 627.35 },{ fecha: '2010-12-31', dato: 405.29 },{ fecha: '2011-12-31', dato: 327.41 },{ fecha: '2012-12-31', dato: 44.62 },{ fecha: '2013-12-31', dato: 0.00 },{ fecha: '2014-12-31', dato: 585.97 }],
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
      data: [{ region: 'Torreón', dato: 570.42 },{ region: 'Gómez Palacio', dato: 339.25 },{ region: 'Lerdo', dato: 546.12 },{ region: 'Matamoros', dato: 585.97 },{ region: 'La Laguna', dato: 506.52 },{ region: 'Coahuila', dato: 475.91 },{ region: 'Durango', dato: 659.04 },{ region: 'Nacional', dato: 534.84 }],
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
<p>Gasto en obras públicas y acciones sociales entre población total. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).</p>

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
            <td>31/12/2007</td>
            <td>$ 304.33</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>$ 396.24</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>$ 627.35</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>$ 405.29</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 327.41</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 44.62</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 0.00</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>$ 585.97</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La inversión nacional per cápita es de:</p>

<ul>
<li>2012 = $553.80 </li>
<li>2011 = $747.22 </li>
<li>2010 = $698.38 </li>
<li>2009 = $765.24 </li>
<li>2008 = $636.13 </li>
<li>2007 = $484.72 </li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&amp;c=11289&amp;proy=efipem_fmun">INEGI. Estadística de finanzas públicas estatales y municipales</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaInversionPerCapita

?>
