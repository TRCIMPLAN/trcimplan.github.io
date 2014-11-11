<?php
/**
 * SociedadPobrezaExtrema.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadPobrezaExtrema
 */
class SociedadPobrezaExtrema extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Pobreza Extrema en La Laguna';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'sociedad-pobreza-extrema';
        $this->descripcion = 'Porcentaje de la población en situación de pobreza extrema.';
        $this->claves      = 'La Laguna, Bienestar';
        $this->categorias  = array('Bienestar');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador-">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje de la población en situación de pobreza extrema.</p>

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
            <td class="derecha">4.00 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Pobreza%202012/Pobreza-2012.aspx">Base de Datos</a></p>

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
            <td class="derecha">2.84 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td class="derecha">5.30 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">6.80 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">3.90 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td class="derecha">2.94 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td class="derecha">10.12 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2010-12-31</td>
            <td class="derecha">11.20 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
        </tbody>
      </table>
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

} // Clase SociedadPobrezaExtrema

?>
