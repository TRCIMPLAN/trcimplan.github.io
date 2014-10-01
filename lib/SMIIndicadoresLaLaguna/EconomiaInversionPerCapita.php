<?php
/**
 * EconomiaInversionPerCapita.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaInversionPerCapita
 */
class EconomiaInversionPerCapita extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Inversión Per cápita en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-inversion-per-capita';
        $this->descripcion = 'Gasto en obras públicas y acciones sociales entre población total.';
        $this->claves      = 'La Laguna, Macroeconomía, Finanzas Públicas';
        $this->categorias  = array('Macroeconomía', 'Finanzas Públicas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasyglriggq">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Gasto en obras públicas y acciones sociales entre población total.
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
<td class="derecha">$ 536.81</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">$ 693.53</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">$ 484.79</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">$ 310.85</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">$ 473.54</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">$ 411.88</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Pesos
<h4>Observaciones</h4>
La inversión nacional per cápita es de:

- 2012 = $553.80 
- 2011 = $747.22 
- 2010 = $698.38 
- 2009 = $765.24 
- 2008 = $636.13 
- 2007 = $484.72 

Datos obtenidos de [INEGI. Estadística de finanzas públicas estatales y municipales](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&c=11289&proy=efipem_fmun)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrishrptgnwz" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetnilxrdbn" class="mapa"></div>
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
<td class="derecha">$ 604.26</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">$ 767.48</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">$ 497.90</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2010-12-31</td>
<td class="derecha">$ 236.57</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">$ 529.86</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">$ 348.09</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2007-12-31</td>
<td class="derecha">$ 621.87</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">$ 805.66</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2009-12-31</td>
<td class="derecha">$ 526.88</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">$ 474.34</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">$ 431.05</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">$ 640.48</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2007-12-31</td>
<td class="derecha">$ 212.34</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">$ 325.00</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">$ 218.82</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">$ 195.81</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">$ 426.48</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">$ 451.59</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2007-12-31</td>
<td class="derecha">$ 304.33</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">$ 396.24</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2009-12-31</td>
<td class="derecha">$ 627.35</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">$ 405.29</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">$ 327.41</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">$ 44.62</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
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
  $('#Lenguetasyglriggq a:first').tab('show')
});
// LENGUETA
$('#Lenguetasyglriggq a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrishrptgnwz === 'undefined') {
    varMorrishrptgnwz = Morris.Line({
      element: 'Morrishrptgnwz',
      data: [{ fecha: '2007-12-31', dato: 536.81 },{ fecha: '2008-12-31', dato: 693.53 },{ fecha: '2009-12-31', dato: 484.79 },{ fecha: '2010-12-31', dato: 310.85 },{ fecha: '2011-12-31', dato: 473.54 },{ fecha: '2012-12-31', dato: 411.88 }],
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
$('#Lenguetasyglriggq a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapnilxrdbn;
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
  function initmapnilxrdbn() {
    // Nuevo Mapa
    mapnilxrdbn = new L.Map('LeafLetnilxrdbn');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapnilxrdbn.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapnilxrdbn.addLayer(osm);
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
    }).addTo(mapnilxrdbn);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapnilxrdbn === 'undefined') {
    varinitmapnilxrdbn = initmapnilxrdbn();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaInversionPerCapita

?>
