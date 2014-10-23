<?php
/**
 * SustentabilidadAreaNoUrbanizada.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SustentabilidadAreaNoUrbanizada
 */
class SustentabilidadAreaNoUrbanizada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Área No Urbanizada en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sustentabilidad-area-no-urbanizada';
        $this->descripcion = 'Área total de localidades no urbanizadas sobre la superficie municipal.';
        $this->claves      = 'Gómez Palacio, Recursos Naturales';
        $this->categorias  = array('Recursos Naturales');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasiyqcboje">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Área total de localidades no urbanizadas sobre la superficie municipal.
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
<td class="derecha">92.90 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
Descarga de [Base de Datos](http://www3.inegi.org.mx/sistemas/productos/default.aspx?c=265&upc=0&s=est&tg=3594&f=2&cl=0&pf=prod&ef=0&ct=201100000&pg=2)
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
<td class="derecha">88.90 %</td>
<td>INEGI</td>
<td>La distribución geográfica de Torreón es de considerarse aparte, ya que el municipio se encuentra dividido en dos partes: Norte; en la cual está asentada la cabecera municipal y la mancha urbana, y el Sur; que abarca aproximadamente tres cuartas partes de la superficie municipal, separadas tanto por la Sierra de las Noas como por extensiones de los municipios de Matamoros y Viesca.</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">98.40 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">96.90 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">94.90 %</td>
<td>INEGI</td>
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
  $('#Lenguetasiyqcboje a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SustentabilidadAreaNoUrbanizada

?>
