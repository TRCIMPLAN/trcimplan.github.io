<?php
/**
 * SociedadPromedioDeOcupantesPorVivienda.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadPromedioDeOcupantesPorVivienda
 */
class SociedadPromedioDeOcupantesPorVivienda extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Promedio de Ocupantes por Vivienda en Gómez Palacio';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-promedio-de-ocupantes-por-vivienda';
        $this->descripcion = 'Resultado de dividir el número de personas que residen en viviendas particulares habitadas, entre el número de esas viviendas. Excluye la estimación del número de personas y de
viviendas particulares sin información de ocupantes.';
        $this->claves      = 'Gómez Palacio, Bienestar, Vivienda';
        $this->categorias  = array('Bienestar', 'Vivienda');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Resultado de dividir el número de personas que residen en viviendas particulares habitadas, entre el número de esas viviendas. Excluye la estimación del número de personas y de
viviendas particulares sin información de ocupantes.</p>

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
            <td class="derecha">3.9000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Difiere del índice de hacinamiento en que el segundo es resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Promedio de Ocupantes por Vivienda</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Promedio de Ocupantes por Vivienda</h3>
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
            <td class="derecha">3.7200</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-06-25</td>
            <td class="derecha">3.9000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-06-25</td>
            <td class="derecha">4.0600</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-06-25</td>
            <td class="derecha">4.1000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-06-25</td>
            <td class="derecha">3.8400</td>
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
      data: [{ region: 'Torreón', dato: 3.7200 },{ region: 'Gómez Palacio', dato: 3.9000 },{ region: 'Lerdo', dato: 4.0600 },{ region: 'Matamoros', dato: 4.1000 },{ region: 'La Laguna', dato: 3.8400 }],
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

} // Clase SociedadPromedioDeOcupantesPorVivienda

?>
