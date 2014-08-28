<?php
/**
 * GobiernoIngresosPorCobroDeServicios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase GobiernoIngresosPorCobroDeServicios
 */
class GobiernoIngresosPorCobroDeServicios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Ingresos por Cobro de Servicios en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'gobierno-ingresos-por-cobro-de-servicios';
        $this->descripcion = 'Ingresos recaudados por el municipio por cobro de servicios';
        $this->claves      = 'Gómez Palacio, Finanzas Públicas';
        $this->categorias  = array('Finanzas Públicas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasilgqwwxq">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Ingresos recaudados por el municipio por cobro de servicios

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
<td class="derecha">$ 171,558,852.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">$ 260,603,974.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">$ 446,425,780.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">$ 218,261,225.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">$ 473,049,020.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">$ 523,339,253.00</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Pesos.



    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morrisematrhgf" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetgmvbgqdz" class="mapa"></div>
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
<td>2007-12-31</td>
<td class="derecha">$ 575,374,852.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">$ 596,172,106.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">$ 599,061,383.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2010-12-31</td>
<td class="derecha">$ 595,186,051.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">$ 578,219,346.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">$ 792,240,176.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">$ 848,020,707.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2007-12-31</td>
<td class="derecha">$ 41,128,483.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">$ 45,464,319.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">$ 80,006,719.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">$ 50,216,153.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">$ 52,824,557.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">$ 54,082,713.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2007-12-31</td>
<td class="derecha">$ 14,524,248.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">$ 16,686,819.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2009-12-31</td>
<td class="derecha">$ 21,122,908.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">$ 11,736,265.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">$ 13,474,155.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">$ 30,798,906.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2007-12-31</td>
<td class="derecha">$ 802,586,435.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">$ 918,927,218.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">$ 1,146,616,790.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">$ 875,399,694.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">$ 1,117,567,078.00</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">$ 1,400,461,048.00</td>
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
  $('#Lenguetasilgqwwxq a:first').tab('show')
});
// LENGUETA
$('#Lenguetasilgqwwxq a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisematrhgf === 'undefined') {
    varMorrisematrhgf = Morris.Line({
      element: 'Morrisematrhgf',
      data: [{ fecha: '2007-12-31', dato: 171558852.00 },{ fecha: '2008-12-31', dato: 260603974.00 },{ fecha: '2009-12-31', dato: 446425780.00 },{ fecha: '2010-12-31', dato: 218261225.00 },{ fecha: '2011-12-31', dato: 473049020.00 },{ fecha: '2012-12-31', dato: 523339253.00 }],
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
$('#Lenguetasilgqwwxq a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapgmvbgqdz;
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
  function initmapgmvbgqdz() {
    // Nuevo Mapa
    mapgmvbgqdz = new L.Map('LeafLetgmvbgqdz');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapgmvbgqdz.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapgmvbgqdz.addLayer(osm);
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
    }).addTo(mapgmvbgqdz);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapgmvbgqdz === 'undefined') {
    varinitmapgmvbgqdz = initmapgmvbgqdz();
  };
});
FINAL;
    } // constructor

} // Clase GobiernoIngresosPorCobroDeServicios

?>
