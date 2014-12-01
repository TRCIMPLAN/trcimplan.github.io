<?php
/**
 * EconomiaIndiceDeEspecializacionLocalEnLaMineria.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaIndiceDeEspecializacionLocalEnLaMineria
 */
class EconomiaIndiceDeEspecializacionLocalEnLaMineria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Índice de Especialización Local en la Minería en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'economia-indice-de-especializacion-local-en-la-mineria';
        $this->descripcion  = 'Producción bruta total de la actividad económica de minería entre la producción bruta total.';
        $this->claves       = 'Lerdo, Mercados';
        $this->categorias   = array('Mercados');
        $this->region_nivel = 121;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Producción bruta total de la actividad económica de minería entre la producción bruta total.</p>

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
            <td class="derecha">2.80 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El índice de especialización en manufactura a nivel nacional es de:</p>

<ul>
<li>2008 = 11.81%</li>
</ul>

<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Índice de Especialización Local en la Minería</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Índice de Especialización Local en la Minería</h3>
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
            <td class="derecha">1.40 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td class="derecha">0.20 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">2.80 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td class="derecha">0.40 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td class="derecha">4.80 %</td>
            <td>INEGI</td>
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
      data: [{ region: 'Torreón', dato: 1.4000 },{ region: 'Gómez Palacio', dato: 0.2000 },{ region: 'Lerdo', dato: 2.8000 },{ region: 'Matamoros', dato: 0.4000 },{ region: 'La Laguna', dato: 4.8000 }],
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

} // Clase EconomiaIndiceDeEspecializacionLocalEnLaMineria

?>
