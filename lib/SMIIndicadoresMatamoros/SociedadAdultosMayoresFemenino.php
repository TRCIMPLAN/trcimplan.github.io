<?php
/**
 * SociedadAdultosMayoresFemenino.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadAdultosMayoresFemenino
 */
class SociedadAdultosMayoresFemenino extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Adultos Mayores Femenino en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-adultos-mayores-femenino';
        $this->descripcion = 'Población estimada a mediados de año de personas de 65 años y más de sexo femenino.';
        $this->claves      = 'Matamoros, Grupos Vulnerables, Género';
        $this->categorias  = array('Grupos Vulnerables', 'Género');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasgsucrgai">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Población estimada a mediados de año de personas de 65 años y más de sexo femenino.
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
<td class="derecha">3,269</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2012</td>
<td class="derecha">3,394</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2013</td>
<td class="derecha">3,526</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">3,668</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2015</td>
<td class="derecha">3,817</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2016</td>
<td class="derecha">3,975</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2017</td>
<td class="derecha">4,140</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2018</td>
<td class="derecha">4,312</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2019</td>
<td class="derecha">4,490</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2020</td>
<td class="derecha">4,671</td>
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
<div id="Morrisqiqyheii" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetueiomaqx" class="mapa"></div>
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
<td class="derecha">22,525</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-06-30</td>
<td class="derecha">23,403</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-06-30</td>
<td class="derecha">24,330</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">25,310</td>
<td>CONAPO</td>
<td>Personas de 65 años o más</td>
</tr>
<tr>
<td>Torreón</td>
<td>2015-06-30</td>
<td class="derecha">26,342</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2016-06-30</td>
<td class="derecha">27,426</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2017-06-30</td>
<td class="derecha">28,563</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2018-06-30</td>
<td class="derecha">29,751</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2019-06-30</td>
<td class="derecha">30,988</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2020-06-30</td>
<td class="derecha">32,270</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-06-30</td>
<td class="derecha">9,694</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-06-30</td>
<td class="derecha">10,058</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-06-30</td>
<td class="derecha">10,447</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-06-30</td>
<td class="derecha">10,863</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2015-06-30</td>
<td class="derecha">11,308</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2016-06-30</td>
<td class="derecha">11,784</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2017-06-30</td>
<td class="derecha">12,292</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2018-06-30</td>
<td class="derecha">12,829</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2019-06-30</td>
<td class="derecha">13,397</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2020-06-30</td>
<td class="derecha">13,994</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-06-30</td>
<td class="derecha">4,448</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-06-30</td>
<td class="derecha">4,608</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-06-30</td>
<td class="derecha">4,775</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">4,950</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2015-06-30</td>
<td class="derecha">5,133</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2016-06-30</td>
<td class="derecha">5,325</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2017-06-30</td>
<td class="derecha">5,527</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2018-06-30</td>
<td class="derecha">5,739</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2019-06-30</td>
<td class="derecha">5,961</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2020-06-30</td>
<td class="derecha">6,195</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-06-30</td>
<td class="derecha">39,935</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-06-30</td>
<td class="derecha">41,463</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-06-30</td>
<td class="derecha">43,078</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">44,790</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2015-06-30</td>
<td class="derecha">46,600</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2016-06-30</td>
<td class="derecha">48,510</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2017-06-30</td>
<td class="derecha">50,521</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2018-06-30</td>
<td class="derecha">52,631</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2019-06-30</td>
<td class="derecha">54,836</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2020-06-30</td>
<td class="derecha">57,130</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2011-06-30</td>
<td class="derecha">89,225</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-06-30</td>
<td class="derecha">92,724</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2013-06-30</td>
<td class="derecha">96,364</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2014-06-30</td>
<td class="derecha">100,163</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2015-06-30</td>
<td class="derecha">104,136</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2016-06-30</td>
<td class="derecha">108,300</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2017-06-30</td>
<td class="derecha">112,673</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2018-06-30</td>
<td class="derecha">117,267</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2019-06-30</td>
<td class="derecha">122,087</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2020-06-30</td>
<td class="derecha">127,132</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2011-06-30</td>
<td class="derecha">56,994</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-06-30</td>
<td class="derecha">58,808</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2013-06-30</td>
<td class="derecha">60,669</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2014-06-30</td>
<td class="derecha">62,591</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2015-06-30</td>
<td class="derecha">64,592</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2016-06-30</td>
<td class="derecha">66,688</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2017-06-30</td>
<td class="derecha">68,892</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2018-06-30</td>
<td class="derecha">71,212</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2019-06-30</td>
<td class="derecha">73,655</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2020-06-30</td>
<td class="derecha">76,226</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2011-06-30</td>
<td class="derecha">3,804,038</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-06-30</td>
<td class="derecha">3,926,533</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-06-30</td>
<td class="derecha">4,054,726</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2014-06-30</td>
<td class="derecha">4,188,765</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2015-06-30</td>
<td class="derecha">4,329,486</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2016-06-30</td>
<td class="derecha">4,477,892</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2017-06-30</td>
<td class="derecha">4,635,025</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2018-06-30</td>
<td class="derecha">4,801,687</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2019-06-30</td>
<td class="derecha">4,978,202</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2020-06-30</td>
<td class="derecha">5,164,521</td>
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
  $('#Lenguetasgsucrgai a:first').tab('show')
});
// LENGUETA
$('#Lenguetasgsucrgai a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisqiqyheii === 'undefined') {
    varMorrisqiqyheii = Morris.Line({
      element: 'Morrisqiqyheii',
      data: [{ fecha: '2011-06-30', dato: 3269 },{ fecha: '2012-06-30', dato: 3394 },{ fecha: '2013-06-30', dato: 3526 },{ fecha: '2014-06-30', dato: 3668 },{ fecha: '2015-06-30', dato: 3817 },{ fecha: '2016-06-30', dato: 3975 },{ fecha: '2017-06-30', dato: 4140 },{ fecha: '2018-06-30', dato: 4312 },{ fecha: '2019-06-30', dato: 4490 },{ fecha: '2020-06-30', dato: 4671 }],
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
$('#Lenguetasgsucrgai a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapueiomaqx;
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
  function initmapueiomaqx() {
    // Nuevo Mapa
    mapueiomaqx = new L.Map('LeafLetueiomaqx');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapueiomaqx.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapueiomaqx.addLayer(osm);
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
    }).addTo(mapueiomaqx);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapueiomaqx === 'undefined') {
    varinitmapueiomaqx = initmapueiomaqx();
  };
});
FINAL;
    } // constructor

} // Clase SociedadAdultosMayoresFemenino

?>
