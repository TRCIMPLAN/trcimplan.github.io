<?php
/**
 * EconomiaPosgradosDeCalidad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaPosgradosDeCalidad
 */
class EconomiaPosgradosDeCalidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Posgrados de Calidad en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-posgrados-de-calidad';
        $this->descripcion = 'Programas aceptados por CONACYT como posgrados de calidad';
        $this->claves      = 'Torreón, Educación, Innovación';
        $this->categorias  = array('Educación', 'Innovación');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="lenguetasindicador">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
<p>Programas aceptados por CONACYT como posgrados de calidad</p>

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
            <td class="centrado">30/04/2014</td>
            <td class="derecha">11</td>
            <td>CONACYT</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Posgrados.</p>
      <h4>Observaciones</h4>
<p>Datos obtenidos de <a href="http://svrtmp.main.conacyt.mx/ConsultasPNPC/listar_padron.php">CONACYT</a></p>

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
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td class="derecha">0</td>
            <td>CONACYT</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-04-30</td>
            <td class="derecha">51</td>
            <td>CONACYT</td>
            <td>Fuente: [CONACYT](http://www.conacyt.gob.mx)</td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-04-30</td>
            <td class="derecha">15</td>
            <td>CONACYT</td>
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
  $('#lenguetasindicador a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaPosgradosDeCalidad

?>
