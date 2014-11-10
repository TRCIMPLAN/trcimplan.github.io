<?php
/**
 * SociedadMortalidadInfantil.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadMortalidadInfantil
 */
class SociedadMortalidadInfantil extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Mortalidad Infantil en Gómez Palacio';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-mortalidad-infantil';
        $this->descripcion = 'Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos';
        $this->claves      = 'Gómez Palacio, Salud';
        $this->categorias  = array('Salud');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</p>

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
            <td class="centrado">31/12/2009</td>
            <td class="derecha">5.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">8.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">12.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">9.5000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil.</p>
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
            <td>2009-12-31</td>
            <td class="derecha">6.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2010-12-31</td>
            <td class="derecha">8.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2011-12-31</td>
            <td class="derecha">6.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2012-12-31</td>
            <td class="derecha">12.2000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2009-12-31</td>
            <td class="derecha">5.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">14.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2011-12-31</td>
            <td class="derecha">7.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td class="derecha">15.3800</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2009-12-31</td>
            <td class="derecha">3.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">11.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2011-12-31</td>
            <td class="derecha">8.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td class="derecha">17.3900</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2009-12-31</td>
            <td class="derecha">5.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">9.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2011-12-31</td>
            <td class="derecha">8.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td class="derecha">11.9000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2009-12-31</td>
            <td class="derecha">8.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td class="derecha">10.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2011-12-31</td>
            <td class="derecha">9.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2012-12-31</td>
            <td class="derecha">12.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2009-12-31</td>
            <td class="derecha">11.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td class="derecha">12.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2011-12-31</td>
            <td class="derecha">15.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2012-12-31</td>
            <td class="derecha">12.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2009-12-31</td>
            <td class="derecha">14.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2010-12-31</td>
            <td class="derecha">13.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2011-12-31</td>
            <td class="derecha">13.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2012-12-31</td>
            <td class="derecha">13.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
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
      data: [{ fecha: '2009-12-31', dato: 5.9000 },{ fecha: '2010-12-31', dato: 8.0000 },{ fecha: '2011-12-31', dato: 12.6000 },{ fecha: '2012-12-31', dato: 9.5000 }],
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
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadMortalidadInfantil

?>
