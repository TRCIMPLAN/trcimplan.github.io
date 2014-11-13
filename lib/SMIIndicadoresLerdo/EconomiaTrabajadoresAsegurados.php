<?php
/**
 * EconomiaTrabajadoresAsegurados.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Trabajadores Asegurados en Lerdo';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-trabajadores-asegurados';
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'Lerdo, Empleo';
        $this->categorias  = array('Empleo');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</p>

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
            <td class="centrado">30/11/2013</td>
            <td class="derecha">13,739</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2013</td>
            <td class="derecha">13,518</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/01/2014</td>
            <td class="derecha">13,811</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">28/02/2014</td>
            <td class="derecha">13,947</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/03/2014</td>
            <td class="derecha">13,894</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/04/2014</td>
            <td class="derecha">13,791</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/05/2014</td>
            <td class="derecha">13,667</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">13,347</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/07/2014</td>
            <td class="derecha">13,336</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/08/2014</td>
            <td class="derecha">13,314</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/09/2014</td>
            <td class="derecha">13,251</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 267 trabajadores menos durante el presente año.</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Trabajadores Asegurados en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Trabajadores Asegurados</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Trabajadores Asegurados</h3>
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
            <td class="derecha">170,628</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 9037 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-09-30</td>
            <td class="derecha">74,974</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 3,765 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-09-30</td>
            <td class="derecha">13,251</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 267 trabajadores menos durante el presente año.</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-09-30</td>
            <td class="derecha">7,763</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 965 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-09-30</td>
            <td class="derecha">266,616</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 13500 trabajadores más durante el presente año.</td>
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
      data: [{ fecha: '2013-11-30', dato: 13739 },{ fecha: '2013-12-31', dato: 13518 },{ fecha: '2014-01-31', dato: 13811 },{ fecha: '2014-02-28', dato: 13947 },{ fecha: '2014-03-31', dato: 13894 },{ fecha: '2014-04-30', dato: 13791 },{ fecha: '2014-05-31', dato: 13667 },{ fecha: '2014-06-30', dato: 13347 },{ fecha: '2014-07-31', dato: 13336 },{ fecha: '2014-08-31', dato: 13314 },{ fecha: '2014-09-30', dato: 13251 }],
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
      data: [{ region: 'Torreón', dato: 170628 },{ region: 'Gómez Palacio', dato: 74974 },{ region: 'Lerdo', dato: 13251 },{ region: 'Matamoros', dato: 7763 },{ region: 'La Laguna', dato: 266616 }],
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

} // Clase EconomiaTrabajadoresAsegurados

?>
