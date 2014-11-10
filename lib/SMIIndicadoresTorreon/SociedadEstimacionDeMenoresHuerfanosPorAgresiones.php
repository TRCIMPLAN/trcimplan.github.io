<?php
/**
 * SociedadEstimacionDeMenoresHuerfanosPorAgresiones.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones
 */
class SociedadEstimacionDeMenoresHuerfanosPorAgresiones extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Estimación de Menores Huérfanos por Agresiones en Torreón';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-estimacion-de-menores-huerfanos-por-agresiones';
        $this->descripcion = 'Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).';
        $this->claves      = 'Torreón, Grupos Vulnerables, Delincuencia';
        $this->categorias  = array('Grupos Vulnerables', 'Delincuencia');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).</p>

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
            <td class="centrado">31/12/2008</td>
            <td class="derecha">544</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2009</td>
            <td class="derecha">597</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">753</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">858</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">1,253</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Elaboración propia en base a las defunciones registradas en <a href="http://www.sinais.salud.gob.mx">SINAIS</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="graficaDatos" class="grafica"></div>
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
      data: [{ fecha: '2008-12-31', dato: 544 },{ fecha: '2009-12-31', dato: 597 },{ fecha: '2010-12-31', dato: 753 },{ fecha: '2011-12-31', dato: 858 },{ fecha: '2012-12-31', dato: 1253 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones

?>
