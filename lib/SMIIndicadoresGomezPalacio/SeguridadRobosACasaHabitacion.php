<?php
/**
 * SeguridadRobosACasaHabitacion.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadRobosACasaHabitacion
 */
class SeguridadRobosACasaHabitacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Robos a casa habitación. en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'seguridad-robos-a-casa-habitacion-';
        $this->descripcion = 'robos totales por mes';
        $this->claves      = 'Gómez Palacio';
        $this->categorias  = array();
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasspjdpsnl">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
robos totales por mes
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
<td class="derecha">26</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">28/02/2014</td>
<td class="derecha">24</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">28</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/04/2014</td>
<td class="derecha">22</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/05/2014</td>
<td class="derecha">25</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">18</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morriswfsolkru" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetbamtnisb" class="mapa"></div>
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
<td class="derecha">70</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-02-28</td>
<td class="derecha">65</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-03-31</td>
<td class="derecha">73</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-04-30</td>
<td class="derecha">67</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-05-31</td>
<td class="derecha">108</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">54</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-01-31</td>
<td class="derecha">17</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-02-28</td>
<td class="derecha">18</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">16</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-04-30</td>
<td class="derecha">8</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-05-31</td>
<td class="derecha">12</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">6</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-01-31</td>
<td class="derecha">2</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-02-28</td>
<td class="derecha">8</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">6</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-04-30</td>
<td class="derecha">5</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-05-31</td>
<td class="derecha">10</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">5</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-01-31</td>
<td class="derecha">115</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-02-28</td>
<td class="derecha">115</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">123</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-04-30</td>
<td class="derecha">102</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-05-31</td>
<td class="derecha">155</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">83</td>
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
  $('#Lenguetasspjdpsnl a:first').tab('show')
});
// LENGUETA
$('#Lenguetasspjdpsnl a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorriswfsolkru === 'undefined') {
    varMorriswfsolkru = Morris.Line({
      element: 'Morriswfsolkru',
      data: [{ fecha: '2014-01-31', dato: 26 },{ fecha: '2014-02-28', dato: 24 },{ fecha: '2014-03-31', dato: 28 },{ fecha: '2014-04-30', dato: 22 },{ fecha: '2014-05-31', dato: 25 },{ fecha: '2014-06-30', dato: 18 }],
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
$('#Lenguetasspjdpsnl a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapbamtnisb;
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
  function initmapbamtnisb() {
    // Nuevo Mapa
    mapbamtnisb = new L.Map('LeafLetbamtnisb');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapbamtnisb.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapbamtnisb.addLayer(osm);
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
    }).addTo(mapbamtnisb);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapbamtnisb === 'undefined') {
    varinitmapbamtnisb = initmapbamtnisb();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadRobosACasaHabitacion

?>
