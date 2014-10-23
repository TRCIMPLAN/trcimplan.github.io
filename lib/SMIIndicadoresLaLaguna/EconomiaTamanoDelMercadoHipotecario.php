<?php
/**
 * EconomiaTamanoDelMercadoHipotecario.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaTamanoDelMercadoHipotecario
 */
class EconomiaTamanoDelMercadoHipotecario extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tamaño del Mercado Hipotecario en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-tamano-del-mercado-hipotecario';
        $this->descripcion = 'Créditos dispuestos marginalmente durante el año indicado.';
        $this->claves      = 'La Laguna, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetashrmbukkh">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Créditos dispuestos marginalmente durante el año indicado.
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
<td class="derecha">1,548</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">2,755</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">3,124</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">2,915</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">401</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad de Créditos
<h4>Observaciones</h4>
El mercado hipotecario de La Laguna representa el 0.54% del mercado hipotecario nacional.

Datos obtenidos de [CNBV](http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisyrdfhcer" class="grafica"></div>
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
<td>2010-12-31</td>
<td class="derecha">1,269</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">1,755</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">1,565</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">1,549</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-03-31</td>
<td class="derecha">284</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">188</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">669</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">1,030</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">948</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="derecha">85</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">76</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">179</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">340</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">379</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">27</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">15</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">152</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">189</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">39</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">5</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetashrmbukkh a:first').tab('show')
});
// LENGUETA
$('#Lenguetashrmbukkh a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisyrdfhcer === 'undefined') {
    varMorrisyrdfhcer = Morris.Line({
      element: 'Morrisyrdfhcer',
      data: [{ fecha: '2010-12-31', dato: 1548 },{ fecha: '2011-12-31', dato: 2755 },{ fecha: '2012-12-31', dato: 3124 },{ fecha: '2013-12-31', dato: 2915 },{ fecha: '2014-03-31', dato: 401 }],
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

} // Clase EconomiaTamanoDelMercadoHipotecario

?>
