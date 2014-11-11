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
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'seguridad-cantidad-de-policias';
        $this->descripcion = 'Cantidad total de policías en el municipio.';
        $this->claves      = 'Torreón, Seguridad';
        $this->categorias  = array('Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador-">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad total de policías en el municipio.</p>

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
            <td class="centrado">28/02/2014</td>
            <td class="derecha">768</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Determinado en base al reporte de Transparencia de la Nómina.</p>

    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador- a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SeguridadCantidadDePolicias

?>
