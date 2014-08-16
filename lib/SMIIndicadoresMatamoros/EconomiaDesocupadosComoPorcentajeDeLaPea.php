<?php
/**
 * EconomiaDesocupadosComoPorcentajeDeLaPea.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaDesocupadosComoPorcentajeDeLaPea
 */
class EconomiaDesocupadosComoPorcentajeDeLaPea extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Desocupados como porcentaje de la PEA en Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'economia-desocupados-como-porcentaje-de-la-pea';
        $this->descripcion = 'Número total de desempleados entre la Población económicamente activa';
        $this->claves      = 'Matamoros, Empleo';
        $this->categorias  = array('Empleo');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetascgpvxteo">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Número total de desempleados entre la Población económicamente activa

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
<td class="centrado">31/12/1989</td>
<td class="derecha">3.32 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/1999</td>
<td class="derecha">1.18 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">6.07 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Media nacional del indicador:

- 2009 = 3.72%
- 1999 = 0.98%
- 1989 = 2.32%

Datos obtenidos de [INEGI. Censos de población y vivienda](http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&s=est)

    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morrislpmfkxhs" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetbmemblta" class="mapa"></div>
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
<td>1989-12-31</td>
<td class="derecha">2.66 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>1999-12-31</td>
<td class="derecha">1.04 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">7.46 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1989-12-31</td>
<td class="derecha">2.90 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1999-12-31</td>
<td class="derecha">0.98 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2009-12-31</td>
<td class="derecha">7.80 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>1989-12-31</td>
<td class="derecha">2.99 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>1999-12-31</td>
<td class="derecha">0.94 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">7.41 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1989-12-31</td>
<td class="derecha">2.81 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1999-12-31</td>
<td class="derecha">1.03 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">7.43 %</td>
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
  $('#Lenguetascgpvxteo a:first').tab('show')
});
// LENGUETA
$('#Lenguetascgpvxteo a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrislpmfkxhs === 'undefined') {
    varMorrislpmfkxhs = Morris.Line({
      element: 'Morrislpmfkxhs',
      data: [{ fecha: '1989-12-31', dato: 3.3200 },{ fecha: '1999-12-31', dato: 1.1800 },{ fecha: '2009-12-31', dato: 6.0700 }],
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
$('#Lenguetascgpvxteo a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapbmemblta;
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
  function initmapbmemblta() {
    // Nuevo Mapa
    mapbmemblta = new L.Map('LeafLetbmemblta');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapbmemblta.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapbmemblta.addLayer(osm);
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
    }).addTo(mapbmemblta);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapbmemblta === 'undefined') {
    varinitmapbmemblta = initmapbmemblta();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaDesocupadosComoPorcentajeDeLaPea

?>
