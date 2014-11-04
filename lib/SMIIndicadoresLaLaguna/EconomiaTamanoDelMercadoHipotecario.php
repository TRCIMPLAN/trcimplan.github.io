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
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Créditos dispuestos marginalmente durante el año indicado.</p>

      <h3>Información recopilada</h3>
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
      <p><b>Unidad:</b> Cantidad de Créditos.</p>
      <h3>Observaciones</h3>
<p>El mercado hipotecario de La Laguna representa el 0.54% del mercado hipotecario nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morriszdlnopln" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="smi-indicador-otras_regiones">
<h3>En otras regiones</h3>
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
  $('#smi-indicador a:first').tab('show')
});
// LENGUETA
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorriszdlnopln === 'undefined') {
    varMorriszdlnopln = Morris.Line({
      element: 'Morriszdlnopln',
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
