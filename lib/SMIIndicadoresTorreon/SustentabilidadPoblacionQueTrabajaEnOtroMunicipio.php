<?php
/**
 * SustentabilidadPoblacionQueTrabajaEnOtroMunicipio.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadPoblacionQueTrabajaEnOtroMunicipio
 */
class SustentabilidadPoblacionQueTrabajaEnOtroMunicipio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Población que Trabaja en OTRO Municipio en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sustentabilidad-poblacion-que-trabaja-en-otro-municipio';
        $this->descripcion = 'Porcentaje de la población que trabaja en un municipio diferente al que reside dentro de la Zona Metropolitana de La Laguna.';
        $this->claves      = 'Torreón, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetascjyxhxju">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Porcentaje de la población que trabaja en un municipio diferente al que reside dentro de la Zona Metropolitana de La Laguna.
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
<td class="derecha">4.20 %</td>
<td>CONAPO</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
Consulta la [Base de Datos](http://www.conapo.gob.mx/en/CONAPO/Catalogo_Sistema_Urbano_Nacional_2012)
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetwhldpste" class="mapa"></div>
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
<td>2010-12-31</td>
<td class="derecha">12.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">28.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">20.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">10.20 %</td>
<td>CONAPO</td>
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
  $('#Lenguetascjyxhxju a:first').tab('show')
});
// LENGUETA
$('#Lenguetascjyxhxju a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapwhldpste;
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
  function initmapwhldpste() {
    // Nuevo Mapa
    mapwhldpste = new L.Map('LeafLetwhldpste');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapwhldpste.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapwhldpste.addLayer(osm);
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
    }).addTo(mapwhldpste);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapwhldpste === 'undefined') {
    varinitmapwhldpste = initmapwhldpste();
  };
});
FINAL;
    } // constructor

} // Clase SustentabilidadPoblacionQueTrabajaEnOtroMunicipio

?>
