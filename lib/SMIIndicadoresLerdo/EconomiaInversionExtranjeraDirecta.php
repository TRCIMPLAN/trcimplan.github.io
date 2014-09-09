<?php
/**
 * EconomiaInversionExtranjeraDirecta.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaInversionExtranjeraDirecta
 */
class EconomiaInversionExtranjeraDirecta extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Inversión Extranjera Directa en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-inversion-extranjera-directa';
        $this->descripcion = 'Promedio de inversión entre 2008 y 2012.';
        $this->claves      = 'Lerdo, Macroeconomía';
        $this->categorias  = array('Macroeconomía');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasqrpnvwxn">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Promedio de inversión entre 2008 y 2012.
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
<td class="centrado">31/05/2012</td>
<td class="derecha">$ 9.79</td>
<td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Millones de dólares
<h4>Observaciones</h4>
El promedio de IED nacional de 2008 a 2012 es de 20685.96 millones de dólares, por lo que la IED de La Laguna representa el 1.31% de la nacional.

Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)
y [Secretaría de Economía](http://www.economia.gob.mx/comunidad-negocios/competitividad-normatividad/inversion-extranjera-directa/estadistica-oficial-de-ied-en-mexico)
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetyuuhsrjf" class="mapa"></div>
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
<td class="derecha">$ 46.50</td>
<td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">$ 214.49</td>
<td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">$ 0.61</td>
<td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">$ 271.40</td>
<td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-12-31</td>
<td class="derecha">$ 20,685.96</td>
<td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
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
  $('#Lenguetasqrpnvwxn a:first').tab('show')
});
// LENGUETA
$('#Lenguetasqrpnvwxn a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapyuuhsrjf;
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
  function initmapyuuhsrjf() {
    // Nuevo Mapa
    mapyuuhsrjf = new L.Map('LeafLetyuuhsrjf');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapyuuhsrjf.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapyuuhsrjf.addLayer(osm);
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
    }).addTo(mapyuuhsrjf);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapyuuhsrjf === 'undefined') {
    varinitmapyuuhsrjf = initmapyuuhsrjf();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaInversionExtranjeraDirecta

?>
