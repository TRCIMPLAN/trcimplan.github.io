<?php
/**
 * SustentabilidadRedDeTransportePublico.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadRedDeTransportePublico
 */
class SustentabilidadRedDeTransportePublico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Red de Transporte Público en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sustentabilidad-red-de-transporte-publico';
        $this->descripcion = 'Extensión de la red de transporte público en Kilómetros totales.';
        $this->claves      = 'Torreón, Servicios Públicos';
        $this->categorias  = array('Servicios Públicos');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasscvmtdzy">
    <li class="active"><a href="#datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="datos">
      <h4>Descripción</h4>
Extensión de la red de transporte público en Kilómetros totales.
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
<td class="centrado">31/03/2014</td>
<td class="derecha">250</td>
<td>IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Kilómetros
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasscvmtdzy a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SustentabilidadRedDeTransportePublico

?>
