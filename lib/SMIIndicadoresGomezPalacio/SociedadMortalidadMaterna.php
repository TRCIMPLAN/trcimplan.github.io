<?php
/**
 * SociedadMortalidadMaterna.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadMortalidadMaterna
 */
class SociedadMortalidadMaterna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Mortalidad Materna en Gómez Palacio';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-mortalidad-materna';
        $this->descripcion = 'Defunciones maternas por cada cien mil partos.';
        $this->claves      = 'Gómez Palacio, Salud, Género';
        $this->categorias  = array('Salud', 'Género');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Defunciones maternas por cada cien mil partos.</p>

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
            <td class="centrado">31/12/2012</td>
            <td class="derecha">5.4000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 10 mil.</p>
      <h3>Observaciones</h3>
<p>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. [Consulta: 01 abril 2014]</p>

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
            <td>2012-12-31</td>
            <td class="derecha">4.6000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td class="derecha">8.3000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td class="derecha">6.2000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td class="derecha">5.3000</td>
            <td>SINAIS (SSA)</td>
            <td>Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadMortalidadMaterna

?>
