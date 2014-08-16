<?php
/**
 * EconomiaObtencionDeCreditoCreacionDeGarantias.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaObtencionDeCreditoCreacionDeGarantias
 */
class EconomiaObtencionDeCreditoCreacionDeGarantias extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Obtención de crédito - Creación de garantías en Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-obtencion-de-credito---creacion-de-garantias';
        $this->descripcion = 'Días transcurridos en el proceso de obtención de un crédito.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasgzxkexpu">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Días transcurridos en el proceso de obtención de un crédito.

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
<td class="centrado">31/12/2007</td>
<td class="derecha">13</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son:

- Costo (% del valor del préstamo): 1.29 
- Ranking en crear una garantía: 6</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Días.



    </div>
    <div class="tab-pane" id="grafica">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetjbyufooj" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasgzxkexpu a:first').tab('show')
});
// LENGUETA
$('#Lenguetasgzxkexpu a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapjbyufooj;
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
  function initmapjbyufooj() {
    // Nuevo Mapa
    mapjbyufooj = new L.Map('LeafLetjbyufooj');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapjbyufooj.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapjbyufooj.addLayer(osm);
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
    }).addTo(mapjbyufooj);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapjbyufooj === 'undefined') {
    varinitmapjbyufooj = initmapjbyufooj();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaObtencionDeCreditoCreacionDeGarantias

?>
