<?php
/**
 * SustentabilidadPasajerosAereosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadPasajerosAereosTotales
 */
class SustentabilidadPasajerosAereosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Pasajeros Aéreos Totales en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-totales';
        $this->descripcion = 'Flujo de pasajeros del Aeropuerto Internacional Francisco Sarabia.';
        $this->claves      = 'Torreón, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasjdrkdsmc">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Flujo de pasajeros del Aeropuerto Internacional Francisco Sarabia.
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
<td class="centrado">31/12/2013</td>
<td class="derecha">508,133</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Personas
<h4>Observaciones</h4>
Se considera a nivel metropolitano. Consulta la [Base de Datos](http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/)
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
<td>2013-12-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">508,133</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
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
  $('#Lenguetasjdrkdsmc a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SustentabilidadPasajerosAereosTotales

?>
