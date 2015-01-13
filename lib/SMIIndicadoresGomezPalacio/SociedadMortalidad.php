<?php
/**
 * SociedadMortalidad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadMortalidad
 */
class SociedadMortalidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Mortalidad en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'sociedad-mortalidad';
        $this->descripcion  = 'Tasa de Mortalidad. Número de muertes por cada mil habitantes.';
        $this->claves       = 'Gómez Palacio, Salud';
        $this->categorias   = array('Salud');
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
<p>Tasa de Mortalidad. Número de muertes por cada mil habitantes.</p>

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
            <td>31/12/2000</td>
            <td>3.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2001</td>
            <td>3.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2002</td>
            <td>4.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2004</td>
            <td>4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>4.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2006</td>
            <td>4.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>4.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>4.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>5.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>5.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>5.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>5.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2013. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <a href="http://www.sinais.salud.gob.mx">http://www.sinais.salud.gob.mx</a> [Consulta: 23 Octubre 2014]. Con estimaciones de población de CONAPO.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Mortalidad en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Mortalidad</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Mortalidad</h3>
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
            <td>2012-12-31</td>
            <td>6.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>5.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>4.7100</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>5.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>5.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2012-12-31</td>
            <td>5.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2012-12-31</td>
            <td>5.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2012-12-31</td>
            <td>5.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Mortalidad</h3>
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
            <td>07/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-sector-salud-laguna.html">Economía del Sector Salud en La Laguna</a></td>
            <td>El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-camas-censables.html">Camas Censables en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html">Mortalidad Infantil en Gómez Palacio</a></td>
            <td>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-mortalidad-materna.html">Mortalidad Materna en Gómez Palacio</a></td>
            <td>Defunciones maternas por cada cien mil partos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-diabetes.html">Mortalidad por Diabetes en Gómez Palacio</a></td>
            <td>Tasa de mortalidad por diabetes mellitus. Defunciones por diabetes por cada diez mil defunciones.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en Gómez Palacio</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-medicos.html">Médicos en Gómez Palacio</a></td>
            <td>Médicos en contacto con pacientes por cada diez mil personas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-poblacion-derechohabiente.html">Población Derechohabiente en Gómez Palacio</a></td>
            <td>Población derechohabiente a los servicios de salud.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-viviendas-que-disponen-de-retrete.html">Viviendas que Disponen de Retrete en Gómez Palacio</a></td>
            <td>Porcentaje de viviendas habitadas que disponen de retrete.</td>
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
      data: [{ fecha: '2000-12-31', dato: 3.5000 },{ fecha: '2001-12-31', dato: 3.9000 },{ fecha: '2002-12-31', dato: 4.4000 },{ fecha: '2003-12-31', dato: 4.0000 },{ fecha: '2004-12-31', dato: 4.0000 },{ fecha: '2005-12-31', dato: 4.4000 },{ fecha: '2006-12-31', dato: 4.2000 },{ fecha: '2007-12-31', dato: 4.2000 },{ fecha: '2008-12-31', dato: 4.5000 },{ fecha: '2009-12-31', dato: 5.3000 },{ fecha: '2010-12-31', dato: 5.4000 },{ fecha: '2011-12-31', dato: 5.1000 },{ fecha: '2012-12-31', dato: 5.0000 }],
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
      data: [{ region: 'Torreón', dato: 6.1000 },{ region: 'Gómez Palacio', dato: 5.0000 },{ region: 'Lerdo', dato: 4.7100 },{ region: 'Matamoros', dato: 5.3000 },{ region: 'La Laguna', dato: 5.6000 },{ region: 'Coahuila', dato: 5.3000 },{ region: 'Durango', dato: 5.2000 },{ region: 'Nacional', dato: 5.1000 }],
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

} // Clase SociedadMortalidad

?>
