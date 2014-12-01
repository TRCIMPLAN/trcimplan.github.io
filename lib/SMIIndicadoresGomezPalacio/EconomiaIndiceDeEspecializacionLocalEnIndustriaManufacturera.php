<?php
/**
 * EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera
 */
class EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Índice de Especialización Local en Industria Manufacturera en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'economia-indice-de-especializacion-local-en-industria-manufacturera';
        $this->descripcion  = 'Producción bruta total de la industria manufacturera entre la producción bruta total.';
        $this->claves       = 'Gómez Palacio, Mercados';
        $this->categorias   = array('Mercados');
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
<p>Producción bruta total de la industria manufacturera entre la producción bruta total.</p>

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
            <td class="centrado">31/12/1998</td>
            <td class="derecha">75.60 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2003</td>
            <td class="derecha">59.73 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">60.23 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El índice de especialización en manufactura a nivel nacional es de:</p>

<ul>
<li>2008 = 44.34%</li>
<li>2003 = 43.26%</li>
<li>1998 = 48.52%</li>
</ul>

<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Índice de Especialización Local en Industria Manufacturera en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Índice de Especialización Local en Industria Manufacturera</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Índice de Especialización Local en Industria Manufacturera</h3>
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
            <td>2008-12-31</td>
            <td class="derecha">76.06 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td class="derecha">60.23 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">53.94 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td class="derecha">58.72 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td class="derecha">71.10 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td class="derecha">44.34 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
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
      data: [{ fecha: '1998-12-31', dato: 75.6000 },{ fecha: '2003-12-31', dato: 59.7300 },{ fecha: '2008-12-31', dato: 60.2300 }],
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
      data: [{ region: 'Torreón', dato: 76.0600 },{ region: 'Gómez Palacio', dato: 60.2300 },{ region: 'Lerdo', dato: 53.9400 },{ region: 'Matamoros', dato: 58.7200 },{ region: 'La Laguna', dato: 71.1000 },{ region: 'Nacional', dato: 44.3400 }],
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

} // Clase EconomiaIndiceDeEspecializacionLocalEnIndustriaManufacturera

?>
