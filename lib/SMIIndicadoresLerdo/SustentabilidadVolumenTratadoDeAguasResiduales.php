<?php
/**
 * SustentabilidadVolumenTratadoDeAguasResiduales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadVolumenTratadoDeAguasResiduales
 */
class SustentabilidadVolumenTratadoDeAguasResiduales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Volumen Tratado de Aguas Residuales en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'sustentabilidad-volumen-tratado-de-aguas-residuales';
        $this->descripcion  = '';
        $this->claves       = 'Lerdo, Recursos Naturales';
        $this->categorias   = array('Recursos Naturales');
        $this->region_nivel = 121;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
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
            <td class="centrado">31/12/2010</td>
            <td class="derecha">0.0000</td>
            <td>IMCO-CONAGUA</td>
            <td>VALOR IGUAL A CERO</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Litros por segundo por cada mil habitantes.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Volumen Tratado de Aguas Residuales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Volumen Tratado de Aguas Residuales</h3>
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
            <td class="derecha">2.4400</td>
            <td>IMCO-CONAGUA</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td class="derecha">1.8300</td>
            <td>IMCO-CONAGUA</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">0.0000</td>
            <td>IMCO-CONAGUA</td>
            <td>VALOR IGUAL A CERO</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">0.0000</td>
            <td>IMCO-CONAGUA</td>
            <td>VALOR IGUAL A CERO</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">1.7800</td>
            <td>IMCO-CONAGUA</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td class="derecha">1.3900</td>
            <td>IMCO-CONAGUA</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td class="derecha">1.6000</td>
            <td>IMCO-CONAGUA</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 2.4400 },{ region: 'Gómez Palacio', dato: 1.8300 },{ region: 'Lerdo', dato: 0.0000 },{ region: 'Matamoros', dato: 0.0000 },{ region: 'La Laguna', dato: 1.7800 },{ region: 'Coahuila', dato: 1.3900 },{ region: 'Durango', dato: 1.6000 }],
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

} // Clase SustentabilidadVolumenTratadoDeAguasResiduales

?>
