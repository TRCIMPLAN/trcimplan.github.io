<?php
/**
 * SociedadEstimacionDeMenoresHuerfanosPorAgresiones.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones
 */
class SociedadEstimacionDeMenoresHuerfanosPorAgresiones extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Estimación de Menores Huérfanos por Agresiones en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-estimacion-de-menores-huerfanos-por-agresiones';
        $this->descripcion = 'Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).';
        $this->claves      = 'Torreón, Grupos Vulnerables, Delincuencia';
        $this->categorias  = array('Grupos Vulnerables', 'Delincuencia');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasethltoyh">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).
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
<td class="centrado">31/12/2008</td>
<td class="derecha">544</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">597</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">753</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">858</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">1,253</td>
<td>IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
Elaboración propia en base a las defunciones registradas en [SINAIS](http://www.sinais.salud.gob.mx)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisuroijgco" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="mapa">
              <div id="LeafLetqnsxzvly" class="mapa"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasethltoyh a:first').tab('show')
});
// LENGUETA
$('#Lenguetasethltoyh a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisuroijgco === 'undefined') {
    varMorrisuroijgco = Morris.Line({
      element: 'Morrisuroijgco',
      data: [{ fecha: '2008-12-31', dato: 544 },{ fecha: '2009-12-31', dato: 597 },{ fecha: '2010-12-31', dato: 753 },{ fecha: '2011-12-31', dato: 858 },{ fecha: '2012-12-31', dato: 1253 }],
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
$('#Lenguetasethltoyh a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapqnsxzvly;
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
  function initmapqnsxzvly() {
    // Nuevo Mapa
    mapqnsxzvly = new L.Map('LeafLetqnsxzvly');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapqnsxzvly.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapqnsxzvly.addLayer(osm);
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
    }).addTo(mapqnsxzvly);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapqnsxzvly === 'undefined') {
    varinitmapqnsxzvly = initmapqnsxzvly();
  };
});
FINAL;
    } // constructor

} // Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones

?>
