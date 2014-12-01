<?php
/**
 * GobiernoIndiceDeGobiernoElectronicoMunicipal.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase GobiernoIndiceDeGobiernoElectronicoMunicipal
 */
class GobiernoIndiceDeGobiernoElectronicoMunicipal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Índice de Gobierno Electrónico Municipal en La Laguna';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-la-laguna';
        $this->archivo      = 'gobierno-indice-de-gobierno-electronico-municipal';
        $this->descripcion  = 'índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.';
        $this->claves       = 'La Laguna, Gobierno Digital';
        $this->categorias   = array('Gobierno Digital');
        $this->region_nivel = 401;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
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
            <td class="derecha">0.5440</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> De 0 a 1.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Índice de Gobierno Electrónico Municipal</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Índice de Gobierno Electrónico Municipal</h3>
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
            <td>Lerdo</td>
            <td>2011-12-31</td>
            <td class="derecha">0.4714</td>
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
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 0.6916 },{ region: 'Gómez Palacio', dato: 0.4763 },{ region: 'Lerdo', dato: 0.4714 },{ region: 'Matamoros', dato: 0.5366 },{ region: 'La Laguna', dato: 0.5440 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase GobiernoIndiceDeGobiernoElectronicoMunicipal

?>
