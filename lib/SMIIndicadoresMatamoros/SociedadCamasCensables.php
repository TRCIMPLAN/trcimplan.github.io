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
        $this->nombre       = 'Camas Censables en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'sociedad-camas-censables';
        $this->descripcion  = '';
        $this->claves       = 'Matamoros, Salud';
        $this->categorias   = array('Salud');
        $this->region_nivel = 131;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>


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
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>SINAIS considera únicamente al Hospital General de Torreón y el Hospital Integral de Matamoros, Hospital General de Lerdo y el Hospital General de Gómez Palacio.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Camas Censables en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Camas Censables</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Camas Censables</h3>
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
            <td class="derecha">51</td>
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
            <td>2013-12-31</td>
            <td class="derecha">38</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">10</td>
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
            <td>2013-12-31</td>
            <td class="derecha">605</td>
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
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
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
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 51 },{ region: 'Gómez Palacio', dato: 74 },{ region: 'Lerdo', dato: 38 },{ region: 'Matamoros', dato: 10 },{ region: 'La Laguna', dato: 173 },{ region: 'Coahuila', dato: 605 },{ region: 'Durango', dato: 863 },{ region: 'Nacional', dato: 39231 }],
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

} // Clase SociedadCamasCensables

?>
