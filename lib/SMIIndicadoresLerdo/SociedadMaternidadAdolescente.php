<?php
/**
 * SociedadMaternidadAdolescente.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadMaternidadAdolescente
 */
class SociedadMaternidadAdolescente extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Maternidad Adolescente en Lerdo';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'sociedad-maternidad-adolescente';
        $this->descripcion = '';
        $this->claves      = 'Lerdo, Género';
        $this->categorias  = array('Género');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador-">
    <li><a href="#smi-indicador-mapa" data-toggle="tab">Georreferenciado</a></li>
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-mapa">
<iframe width='100%' height='520' frameborder='0' src='http://sigimplan.cartodb.com/viz/e5010daa-4a4f-11e4-bf7b-0e4fddd5de28/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
<h3>Notas</h3>
<p><a href="http://sigimplan.cartodb.com/viz/e5010daa-4a4f-11e4-bf7b-0e4fddd5de28/embed_map">Ver este mapa a pantalla completa</a>.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>


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
            <td class="centrado">31/12/2010</td>
            <td class="derecha">17.20 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Enlace al <a href="http://201.159.104.45:8080/apps/implan2.html">Sistema de Información Geográfica</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
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
            <td>2010-12-31</td>
            <td class="derecha">13.90 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td class="derecha">16.30 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">19.90 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-mapa
$(document).ready(function(){
  $('#smi-indicador- a[href="#smi-indicador-mapa"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadMaternidadAdolescente

?>
