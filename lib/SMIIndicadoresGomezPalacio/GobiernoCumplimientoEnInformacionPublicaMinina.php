<?php
/**
 * GobiernoCumplimientoEnInformacionPublicaMinina.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase GobiernoCumplimientoEnInformacionPublicaMinina
 */
class GobiernoCumplimientoEnInformacionPublicaMinina extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cumplimiento en información pública mínina en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'gobierno-cumplimiento-en-informacion-publica-minina';
        $this->descripcion = 'Cumplimiento sobre total de obligaciones';
        $this->claves      = 'Gómez Palacio, Transparencia';
        $this->categorias  = array('Transparencia');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cumplimiento sobre total de obligaciones</p>

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
            <td class="centrado">31/12/2013</td>
            <td class="derecha">79.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/04/2014</td>
            <td class="derecha">89.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/08/2014</td>
            <td class="derecha">86.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morrisfgyneimp" class="grafica"></div>
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
            <td>2014-03-03</td>
            <td class="derecha">100.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2014-06-30</td>
            <td class="derecha">98.72 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="derecha">79.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-04-30</td>
            <td class="derecha">61.00 %</td>
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
            <td>2014-03-03</td>
            <td class="derecha">63.00 %</td>
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
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#smi-indicador a:first').tab('show')
});
// LENGUETA
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisfgyneimp === 'undefined') {
    varMorrisfgyneimp = Morris.Line({
      element: 'Morrisfgyneimp',
      data: [{ fecha: '2013-12-31', dato: 79.0000 },{ fecha: '2014-04-30', dato: 89.0000 },{ fecha: '2014-08-31', dato: 86.0000 }],
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

} // Clase GobiernoCumplimientoEnInformacionPublicaMinina

?>
