<?php
/**
 * SeguridadAccidentesViales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SeguridadAccidentesViales
 */
class SeguridadAccidentesViales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Accidentes Viales en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'seguridad-accidentes-viales';
        $this->descripcion = 'Cantidad de accidentes viales por año.';
        $this->claves      = 'Lerdo, Vialidad';
        $this->categorias  = array('Vialidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasvqsrpjjf">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Cantidad de accidentes viales por año.
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
<td class="centrado">31/12/1997</td>
<td class="derecha">423</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/1998</td>
<td class="derecha">486</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/1999</td>
<td class="derecha">497</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2000</td>
<td class="derecha">581</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2001</td>
<td class="derecha">643</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2002</td>
<td class="derecha">645</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">670</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2004</td>
<td class="derecha">666</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2005</td>
<td class="derecha">1,343</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2006</td>
<td class="derecha">1,104</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2007</td>
<td class="derecha">884</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">602</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">566</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">519</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">433</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">362</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">242</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisaejcrphi" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetptkeznru" class="mapa"></div>
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
<td>1997-12-31</td>
<td class="derecha">3,203</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>1998-12-31</td>
<td class="derecha">3,529</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>1999-12-31</td>
<td class="derecha">3,250</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2000-12-31</td>
<td class="derecha">4,622</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2001-12-31</td>
<td class="derecha">5,259</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2002-12-31</td>
<td class="derecha">5,417</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">5,472</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2004-12-31</td>
<td class="derecha">5,256</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2005-12-31</td>
<td class="derecha">5,287</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2006-12-31</td>
<td class="derecha">6,562</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2007-12-31</td>
<td class="derecha">5,993</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">5,634</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">4,346</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2010-12-31</td>
<td class="derecha">3,026</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">2,218</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">1,958</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">1,831</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1997-12-31</td>
<td class="derecha">691</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1998-12-31</td>
<td class="derecha">1,600</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1999-12-31</td>
<td class="derecha">2,422</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2000-12-31</td>
<td class="derecha">2,797</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2001-12-31</td>
<td class="derecha">2,876</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2002-12-31</td>
<td class="derecha">2,783</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2003-12-31</td>
<td class="derecha">2,225</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2004-12-31</td>
<td class="derecha">2,396</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2005-12-31</td>
<td class="derecha">2,524</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2006-12-31</td>
<td class="derecha">2,323</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2007-12-31</td>
<td class="derecha">2,211</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">2,049</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2009-12-31</td>
<td class="derecha">1,714</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">1,593</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">1,596</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">1,498</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">1,128</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>1997-12-31</td>
<td class="derecha">87</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>1998-12-31</td>
<td class="derecha">94</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>1999-12-31</td>
<td class="derecha">39</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2000-12-31</td>
<td class="derecha">169</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2001-12-31</td>
<td class="derecha">155</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2002-12-31</td>
<td class="derecha">141</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">140</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2004-12-31</td>
<td class="derecha">281</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2005-12-31</td>
<td class="derecha">212</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2006-12-31</td>
<td class="derecha">335</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2007-12-31</td>
<td class="derecha">524</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">546</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2009-12-31</td>
<td class="derecha">369</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">439</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">321</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">289</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">161</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1997-12-31</td>
<td class="derecha">4,404</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1998-12-31</td>
<td class="derecha">5,709</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1999-12-31</td>
<td class="derecha">6,208</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2000-12-31</td>
<td class="derecha">8,169</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2001-12-31</td>
<td class="derecha">8,933</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2002-12-31</td>
<td class="derecha">8,986</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">8,507</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2005-12-31</td>
<td class="derecha">9,366</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2006-12-31</td>
<td class="derecha">10,324</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2007-12-31</td>
<td class="derecha">9,612</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">8,831</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">6,995</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">5,577</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">4,568</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">4,107</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">3,362</td>
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
  $('#Lenguetasvqsrpjjf a:first').tab('show')
});
// LENGUETA
$('#Lenguetasvqsrpjjf a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisaejcrphi === 'undefined') {
    varMorrisaejcrphi = Morris.Line({
      element: 'Morrisaejcrphi',
      data: [{ fecha: '1997-12-31', dato: 423 },{ fecha: '1998-12-31', dato: 486 },{ fecha: '1999-12-31', dato: 497 },{ fecha: '2000-12-31', dato: 581 },{ fecha: '2001-12-31', dato: 643 },{ fecha: '2002-12-31', dato: 645 },{ fecha: '2003-12-31', dato: 670 },{ fecha: '2004-12-31', dato: 666 },{ fecha: '2005-12-31', dato: 1343 },{ fecha: '2006-12-31', dato: 1104 },{ fecha: '2007-12-31', dato: 884 },{ fecha: '2008-12-31', dato: 602 },{ fecha: '2009-12-31', dato: 566 },{ fecha: '2010-12-31', dato: 519 },{ fecha: '2011-12-31', dato: 433 },{ fecha: '2012-12-31', dato: 362 },{ fecha: '2013-12-31', dato: 242 }],
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
$('#Lenguetasvqsrpjjf a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapptkeznru;
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
  function initmapptkeznru() {
    // Nuevo Mapa
    mapptkeznru = new L.Map('LeafLetptkeznru');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapptkeznru.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapptkeznru.addLayer(osm);
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
    }).addTo(mapptkeznru);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapptkeznru === 'undefined') {
    varinitmapptkeznru = initmapptkeznru();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadAccidentesViales

?>
