<?php
/**
 * SeguridadDelitos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SeguridadDelitos
 */
class SeguridadDelitos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Delitos en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'seguridad-delitos';
        $this->descripcion = 'Total de delitos cometidos en el segundo trimestre 2014';
        $this->claves      = 'Lerdo, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasrewhhbxn">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Total de delitos cometidos en el segundo trimestre 2014

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
<td class="centrado">31/01/2014</td>
<td class="derecha">66</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">28/02/2014</td>
<td class="derecha">66</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">180</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.



    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morrisdvmrlopl" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetoobqizum" class="mapa"></div>
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
<td>2014-01-31</td>
<td class="derecha">934</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-02-28</td>
<td class="derecha">841</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">2,542</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-01-31</td>
<td class="derecha">363</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-02-28</td>
<td class="derecha">307</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-06-30</td>
<td class="derecha">986</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-01-31</td>
<td class="derecha">69</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-02-28</td>
<td class="derecha">65</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">230</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">3,938</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
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
  $('#Lenguetasrewhhbxn a:first').tab('show')
});
// LENGUETA
$('#Lenguetasrewhhbxn a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisdvmrlopl === 'undefined') {
    varMorrisdvmrlopl = Morris.Line({
      element: 'Morrisdvmrlopl',
      data: [{ fecha: '2014-01-31', dato: 66 },{ fecha: '2014-02-28', dato: 66 },{ fecha: '2014-06-30', dato: 180 }],
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
$('#Lenguetasrewhhbxn a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapoobqizum;
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
  function initmapoobqizum() {
    // Nuevo Mapa
    mapoobqizum = new L.Map('LeafLetoobqizum');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapoobqizum.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapoobqizum.addLayer(osm);
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
    }).addTo(mapoobqizum);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapoobqizum === 'undefined') {
    varinitmapoobqizum = initmapoobqizum();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadDelitos

?>
