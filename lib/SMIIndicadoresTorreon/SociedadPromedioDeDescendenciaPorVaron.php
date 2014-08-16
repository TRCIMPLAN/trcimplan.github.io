<?php
/**
 * SociedadPromedioDeDescendenciaPorVaron.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadPromedioDeDescendenciaPorVaron
 */
class SociedadPromedioDeDescendenciaPorVaron extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Promedio de Descendencia por Varón en Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-promedio-de-descendencia-por-varon';
        $this->descripcion = 'Calcula el promedio estimado de hijos por cada varón.';
        $this->claves      = 'Torreón, Población';
        $this->categorias  = array('Población');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaskghtadpq">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Calcula el promedio estimado de hijos por cada varón.

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
<td class="derecha">1.8100</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">1.7700</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">1.7200</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">1.6900</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">1.6600</td>
<td>IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.

<h4>Observaciones</h4>
Estimación propia en base al dato de Ocupación por Vivienda

    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morriskauchldr" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetshekncht" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetaskghtadpq a:first').tab('show')
});
// LENGUETA
$('#Lenguetaskghtadpq a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorriskauchldr === 'undefined') {
    varMorriskauchldr = Morris.Line({
      element: 'Morriskauchldr',
      data: [{ fecha: '2008-12-31', dato: 1.8100 },{ fecha: '2009-12-31', dato: 1.7700 },{ fecha: '2010-12-31', dato: 1.7200 },{ fecha: '2011-12-31', dato: 1.6900 },{ fecha: '2012-12-31', dato: 1.6600 }],
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
$('#Lenguetaskghtadpq a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapshekncht;
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
  function initmapshekncht() {
    // Nuevo Mapa
    mapshekncht = new L.Map('LeafLetshekncht');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapshekncht.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapshekncht.addLayer(osm);
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
    }).addTo(mapshekncht);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapshekncht === 'undefined') {
    varinitmapshekncht = initmapshekncht();
  };
});
FINAL;
    } // constructor

} // Clase SociedadPromedioDeDescendenciaPorVaron

?>
