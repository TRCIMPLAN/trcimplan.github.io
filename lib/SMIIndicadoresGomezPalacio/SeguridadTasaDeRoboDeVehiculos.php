<?php
/**
 * SeguridadTasaDeRoboDeVehiculos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadTasaDeRoboDeVehiculos
 */
class SeguridadTasaDeRoboDeVehiculos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tasa de Robo de VehÍculos en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'seguridad-tasa-de-robo-de-vehiculos';
        $this->descripcion = 'Cantidad de robos de vehículos por cada 100 mil habitantes.';
        $this->claves      = 'Gómez Palacio, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasbthhazyf">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Cantidad de robos de vehículos por cada 100 mil habitantes.
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
<td class="centrado">31/12/2013</td>
<td class="derecha">347.4300</td>
<td>SNSP</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Por cada 100 mil
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetkkjnvxcm" class="mapa"></div>
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
<td>2013-12-31</td>
<td class="derecha">232.8200</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">148.2800</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">113.2000</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">243.5600</td>
<td>SNSP</td>
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
  $('#Lenguetasbthhazyf a:first').tab('show')
});
// LENGUETA
$('#Lenguetasbthhazyf a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapkkjnvxcm;
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
  function initmapkkjnvxcm() {
    // Nuevo Mapa
    mapkkjnvxcm = new L.Map('LeafLetkkjnvxcm');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapkkjnvxcm.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapkkjnvxcm.addLayer(osm);
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
    }).addTo(mapkkjnvxcm);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapkkjnvxcm === 'undefined') {
    varinitmapkkjnvxcm = initmapkkjnvxcm();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadTasaDeRoboDeVehiculos

?>
