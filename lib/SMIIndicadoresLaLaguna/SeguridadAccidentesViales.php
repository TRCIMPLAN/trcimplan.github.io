<?php
/**
 * SeguridadAccidentesViales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadAccidentesViales
 */
class SeguridadAccidentesViales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Accidentes Viales en La Laguna';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-la-laguna';
        $this->archivo      = 'seguridad-accidentes-viales';
        $this->descripcion  = 'Cantidad de accidentes viales por año.';
        $this->claves       = 'La Laguna, Vialidad';
        $this->categorias   = array('Vialidad');
        $this->region_nivel = 401;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad de accidentes viales por año.</p>

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
            <td class="centrado">31/12/1997</td>
            <td class="derecha">4,404</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/1998</td>
            <td class="derecha">5,709</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/1999</td>
            <td class="derecha">6,208</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2000</td>
            <td class="derecha">8,169</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2001</td>
            <td class="derecha">8,933</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2002</td>
            <td class="derecha">8,986</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2003</td>
            <td class="derecha">8,507</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2005</td>
            <td class="derecha">9,366</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2006</td>
            <td class="derecha">10,324</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2007</td>
            <td class="derecha">9,612</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">8,831</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2009</td>
            <td class="derecha">6,995</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">5,577</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">4,568</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">4,107</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td class="centrado">31/12/2013</td>
            <td class="derecha">3,362</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Accidentes Viales en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Accidentes Viales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Accidentes Viales</h3>
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
            <td>2013-12-31</td>
            <td class="derecha">1,831</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="derecha">1,128</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="derecha">242</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">161</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">3,362</td>
            <td>INEGI</td>
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
      data: [{ fecha: '1997-12-31', dato: 4404 },{ fecha: '1998-12-31', dato: 5709 },{ fecha: '1999-12-31', dato: 6208 },{ fecha: '2000-12-31', dato: 8169 },{ fecha: '2001-12-31', dato: 8933 },{ fecha: '2002-12-31', dato: 8986 },{ fecha: '2003-12-31', dato: 8507 },{ fecha: '2005-12-31', dato: 9366 },{ fecha: '2006-12-31', dato: 10324 },{ fecha: '2007-12-31', dato: 9612 },{ fecha: '2008-12-31', dato: 8831 },{ fecha: '2009-12-31', dato: 6995 },{ fecha: '2010-12-31', dato: 5577 },{ fecha: '2011-12-31', dato: 4568 },{ fecha: '2012-12-31', dato: 4107 },{ fecha: '2013-12-31', dato: 3362 }],
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
      data: [{ region: 'Torreón', dato: 1831 },{ region: 'Gómez Palacio', dato: 1128 },{ region: 'Lerdo', dato: 242 },{ region: 'Matamoros', dato: 161 },{ region: 'La Laguna', dato: 3362 }],
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

} // Clase SeguridadAccidentesViales

?>
