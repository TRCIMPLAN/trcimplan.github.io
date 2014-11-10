<?php
/**
 * SeguridadTasaDePoliciasPorHabitante.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadTasaDePoliciasPorHabitante
 */
class SeguridadTasaDePoliciasPorHabitante extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tasa de Policías por Habitante en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'seguridad-tasa-de-policias-por-habitante';
        $this->descripcion = 'Cantidad de policías por cada mil habitantes.';
        $this->claves      = 'Torreón, Seguridad';
        $this->categorias  = array('Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad de policías por cada mil habitantes.</p>

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
            <td class="centrado">28/02/2014</td>
            <td class="derecha">1.0997</td>
            <td>Ayuntamiento de Torreón</td>
            <td>Disponible sólo para Torreón</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil.</p>
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

} // Clase SeguridadTasaDePoliciasPorHabitante

?>
