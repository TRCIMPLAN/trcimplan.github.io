<?php
/**
 * SociedadIndiceDeHacinamiento.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadIndiceDeHacinamiento
 */
class SociedadIndiceDeHacinamiento extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Índice de hacinamiento en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'sociedad-indice-de-hacinamiento';
        $this->descripcion  = 'Resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.';
        $this->claves       = 'Gómez Palacio, Bienestar, Vivienda';
        $this->categorias   = array('Bienestar', 'Vivienda');
        $this->region_nivel = 111;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</p>

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
            <td class="derecha">0.9700</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Utilizado internacionalmente como Índice de Hacinamiento equivale al indicador "Promedio de ocupantes por cuarto en viviendas particulares habitadas" de los Censos y Conteos de Población y Vivienda de INEGI.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Índice de hacinamiento</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Índice de hacinamiento</h3>
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
            <td class="derecha">0.8800</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-06-25</td>
            <td class="derecha">0.9700</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-06-25</td>
            <td class="derecha">1.0500</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-06-25</td>
            <td class="derecha">1.0900</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-06-25</td>
            <td class="derecha">1.0600</td>
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
      data: [{ region: 'Torreón', dato: 0.8800 },{ region: 'Gómez Palacio', dato: 0.9700 },{ region: 'Lerdo', dato: 1.0500 },{ region: 'Matamoros', dato: 1.0900 },{ region: 'La Laguna', dato: 1.0600 }],
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

} // Clase SociedadIndiceDeHacinamiento

?>
