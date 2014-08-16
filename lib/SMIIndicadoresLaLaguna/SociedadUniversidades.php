<?php
/**
 * SociedadUniversidades.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadUniversidades
 */
class SociedadUniversidades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Universidades en La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'sociedad-universidades';
        $this->descripcion = 'Planteles de Instituciones de Educación Superior.';
        $this->claves      = 'La Laguna, Educación';
        $this->categorias  = array('Educación');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaslnfvfhto">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Planteles de Instituciones de Educación Superior.

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
<td class="centrado">31/03/2014</td>
<td class="derecha">31</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.

<h4>Observaciones</h4>
Las escuelas y facultades de la UAdeC son contabilizadas en una unidad. Únicamente se contabilizan los planteles ubicados en Matamoros, Torreón, Gómez Palacio y Lerdo.

* Escuela Normal de la Laguna
* Escuela Normal de Torreón
* Instituto 18 de Marzo
* Instituto Superior Francisco Gonzalez de la Vega
* Instituto Tecnológico de Torreón (ITA 10)
* Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Laguna
* Instituto Tecnológico de la Laguna
* Instituto Tecnológico Superior de Lerdo
* Universidad Autónoma Agraria Antonio Narro
* Universidad Autónoma de Coahuila
* Universidad Autónoma de la Laguna
* Universidad Autónoma del Noreste
* Universidad Iberoamericana
* Universidad Juárez del Estado de Durango
* Universidad La Salle
* Universidad Pedagógica Nacional
* Universidad del Valle de México
* Universidad Tec Milenio
* Universidad Interamericana para el Desarrollo
* Universidad Politécnica de Gómez Palacio
* Universidad del Desarrollo Profesional
* National Institute of Information Technologies
* Universidad Tecnológica de Torreón
* Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Matamoros
* Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Torreón
* Universidad Autónoma de Durango Campus Gómez Palacio
* Universidad Autónoma de Durango Campus Torreón
* Instituto Ma Esther Zuno de Echeverría
* Instituto de Estudios Superiores y Educación Normal Gral. Lázaro Cárdenas
* Instituto Tecnológico de Lerdo
* Universidad Pedagógica de Durango-UGP

    </div>
    <div class="tab-pane" id="grafica">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetenaaokaq" class="mapa"></div>
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
<td>2014-03-31</td>
<td class="derecha">18</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="derecha">9</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">3</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">1</td>
<td>CIESLAG-FOMEC</td>
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
  $('#Lenguetaslnfvfhto a:first').tab('show')
});
// LENGUETA
$('#Lenguetaslnfvfhto a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapenaaokaq;
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
  function initmapenaaokaq() {
    // Nuevo Mapa
    mapenaaokaq = new L.Map('LeafLetenaaokaq');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapenaaokaq.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapenaaokaq.addLayer(osm);
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
    }).addTo(mapenaaokaq);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapenaaokaq === 'undefined') {
    varinitmapenaaokaq = initmapenaaokaq();
  };
});
FINAL;
    } // constructor

} // Clase SociedadUniversidades

?>
