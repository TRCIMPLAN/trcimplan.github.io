<?php
/**
 * SeguridadTasaDePoliciasPorHabitante.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadTasaDePoliciasPorHabitante
 */
class SeguridadTasaDePoliciasPorHabitante extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tasa de Policías por Habitante en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'seguridad-tasa-de-policias-por-habitante';
        $this->descripcion = 'Cantidad de policías por cada mil habitantes.';
        $this->claves      = 'Torreón, Seguridad';
        $this->categorias  = array('Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetassdkgvmfp">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Cantidad de policías por cada mil habitantes.
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
<td class="centrado">28/02/2014</td>
<td class="derecha">1.0997</td>
<td>Ayuntamiento de Torreón</td>
<td>Disponible sólo para Torreón</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Por cada mil
    </div>
    <div class="tab-pane active" id="mapa">
              <div id="LeafLettahtdkxj" class="mapa"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetassdkgvmfp a:first').tab('show')
});
// LENGUETA
$('#Lenguetassdkgvmfp a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var maptahtdkxj;
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
  function initmaptahtdkxj() {
    // Nuevo Mapa
    maptahtdkxj = new L.Map('LeafLettahtdkxj');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    maptahtdkxj.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    maptahtdkxj.addLayer(osm);
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
    }).addTo(maptahtdkxj);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmaptahtdkxj === 'undefined') {
    varinitmaptahtdkxj = initmaptahtdkxj();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadTasaDePoliciasPorHabitante

?>
