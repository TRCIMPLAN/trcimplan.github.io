<?php
/**
 * GobiernoIngresosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase GobiernoIngresosTotales
 */
class GobiernoIngresosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Ingresos Totales en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'gobierno-ingresos-totales';
        $this->descripcion  = 'Ingresos totales por municipio.';
        $this->claves       = 'Matamoros, Finanzas Públicas';
        $this->categorias   = array('Finanzas Públicas');
        $this->region_nivel = 131;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
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
            <td>31/12/2007</td>
            <td>$ 118,848,281.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>$ 179,363,074.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>$ 172,111,514.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>$ 149,987,909.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 154,367,205.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 176,265,107.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 194,016,355.00</td>
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
      <h3>Gráfica de Ingresos Totales en Matamoros</h3>
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
            <td>$ 1,927,501,368.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>$ 1,065,239,676.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>$ 475,221,421.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>$ 194,016,355.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>$ 3,661,978,820.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Ingresos Totales</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>19/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/independencia-finanzas-publicas.html">Independencia de las Finanzas Públicas</a></td>
            <td>Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-capacidad-financiera.html">Capacidad Financiera en Matamoros</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-ingresos-totales-per-capita.html">Ingresos Totales Per Cápita en Matamoros</a></td>
            <td>Ingresos totales del municipio entre el total de la población.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-ingresos-por-cobro-de-servicios.html">Ingresos por Cobro de Servicios en Matamoros</a></td>
            <td>Ingresos recaudados por el municipio por cobro de servicios</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-inversion-per-capita.html">Inversión Per cápita en Matamoros</a></td>
            <td>Gasto en obras públicas y acciones sociales entre población total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-produccion-bruta-total-per-capita.html">Producción Bruta Total Per Cápita en Matamoros</a></td>
            <td>Producción bruta total (de los sectores industria, comercio y servicios) entre población total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-relacion-de-ingresos-propios-y-totales.html">Relación de Ingresos Propios y Totales en Matamoros</a></td>
            <td>Porcentaje de Ingresos propios el municipio con respecto a sus ingresos totales.</td>
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
      data: [{ fecha: '2007-12-31', dato: 118848281.00 },{ fecha: '2008-12-31', dato: 179363074.00 },{ fecha: '2009-12-31', dato: 172111514.00 },{ fecha: '2010-12-31', dato: 149987909.00 },{ fecha: '2011-12-31', dato: 154367205.00 },{ fecha: '2012-12-31', dato: 176265107.00 },{ fecha: '2013-12-31', dato: 194016355.00 }],
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
