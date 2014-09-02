<?php
/**
 * EconomiaIndiceDeCompetitividadUrbana.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaIndiceDeCompetitividadUrbana
 */
class EconomiaIndiceDeCompetitividadUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Competitividad Urbana en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-indice-de-competitividad-urbana';
        $this->descripcion = 'El índice de Competitividad Urbana (ICU) ha sido dado a conocer por el Instituto Mexicano para la Competitividad (IMCO)en 2007, 2010 y 2012, con información proveniente de fuentes diversas verificables de años anteriores a su publicación.';
        $this->claves      = 'La Laguna, Competitividad';
        $this->categorias  = array('Competitividad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasiuwfkbuk">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
El índice de Competitividad Urbana (ICU) ha sido dado a conocer por el Instituto Mexicano para la Competitividad (IMCO)en 2007, 2010 y 2012, con información proveniente de fuentes diversas verificables de años anteriores a su publicación.
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
<td class="centrado">31/12/2012</td>
<td class="derecha">45.1100</td>
<td>IMCO</td>
<td>En el ranking Nacional La Laguna, ocupa el lugar 44 de 77 zonas metropolitanas.</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
De 0 a 1
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetwlsqqhlo" class="mapa"></div>
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
<td>2012-12-31</td>
<td class="derecha">50.6700</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 21 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">42.5700</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 59 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">37.3900</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 74 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">41.5400</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 64 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasiuwfkbuk a:first').tab('show')
});
// LENGUETA
$('#Lenguetasiuwfkbuk a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapwlsqqhlo;
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
  function initmapwlsqqhlo() {
    // Nuevo Mapa
    mapwlsqqhlo = new L.Map('LeafLetwlsqqhlo');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapwlsqqhlo.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapwlsqqhlo.addLayer(osm);
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
    }).addTo(mapwlsqqhlo);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapwlsqqhlo === 'undefined') {
    varinitmapwlsqqhlo = initmapwlsqqhlo();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaIndiceDeCompetitividadUrbana

?>
