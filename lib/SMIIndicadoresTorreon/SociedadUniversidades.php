<?php
/**
 * SociedadUniversidades.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadUniversidades
 */
class SociedadUniversidades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Universidades en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sociedad-universidades';
        $this->descripcion  = 'Planteles de Instituciones de Educación Superior.';
        $this->claves       = 'Torreón, Educación';
        $this->categorias   = array('Educación');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Planteles de Instituciones de Educación Superior.</p>

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
            <td class="centrado">31/03/2014</td>
            <td class="derecha">18</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Las escuelas y facultades de la UAdeC son contabilizadas en una unidad. Únicamente se contabilizan los planteles ubicados en Matamoros, Torreón, Gómez Palacio y Lerdo.</p>

<ul>
<li>Escuela Normal de la Laguna</li>
<li>Escuela Normal de Torreón</li>
<li>Instituto 18 de Marzo</li>
<li>Instituto Superior Francisco Gonzalez de la Vega</li>
<li>Instituto Tecnológico de Torreón (ITA 10)</li>
<li>Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Laguna</li>
<li>Instituto Tecnológico de la Laguna</li>
<li>Instituto Tecnológico Superior de Lerdo</li>
<li>Universidad Autónoma Agraria Antonio Narro</li>
<li>Universidad Autónoma de Coahuila</li>
<li>Universidad Autónoma de la Laguna</li>
<li>Universidad Autónoma del Noreste</li>
<li>Universidad Iberoamericana</li>
<li>Universidad Juárez del Estado de Durango</li>
<li>Universidad La Salle</li>
<li>Universidad Pedagógica Nacional</li>
<li>Universidad del Valle de México</li>
<li>Universidad Tec Milenio</li>
<li>Universidad Interamericana para el Desarrollo</li>
<li>Universidad Politécnica de Gómez Palacio</li>
<li>Universidad del Desarrollo Profesional</li>
<li>National Institute of Information Technologies</li>
<li>Universidad Tecnológica de Torreón</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Matamoros</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Torreón</li>
<li>Universidad Autónoma de Durango Campus Gómez Palacio</li>
<li>Universidad Autónoma de Durango Campus Torreón</li>
<li>Instituto Ma Esther Zuno de Echeverría</li>
<li>Instituto de Estudios Superiores y Educación Normal Gral. Lázaro Cárdenas</li>
<li>Instituto Tecnológico de Lerdo</li>
<li>Universidad Pedagógica de Durango-UGP</li>
</ul>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Universidades</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Universidades</h3>
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
            <td>2014-03-31</td>
            <td class="derecha">18</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td class="derecha">9</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td class="derecha">3</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td class="derecha">1</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td class="derecha">31</td>
            <td>CIESLAG-FOMEC</td>
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
      data: [{ region: 'Torreón', dato: 18 },{ region: 'Gómez Palacio', dato: 9 },{ region: 'Lerdo', dato: 3 },{ region: 'Matamoros', dato: 1 },{ region: 'La Laguna', dato: 31 }],
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

} // Clase SociedadUniversidades

?>
