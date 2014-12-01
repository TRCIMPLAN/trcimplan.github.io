<?php
/**
 * SeguridadRoboATranseuntes.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadRoboATranseuntes
 */
class SeguridadRoboATranseuntes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Robo a Transeuntes en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'seguridad-robo-a-transeuntes';
        $this->descripcion  = 'Robos a Transeuntes totales por mes.';
        $this->claves       = 'Gómez Palacio';
        $this->categorias   = array();
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
<p>Robos a Transeuntes totales por mes.</p>

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
            <td class="centrado">31/01/2014</td>
            <td class="derecha">29</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">28/02/2014</td>
            <td class="derecha">37</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/03/2014</td>
            <td class="derecha">66</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/04/2014</td>
            <td class="derecha">34</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/05/2014</td>
            <td class="derecha">33</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">25</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/07/2014</td>
            <td class="derecha">38</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/08/2014</td>
            <td class="derecha">39</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/09/2014</td>
            <td class="derecha">64</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Robo a Transeuntes en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Robo a Transeuntes</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Robo a Transeuntes</h3>
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
            <td>2014-09-30</td>
            <td class="derecha">56</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-09-30</td>
            <td class="derecha">64</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-09-30</td>
            <td class="derecha">12</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-09-30</td>
            <td class="derecha">5</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-09-30</td>
            <td class="derecha">137</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
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
      data: [{ fecha: '2014-01-31', dato: 29 },{ fecha: '2014-02-28', dato: 37 },{ fecha: '2014-03-31', dato: 66 },{ fecha: '2014-04-30', dato: 34 },{ fecha: '2014-05-31', dato: 33 },{ fecha: '2014-06-30', dato: 25 },{ fecha: '2014-07-31', dato: 38 },{ fecha: '2014-08-31', dato: 39 },{ fecha: '2014-09-30', dato: 64 }],
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
      data: [{ region: 'Torreón', dato: 56 },{ region: 'Gómez Palacio', dato: 64 },{ region: 'Lerdo', dato: 12 },{ region: 'Matamoros', dato: 5 },{ region: 'La Laguna', dato: 137 }],
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

} // Clase SeguridadRoboATranseuntes

?>
