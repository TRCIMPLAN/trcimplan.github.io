<?php
/**
 * SociedadPoblacionDerechohabiente.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadPoblacionDerechohabiente
 */
class SociedadPoblacionDerechohabiente extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Población Derechohabiente en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sociedad-poblacion-derechohabiente';
        $this->descripcion  = 'Población derechohabiente a los servicios de salud.';
        $this->claves       = 'Torreón, Salud';
        $this->categorias   = array('Salud');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Población derechohabiente a los servicios de salud.</p>

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
            <td>31/12/2010</td>
            <td>453,423</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Fuente: INEGI</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Población Derechohabiente</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Población Derechohabiente</h3>
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
            <td>453,423</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>241,537</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>98,265</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>77,538</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td>870,763</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Población Derechohabiente</h3>
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
            <td>07/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-sector-salud-laguna.html">Economía del Sector Salud en La Laguna</a></td>
            <td>El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-camas-censables.html">Camas Censables en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-mortalidad-infantil.html">Mortalidad Infantil en Torreón</a></td>
            <td>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-mortalidad-materna.html">Mortalidad Materna en Torreón</a></td>
            <td>Defunciones maternas por cada cien mil partos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-mortalidad.html">Mortalidad en Torreón</a></td>
            <td>Tasa de Mortalidad. Número de muertes por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html">Mortalidad por Diabetes en Torreón</a></td>
            <td>Tasa de mortalidad por diabetes mellitus. Defunciones por diabetes por cada diez mil defunciones.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en Torreón</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-medicos.html">Médicos en Torreón</a></td>
            <td>Médicos en contacto con pacientes por cada diez mil personas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-retrete.html">Viviendas que Disponen de Retrete en Torreón</a></td>
            <td>Porcentaje de viviendas habitadas que disponen de retrete.</td>
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
      data: [{ region: 'Torreón', dato: 453423 },{ region: 'Gómez Palacio', dato: 241537 },{ region: 'Lerdo', dato: 98265 },{ region: 'Matamoros', dato: 77538 },{ region: 'La Laguna', dato: 870763 }],
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

} // Clase SociedadPoblacionDerechohabiente

?>
