<?php
/**
 * GobiernoCompetenciaElectoral.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase GobiernoCompetenciaElectoral
 */
class GobiernoCompetenciaElectoral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Competencia Electoral en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'gobierno-competencia-electoral';
        $this->descripcion = 'Diferencia entre los dos candidatos con más votación entre el total de votos.';
        $this->claves      = 'Matamoros, Participación Ciudadana, Gobierno';
        $this->categorias  = array('Participación Ciudadana', 'Gobierno');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaskquxesod">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Diferencia entre los dos candidatos con más votación entre el total de votos.

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
<td class="centrado">07/07/2013</td>
<td class="derecha">39.67 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.



    </div>
    <div class="tab-pane" id="grafica">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetixtrfsxo" class="mapa"></div>
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
<td>2013-07-07</td>
<td class="derecha">1.77 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-06-30</td>
<td class="derecha">4.48 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-07-02</td>
<td class="derecha">5.15 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-07-07</td>
<td class="derecha">6.70 %</td>
<td>INE-IEPCC</td>
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
  $('#Lenguetaskquxesod a:first').tab('show')
});
// LENGUETA
$('#Lenguetaskquxesod a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapixtrfsxo;
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
  function initmapixtrfsxo() {
    // Nuevo Mapa
    mapixtrfsxo = new L.Map('LeafLetixtrfsxo');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapixtrfsxo.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapixtrfsxo.addLayer(osm);
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
    }).addTo(mapixtrfsxo);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapixtrfsxo === 'undefined') {
    varinitmapixtrfsxo = initmapixtrfsxo();
  };
});
FINAL;
    } // constructor

} // Clase GobiernoCompetenciaElectoral

?>
