<?php
/**
 * GobiernoIngresosPorCobroDeServicios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase GobiernoIngresosPorCobroDeServicios
 */
class GobiernoIngresosPorCobroDeServicios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Ingresos por Cobro de Servicios en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'gobierno-ingresos-por-cobro-de-servicios';
        $this->descripcion  = 'Ingresos recaudados por el municipio por cobro de servicios';
        $this->claves       = 'Gómez Palacio, Finanzas Públicas';
        $this->categorias   = array('Finanzas Públicas');
        $this->region_nivel = 111;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Ingresos recaudados por el municipio por cobro de servicios</p>

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
            <td class="centrado">31/12/2007</td>
            <td class="derecha">$ 171,558,852.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">$ 260,603,974.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2009</td>
            <td class="derecha">$ 446,425,780.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">$ 218,261,225.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">$ 473,049,020.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">$ 523,339,253.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Ingresos por Cobro de Servicios en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Ingresos por Cobro de Servicios</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Ingresos por Cobro de Servicios</h3>
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
            <td>2013-12-31</td>
            <td class="derecha">$ 848,020,707.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 523,339,253.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 54,082,713.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 30,798,906.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 1,400,461,048.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2007-12-31', dato: 171558852.00 },{ fecha: '2008-12-31', dato: 260603974.00 },{ fecha: '2009-12-31', dato: 446425780.00 },{ fecha: '2010-12-31', dato: 218261225.00 },{ fecha: '2011-12-31', dato: 473049020.00 },{ fecha: '2012-12-31', dato: 523339253.00 }],
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
      data: [{ region: 'Torreón', dato: 848020707.00 },{ region: 'Gómez Palacio', dato: 523339253.00 },{ region: 'Lerdo', dato: 54082713.00 },{ region: 'Matamoros', dato: 30798906.00 },{ region: 'La Laguna', dato: 1400461048.00 }],
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

} // Clase GobiernoIngresosPorCobroDeServicios

?>
