<?php
/**
 * GobiernoIngresosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase GobiernoIngresosTotales
 */
class GobiernoIngresosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Ingresos Totales en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'gobierno-ingresos-totales';
        $this->descripcion  = 'Ingresos totales por municipio.';
        $this->claves       = 'Gómez Palacio, Finanzas Públicas';
        $this->categorias   = array('Finanzas Públicas');
        $this->region_nivel = 111;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Ingresos totales por municipio.</p>

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
            <td class="centrado">31/12/2007</td>
            <td class="derecha">$ 633,417,899.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">$ 939,654,384.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2009</td>
            <td class="derecha">$ 1,112,511,574.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">$ 779,450,508.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">$ 1,002,767,622.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">$ 1,127,248,678.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2013</td>
            <td class="derecha">$ 1,065,239,676.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>El promedio nacional de los ingresos totales por municipio es de:</p>

<ul>
<li>2012 = 118495956.6</li>
<li>2011 = 127070246.1</li>
<li>2010 = 114373415.8</li>
<li>2009 = 111150577.4</li>
<li>2008 = 104258227.4</li>
<li>2007 = 83404076.21</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&amp;c=11289&amp;proy=efipem_fmun">INEGI. Estadística de finanzas públicas estatales y municipales</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Ingresos Totales en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Ingresos Totales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Ingresos Totales</h3>
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
            <td class="derecha">$ 1,927,501,368.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="derecha">$ 1,065,239,676.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="derecha">$ 475,221,421.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">$ 194,016,355.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">$ 3,661,978,820.00</td>
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
      data: [{ fecha: '2007-12-31', dato: 633417899.00 },{ fecha: '2008-12-31', dato: 939654384.00 },{ fecha: '2009-12-31', dato: 1112511574.00 },{ fecha: '2010-12-31', dato: 779450508.00 },{ fecha: '2011-12-31', dato: 1002767622.00 },{ fecha: '2012-12-31', dato: 1127248678.00 },{ fecha: '2013-12-31', dato: 1065239676.00 }],
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
      data: [{ region: 'Torreón', dato: 1927501368.00 },{ region: 'Gómez Palacio', dato: 1065239676.00 },{ region: 'Lerdo', dato: 475221421.00 },{ region: 'Matamoros', dato: 194016355.00 },{ region: 'La Laguna', dato: 3661978820.00 }],
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

} // Clase GobiernoIngresosTotales

?>
