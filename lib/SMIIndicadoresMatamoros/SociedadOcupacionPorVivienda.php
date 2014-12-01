<?php
/**
 * SociedadOcupacionPorVivienda.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadOcupacionPorVivienda
 */
class SociedadOcupacionPorVivienda extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Ocupación por Vivienda en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'sociedad-ocupacion-por-vivienda';
        $this->descripcion  = 'Promedio de ocupantes por vivienda. Difiere del índice de hacinamiento en que el segundo es resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.';
        $this->claves       = 'Matamoros, Vivienda';
        $this->categorias   = array('Vivienda');
        $this->region_nivel = 131;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Promedio de ocupantes por vivienda. Difiere del índice de hacinamiento en que el segundo es resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</p>

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
            <td class="derecha">4.1000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Promedio.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx">INEGI. Censos de población y vivienda 2010</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Ocupación por Vivienda</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Ocupación por Vivienda</h3>
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
            <td class="derecha">3.7000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td class="derecha">3.9000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">4.1000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">4.1000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">3.9500</td>
            <td>INEGI. Censos de Población y Vivienda</td>
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
      data: [{ region: 'Torreón', dato: 3.7000 },{ region: 'Gómez Palacio', dato: 3.9000 },{ region: 'Lerdo', dato: 4.1000 },{ region: 'Matamoros', dato: 4.1000 },{ region: 'La Laguna', dato: 3.9500 }],
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

} // Clase SociedadOcupacionPorVivienda

?>
