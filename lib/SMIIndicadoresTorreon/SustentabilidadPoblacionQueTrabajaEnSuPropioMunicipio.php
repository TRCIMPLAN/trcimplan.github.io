<?php
/**
 * SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio
 */
class SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Población que Trabaja en su PROPIO Municipio en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio';
        $this->descripcion = 'Porcentaje de la población ocupada que trabaja en el mismo municipio en el que reside.';
        $this->claves      = 'Torreón, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasqmvzurhn">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Porcentaje de la población ocupada que trabaja en el mismo municipio en el que reside.
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
<td class="derecha">89.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
Consulta la [Base de Datos](http://www.conapo.gob.mx/en/CONAPO/Catalogo_Sistema_Urbano_Nacional_2012)
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
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">78.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">67.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">76.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">82.90 %</td>
<td>CONAPO</td>
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
  $('#Lenguetasqmvzurhn a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio

?>
