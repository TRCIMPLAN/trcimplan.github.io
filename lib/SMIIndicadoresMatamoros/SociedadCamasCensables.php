<?php
/**
 * SociedadCamasCensables.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadCamasCensables
 */
class SociedadCamasCensables extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Camas Censables en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-camas-censables';
        $this->descripcion = '';
        $this->claves      = 'Matamoros, Salud';
        $this->categorias  = array('Salud');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasvszstnvf">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>

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
<td class="centrado">31/12/2001</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2002</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2004</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2005</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2006</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2007</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
SINAIS considera únicamente al Hospital General de Torreón y el Hospital Integral de Matamoros, Hospital General de Lerdo y el Hospital General de Gómez Palacio.
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisbdxdkcmm" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetvtpegjlq" class="mapa"></div>
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
<td>2001-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2002-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2004-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2005-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2006-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2007-12-31</td>
<td class="derecha">48</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2010-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2001-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2002-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2004-12-31</td>
<td class="derecha">74</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2005-12-31</td>
<td class="derecha">74</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2006-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2007-12-31</td>
<td class="derecha">75</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">64</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2009-12-31</td>
<td class="derecha">64</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">74</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2001-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2002-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2003-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2004-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2005-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2006-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2007-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2001-12-31</td>
<td class="derecha">158</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2002-12-31</td>
<td class="derecha">158</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">158</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2004-12-31</td>
<td class="derecha">160</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2005-12-31</td>
<td class="derecha">160</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2006-12-31</td>
<td class="derecha">167</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2007-12-31</td>
<td class="derecha">167</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">159</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">159</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">171</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">171</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">171</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">173</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2001-12-31</td>
<td class="derecha">473</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2002-12-31</td>
<td class="derecha">473</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2003-12-31</td>
<td class="derecha">473</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2004-12-31</td>
<td class="derecha">483</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2005-12-31</td>
<td class="derecha">483</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2006-12-31</td>
<td class="derecha">482</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2007-12-31</td>
<td class="derecha">483</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2008-12-31</td>
<td class="derecha">511</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2009-12-31</td>
<td class="derecha">529</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2010-12-31</td>
<td class="derecha">652</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2011-12-31</td>
<td class="derecha">633</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-12-31</td>
<td class="derecha">608</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2013-12-31</td>
<td class="derecha">605</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2001-12-31</td>
<td class="derecha">484</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2002-12-31</td>
<td class="derecha">530</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2003-12-31</td>
<td class="derecha">530</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2004-12-31</td>
<td class="derecha">672</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2005-12-31</td>
<td class="derecha">554</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2006-12-31</td>
<td class="derecha">633</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2007-12-31</td>
<td class="derecha">652</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2008-12-31</td>
<td class="derecha">643</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2009-12-31</td>
<td class="derecha">678</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2010-12-31</td>
<td class="derecha">708</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2011-12-31</td>
<td class="derecha">712</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-12-31</td>
<td class="derecha">717</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2013-12-31</td>
<td class="derecha">863</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2001-12-31</td>
<td class="derecha">31,852</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2002-12-31</td>
<td class="derecha">32,217</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2003-12-31</td>
<td class="derecha">31,664</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2004-12-31</td>
<td class="derecha">32,863</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2005-12-31</td>
<td class="derecha">33,631</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2006-12-31</td>
<td class="derecha">34,005</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2007-12-31</td>
<td class="derecha">34,580</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2008-12-31</td>
<td class="derecha">35,071</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2009-12-31</td>
<td class="derecha">36,557</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2010-12-31</td>
<td class="derecha">37,851</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2011-12-31</td>
<td class="derecha">37,835</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-12-31</td>
<td class="derecha">37,890</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-12-31</td>
<td class="derecha">39,231</td>
<td>SINAIS (SSA)</td>
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
  $('#Lenguetasvszstnvf a:first').tab('show')
});
// LENGUETA
$('#Lenguetasvszstnvf a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisbdxdkcmm === 'undefined') {
    varMorrisbdxdkcmm = Morris.Line({
      element: 'Morrisbdxdkcmm',
      data: [{ fecha: '2001-12-31', dato: 10 },{ fecha: '2002-12-31', dato: 10 },{ fecha: '2003-12-31', dato: 10 },{ fecha: '2004-12-31', dato: 10 },{ fecha: '2005-12-31', dato: 10 },{ fecha: '2006-12-31', dato: 10 },{ fecha: '2007-12-31', dato: 10 },{ fecha: '2008-12-31', dato: 10 },{ fecha: '2009-12-31', dato: 10 },{ fecha: '2010-12-31', dato: 10 },{ fecha: '2011-12-31', dato: 10 },{ fecha: '2012-12-31', dato: 10 },{ fecha: '2013-12-31', dato: 10 }],
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
$('#Lenguetasvszstnvf a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapvtpegjlq;
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
  function initmapvtpegjlq() {
    // Nuevo Mapa
    mapvtpegjlq = new L.Map('LeafLetvtpegjlq');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapvtpegjlq.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapvtpegjlq.addLayer(osm);
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
    }).addTo(mapvtpegjlq);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapvtpegjlq === 'undefined') {
    varinitmapvtpegjlq = initmapvtpegjlq();
  };
});
FINAL;
    } // constructor

} // Clase SociedadCamasCensables

?>
