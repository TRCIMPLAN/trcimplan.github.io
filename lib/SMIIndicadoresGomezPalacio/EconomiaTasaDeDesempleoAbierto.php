<?php
/**
 * TrcIMPLAN - SMI Indicadores Gómez Palacio Economía Tasa de Desempleo Abierto (Creado por Central:SmiLanzadera)
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
 * Clase EconomiaTasaDeDesempleoAbierto
 */
class EconomiaTasaDeDesempleoAbierto extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Tasa de Desempleo Abierto en Gómez Palacio';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'economia-tasa-de-desempleo-abierto';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Número total de desempleados entre la Población económicamente activa.';
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
        $this->fuentes           = array('Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'INEGI', 'IMCO');
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
    <li><a href="#smi-indicador-grafica-1" data-toggle="tab">Gráfica 1</a></li>
    <li><a href="#smi-indicador-grafica-2" data-toggle="tab">Gráfica 2</a></li>
    <li><a href="#smi-indicador-grafica-3" data-toggle="tab">Gráfica 3</a></li>
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
            <td>12/03/1990</td>
            <td>2.90 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>14/02/2000</td>
            <td>0.98 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2005</td>
            <td>4.55 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2005</td>
            <td>4.76 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2005</td>
            <td>2.78 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>4.27 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2006</td>
            <td>5.33 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2006</td>
            <td>4.76 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2006</td>
            <td>6.04 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/12/2006</td>
            <td>3.80 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2007</td>
            <td>4.31 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2007</td>
            <td>4.06 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2007</td>
            <td>4.29 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>3.69 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2008</td>
            <td>4.92 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2008</td>
            <td>5.41 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2008</td>
            <td>4.94 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>10.55 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>10.15 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2009</td>
            <td>7.32 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2009</td>
            <td>8.82 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2009</td>
            <td>8.79 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>12.05 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>11.57 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2010</td>
            <td>8.09 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>25/06/2010</td>
            <td>7.80 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2010</td>
            <td>6.01 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2010</td>
            <td>8.83 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>8.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>7.30 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2011</td>
            <td>9.43 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2011</td>
            <td>7.21 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2011</td>
            <td>8.08 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4.89 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4.40 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>7.32 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>10.77 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>6.55 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>10.23 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>9.36 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>7.77 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>6.99 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>7.58 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>8.57 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>6.20 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>5.02 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>7.04 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>7.55 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>5.84 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>5.68 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>7.01 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>6.36 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>5.86 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>4.71 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>5.36 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica-1">
      <h3>Gráfica de Tasa de Desempleo Abierto en Gómez Palacio con fuente INEGI</h3>
      <div id="graficaDatosInegi" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica-2">
      <h3>Gráfica de Tasa de Desempleo Abierto en Gómez Palacio con fuente Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</h3>
      <div id="graficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica-3">
      <h3>Gráfica de Tasa de Desempleo Abierto en Gómez Palacio con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Tasa de Desempleo Abierto</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Desempleo Abierto</h3>
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
            <td>2016-06-30</td>
            <td>5.78 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2016-06-30</td>
            <td>5.36 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-06-30</td>
            <td>11.54 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2016-06-30</td>
            <td>4.09 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-06-30</td>
            <td>5.64 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2016-06-30</td>
            <td>4.84 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2016-06-30</td>
            <td>5.00 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2016-06-30</td>
            <td>3.93 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
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
// LENGUETA smi-indicador-grafica-1
$('#smi-indicador a[href="#smi-indicador-grafica-1"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatosInegi === 'undefined') {
    vargraficaDatosInegi = Morris.Line({
      element: 'graficaDatosInegi',
      data: [{ fecha: '1990-03-12', dato: 2.9000 },{ fecha: '2000-02-14', dato: 0.9800 },{ fecha: '2010-06-25', dato: 7.8000 },{ fecha: '2015-08-31', dato: 7.0100 }],
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
  if (typeof vargraficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos === 'undefined') {
    vargraficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos = Morris.Line({
      element: 'graficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos',
      data: [{ fecha: '2005-03-31', dato: 4.5455 },{ fecha: '2005-06-30', dato: 4.7619 },{ fecha: '2005-09-30', dato: 2.7778 },{ fecha: '2005-12-31', dato: 4.2667 },{ fecha: '2006-03-31', dato: 5.3333 },{ fecha: '2006-06-30', dato: 4.7619 },{ fecha: '2006-09-30', dato: 6.0440 },{ fecha: '2006-12-30', dato: 3.8043 },{ fecha: '2007-03-31', dato: 4.3103 },{ fecha: '2007-06-30', dato: 4.0580 },{ fecha: '2007-09-30', dato: 4.2857 },{ fecha: '2007-12-31', dato: 3.6932 },{ fecha: '2008-03-31', dato: 4.9180 },{ fecha: '2008-06-30', dato: 5.4131 },{ fecha: '2008-09-30', dato: 4.9351 },{ fecha: '2008-12-31', dato: 10.1523 },{ fecha: '2009-03-31', dato: 7.3232 },{ fecha: '2009-06-30', dato: 8.8235 },{ fecha: '2009-09-30', dato: 8.7912 },{ fecha: '2009-12-31', dato: 11.5702 },{ fecha: '2010-03-31', dato: 8.0940 },{ fecha: '2010-06-30', dato: 6.0109 },{ fecha: '2010-09-30', dato: 8.8319 },{ fecha: '2010-12-31', dato: 7.3016 },{ fecha: '2011-03-31', dato: 9.4300 },{ fecha: '2011-06-30', dato: 7.2100 },{ fecha: '2011-09-30', dato: 8.0800 },{ fecha: '2011-12-31', dato: 4.4000 },{ fecha: '2012-03-31', dato: 7.3200 },{ fecha: '2012-06-30', dato: 10.7700 },{ fecha: '2012-09-30', dato: 6.5500 },{ fecha: '2012-12-31', dato: 9.3600 },{ fecha: '2013-03-31', dato: 7.7700 },{ fecha: '2013-06-30', dato: 6.9900 },{ fecha: '2013-09-30', dato: 7.5800 },{ fecha: '2013-12-31', dato: 8.5700 },{ fecha: '2014-03-31', dato: 6.2000 },{ fecha: '2014-06-30', dato: 5.0200 },{ fecha: '2014-09-30', dato: 7.0400 },{ fecha: '2014-12-31', dato: 7.5500 },{ fecha: '2015-03-31', dato: 5.8400 },{ fecha: '2015-06-30', dato: 5.6751 },{ fecha: '2015-09-30', dato: 6.3551 },{ fecha: '2015-12-31', dato: 5.8601 },{ fecha: '2016-03-31', dato: 4.7131 },{ fecha: '2016-06-30', dato: 5.3600 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-grafica-3
$('#smi-indicador a[href="#smi-indicador-grafica-3"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatosImco === 'undefined') {
    vargraficaDatosImco = Morris.Line({
      element: 'graficaDatosImco',
      data: [{ fecha: '2008-12-31', dato: 10.5532 },{ fecha: '2009-12-31', dato: 12.0518 },{ fecha: '2010-12-31', dato: 8.0665 },{ fecha: '2011-12-31', dato: 4.8884 },{ fecha: '2012-12-31', dato: 10.2316 }],
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
      data: [{ region: 'Torreón', dato: 5.7800 },{ region: 'Gómez Palacio', dato: 5.3600 },{ region: 'Lerdo', dato: 11.5400 },{ region: 'Matamoros', dato: 4.0900 },{ region: 'La Laguna', dato: 5.6400 },{ region: 'Coahuila', dato: 4.8400 },{ region: 'Durango', dato: 5.0000 },{ region: 'Nacional', dato: 3.9300 }],
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
<p>Número total de desempleados entre la Población económicamente activa.</p>

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
            <td>12/03/1990</td>
            <td>2.90 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>14/02/2000</td>
            <td>0.98 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2005</td>
            <td>4.55 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2005</td>
            <td>4.76 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2005</td>
            <td>2.78 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>4.27 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2006</td>
            <td>5.33 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2006</td>
            <td>4.76 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2006</td>
            <td>6.04 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/12/2006</td>
            <td>3.80 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2007</td>
            <td>4.31 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2007</td>
            <td>4.06 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2007</td>
            <td>4.29 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>3.69 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2008</td>
            <td>4.92 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2008</td>
            <td>5.41 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2008</td>
            <td>4.94 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>10.55 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>10.15 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2009</td>
            <td>7.32 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2009</td>
            <td>8.82 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2009</td>
            <td>8.79 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>12.05 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>11.57 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2010</td>
            <td>8.09 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>25/06/2010</td>
            <td>7.80 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2010</td>
            <td>6.01 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2010</td>
            <td>8.83 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>8.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>7.30 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2011</td>
            <td>9.43 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2011</td>
            <td>7.21 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2011</td>
            <td>8.08 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4.89 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4.40 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>7.32 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>10.77 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>6.55 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>10.23 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>9.36 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>7.77 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>6.99 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>7.58 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>8.57 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>6.20 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>5.02 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>7.04 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>7.55 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>5.84 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>5.68 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>7.01 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>6.36 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>5.86 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>4.71 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>5.36 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaTasaDeDesempleoAbierto

?>
