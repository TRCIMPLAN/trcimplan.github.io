<?php
/**
 * GobiernoCumplimientoEnInformacionPublicaMinina.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase GobiernoCumplimientoEnInformacionPublicaMinina
 */
class GobiernoCumplimientoEnInformacionPublicaMinina extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Cumplimiento en Información Pública Mínina en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'gobierno-cumplimiento-en-informacion-publica-minina';
        $this->descripcion  = 'Cumplimiento sobre total de obligaciones.';
        $this->claves       = 'Matamoros, Transparencia';
        $this->categorias   = array('Transparencia');
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
<p>Cumplimiento sobre total de obligaciones.</p>

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
            <td class="centrado">03/03/2014</td>
            <td class="derecha">63.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">64.10 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Cumplimiento en Información Pública Mínina en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Cumplimiento en Información Pública Mínina</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Cumplimiento en Información Pública Mínina</h3>
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
            <td>2014-06-30</td>
            <td class="derecha">98.72 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-08-31</td>
            <td class="derecha">86.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-08-31</td>
            <td class="derecha">100.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-06-30</td>
            <td class="derecha">64.10 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">80.00 %</td>
            <td>ICAI-IDAIP</td>
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
      data: [{ fecha: '2014-03-03', dato: 63.0000 },{ fecha: '2014-06-30', dato: 64.1000 }],
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
      data: [{ region: 'Torreón', dato: 98.7200 },{ region: 'Gómez Palacio', dato: 86.0000 },{ region: 'Lerdo', dato: 100.0000 },{ region: 'Matamoros', dato: 64.1000 },{ region: 'La Laguna', dato: 80.0000 }],
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

} // Clase GobiernoCumplimientoEnInformacionPublicaMinina

?>
