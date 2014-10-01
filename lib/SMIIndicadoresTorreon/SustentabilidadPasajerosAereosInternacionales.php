<?php
/**
 * SustentabilidadPasajerosAereosInternacionales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadPasajerosAereosInternacionales
 */
class SustentabilidadPasajerosAereosInternacionales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Pasajeros Aéreos Internacionales en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-internacionales';
        $this->descripcion = 'Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.';
        $this->claves      = 'Torreón, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetassxexbgzy">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.
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
<td class="centrado">31/12/2005</td>
<td class="derecha">64,316</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2006</td>
<td class="derecha">73,900</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2007</td>
<td class="derecha">80,742</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">77,199</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">53,112</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">51,238</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">51,401</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">61,443</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">55,446</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Personas
<h4>Observaciones</h4>
El flujo de pasajeros a nivel internacional es de:

- 2013 = 1,833,223
- 2012 = 1,825,145
- 2011 = 1,784,252
- 2010 = 1,927,529
- 2009 = 1,806,105
- 2008 = 2,327,839
- 2007 = 2,471,947
- 2006 = 2,525,279
- 2005 = 2,479,772

Se considera a nivel metropolitano. Consulta la [Base de Datos](http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisjciuepdf" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetvbdufobl" class="mapa"></div>
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
<td>2013-12-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2005-12-31</td>
<td class="derecha">64,316</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2006-12-31</td>
<td class="derecha">73,900</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2007-12-31</td>
<td class="derecha">80,742</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">77,199</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">53,112</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">51,238</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">51,401</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">61,443</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">55,446</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-12-31</td>
<td class="derecha">1,833,223</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
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
  $('#Lenguetassxexbgzy a:first').tab('show')
});
// LENGUETA
$('#Lenguetassxexbgzy a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisjciuepdf === 'undefined') {
    varMorrisjciuepdf = Morris.Line({
      element: 'Morrisjciuepdf',
      data: [{ fecha: '2005-12-31', dato: 64316 },{ fecha: '2006-12-31', dato: 73900 },{ fecha: '2007-12-31', dato: 80742 },{ fecha: '2008-12-31', dato: 77199 },{ fecha: '2009-12-31', dato: 53112 },{ fecha: '2010-12-31', dato: 51238 },{ fecha: '2011-12-31', dato: 51401 },{ fecha: '2012-12-31', dato: 61443 },{ fecha: '2013-12-31', dato: 55446 }],
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
$('#Lenguetassxexbgzy a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapvbdufobl;
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
  function initmapvbdufobl() {
    // Nuevo Mapa
    mapvbdufobl = new L.Map('LeafLetvbdufobl');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapvbdufobl.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapvbdufobl.addLayer(osm);
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
    }).addTo(mapvbdufobl);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapvbdufobl === 'undefined') {
    varinitmapvbdufobl = initmapvbdufobl();
  };
});
FINAL;
    } // constructor

} // Clase SustentabilidadPasajerosAereosInternacionales

?>
