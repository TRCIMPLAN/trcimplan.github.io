<?php
/**
 * SeguridadHomicidios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadHomicidios
 */
class SeguridadHomicidios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Homicidios en Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'seguridad-homicidios';
        $this->descripcion = 'Número de homicidios durante el primer trimestre de 2014';
        $this->claves      = 'Gómez Palacio, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasfojmtsht">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Número de homicidios durante el primer trimestre de 2014

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
<td class="centrado">30/06/2014</td>
<td class="derecha">46</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.



    </div>
    <div class="tab-pane" id="grafica">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetxcpttmlg" class="mapa"></div>
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
<td>2014-06-30</td>
<td class="derecha">51</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">12</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">4</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos del segundo trimestre de 2014</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">113</td>
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
  $('#Lenguetasfojmtsht a:first').tab('show')
});
// LENGUETA
$('#Lenguetasfojmtsht a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapxcpttmlg;
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
  function initmapxcpttmlg() {
    // Nuevo Mapa
    mapxcpttmlg = new L.Map('LeafLetxcpttmlg');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapxcpttmlg.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapxcpttmlg.addLayer(osm);
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
    }).addTo(mapxcpttmlg);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapxcpttmlg === 'undefined') {
    varinitmapxcpttmlg = initmapxcpttmlg();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadHomicidios

?>
