<?php
/**
 * SociedadPromedioDeDescendenciaPorVaron.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadPromedioDeDescendenciaPorVaron
 */
class SociedadPromedioDeDescendenciaPorVaron extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Promedio de Descendencia por Varón en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-promedio-de-descendencia-por-varon';
        $this->descripcion = 'Calcula el promedio estimado de hijos por cada varón.';
        $this->claves      = 'Torreón, Población';
        $this->categorias  = array('Población');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasrolkzkuk">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Calcula el promedio estimado de hijos por cada varón.
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
<td class="centrado">31/12/2008</td>
<td class="derecha">1.8100</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">1.7700</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">1.7200</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">1.6900</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">1.6600</td>
<td>IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
Estimación propia en base al dato de Ocupación por Vivienda
    </div>
    <div class="tab-pane active" id="grafica">
      <h4>Gráfica</h4>
<div id="Morriskegxtohu" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasrolkzkuk a:first').tab('show')
});
// LENGUETA
$('#Lenguetasrolkzkuk a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorriskegxtohu === 'undefined') {
    varMorriskegxtohu = Morris.Line({
      element: 'Morriskegxtohu',
      data: [{ fecha: '2008-12-31', dato: 1.8100 },{ fecha: '2009-12-31', dato: 1.7700 },{ fecha: '2010-12-31', dato: 1.7200 },{ fecha: '2011-12-31', dato: 1.6900 },{ fecha: '2012-12-31', dato: 1.6600 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
FINAL;
    } // constructor

} // Clase SociedadPromedioDeDescendenciaPorVaron

?>
