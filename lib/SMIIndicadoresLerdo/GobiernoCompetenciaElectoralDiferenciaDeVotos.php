<?php
/**
 * GobiernoCompetenciaElectoralDiferenciaDeVotos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase GobiernoCompetenciaElectoralDiferenciaDeVotos
 */
class GobiernoCompetenciaElectoralDiferenciaDeVotos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Competencia Electoral Diferencia de Votos en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'gobierno-competencia-electoral-diferencia-de-votos';
        $this->descripcion = 'Diferencia de votos entre primer y segundo lugar en la elección federal.';
        $this->claves      = 'Lerdo, Participación Ciudadana';
        $this->categorias  = array('Participación Ciudadana');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Diferencia de votos entre primer y segundo lugar en la elección federal.</p>

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
            <td class="centrado">01/07/2012</td>
            <td class="derecha">2,910</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Cantidad de votos</p>

    </div>
    <div class="tab-pane active" id="smi-indicador-otras_regiones">
<h3>En otras regiones</h3>
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
            <td class="derecha">4,367</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-07-01</td>
            <td class="derecha">5,784</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-07-01</td>
            <td class="derecha">19,079</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-07-01</td>
            <td class="derecha">32,140</td>
            <td>INE-IEPCC</td>
            <td>En esta cifra se incluye solo a los municipios de Torreón, Matamoros, Gómez Palacio y Lerdo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#smi-indicador a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase GobiernoCompetenciaElectoralDiferenciaDeVotos

?>
