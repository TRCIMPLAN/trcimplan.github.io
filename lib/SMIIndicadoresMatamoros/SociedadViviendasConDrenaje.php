<?php
/**
 * SociedadViviendasConDrenaje.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadViviendasConDrenaje
 */
class SociedadViviendasConDrenaje extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Viviendas con Drenaje en Matamoros';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-viviendas-con-drenaje';
        $this->descripcion = 'Porcentaje de viviendas habitadas que disponen de drenaje.';
        $this->claves      = 'Matamoros, Vivienda';
        $this->categorias  = array('Vivienda');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-mapa" data-toggle="tab">Georreferenciado</a></li>
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-mapa">
<iframe width='100%' height='520' frameborder='0' src='http://sigimplan.cartodb.com/viz/1c55a33e-4a45-11e4-a77d-0e4fddd5de28/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
<h3>Notas</h3>
<p><a href="http://sigimplan.cartodb.com/viz/1c55a33e-4a45-11e4-a77d-0e4fddd5de28/embed_map">Ver este mapa a pantalla completa</a>.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje de viviendas habitadas que disponen de drenaje.</p>

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
            <td class="derecha">91.31 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.inegi.org.mx/biinegi/">Base de Datos</a>.</p>

<p>Enlace al <a href="http://201.159.104.45:8080/apps/implan2.html">Sistema de Información Geográfica</a>.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Viviendas con Drenaje</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Viviendas con Drenaje</h3>
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
            <td class="derecha">98.23 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td class="derecha">95.19 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">93.23 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">91.31 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">96.26 %</td>
            <td>INEGI</td>
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
      data: [{ region: 'Torreón', dato: 98.2300 },{ region: 'Gómez Palacio', dato: 95.1900 },{ region: 'Lerdo', dato: 93.2300 },{ region: 'Matamoros', dato: 91.3100 },{ region: 'La Laguna', dato: 96.2600 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-mapa
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-mapa"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadViviendasConDrenaje

?>
