<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Sustentabilidad Pasajeros Aéreos Totales Mensuales (Creado por Central:SmiLanzadera)
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
 * Clase SustentabilidadPasajerosAereosTotalesMensuales
 */
class SustentabilidadPasajerosAereosTotalesMensuales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Pasajeros Aéreos Totales Mensuales en Torreón';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2015-05-20T15:50:37';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sustentabilidad-pasajeros-aereos-totales-mensuales';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Flujo de pasajeros aéreos en el Aeropuerto Internacional Francisco Sarabia.';
        $this->claves            = 'IMPLAN, Torreón, Movilidad';
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
        $this->categorias        = array('Movilidad');
        $this->fuentes           = array('Operadora Mexicana de Aeropuertos (OMA)');
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
            <td>31/01/2012</td>
            <td>31,198</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2012</td>
            <td>29,353</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>34,010</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2012</td>
            <td>30,685</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2012</td>
            <td>35,988</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2012</td>
            <td>38,722</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2012</td>
            <td>39,255</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>34,182</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2012</td>
            <td>37,614</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2012</td>
            <td>35,856</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>34,398</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2013</td>
            <td>33,338</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2013</td>
            <td>30,032</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>33,574</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2013</td>
            <td>34,288</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2013</td>
            <td>35,548</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>36,960</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2013</td>
            <td>46,259</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2013</td>
            <td>42,396</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>40,305</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>44,357</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2013</td>
            <td>44,446</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>45,895</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>40,735</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>38,383</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>43,883</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>42,197</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>46,761</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>44,214</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>50,483</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>46,847</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>41,393</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>43,946</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>42,264</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>42,677</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>36,810</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>35,740</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>45,201</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>43,676</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>45,529</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>45,626</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2015</td>
            <td>51,813</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>50,115</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>46,698</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>52,057</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>50,786</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>52,398</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>42,204</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>42,939</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>51,846</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>52,300</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/05/2016</td>
            <td>55,215</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>53,902</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Toda referencia sobre volumen de pasajeros se refiere a pasajeros terminales, los cuales incluyen los pasajeros de los tres tipos de aviación (comercial, charter y aviación general), y excluye los pasajeros en tránsito.Se considera a nivel metropolitano. Consulta la <a href="http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Pasajeros Aéreos Totales Mensuales en Torreón</h3>
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
      data: [{ fecha: '2012-01-31', dato: 31198 },{ fecha: '2012-02-29', dato: 29353 },{ fecha: '2012-03-31', dato: 34010 },{ fecha: '2012-04-30', dato: 30685 },{ fecha: '2012-05-31', dato: 35988 },{ fecha: '2012-07-31', dato: 38722 },{ fecha: '2012-08-31', dato: 39255 },{ fecha: '2012-09-30', dato: 34182 },{ fecha: '2012-10-31', dato: 37614 },{ fecha: '2012-11-30', dato: 35856 },{ fecha: '2012-12-31', dato: 34398 },{ fecha: '2013-01-31', dato: 33338 },{ fecha: '2013-02-28', dato: 30032 },{ fecha: '2013-03-31', dato: 33574 },{ fecha: '2013-04-30', dato: 34288 },{ fecha: '2013-05-31', dato: 35548 },{ fecha: '2013-06-30', dato: 36960 },{ fecha: '2013-07-31', dato: 46259 },{ fecha: '2013-08-31', dato: 42396 },{ fecha: '2013-09-30', dato: 40305 },{ fecha: '2013-10-31', dato: 44357 },{ fecha: '2013-11-30', dato: 44446 },{ fecha: '2013-12-31', dato: 45895 },{ fecha: '2014-01-31', dato: 40735 },{ fecha: '2014-02-28', dato: 38383 },{ fecha: '2014-03-31', dato: 43883 },{ fecha: '2014-04-30', dato: 42197 },{ fecha: '2014-05-31', dato: 46761 },{ fecha: '2014-06-30', dato: 44214 },{ fecha: '2014-07-31', dato: 50483 },{ fecha: '2014-08-31', dato: 46847 },{ fecha: '2014-09-30', dato: 41393 },{ fecha: '2014-10-31', dato: 43946 },{ fecha: '2014-11-30', dato: 42264 },{ fecha: '2014-12-31', dato: 42677 },{ fecha: '2015-01-31', dato: 36810 },{ fecha: '2015-02-28', dato: 35740 },{ fecha: '2015-03-31', dato: 45201 },{ fecha: '2015-04-30', dato: 43676 },{ fecha: '2015-05-31', dato: 45529 },{ fecha: '2015-06-30', dato: 45626 },{ fecha: '2015-07-31', dato: 51813 },{ fecha: '2015-08-31', dato: 50115 },{ fecha: '2015-09-30', dato: 46698 },{ fecha: '2015-10-31', dato: 52057 },{ fecha: '2015-11-30', dato: 50786 },{ fecha: '2015-12-31', dato: 52398 },{ fecha: '2016-01-31', dato: 42204 },{ fecha: '2016-02-29', dato: 42939 },{ fecha: '2016-03-30', dato: 51846 },{ fecha: '2016-04-30', dato: 52300 },{ fecha: '2016-05-30', dato: 55215 },{ fecha: '2016-06-30', dato: 53902 }],
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
<p>Flujo de pasajeros aéreos en el Aeropuerto Internacional Francisco Sarabia.</p>

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
            <td>31/01/2012</td>
            <td>31,198</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2012</td>
            <td>29,353</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>34,010</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2012</td>
            <td>30,685</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2012</td>
            <td>35,988</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2012</td>
            <td>38,722</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2012</td>
            <td>39,255</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>34,182</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2012</td>
            <td>37,614</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2012</td>
            <td>35,856</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>34,398</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2013</td>
            <td>33,338</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2013</td>
            <td>30,032</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>33,574</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2013</td>
            <td>34,288</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2013</td>
            <td>35,548</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>36,960</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2013</td>
            <td>46,259</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2013</td>
            <td>42,396</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>40,305</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>44,357</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2013</td>
            <td>44,446</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>45,895</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>40,735</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>38,383</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>43,883</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>42,197</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>46,761</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>44,214</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>50,483</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>46,847</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>41,393</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>43,946</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>42,264</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>42,677</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>36,810</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>35,740</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>45,201</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>43,676</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>45,529</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>45,626</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2015</td>
            <td>51,813</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>50,115</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>46,698</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>52,057</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>50,786</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>52,398</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>42,204</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>42,939</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>51,846</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>52,300</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/05/2016</td>
            <td>55,215</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>53,902</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Toda referencia sobre volumen de pasajeros se refiere a pasajeros terminales, los cuales incluyen los pasajeros de los tres tipos de aviación (comercial, charter y aviación general), y excluye los pasajeros en tránsito.Se considera a nivel metropolitano. Consulta la <a href="http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/">Base de Datos</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SustentabilidadPasajerosAereosTotalesMensuales

?>
