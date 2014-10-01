<?php
/**
 * SociedadRezagoEducativo.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadRezagoEducativo
 */
class SociedadRezagoEducativo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Rezago Educativo en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-rezago-educativo';
        $this->descripcion = 'Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL';
        $this->claves      = 'Gómez Palacio, Educación, Grupos Vulnerables';
        $this->categorias  = array('Educación', 'Grupos Vulnerables');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaseclpskoy">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL
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
<td class="derecha">17.31 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
Consulta la [Base de Datos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Anexo-estad%C3%ADstico-municipal-2010.aspx)
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetomzqlpcr" class="mapa"></div>
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
<td class="derecha">10.83 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">16.76 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">19.20 %</td>
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
  $('#Lenguetaseclpskoy a:first').tab('show')
});
// LENGUETA
$('#Lenguetaseclpskoy a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapomzqlpcr;
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
  function initmapomzqlpcr() {
    // Nuevo Mapa
    mapomzqlpcr = new L.Map('LeafLetomzqlpcr');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapomzqlpcr.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapomzqlpcr.addLayer(osm);
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
    }).addTo(mapomzqlpcr);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapomzqlpcr === 'undefined') {
    varinitmapomzqlpcr = initmapomzqlpcr();
  };
});
FINAL;
    } // constructor

} // Clase SociedadRezagoEducativo

?>
