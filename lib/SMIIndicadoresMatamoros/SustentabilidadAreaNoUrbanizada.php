<?php
/**
 * SustentabilidadAreaNoUrbanizada.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SustentabilidadAreaNoUrbanizada
 */
class SustentabilidadAreaNoUrbanizada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Área No Urbanizada en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sustentabilidad-area-no-urbanizada';
        $this->descripcion = 'Área total de localidades no urbanizadas sobre la superficie municipal.';
        $this->claves      = 'Matamoros, Recursos Naturales';
        $this->categorias  = array('Recursos Naturales');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasrwfistyk">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Área total de localidades no urbanizadas sobre la superficie municipal.
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
<td class="centrado">31/12/2010</td>
<td class="derecha">96.90 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
Descarga de [Base de Datos](http://www3.inegi.org.mx/sistemas/productos/default.aspx?c=265&upc=0&s=est&tg=3594&f=2&cl=0&pf=prod&ef=0&ct=201100000&pg=2)
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetqrdypctk" class="mapa"></div>
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
<td>2010-12-31</td>
<td class="derecha">88.90 %</td>
<td>INEGI</td>
<td>La distribución geográfica de Torreón es de considerarse aparte, ya que el municipio se encuentra dividido en dos partes: Norte; en la cual está asentada la cabecera municipal y la mancha urbana, y el Sur; que abarca aproximadamente tres cuartas partes de la superficie municipal, separadas tanto por la Sierra de las Noas como por extensiones de los municipios de Matamoros y Viesca.</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">92.90 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">98.40 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">94.90 %</td>
<td>INEGI</td>
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
  $('#Lenguetasrwfistyk a:first').tab('show')
});
// LENGUETA
$('#Lenguetasrwfistyk a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapqrdypctk;
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
  function initmapqrdypctk() {
    // Nuevo Mapa
    mapqrdypctk = new L.Map('LeafLetqrdypctk');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapqrdypctk.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapqrdypctk.addLayer(osm);
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
    }).addTo(mapqrdypctk);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapqrdypctk === 'undefined') {
    varinitmapqrdypctk = initmapqrdypctk();
  };
});
FINAL;
    } // constructor

} // Clase SustentabilidadAreaNoUrbanizada

?>
