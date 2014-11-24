<?php
/**
 * SociedadPorcentajeDeViviendasConEnergiaElectrica.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadPorcentajeDeViviendasConEnergiaElectrica
 */
class SociedadPorcentajeDeViviendasConEnergiaElectrica extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Porcentaje de Viviendas con energía eléctrica en La Laguna';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'sociedad-porcentaje-de-viviendas-con-energia-electrica';
        $this->descripcion = 'Viviendas particulares habitadas que disponen de luz eléctrica respecto al total de viviendas particulares habitadas.';
        $this->claves      = 'La Laguna, Bienestar, Vivienda';
        $this->categorias  = array('Bienestar', 'Vivienda');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Viviendas particulares habitadas que disponen de luz eléctrica respecto al total de viviendas particulares habitadas.</p>

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
            <td class="centrado">25/06/2010</td>
            <td class="derecha">99.47 %</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Porcentaje de Viviendas con energía eléctrica</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Porcentaje de Viviendas con energía eléctrica</h3>
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
            <td>2010-06-25</td>
            <td class="derecha">99.61 %</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-06-25</td>
            <td class="derecha">99.45 %</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-06-25</td>
            <td class="derecha">99.02 %</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-06-25</td>
            <td class="derecha">99.16 %</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-06-25</td>
            <td class="derecha">99.47 %</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 99.6100 },{ region: 'Gómez Palacio', dato: 99.4500 },{ region: 'Lerdo', dato: 99.0200 },{ region: 'Matamoros', dato: 99.1600 },{ region: 'La Laguna', dato: 99.4700 }],
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

} // Clase SociedadPorcentajeDeViviendasConEnergiaElectrica

?>
