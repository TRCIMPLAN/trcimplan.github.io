<?php
/**
 * SociedadFecundidad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadFecundidad
 */
class SociedadFecundidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Fecundidad en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-fecundidad';
        $this->descripcion = 'Tasa de fecundidad.';
        $this->claves      = 'Torreón, Género, Población';
        $this->categorias  = array('Género', 'Población');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasvzxsnvrg">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Tasa de fecundidad.
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
<td class="derecha">2.2000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">2.1700</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">2.1400</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">2.1400</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">2.1300</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane active" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrispvlovxhp" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasvzxsnvrg a:first').tab('show')
});
// LENGUETA
$('#Lenguetasvzxsnvrg a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrispvlovxhp === 'undefined') {
    varMorrispvlovxhp = Morris.Line({
      element: 'Morrispvlovxhp',
      data: [{ fecha: '2008-12-31', dato: 2.2000 },{ fecha: '2009-12-31', dato: 2.1700 },{ fecha: '2010-12-31', dato: 2.1400 },{ fecha: '2011-12-31', dato: 2.1400 },{ fecha: '2012-12-31', dato: 2.1300 }],
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

} // Clase SociedadFecundidad

?>
