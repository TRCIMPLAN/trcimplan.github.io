<?php
/**
 * SociedadRazonDeMortalidadMaterna.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadRazonDeMortalidadMaterna
 */
class SociedadRazonDeMortalidadMaterna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Razón de Mortalidad Materna en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sociedad-razon-de-mortalidad-materna';
        $this->descripcion  = 'La razón de mortalidad materna es la medida de mortalidad materna más usada. Mide el riesgo obstétrico una vez que la mujer queda embarazada.';
        $this->claves       = 'Torreón, Salud, Género, Bienestar, Objetivos del Milenio';
        $this->categorias   = array('Salud', 'Género', 'Bienestar', 'Objetivos del Milenio');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>La razón de mortalidad materna es la medida de mortalidad materna más usada. Mide el riesgo obstétrico una vez que la mujer queda embarazada.</p>

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
            <td>31/12/2013</td>
            <td>33.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Utilizado como uno de los indicadores para los Objetivos del Milenio (Mejorar la Salud Materna). Dirección General de Información en Salud (DGIS). Base de datos de muertes maternas, 2013. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. [Consulta: 13 de enero 2015].</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Razón de Mortalidad Materna</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Razón de Mortalidad Materna</h3>
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
            <td>2013-12-31</td>
            <td>33.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>33.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2011-12-31</td>
            <td>55.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>62.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td>26.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td>43.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td>39.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
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
      data: [{ region: 'Torreón', dato: 33.0000 },{ region: 'Gómez Palacio', dato: 33.3000 },{ region: 'Lerdo', dato: 55.3000 },{ region: 'Matamoros', dato: 62.7000 },{ region: 'Coahuila', dato: 26.9000 },{ region: 'Durango', dato: 43.6000 },{ region: 'Nacional', dato: 39.2000 }],
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

} // Clase SociedadRazonDeMortalidadMaterna

?>
