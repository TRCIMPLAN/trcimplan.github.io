<?php
/**
 * SeguridadCantidadDePolicias.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadCantidadDePolicias
 */
class SeguridadCantidadDePolicias extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cantidad de Policías en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'seguridad-cantidad-de-policias';
        $this->descripcion = 'Cantidad total de policías en el municipio.';
        $this->claves      = 'Torreón, Seguridad';
        $this->categorias  = array('Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasphdohgof">
    <li class="active"><a href="#datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="datos">
      <h4>Descripción</h4>
Cantidad total de policías en el municipio.
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
<td class="derecha">768</td>
<td>Ayuntamiento de Torreón</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
Determinado en base al reporte de Transparencia de la Nómina.
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasphdohgof a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SeguridadCantidadDePolicias

?>
