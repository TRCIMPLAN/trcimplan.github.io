<?php
/**
 * EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
 */
class EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Unidades Económicas Dedicadas a la Industria Manufacturera en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-unidades-economicas-dedicadas-a-la-industria-manufacturera';
        $this->descripcion = 'Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.';
        $this->claves      = 'Lerdo, Empresas, Mercados';
        $this->categorias  = array('Empresas', 'Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetassxzbulya">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.
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
<td class="centrado">31/12/1998</td>
<td class="derecha">12.79 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">10.87 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">9.90 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/10/2013</td>
<td class="derecha">8.52 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morriszezkroaj" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetriyombqk" class="mapa"></div>
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
<td>1998-12-31</td>
<td class="derecha">10.96 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">9.33 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">9.24 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-10-31</td>
<td class="derecha">8.55 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1998-12-31</td>
<td class="derecha">13.68 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2003-12-31</td>
<td class="derecha">10.62 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">10.45 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-10-31</td>
<td class="derecha">8.84 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>1998-12-31</td>
<td class="derecha">10.98 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">9.50 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">11.61 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-10-31</td>
<td class="derecha">9.58 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1998-12-31</td>
<td class="derecha">11.78 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">9.78 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">9.75 %</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-10-31</td>
<td class="derecha">8.69 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>1998-12-31</td>
<td class="derecha">12.22 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2003-12-31</td>
<td class="derecha">10.94 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2008-12-31</td>
<td class="derecha">11.73 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-10-31</td>
<td class="derecha">10.71 %</td>
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
  $('#Lenguetassxzbulya a:first').tab('show')
});
// LENGUETA
$('#Lenguetassxzbulya a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorriszezkroaj === 'undefined') {
    varMorriszezkroaj = Morris.Line({
      element: 'Morriszezkroaj',
      data: [{ fecha: '1998-12-31', dato: 12.7900 },{ fecha: '2003-12-31', dato: 10.8700 },{ fecha: '2008-12-31', dato: 9.9000 },{ fecha: '2013-10-31', dato: 8.5200 }],
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
$('#Lenguetassxzbulya a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapriyombqk;
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
  function initmapriyombqk() {
    // Nuevo Mapa
    mapriyombqk = new L.Map('LeafLetriyombqk');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapriyombqk.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapriyombqk.addLayer(osm);
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
    }).addTo(mapriyombqk);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapriyombqk === 'undefined') {
    varinitmapriyombqk = initmapriyombqk();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera

?>
