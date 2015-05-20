<?php
/**
 * GobiernoRelacionIngresosPropiosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase GobiernoRelacionIngresosPropiosTotales
 */
class GobiernoRelacionIngresosPropiosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Relación de Ingresos Propios y Totales en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'gobiernorelacion-ingresos-propios-totales';
        $this->descripcion  = 'Porcentaje de Ingresos propios el municipio con respecto a sus ingresos totales.';
        $this->claves       = 'Gómez Palacio, Finanzas Públicas';
        $this->categorias   = array('Finanzas Públicas');
        $this->region_nivel = 111;
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
<p>Porcentaje de Ingresos propios el municipio con respecto a sus ingresos totales.</p>

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
            <td>27.08 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>27.73 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>40.12 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>28.00 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>47.17 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>46.42 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>42.09 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El promedio de la relación entre ingresos propios y totales de los municipios es:</p>

<ul>
<li>2012 = 20.91%</li>
<li>2011 = 18.92%</li>
<li>2010 = 19.84%</li>
<li>2009 = 19.23%</li>
<li>2008 = 20.49%</li>
<li>2007 = 22.78%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&amp;c=11289&amp;proy=efipem_fmun">INEGI. Estadística de finanzas públicas estatales y municipales</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Relación de Ingresos Propios y Totales en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Relación de Ingresos Propios y Totales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Relación de Ingresos Propios y Totales</h3>
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
            <td>43.99 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>42.09 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>37.77 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>13.10 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>40.93 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Relación de Ingresos Propios y Totales</h3>
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
            <td><a href="../indicadores-gomez-palacio/gobierno-capacidad-financiera.html">Capacidad Financiera en Gómez Palacio</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales-per-capita.html">Ingresos Totales Per Cápita en Gómez Palacio</a></td>
            <td>Ingresos totales del municipio entre el total de la población.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales.html">Ingresos Totales en Gómez Palacio</a></td>
            <td>Ingresos totales por municipio.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-ingresos-por-cobro-de-servicios.html">Ingresos por Cobro de Servicios en Gómez Palacio</a></td>
            <td>Ingresos recaudados por el municipio por cobro de servicios</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-inversion-per-capita.html">Inversión Per cápita en Gómez Palacio</a></td>
            <td>Gasto en obras públicas y acciones sociales entre población total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-produccion-bruta-total-per-capita.html">Producción Bruta Total Per Cápita en Gómez Palacio</a></td>
            <td>Producción bruta total (de los sectores industria, comercio y servicios) entre población total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-relacion-de-ingresos-propios-y-totales.html">Relación de Ingresos Propios y Totales en Gómez Palacio</a></td>
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
      data: [{ fecha: '2007-12-31', dato: 27.0800 },{ fecha: '2008-12-31', dato: 27.7300 },{ fecha: '2009-12-31', dato: 40.1200 },{ fecha: '2010-12-31', dato: 28.0000 },{ fecha: '2011-12-31', dato: 47.1700 },{ fecha: '2012-12-31', dato: 46.4200 },{ fecha: '2013-12-31', dato: 42.0900 }],
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
      data: [{ region: 'Torreón', dato: 43.9900 },{ region: 'Gómez Palacio', dato: 42.0900 },{ region: 'Lerdo', dato: 37.7700 },{ region: 'Matamoros', dato: 13.1000 },{ region: 'La Laguna', dato: 40.9300 }],
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

} // Clase GobiernoRelacionIngresosPropiosTotales

?>
