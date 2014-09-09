<?php
/**
 * SociedadMadresAdolescentes.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadMadresAdolescentes
 */
class SociedadMadresAdolescentes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Madres Adolescentes en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-madres-adolescentes';
        $this->descripcion = 'Total de partos registrados (nacidos vivos) de mujeres entre 10 y 18 años de edad';
        $this->claves      = 'Torreón, Grupos Vulnerables, Género';
        $this->categorias  = array('Grupos Vulnerables', 'Género');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasfactobkc">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Total de partos registrados (nacidos vivos) de mujeres entre 10 y 18 años de edad
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
<td class="derecha">2,302</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">2,056</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">1,442</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">1,296</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">1,198</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">1,778</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
Fuente: Dirección General de Información de Salud (DGIS). [en linea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaria de Salud. [SINAIS](http://www.sinais.salud.gob.mx)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisbnulhmoc" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="mapa">
              <div id="LeafLetedmbbkcs" class="mapa"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasfactobkc a:first').tab('show')
});
// LENGUETA
$('#Lenguetasfactobkc a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisbnulhmoc === 'undefined') {
    varMorrisbnulhmoc = Morris.Line({
      element: 'Morrisbnulhmoc',
      data: [{ fecha: '2008-12-31', dato: 2302 },{ fecha: '2009-12-31', dato: 2056 },{ fecha: '2010-12-31', dato: 1442 },{ fecha: '2011-12-31', dato: 1296 },{ fecha: '2012-12-31', dato: 1198 },{ fecha: '2013-12-31', dato: 1778 }],
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
$('#Lenguetasfactobkc a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapedmbbkcs;
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
  function initmapedmbbkcs() {
    // Nuevo Mapa
    mapedmbbkcs = new L.Map('LeafLetedmbbkcs');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapedmbbkcs.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapedmbbkcs.addLayer(osm);
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
    }).addTo(mapedmbbkcs);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapedmbbkcs === 'undefined') {
    varinitmapedmbbkcs = initmapedmbbkcs();
  };
});
FINAL;
    } // constructor

} // Clase SociedadMadresAdolescentes

?>
