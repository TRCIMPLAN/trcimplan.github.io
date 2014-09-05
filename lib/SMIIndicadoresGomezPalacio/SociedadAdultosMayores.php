<?php
/**
 * SociedadAdultosMayores.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadAdultosMayores
 */
class SociedadAdultosMayores extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Adultos Mayores en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-adultos-mayores';
        $this->descripcion = 'Población estimada a mediados de año de personas de 65 años y más';
        $this->claves      = 'Gómez Palacio, Grupos Vulnerables';
        $this->categorias  = array('Grupos Vulnerables');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetashzvwrllk">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Población estimada a mediados de año de personas de 65 años y más
<h4>Información recopilada</h4>
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
<td class="centrado">30/06/2011</td>
<td class="derecha">18,131</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2012</td>
<td class="derecha">18,794</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2013</td>
<td class="derecha">19,503</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">20,263</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2015</td>
<td class="derecha">21,075</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2016</td>
<td class="derecha">21,943</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2017</td>
<td class="derecha">22,864</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2018</td>
<td class="derecha">23,838</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2019</td>
<td class="derecha">24,861</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2020</td>
<td class="derecha">25,929</td>
<td>CONAPO</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisebchjgly" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetpjujclzx" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <h4>En otras regiones</h4>
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
<td>2011-06-30</td>
<td class="derecha">40,023</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-06-30</td>
<td class="derecha">41,636</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-06-30</td>
<td class="derecha">43,340</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">45,139</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2015-06-30</td>
<td class="derecha">47,033</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2016-06-30</td>
<td class="derecha">49,020</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2017-06-30</td>
<td class="derecha">51,100</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2018-06-30</td>
<td class="derecha">53,268</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2019-06-30</td>
<td class="derecha">55,519</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2020-06-30</td>
<td class="derecha">57,846</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-06-30</td>
<td class="derecha">8,583</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-06-30</td>
<td class="derecha">8,868</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-06-30</td>
<td class="derecha">9,166</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">9,479</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2015-06-30</td>
<td class="derecha">9,807</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2016-06-30</td>
<td class="derecha">10,152</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2017-06-30</td>
<td class="derecha">10,516</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2018-06-30</td>
<td class="derecha">10,899</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2019-06-30</td>
<td class="derecha">11,299</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2020-06-30</td>
<td class="derecha">11,717</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-06-30</td>
<td class="derecha">6,692</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-06-30</td>
<td class="derecha">6,935</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-06-30</td>
<td class="derecha">7,186</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">7,447</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2015-06-30</td>
<td class="derecha">7,718</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2016-06-30</td>
<td class="derecha">7,999</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2017-06-30</td>
<td class="derecha">8,288</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2018-06-30</td>
<td class="derecha">8,586</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2019-06-30</td>
<td class="derecha">8,889</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2020-06-30</td>
<td class="derecha">9,196</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-06-30</td>
<td class="derecha">73,429</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-06-30</td>
<td class="derecha">76,234</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-06-30</td>
<td class="derecha">79,195</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">82,328</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2015-06-30</td>
<td class="derecha">85,633</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2016-06-30</td>
<td class="derecha">89,114</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2017-06-30</td>
<td class="derecha">92,768</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2018-06-30</td>
<td class="derecha">96,590</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2019-06-30</td>
<td class="derecha">100,568</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2020-06-30</td>
<td class="derecha">104,689</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2011-06-30</td>
<td class="derecha">167,617</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-06-30</td>
<td class="derecha">174,052</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2013-06-30</td>
<td class="derecha">180,746</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2014-06-30</td>
<td class="derecha">187,728</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2015-06-30</td>
<td class="derecha">195,028</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2016-06-30</td>
<td class="derecha">202,680</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2017-06-30</td>
<td class="derecha">210,708</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2018-06-30</td>
<td class="derecha">219,131</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2019-06-30</td>
<td class="derecha">227,948</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2020-06-30</td>
<td class="derecha">237,152</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2011-06-30</td>
<td class="derecha">110,393</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-06-30</td>
<td class="derecha">113,527</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2013-06-30</td>
<td class="derecha">116,722</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2014-06-30</td>
<td class="derecha">120,009</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2015-06-30</td>
<td class="derecha">123,424</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2016-06-30</td>
<td class="derecha">126,999</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2017-06-30</td>
<td class="derecha">130,762</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2018-06-30</td>
<td class="derecha">134,726</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2019-06-30</td>
<td class="derecha">138,901</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2020-06-30</td>
<td class="derecha">143,292</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2011-06-30</td>
<td class="derecha">7,153,689</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-06-30</td>
<td class="derecha">7,375,849</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-06-30</td>
<td class="derecha">7,608,240</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2014-06-30</td>
<td class="derecha">7,851,672</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2015-06-30</td>
<td class="derecha">8,107,885</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2016-06-30</td>
<td class="derecha">8,378,769</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2017-06-30</td>
<td class="derecha">8,665,713</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2018-06-30</td>
<td class="derecha">8,969,503</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2019-06-30</td>
<td class="derecha">9,290,250</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2020-06-30</td>
<td class="derecha">9,627,630</td>
<td>CONAPO</td>
<td></td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetashzvwrllk a:first').tab('show')
});
// LENGUETA
$('#Lenguetashzvwrllk a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisebchjgly === 'undefined') {
    varMorrisebchjgly = Morris.Line({
      element: 'Morrisebchjgly',
      data: [{ fecha: '2011-06-30', dato: 18131 },{ fecha: '2012-06-30', dato: 18794 },{ fecha: '2013-06-30', dato: 19503 },{ fecha: '2014-06-30', dato: 20263 },{ fecha: '2015-06-30', dato: 21075 },{ fecha: '2016-06-30', dato: 21943 },{ fecha: '2017-06-30', dato: 22864 },{ fecha: '2018-06-30', dato: 23838 },{ fecha: '2019-06-30', dato: 24861 },{ fecha: '2020-06-30', dato: 25929 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA
$('#Lenguetashzvwrllk a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mappjujclzx;
  // DECLARAR LOS CIRCULOS DE COLORES PARA GEOPUNTOS
  var circuloParque = {
    "radius": 8,
    "fillColor": "#2BFF2B",
    "color": "#000",
    "weight": 1,
    "opacity": 1,
    "fillOpacity": 0.7
  };
  // Función para Pop-Ups
  function onEachFeature(feature, layer) {
    if (feature.properties && feature.properties.popupContent) {
      layer.bindPopup(feature.properties.popupContent);
    }
  };
  // Función para el mapa
  function initmappjujclzx() {
    // Nuevo Mapa
    mappjujclzx = new L.Map('LeafLetpjujclzx');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mappjujclzx.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mappjujclzx.addLayer(osm);
    // ARREGLO CON LOS GEOPUNTOS
    var geoPuntos = {
      "type": "FeatureCollection",
      "features": [
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Plaza Mayor" },
          "geometry": {"type":"Point","coordinates":[-103.45387,25.54021]},
          "id": 1
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque V. Carranza" },
          "geometry": {"type":"Point","coordinates":[-103.43321,25.54132]},
          "id": 2
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque Urbano" },
          "geometry": {"type":"Point","coordinates":[-103.39061,25.55129]},
          "id": 3
        }
      ]
    };
    // CONMUTAR LOS GEOPUNTOS POR SUS CIRCULOS DE COLORES
    L.geoJson(geoPuntos, {
      onEachFeature: onEachFeature,
      pointToLayer: function (feature, latlng) {
        switch (feature.properties.name) {
          case 'Parque': return L.circleMarker(latlng, circuloParque);
        }
      }
    }).addTo(mappjujclzx);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmappjujclzx === 'undefined') {
    varinitmappjujclzx = initmappjujclzx();
  };
});
FINAL;
    } // constructor

} // Clase SociedadAdultosMayores

?>
