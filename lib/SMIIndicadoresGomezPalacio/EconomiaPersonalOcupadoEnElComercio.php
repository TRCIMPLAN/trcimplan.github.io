<?php
/**
 * EconomiaPersonalOcupadoEnElComercio.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaPersonalOcupadoEnElComercio
 */
class EconomiaPersonalOcupadoEnElComercio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Personal Ocupado en el Comercio en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'economia-personal-ocupado-en-el-comercio';
        $this->descripcion = 'Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.';
        $this->claves      = 'Gómez Palacio, Empleo, Mercados';
        $this->categorias  = array('Empleo', 'Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</p>

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
            <td class="derecha">16.36 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2003</td>
            <td class="derecha">21.21 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">27.61 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morrislzsddlly" class="grafica"></div>
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
            <td>1998-12-31</td>
            <td class="derecha">26.14 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2003-12-31</td>
            <td class="derecha">27.48 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2008-12-31</td>
            <td class="derecha">27.65 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>1998-12-31</td>
            <td class="derecha">15.51 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2003-12-31</td>
            <td class="derecha">16.31 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">31.07 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>1998-12-31</td>
            <td class="derecha">38.42 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2003-12-31</td>
            <td class="derecha">45.97 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td class="derecha">34.32 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>1998-12-31</td>
            <td class="derecha">22.50 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2003-12-31</td>
            <td class="derecha">25.40 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td class="derecha">28.03 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>1998-12-31</td>
            <td class="derecha">27.43 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2003-12-31</td>
            <td class="derecha">30.77 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td class="derecha">30.50 %</td>
            <td>INEGI</td>
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
  if (typeof varMorrislzsddlly === 'undefined') {
    varMorrislzsddlly = Morris.Line({
      element: 'Morrislzsddlly',
      data: [{ fecha: '1998-12-31', dato: 16.3600 },{ fecha: '2003-12-31', dato: 21.2100 },{ fecha: '2008-12-31', dato: 27.6120 }],
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

} // Clase EconomiaPersonalOcupadoEnElComercio

?>
