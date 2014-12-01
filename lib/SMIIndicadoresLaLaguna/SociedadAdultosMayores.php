<?php
/**
 * SociedadAdultosMayores.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadAdultosMayores
 */
class SociedadAdultosMayores extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Adultos Mayores en La Laguna';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-la-laguna';
        $this->archivo      = 'sociedad-adultos-mayores';
        $this->descripcion  = 'Población estimada a mediados de año de personas de 65 años y más';
        $this->claves       = 'La Laguna, Grupos Vulnerables';
        $this->categorias   = array('Grupos Vulnerables');
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
<p>Población estimada a mediados de año de personas de 65 años y más</p>

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
            <td class="centrado">30/06/2011</td>
            <td class="derecha">73,429</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2012</td>
            <td class="derecha">76,234</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2013</td>
            <td class="derecha">79,195</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">82,328</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2015</td>
            <td class="derecha">85,633</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2016</td>
            <td class="derecha">89,114</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2017</td>
            <td class="derecha">92,768</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2018</td>
            <td class="derecha">96,590</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2019</td>
            <td class="derecha">100,568</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2020</td>
            <td class="derecha">104,689</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Adultos Mayores en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Adultos Mayores</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Adultos Mayores</h3>
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
            <td>2014-06-30</td>
            <td class="derecha">45,139</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-06-30</td>
            <td class="derecha">20,263</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-06-30</td>
            <td class="derecha">9,479</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-06-30</td>
            <td class="derecha">7,447</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-06-30</td>
            <td class="derecha">82,328</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-06-30</td>
            <td class="derecha">187,728</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-06-30</td>
            <td class="derecha">120,009</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-06-30</td>
            <td class="derecha">7,851,672</td>
            <td>CONAPO</td>
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
      data: [{ fecha: '2011-06-30', dato: 73429 },{ fecha: '2012-06-30', dato: 76234 },{ fecha: '2013-06-30', dato: 79195 },{ fecha: '2014-06-30', dato: 82328 },{ fecha: '2015-06-30', dato: 85633 },{ fecha: '2016-06-30', dato: 89114 },{ fecha: '2017-06-30', dato: 92768 },{ fecha: '2018-06-30', dato: 96590 },{ fecha: '2019-06-30', dato: 100568 },{ fecha: '2020-06-30', dato: 104689 }],
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
      data: [{ region: 'Torreón', dato: 45139 },{ region: 'Gómez Palacio', dato: 20263 },{ region: 'Lerdo', dato: 9479 },{ region: 'Matamoros', dato: 7447 },{ region: 'La Laguna', dato: 82328 },{ region: 'Coahuila', dato: 187728 },{ region: 'Durango', dato: 120009 },{ region: 'Nacional', dato: 7851672 }],
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

} // Clase SociedadAdultosMayores

?>
