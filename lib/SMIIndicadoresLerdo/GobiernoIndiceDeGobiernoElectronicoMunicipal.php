<?php
/**
 * GobiernoIndiceDeGobiernoElectronicoMunicipal.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase GobiernoIndiceDeGobiernoElectronicoMunicipal
 */
class GobiernoIndiceDeGobiernoElectronicoMunicipal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Gobierno Electrónico Municipal en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'gobierno-indice-de-gobierno-electronico-municipal';
        $this->descripcion = 'índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.';
        $this->claves      = 'Lerdo, Gobierno Digital';
        $this->categorias  = array('Gobierno Digital');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</p>

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
            <td class="centrado">31/12/2011</td>
            <td class="derecha">0.4714</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> De 0 a 1.</p>
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
            <td>2011-12-31</td>
            <td class="derecha">0.6916</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2011-12-31</td>
            <td class="derecha">0.4763</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2011-12-31</td>
            <td class="derecha">0.5366</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2011-12-31</td>
            <td class="derecha">0.5440</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase GobiernoIndiceDeGobiernoElectronicoMunicipal

?>
