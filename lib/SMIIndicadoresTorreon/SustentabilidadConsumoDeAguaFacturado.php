<?php
/**
 * SustentabilidadConsumoDeAguaFacturado.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadConsumoDeAguaFacturado
 */
class SustentabilidadConsumoDeAguaFacturado extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Consumo de Agua Facturado en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sustentabilidad-consumo-de-agua-facturado';
        $this->descripcion = 'Consumo anual de agua por persona expresado en metros cúbicos.';
        $this->claves      = 'Torreón, Recursos Naturales';
        $this->categorias  = array('Recursos Naturales');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasomgaullb">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Consumo anual de agua por persona expresado en metros cúbicos.

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
<td class="centrado">31/12/2010</td>
<td class="derecha">47.7700</td>
<td>SIMAS</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">46.7500</td>
<td>SIMAS</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">44.5700</td>
<td>SIMAS</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">41.9900</td>
<td>SIMAS</td>
<td>Consumo anual</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Metros cúbicos per cápita.

<h4>Observaciones</h4>
Total facturado dividido entre la población.

    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morrisjxeantdw" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetpmapkexn" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasomgaullb a:first').tab('show')
});
// LENGUETA
$('#Lenguetasomgaullb a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisjxeantdw === 'undefined') {
    varMorrisjxeantdw = Morris.Line({
      element: 'Morrisjxeantdw',
      data: [{ fecha: '2010-12-31', dato: 47.7700 },{ fecha: '2011-12-31', dato: 46.7500 },{ fecha: '2012-12-31', dato: 44.5700 },{ fecha: '2013-12-31', dato: 41.9900 }],
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
$('#Lenguetasomgaullb a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mappmapkexn;
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
  function initmappmapkexn() {
    // Nuevo Mapa
    mappmapkexn = new L.Map('LeafLetpmapkexn');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mappmapkexn.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mappmapkexn.addLayer(osm);
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
    }).addTo(mappmapkexn);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmappmapkexn === 'undefined') {
    varinitmappmapkexn = initmappmapkexn();
  };
});
FINAL;
    } // constructor

} // Clase SustentabilidadConsumoDeAguaFacturado

?>
