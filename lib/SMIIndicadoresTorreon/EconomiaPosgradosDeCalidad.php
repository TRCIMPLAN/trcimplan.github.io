<?php
/**
 * EconomiaPosgradosDeCalidad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaPosgradosDeCalidad
 */
class EconomiaPosgradosDeCalidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Posgrados de Calidad en Torreón';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-posgrados-de-calidad';
        $this->descripcion = 'Programas aceptados por CONACYT como posgrados de calidad';
        $this->claves      = 'Torreón, Educación, Innovación';
        $this->categorias  = array('Educación', 'Innovación');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Programas aceptados por CONACYT como posgrados de calidad</p>

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
            <td class="centrado">30/04/2014</td>
            <td class="derecha">11</td>
            <td>CONACYT</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Posgrados.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://svrtmp.main.conacyt.mx/ConsultasPNPC/listar_padron.php">CONACYT</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Posgrados de Calidad</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Posgrados de Calidad</h3>
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
            <td>2014-04-30</td>
            <td class="derecha">11</td>
            <td>CONACYT</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td class="derecha">0</td>
            <td>CONACYT</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-04-30</td>
            <td class="derecha">51</td>
            <td>CONACYT</td>
            <td>Fuente: [CONACYT](http://www.conacyt.gob.mx)</td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-04-30</td>
            <td class="derecha">15</td>
            <td>CONACYT</td>
            <td></td>
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
      data: [{ region: 'Torreón', dato: 11 },{ region: 'Matamoros', dato: 0 },{ region: 'Coahuila', dato: 51 },{ region: 'Durango', dato: 15 }],
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

} // Clase EconomiaPosgradosDeCalidad

?>
