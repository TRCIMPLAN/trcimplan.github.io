<?php
/**
 * SustentabilidadConsumoDeAguaFacturado.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadConsumoDeAguaFacturado
 */
class SustentabilidadConsumoDeAguaFacturado extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Consumo de Agua Facturado en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sustentabilidad-consumo-de-agua-facturado';
        $this->descripcion = 'Consumo anual de agua por persona expresado en metros cúbicos.';
        $this->claves      = 'Torreón, Recursos Naturales';
        $this->categorias  = array('Recursos Naturales');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetashidlkgeq">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Consumo anual de agua por persona expresado en metros cúbicos.
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
<td class="centrado">31/12/2010</td>
<td class="derecha">47.7700</td>
<td>SIMAS</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">46.7500</td>
<td>SIMAS</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">44.5700</td>
<td>SIMAS</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">41.9900</td>
<td>SIMAS</td>
<td>Consumo anual</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Metros cúbicos per cápita
<h4>Observaciones</h4>
Total facturado dividido entre la población.
    </div>
    <div class="tab-pane active" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisaxtwnsjs" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetashidlkgeq a:first').tab('show')
});
// LENGUETA
$('#Lenguetashidlkgeq a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisaxtwnsjs === 'undefined') {
    varMorrisaxtwnsjs = Morris.Line({
      element: 'Morrisaxtwnsjs',
      data: [{ fecha: '2010-12-31', dato: 47.7700 },{ fecha: '2011-12-31', dato: 46.7500 },{ fecha: '2012-12-31', dato: 44.5700 },{ fecha: '2013-12-31', dato: 41.9900 }],
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

} // Clase SustentabilidadConsumoDeAguaFacturado

?>
