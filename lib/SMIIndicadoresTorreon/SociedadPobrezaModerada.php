<?php
/**
 * SociedadPobrezaModerada.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadPobrezaModerada
 */
class SociedadPobrezaModerada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Pobreza Moderada en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-pobreza-moderada';
        $this->descripcion = 'Porcentaje de la población en situación de pobreza moderada.';
        $this->claves      = 'Torreón, Bienestar';
        $this->categorias  = array('Bienestar');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetashvndqkwe">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Porcentaje de la población en situación de pobreza moderada.
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
<td class="centrado">31/12/2012</td>
<td class="derecha">24.00 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
Consulta la [Base de Datos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Pobreza%202012/Pobreza-2012.aspx)
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetkxkpdhyt" class="mapa"></div>
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
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">31.90 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">41.10 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">29.80 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">28.60 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2010-12-31</td>
<td class="derecha">24.76 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2010-12-31</td>
<td class="derecha">40.22 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2010-12-31</td>
<td class="derecha">34.39 %</td>
<td>CONEVAL</td>
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
  $('#Lenguetashvndqkwe a:first').tab('show')
});
// LENGUETA
$('#Lenguetashvndqkwe a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapkxkpdhyt;
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
  function initmapkxkpdhyt() {
    // Nuevo Mapa
    mapkxkpdhyt = new L.Map('LeafLetkxkpdhyt');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapkxkpdhyt.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapkxkpdhyt.addLayer(osm);
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
    }).addTo(mapkxkpdhyt);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapkxkpdhyt === 'undefined') {
    varinitmapkxkpdhyt = initmapkxkpdhyt();
  };
});
FINAL;
    } // constructor

} // Clase SociedadPobrezaModerada

?>
