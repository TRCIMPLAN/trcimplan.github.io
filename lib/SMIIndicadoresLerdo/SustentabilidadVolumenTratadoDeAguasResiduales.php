<?php
/**
 * SustentabilidadVolumenTratadoDeAguasResiduales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadVolumenTratadoDeAguasResiduales
 */
class SustentabilidadVolumenTratadoDeAguasResiduales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Volumen Tratado de Aguas Residuales en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'sustentabilidad-volumen-tratado-de-aguas-residuales';
        $this->descripcion = '';
        $this->claves      = 'Lerdo, Recursos Naturales';
        $this->categorias  = array('Recursos Naturales');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasizuevahv">
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
<td class="centrado">31/12/2010</td>
<td class="derecha">0.0000</td>
<td>IMCO-CONAGUA</td>
<td>VALOR IGUAL A CERO</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Litros por segundo por cada mil habitantes
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
<td>2010-12-31</td>
<td class="derecha">2.4400</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">1.8300</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">0.0000</td>
<td>IMCO-CONAGUA</td>
<td>VALOR IGUAL A CERO</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">1.7800</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2010-12-31</td>
<td class="derecha">1.3900</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2010-12-31</td>
<td class="derecha">1.6000</td>
<td>IMCO-CONAGUA</td>
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
  $('#Lenguetasizuevahv a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SustentabilidadVolumenTratadoDeAguasResiduales

?>
