<?php
/**
 * EconomiaRegistroDePropiedades.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaRegistroDePropiedades
 */
class EconomiaRegistroDePropiedades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Registro de Propiedades en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-registro-de-propiedades';
        $this->descripcion = 'Días que toma el trámite para el registro de una propiedad.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasvoaizzcl">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Días que toma el trámite para el registro de una propiedad.
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
<td class="derecha">51</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son: 

- # de procedimientos/trámites: 8
- Costo (% del valor de la propiedad): 4.27 
- Ranking en registro de propiedades: 29</td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">33</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 6 
- Costo (% del valor de la propiedad): 4.3 
- Ranking en registro de propiedades: 22</td>
</tr>
<tr>
<td class="centrado">31/10/2013</td>
<td class="derecha">28</td>
<td>Doing Business</td>
<td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en registro de propiedades fueron los siguientes para Torreón: 
Procedimientos (número) = 6 ; 
Costo (% del valor de la propiedad) = 4,5</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Días
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisirsdfhfh" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="mapa">
              <div id="LeafLetglxxkggv" class="mapa"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasvoaizzcl a:first').tab('show')
});
// LENGUETA
$('#Lenguetasvoaizzcl a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisirsdfhfh === 'undefined') {
    varMorrisirsdfhfh = Morris.Line({
      element: 'Morrisirsdfhfh',
      data: [{ fecha: '2007-12-31', dato: 51 },{ fecha: '2012-12-31', dato: 33 },{ fecha: '2013-10-31', dato: 28 }],
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
$('#Lenguetasvoaizzcl a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapglxxkggv;
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
  function initmapglxxkggv() {
    // Nuevo Mapa
    mapglxxkggv = new L.Map('LeafLetglxxkggv');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapglxxkggv.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapglxxkggv.addLayer(osm);
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
    }).addTo(mapglxxkggv);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapglxxkggv === 'undefined') {
    varinitmapglxxkggv = initmapglxxkggv();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaRegistroDePropiedades

?>
