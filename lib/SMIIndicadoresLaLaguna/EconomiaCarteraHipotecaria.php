<?php
/**
 * EconomiaCarteraHipotecaria.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cartera Hipotecaria en La Laguna';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-cartera-hipotecaria';
        $this->descripcion = 'Monto total de créditos otorgados hasta la fecha indicada.';
        $this->claves      = 'La Laguna, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Monto total de créditos otorgados hasta la fecha indicada.</p>

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
            <td class="derecha">$ 4,205,870,657.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">$ 4,528,969,820.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">$ 4,896,553,645.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2013</td>
            <td class="derecha">$ 5,442,162,894.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/03/2014</td>
            <td class="derecha">$ 5,671,976,037.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Cartera Hipotecaria en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Cartera Hipotecaria</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Cartera Hipotecaria</h3>
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
            <td class="derecha">$ 4,664,619,926.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td class="derecha">$ 614,765,352.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td class="derecha">$ 334,888,287.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td class="derecha">$ 57,702,472.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td class="derecha">$ 5,671,976,037.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2010-12-31', dato: 4205870657.00 },{ fecha: '2011-12-31', dato: 4528969820.00 },{ fecha: '2012-12-31', dato: 4896553645.00 },{ fecha: '2013-12-31', dato: 5442162894.00 },{ fecha: '2014-03-31', dato: 5671976037.00 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 4664619926.00 },{ region: 'Gómez Palacio', dato: 614765352.00 },{ region: 'Lerdo', dato: 334888287.00 },{ region: 'Matamoros', dato: 57702472.00 },{ region: 'La Laguna', dato: 5671976037.00 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaCarteraHipotecaria

?>
