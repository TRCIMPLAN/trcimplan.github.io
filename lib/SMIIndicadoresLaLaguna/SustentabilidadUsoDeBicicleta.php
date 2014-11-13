<?php
/**
 * SustentabilidadUsoDeBicicleta.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SustentabilidadUsoDeBicicleta
 */
class SustentabilidadUsoDeBicicleta extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Uso de Bicicleta en La Laguna';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'sustentabilidad-uso-de-bicicleta';
        $this->descripcion = 'Distribución porcentual del total de viajes cotidianos realizados por modalidad.';
        $this->claves      = 'La Laguna, Movilidad, Recursos Naturales, Vialidad';
        $this->categorias  = array('Movilidad', 'Recursos Naturales', 'Vialidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</p>

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
            <td class="centrado">31/12/2011</td>
            <td class="derecha">2.00 %</td>
            <td>Logit</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Estudio realizado por Logit en 2011. Contempla los viajes de los municipios de Torreón y Matamoros.</p>

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

} // Clase SustentabilidadUsoDeBicicleta

?>
