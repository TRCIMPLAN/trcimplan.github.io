<?php
/**
 * SociedadOcupacionPorVivienda.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadOcupacionPorVivienda
 */
class SociedadOcupacionPorVivienda extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Ocupación por Vivienda en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-ocupacion-por-vivienda';
        $this->descripcion = 'Promedio de ocupantes por vivienda.';
        $this->claves      = 'Matamoros, Vivienda';
        $this->categorias  = array('Vivienda');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetastkuahmul">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Promedio de ocupantes por vivienda.
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
<td class="derecha">4.1000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Promedio
<h4>Observaciones</h4>
Datos obtenidos de [INEGI. Censos de población y vivienda 2010](http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx)
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
<td class="derecha">3.7000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">3.9000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">4.1000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">3.9500</td>
<td>INEGI. Censos de Población y Vivienda</td>
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
  $('#Lenguetastkuahmul a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadOcupacionPorVivienda

?>
