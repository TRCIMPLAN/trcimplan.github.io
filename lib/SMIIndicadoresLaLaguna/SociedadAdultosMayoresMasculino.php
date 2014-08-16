<?php
/**
 * SociedadAdultosMayoresMasculino.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadAdultosMayoresMasculino
 */
class SociedadAdultosMayoresMasculino extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Adultos Mayores Masculino en La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'sociedad-adultos-mayores-masculino';
        $this->descripcion = 'Población estimada a mediados de año de personas de 65 años y más de sexo masculino';
        $this->claves      = 'La Laguna, Grupos Vulnerables';
        $this->categorias  = array('Grupos Vulnerables');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasotrpbqhl">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Población estimada a mediados de año de personas de 65 años y más de sexo masculino

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
<td class="derecha">33,494</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2012</td>
<td class="derecha">34,770</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2013</td>
<td class="derecha">36,117</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">37,538</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2015</td>
<td class="derecha">39,033</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2016</td>
<td class="derecha">40,603</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2017</td>
<td class="derecha">42,247</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2018</td>
<td class="derecha">43,959</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2019</td>
<td class="derecha">45,732</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2020</td>
<td class="derecha">47,559</td>
<td>CONAPO</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.



    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morrisbsdqvhgl" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLethvevrkxy" class="mapa"></div>
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
<td class="derecha">17,498</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-06-30</td>
<td class="derecha">18,233</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-06-30</td>
<td class="derecha">19,010</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">19,829</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2015-06-30</td>
<td class="derecha">20,691</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2016-06-30</td>
<td class="derecha">21,594</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2017-06-30</td>
<td class="derecha">22,537</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2018-06-30</td>
<td class="derecha">23,517</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2019-06-30</td>
<td class="derecha">24,531</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2020-06-30</td>
<td class="derecha">25,576</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-06-30</td>
<td class="derecha">8,437</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-06-30</td>
<td class="derecha">8,736</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-06-30</td>
<td class="derecha">9,056</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-06-30</td>
<td class="derecha">9,400</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2015-06-30</td>
<td class="derecha">9,767</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2016-06-30</td>
<td class="derecha">10,158</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2017-06-30</td>
<td class="derecha">10,573</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2018-06-30</td>
<td class="derecha">11,009</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2019-06-30</td>
<td class="derecha">11,464</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2020-06-30</td>
<td class="derecha">11,936</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-06-30</td>
<td class="derecha">4,135</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-06-30</td>
<td class="derecha">4,260</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-06-30</td>
<td class="derecha">4,391</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">4,529</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2015-06-30</td>
<td class="derecha">4,674</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2016-06-30</td>
<td class="derecha">4,827</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2017-06-30</td>
<td class="derecha">4,989</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2018-06-30</td>
<td class="derecha">5,160</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2019-06-30</td>
<td class="derecha">5,338</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2020-06-30</td>
<td class="derecha">5,523</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-06-30</td>
<td class="derecha">3,423</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-06-30</td>
<td class="derecha">3,542</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-06-30</td>
<td class="derecha">3,660</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">3,780</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2015-06-30</td>
<td class="derecha">3,901</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2016-06-30</td>
<td class="derecha">4,024</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2017-06-30</td>
<td class="derecha">4,148</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2018-06-30</td>
<td class="derecha">4,274</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2019-06-30</td>
<td class="derecha">4,399</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2020-06-30</td>
<td class="derecha">4,524</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2011-06-30</td>
<td class="derecha">78,392</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-06-30</td>
<td class="derecha">81,329</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2013-06-30</td>
<td class="derecha">84,382</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2014-06-30</td>
<td class="derecha">87,565</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2015-06-30</td>
<td class="derecha">90,893</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2016-06-30</td>
<td class="derecha">94,379</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2017-06-30</td>
<td class="derecha">98,035</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2018-06-30</td>
<td class="derecha">101,864</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2019-06-30</td>
<td class="derecha">105,861</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2020-06-30</td>
<td class="derecha">110,020</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2011-06-30</td>
<td class="derecha">53,398</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-06-30</td>
<td class="derecha">54,718</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2013-06-30</td>
<td class="derecha">56,053</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2014-06-30</td>
<td class="derecha">57,418</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2015-06-30</td>
<td class="derecha">58,832</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2016-06-30</td>
<td class="derecha">60,311</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2017-06-30</td>
<td class="derecha">61,870</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2018-06-30</td>
<td class="derecha">63,514</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2019-06-30</td>
<td class="derecha">65,246</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2020-06-30</td>
<td class="derecha">67,066</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2011-06-30</td>
<td class="derecha">3,349,651</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-06-30</td>
<td class="derecha">3,449,315</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-06-30</td>
<td class="derecha">3,553,513</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2014-06-30</td>
<td class="derecha">3,662,907</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2015-06-30</td>
<td class="derecha">3,778,399</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2016-06-30</td>
<td class="derecha">3,900,878</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2017-06-30</td>
<td class="derecha">4,030,687</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2018-06-30</td>
<td class="derecha">4,167,816</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2019-06-30</td>
<td class="derecha">4,312,048</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2020-06-30</td>
<td class="derecha">4,463,109</td>
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
  $('#Lenguetasotrpbqhl a:first').tab('show')
});
// LENGUETA
$('#Lenguetasotrpbqhl a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisbsdqvhgl === 'undefined') {
    varMorrisbsdqvhgl = Morris.Line({
      element: 'Morrisbsdqvhgl',
      data: [{ fecha: '2011-06-30', dato: 33494 },{ fecha: '2012-06-30', dato: 34770 },{ fecha: '2013-06-30', dato: 36117 },{ fecha: '2014-06-30', dato: 37538 },{ fecha: '2015-06-30', dato: 39033 },{ fecha: '2016-06-30', dato: 40603 },{ fecha: '2017-06-30', dato: 42247 },{ fecha: '2018-06-30', dato: 43959 },{ fecha: '2019-06-30', dato: 45732 },{ fecha: '2020-06-30', dato: 47559 }],
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
$('#Lenguetasotrpbqhl a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var maphvevrkxy;
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
  function initmaphvevrkxy() {
    // Nuevo Mapa
    maphvevrkxy = new L.Map('LeafLethvevrkxy');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    maphvevrkxy.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    maphvevrkxy.addLayer(osm);
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
    }).addTo(maphvevrkxy);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmaphvevrkxy === 'undefined') {
    varinitmaphvevrkxy = initmaphvevrkxy();
  };
});
FINAL;
    } // constructor

} // Clase SociedadAdultosMayoresMasculino

?>
