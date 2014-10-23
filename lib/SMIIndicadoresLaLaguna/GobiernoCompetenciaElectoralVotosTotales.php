<?php
/**
 * GobiernoCompetenciaElectoralVotosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase GobiernoCompetenciaElectoralVotosTotales
 */
class GobiernoCompetenciaElectoralVotosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Competencia Electoral Votos Totales en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'gobierno-competencia-electoral-votos-totales';
        $this->descripcion = '';
        $this->claves      = 'La Laguna, Participación Ciudadana';
        $this->categorias  = array('Participación Ciudadana');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetascvxynnox">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>

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
<td class="centrado">01/07/2012</td>
<td class="derecha">479,785</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <h4>En otras regiones</h4>
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
<td>2012-07-01</td>
<td class="derecha">246,044</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-07-01</td>
<td class="derecha">120,131</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-07-01</td>
<td class="derecha">56,517</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-07-01</td>
<td class="derecha">48,093</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetascvxynnox a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase GobiernoCompetenciaElectoralVotosTotales

?>
