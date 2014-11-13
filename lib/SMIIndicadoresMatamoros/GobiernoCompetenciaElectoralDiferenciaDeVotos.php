<?php
/**
 * GobiernoCompetenciaElectoralDiferenciaDeVotos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase GobiernoCompetenciaElectoralDiferenciaDeVotos
 */
class GobiernoCompetenciaElectoralDiferenciaDeVotos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Competencia Electoral Diferencia de Votos en Matamoros';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'gobierno-competencia-electoral-diferencia-de-votos';
        $this->descripcion = 'Diferencia de votos entre primer y segundo lugar en la elección federal.';
        $this->claves      = 'Matamoros, Participación Ciudadana';
        $this->categorias  = array('Participación Ciudadana');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Diferencia de votos entre primer y segundo lugar en la elección federal.</p>

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
            <td class="centrado">01/07/2012</td>
            <td class="derecha">19,079</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Cantidad de votos</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Competencia Electoral Diferencia de Votos</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Competencia Electoral Diferencia de Votos</h3>
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
            <td>2012-07-01</td>
            <td class="derecha">4,367</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-07-01</td>
            <td class="derecha">5,784</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-07-01</td>
            <td class="derecha">2,910</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-07-01</td>
            <td class="derecha">19,079</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-07-01</td>
            <td class="derecha">32,140</td>
            <td>INE-IEPCC</td>
            <td>En esta cifra se incluye solo a los municipios de Torreón, Matamoros, Gómez Palacio y Lerdo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 4367 },{ region: 'Gómez Palacio', dato: 5784 },{ region: 'Lerdo', dato: 2910 },{ region: 'Matamoros', dato: 19079 },{ region: 'La Laguna', dato: 32140 }],
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

} // Clase GobiernoCompetenciaElectoralDiferenciaDeVotos

?>
