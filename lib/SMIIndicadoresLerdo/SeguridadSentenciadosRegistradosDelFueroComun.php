<?php
/**
 * SeguridadSentenciadosRegistradosDelFueroComun.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SeguridadSentenciadosRegistradosDelFueroComun
 */
class SeguridadSentenciadosRegistradosDelFueroComun extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Sentenciados Registrados del Fuero Común en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'seguridad-sentenciados-registrados-del-fuero-comun';
        $this->descripcion  = 'Cantidad de sentenciados registrados en los juzgados de primera instancia del fuero común por año.';
        $this->claves       = 'Lerdo, Delincuencia';
        $this->categorias   = array('Delincuencia');
        $this->region_nivel = 121;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad de sentenciados registrados en los juzgados de primera instancia del fuero común por año.</p>

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
            <td>31/12/2008</td>
            <td>104</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Sentenciados Registrados del Fuero Común</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Sentenciados Registrados del Fuero Común</h3>
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
            <td>2008-12-31</td>
            <td>392</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td>297</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td>104</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td>20</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td>813</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Sentenciados Registrados del Fuero Común</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>18/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delito-seguridad.html">La Prevención del Delito como elemento fundamental para la Seguridad</a></td>
            <td>La prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-delitos.html">Delitos en Lerdo</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-homicidios.html">Homicidios en Lerdo</a></td>
            <td>Número de homicidios durante el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-presuntos-delincuentes-del-fuero-comun.html">Presuntos Delincuentes del Fuero Común en Lerdo</a></td>
            <td>Cantidad de presuntos delincuentes registrados en los juzgados de primera instancia del fuero común por año.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-presuntos-delincuentes-del-fuero-federal.html">Presuntos Delincuentes del Fuero Federal en Lerdo</a></td>
            <td>Presuntos delincuentes registrados en los juzgados de primera instancia en materia penal del fuero federal</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-presuntos-delincuentes-por-narcoticos.html">Presuntos Delincuentes por Narcóticos en Lerdo</a></td>
            <td>Presuntos delincuentes por delitos en materia de narcóticos registrados en los juzgados del fuero federal.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Lerdo</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-secuestros.html">Secuestros en Lerdo</a></td>
            <td>Cantidad de secuestros en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-sentenciados-registrados-del-fuero-federal.html">Sentenciados Registrados del Fuero Federal en Lerdo</a></td>
            <td>Sentenciados registrados en los juzgados de primera instancia en materia penal del fuero federal</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-sentenciados-en-materia-de-narcoticos-registrados-en-el-fuero-federal.html">Sentenciados en Materia de Narcóticos Registrados en el Fuero Federal en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-delitos.html">Tasa de Delitos en Lerdo</a></td>
            <td>Delitos por cada 100 mil habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html">Tasa de Homicidios en Lerdo</a></td>
            <td>Número de homicidios por cada 100 mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en Lerdo</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en Lerdo</a></td>
            <td>Homicidios por habitantes por 100 mil</td>
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
      data: [{ region: 'Torreón', dato: 392 },{ region: 'Gómez Palacio', dato: 297 },{ region: 'Lerdo', dato: 104 },{ region: 'Matamoros', dato: 20 },{ region: 'La Laguna', dato: 813 }],
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

} // Clase SeguridadSentenciadosRegistradosDelFueroComun

?>
