<?php
/**
 * SeguridadRoboDeVehiculos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadRoboDeVehiculos
 */
class SeguridadRoboDeVehiculos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Robo de Vehículos en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'seguridad-robo-de-vehiculos';
        $this->descripcion = 'Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014';
        $this->claves      = 'Gómez Palacio, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaswdrgsfrd">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014
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
<td class="derecha">74</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">28/02/2014</td>
<td class="derecha">50</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">58</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/04/2014</td>
<td class="derecha">89</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/05/2014</td>
<td class="derecha">60</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">52</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisjrjrrmvz" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetotxxvnyp" class="mapa"></div>
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
<td class="derecha">135</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-02-28</td>
<td class="derecha">92</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-03-31</td>
<td class="derecha">70</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-04-30</td>
<td class="derecha">82</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-05-31</td>
<td class="derecha">115</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">95</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-01-31</td>
<td class="derecha">8</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-02-28</td>
<td class="derecha">8</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">15</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-04-30</td>
<td class="derecha">9</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-05-31</td>
<td class="derecha">9</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">4</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-01-31</td>
<td class="derecha">7</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-02-28</td>
<td class="derecha">7</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">4</td>
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
<td class="derecha">2</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">1</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-01-31</td>
<td class="derecha">224</td>
<td>00) DESCONOCIDA</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-02-28</td>
<td class="derecha">157</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">147</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-04-30</td>
<td class="derecha">185</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-05-31</td>
<td class="derecha">186</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">152</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetaswdrgsfrd a:first').tab('show')
});
// LENGUETA
$('#Lenguetaswdrgsfrd a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisjrjrrmvz === 'undefined') {
    varMorrisjrjrrmvz = Morris.Line({
      element: 'Morrisjrjrrmvz',
      data: [{ fecha: '2014-01-31', dato: 74 },{ fecha: '2014-02-28', dato: 50 },{ fecha: '2014-03-31', dato: 58 },{ fecha: '2014-04-30', dato: 89 },{ fecha: '2014-05-31', dato: 60 },{ fecha: '2014-06-30', dato: 52 }],
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
$('#Lenguetaswdrgsfrd a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapotxxvnyp;
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
  function initmapotxxvnyp() {
    // Nuevo Mapa
    mapotxxvnyp = new L.Map('LeafLetotxxvnyp');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapotxxvnyp.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapotxxvnyp.addLayer(osm);
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
    }).addTo(mapotxxvnyp);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapotxxvnyp === 'undefined') {
    varinitmapotxxvnyp = initmapotxxvnyp();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadRoboDeVehiculos

?>
