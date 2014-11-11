<?php
/**
 * EconomiaDesempleo.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaDesempleo
 */
class EconomiaDesempleo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Desempleo en Lerdo';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-desempleo';
        $this->descripcion = 'Cantidad de personas desempleadas.';
        $this->claves      = 'Lerdo, Empleo';
        $this->categorias  = array('Empleo');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador-">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad de personas desempleadas.</p>

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
            <td class="centrado">12/03/1990</td>
            <td class="derecha">821</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">14/02/2000</td>
            <td class="derecha">360</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">25/06/2010</td>
            <td class="derecha">3,795</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Desempleados a nivel nacional:</p>

<ul>
<li>2009 = 2,031,369</li>
<li>1999 = 424,644</li>
<li>1989 = 659,870</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
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
            <td>1990-03-12</td>
            <td class="derecha">4,043</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2000-02-14</td>
            <td class="derecha">2,135</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2010-06-25</td>
            <td class="derecha">19,536</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>1990-03-12</td>
            <td class="derecha">2,050</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2000-02-14</td>
            <td class="derecha">981</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-06-25</td>
            <td class="derecha">9,705</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>1990-03-12</td>
            <td class="derecha">774</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2000-02-14</td>
            <td class="derecha">378</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-06-25</td>
            <td class="derecha">2,380</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>1990-03-12</td>
            <td class="derecha">7,688</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2000-02-14</td>
            <td class="derecha">3,854</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-06-25</td>
            <td class="derecha">35,416</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador- a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1990-03-12', dato: 821 },{ fecha: '2000-02-14', dato: 360 },{ fecha: '2010-06-25', dato: 3795 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador- a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaDesempleo

?>
