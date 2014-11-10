<?php
/**
 * EconomiaPersonalOcupadoEnLaIndustriaManufacturera.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaPersonalOcupadoEnLaIndustriaManufacturera
 */
class EconomiaPersonalOcupadoEnLaIndustriaManufacturera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Personal Ocupado en la Industria Manufacturera en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-personal-ocupado-en-la-industria-manufacturera';
        $this->descripcion = 'Personal ocupado en la Industria manufacturera entre el personal ocupado total.';
        $this->claves      = 'La Laguna, Empleo, Mercados';
        $this->categorias  = array('Empleo', 'Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</p>

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
            <td class="derecha">38.10 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2003</td>
            <td class="derecha">38.10 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">28.59 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
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
            <td>1998-12-31</td>
            <td class="derecha">33.16 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2003-12-31</td>
            <td class="derecha">33.95 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2008-12-31</td>
            <td class="derecha">25.70 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>1998-12-31</td>
            <td class="derecha">42.53 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2003-12-31</td>
            <td class="derecha">42.25 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td class="derecha">32.10 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>1998-12-31</td>
            <td class="derecha">59.01 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2003-12-31</td>
            <td class="derecha">64.24 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">37.64 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>1998-12-31</td>
            <td class="derecha">37.81 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2003-12-31</td>
            <td class="derecha">28.78 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td class="derecha">41.53 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>1998-12-31</td>
            <td class="derecha">30.20 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2003-12-31</td>
            <td class="derecha">25.85 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td class="derecha">23.17 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
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
      data: [{ fecha: '1998-12-31', dato: 38.1000 },{ fecha: '2003-12-31', dato: 38.1000 },{ fecha: '2008-12-31', dato: 28.5940 }],
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

} // Clase EconomiaPersonalOcupadoEnLaIndustriaManufacturera

?>
