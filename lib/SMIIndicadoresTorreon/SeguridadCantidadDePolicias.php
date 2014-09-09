<?php
/**
 * SeguridadCantidadDePolicias.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadCantidadDePolicias
 */
class SeguridadCantidadDePolicias extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cantidad de Policías en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'seguridad-cantidad-de-policias';
        $this->descripcion = 'Cantidad total de policías en el municipio.';
        $this->claves      = 'Torreón, Seguridad';
        $this->categorias  = array('Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaslnnnoqud">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Cantidad total de policías en el municipio.
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
<td class="derecha">768</td>
<td>Ayuntamiento de Torreón</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
Determinado en base al reporte de Transparencia de la Nómina.
    </div>
    <div class="tab-pane active" id="mapa">
              <div id="LeafLetdreovqqa" class="mapa"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetaslnnnoqud a:first').tab('show')
});
// LENGUETA
$('#Lenguetaslnnnoqud a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapdreovqqa;
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
  function initmapdreovqqa() {
    // Nuevo Mapa
    mapdreovqqa = new L.Map('LeafLetdreovqqa');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapdreovqqa.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapdreovqqa.addLayer(osm);
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
    }).addTo(mapdreovqqa);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapdreovqqa === 'undefined') {
    varinitmapdreovqqa = initmapdreovqqa();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadCantidadDePolicias

?>
