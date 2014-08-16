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
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-estimacion-de-menores-huerfanos-por-agresiones';
        $this->descripcion = 'Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).';
        $this->claves      = 'Torreón, Grupos Vulnerables, Delincuencia';
        $this->categorias  = array('Grupos Vulnerables', 'Delincuencia');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaszemflgul">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
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
<b>Unidad:</b> Cantidad.

<h4>Observaciones</h4>
Elaboración propia en base a las defunciones registradas en [SINAIS](http://www.sinais.salud.gob.mx)

    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morrisrgtcodar" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetgqhdflfq" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetaszemflgul a:first').tab('show')
});
// LENGUETA
$('#Lenguetaszemflgul a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisrgtcodar === 'undefined') {
    varMorrisrgtcodar = Morris.Line({
      element: 'Morrisrgtcodar',
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
$('#Lenguetaszemflgul a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapgqhdflfq;
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
  function initmapgqhdflfq() {
    // Nuevo Mapa
    mapgqhdflfq = new L.Map('LeafLetgqhdflfq');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapgqhdflfq.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapgqhdflfq.addLayer(osm);
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
    }).addTo(mapgqhdflfq);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapgqhdflfq === 'undefined') {
    varinitmapgqhdflfq = initmapgqhdflfq();
  };
});
FINAL;
    } // constructor

} // Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones

?>
