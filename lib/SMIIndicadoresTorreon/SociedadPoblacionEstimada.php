<?php
/**
 * SociedadPoblacionEstimada.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadPoblacionEstimada
 */
class SociedadPoblacionEstimada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Población Estimada en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sociedad-poblacion-estimada';
        $this->descripcion  = 'Población estimada a mitad de año.';
        $this->claves       = 'Torreón, Población';
        $this->categorias   = array('Población');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Población estimada a mitad de año.</p>

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
            <td class="derecha">656,988</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2012</td>
            <td class="derecha">666,226</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2013</td>
            <td class="derecha">675,210</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">683,914</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2015</td>
            <td class="derecha">692,386</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2016</td>
            <td class="derecha">700,656</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2017</td>
            <td class="derecha">708,755</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2018</td>
            <td class="derecha">716,672</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2019</td>
            <td class="derecha">724,386</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2020</td>
            <td class="derecha">731,902</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Estimaciones de CONAPO en base a INEGI. Consulta la <a href="http://www.conapo.gob.mx/es/CONAPO/Proyecciones_Datos">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Población Estimada en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Población Estimada</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Población Estimada</h3>
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
            <td class="derecha">683,914</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-06-30</td>
            <td class="derecha">350,513</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-06-30</td>
            <td class="derecha">151,409</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-06-30</td>
            <td class="derecha">112,434</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-06-30</td>
            <td class="derecha">1,298,270</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-06-30</td>
            <td class="derecha">2,925,594</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-06-30</td>
            <td class="derecha">1,746,809</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-06-30</td>
            <td class="derecha">119,713,203</td>
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
      data: [{ fecha: '2011-06-30', dato: 656988 },{ fecha: '2012-06-30', dato: 666226 },{ fecha: '2013-06-30', dato: 675210 },{ fecha: '2014-06-30', dato: 683914 },{ fecha: '2015-06-30', dato: 692386 },{ fecha: '2016-06-30', dato: 700656 },{ fecha: '2017-06-30', dato: 708755 },{ fecha: '2018-06-30', dato: 716672 },{ fecha: '2019-06-30', dato: 724386 },{ fecha: '2020-06-30', dato: 731902 }],
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
      data: [{ region: 'Torreón', dato: 683914 },{ region: 'Gómez Palacio', dato: 350513 },{ region: 'Lerdo', dato: 151409 },{ region: 'Matamoros', dato: 112434 },{ region: 'La Laguna', dato: 1298270 },{ region: 'Coahuila', dato: 2925594 },{ region: 'Durango', dato: 1746809 },{ region: 'Nacional', dato: 119713203 }],
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

} // Clase SociedadPoblacionEstimada

?>
