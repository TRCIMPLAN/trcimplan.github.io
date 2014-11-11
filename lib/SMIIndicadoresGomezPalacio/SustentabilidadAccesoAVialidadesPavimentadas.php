<?php
/**
 * SustentabilidadAccesoAVialidadesPavimentadas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SustentabilidadAccesoAVialidadesPavimentadas
 */
class SustentabilidadAccesoAVialidadesPavimentadas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Acceso a Vialidades Pavimentadas en Gómez Palacio';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sustentabilidad-acceso-a-vialidades-pavimentadas';
        $this->descripcion = 'Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.';
        $this->claves      = 'Gómez Palacio, Movilidad, Vialidad';
        $this->categorias  = array('Movilidad', 'Vialidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador-">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.</p>

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
            <td class="centrado">31/12/2010</td>
            <td class="derecha">88.00 %</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Censo de Población y Vivienda 2010. Consulta las <a href="http://www.inegi.org.mx/est/contenidos/proyectos/ccpv/cpv2010/tabulados_urbano.aspx">Bases de Datos</a></p>

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
            <td>2010-12-31</td>
            <td class="derecha">93.00 %</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">72.00 %</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">73.00 %</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">88.00 %</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador- a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SustentabilidadAccesoAVialidadesPavimentadas

?>
