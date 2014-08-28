<?php
/**
 * SociedadIndiceDeDesarrolloHumanoIdh.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadIndiceDeDesarrolloHumanoIdh
 */
class SociedadIndiceDeDesarrolloHumanoIdh extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Desarrollo Humano (IDH) en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-indice-de-desarrollo-humano--idh-';
        $this->descripcion = 'El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).';
        $this->claves      = 'Torreón, Bienestar';
        $this->categorias  = array('Bienestar');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasyywrcyja">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).

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
<td class="centrado">31/03/2005</td>
<td class="derecha">0.8470</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> De 0 a 1.



    </div>
    <div class="tab-pane" id="grafica">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetiffgpctm" class="mapa"></div>
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
<td>2005-03-31</td>
<td class="derecha">0.8160</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2005-03-31</td>
<td class="derecha">0.7970</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2005-03-31</td>
<td class="derecha">0.7820</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
</tbody>
</table>


    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasyywrcyja a:first').tab('show')
});
// LENGUETA
$('#Lenguetasyywrcyja a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapiffgpctm;
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
  function initmapiffgpctm() {
    // Nuevo Mapa
    mapiffgpctm = new L.Map('LeafLetiffgpctm');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapiffgpctm.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapiffgpctm.addLayer(osm);
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
    }).addTo(mapiffgpctm);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapiffgpctm === 'undefined') {
    varinitmapiffgpctm = initmapiffgpctm();
  };
});
FINAL;
    } // constructor

} // Clase SociedadIndiceDeDesarrolloHumanoIdh

?>
