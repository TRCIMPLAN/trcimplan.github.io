<?php
/**
 * EconomiaPosgradosDeCalidad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaPosgradosDeCalidad
 */
class EconomiaPosgradosDeCalidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Posgrados de Calidad en Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'economia-posgrados-de-calidad';
        $this->descripcion = 'Programas aceptados por CONACYT como posgrados de calidad';
        $this->claves      = 'Matamoros, Educación, Innovación';
        $this->categorias  = array('Educación', 'Innovación');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasxtzhooof">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Programas aceptados por CONACYT como posgrados de calidad

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
<td class="centrado">31/03/2014</td>
<td class="derecha">0</td>
<td>CONACYT</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad de Posgrados.

<h4>Observaciones</h4>
Datos obtenidos de [CONACYT](http://svrtmp.main.conacyt.mx/ConsultasPNPC/listar_padron.php)

    </div>
    <div class="tab-pane" id="grafica">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetdnlyggmg" class="mapa"></div>
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
<td>2014-04-30</td>
<td class="derecha">11</td>
<td>CONACYT</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2014-04-30</td>
<td class="derecha">51</td>
<td>CONACYT</td>
<td>Fuente: [CONACYT](http://www.conacyt.gob.mx)</td>
</tr>
<tr>
<td>Durango</td>
<td>2014-04-30</td>
<td class="derecha">15</td>
<td>CONACYT</td>
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
  $('#Lenguetasxtzhooof a:first').tab('show')
});
// LENGUETA
$('#Lenguetasxtzhooof a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapdnlyggmg;
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
  function initmapdnlyggmg() {
    // Nuevo Mapa
    mapdnlyggmg = new L.Map('LeafLetdnlyggmg');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapdnlyggmg.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapdnlyggmg.addLayer(osm);
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
    }).addTo(mapdnlyggmg);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapdnlyggmg === 'undefined') {
    varinitmapdnlyggmg = initmapdnlyggmg();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaPosgradosDeCalidad

?>
