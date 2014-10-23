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
  <ul class="nav nav-tabs lenguetas" id="Lenguetasmebkxueb">
    <li class="active"><a href="#datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="datos">
      <h4>Descripción</h4>
Cantidad de policías por cada mil habitantes.
<h4>Información recopilada</h4>
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
<b>Unidad:</b>
Por cada mil
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasmebkxueb a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SeguridadTasaDePoliciasPorHabitante

?>
