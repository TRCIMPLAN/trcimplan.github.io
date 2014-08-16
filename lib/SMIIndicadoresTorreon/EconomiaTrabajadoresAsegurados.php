<?php
/**
 * EconomiaTrabajadoresAsegurados.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Trabajadores Asegurados en Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-trabajadores-asegurados';
        $this->descripcion = 'Evolución del empleo medida en trabajadores asegurados por el IMSS.';
        $this->claves      = 'Torreón, Empleo';
        $this->categorias  = array('Empleo');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasmlqkbxwr">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Evolución del empleo medida en trabajadores asegurados por el IMSS.

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
<td class="derecha">171,936</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">164,258</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">157,898</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">168,723</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">176,045</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">184,407</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Personas.

<h4>Observaciones</h4>
El dato incluye a los trabajadores asegurados de los municipios de la región abarcados por la subdelegación Torreón.

Datos obtenidos de [IMSS](http://201.144.108.20/imssdigital/conoce/estadisticas/pages/memoria2012.aspx)

    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morrisxeuwcxnj" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetxnxhcezz" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasmlqkbxwr a:first').tab('show')
});
// LENGUETA
$('#Lenguetasmlqkbxwr a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisxeuwcxnj === 'undefined') {
    varMorrisxeuwcxnj = Morris.Line({
      element: 'Morrisxeuwcxnj',
      data: [{ fecha: '2007-12-31', dato: 171936 },{ fecha: '2008-12-31', dato: 164258 },{ fecha: '2009-12-31', dato: 157898 },{ fecha: '2010-12-31', dato: 168723 },{ fecha: '2011-12-31', dato: 176045 },{ fecha: '2012-12-31', dato: 184407 }],
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
$('#Lenguetasmlqkbxwr a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapxnxhcezz;
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
  function initmapxnxhcezz() {
    // Nuevo Mapa
    mapxnxhcezz = new L.Map('LeafLetxnxhcezz');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapxnxhcezz.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapxnxhcezz.addLayer(osm);
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
    }).addTo(mapxnxhcezz);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapxnxhcezz === 'undefined') {
    varinitmapxnxhcezz = initmapxnxhcezz();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaTrabajadoresAsegurados

?>
