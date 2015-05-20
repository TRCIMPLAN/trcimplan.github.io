<?php
/**
 * SociedadPromedioDescendenciaPorVaron.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadPromedioDescendenciaPorVaron
 */
class SociedadPromedioDescendenciaPorVaron extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Promedio de Descendencia por Varón en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sociedadpromedio-descendencia-por-varon';
        $this->descripcion  = 'Calcula el promedio estimado de hijos por cada varón.';
        $this->claves       = 'Torreón, Población';
        $this->categorias   = array('Población');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Calcula el promedio estimado de hijos por cada varón.</p>

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
            <td>1.8100</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>1.7700</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>1.7200</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>1.6900</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>1.6600</td>
            <td>IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Estimación propia en base al dato de Ocupación por Vivienda</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Promedio de Descendencia por Varón en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Promedio de Descendencia por Varón</h3>
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
            <td>13/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-vulnerabilidad-social.html">Torreón y la Vulnerabilidad Social</a></td>
            <td>Análisis de los indicadores sobre la infancia, alimentación, educación, maternidad adolescente, adultos mayores, vulnerabilidad por la delincuencia y discapacidad.</td>
          </tr>
          <tr>
            <td>03/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-economica-torreon.html">Equidad Económica en Torreón</a></td>
            <td>Torreón, como la zona metropolitana de La Laguna, se encuentra en una situación favorable en temas de igualdad y cohesión social.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-fecundidad.html">Fecundidad en Torreón</a></td>
            <td>Tasa de fecundidad.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-poblacion-catolica.html">Población Católica en Torreón</a></td>
            <td>Porcentaje de la población que dijo ser, pertenecer o profesar la religión católica.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-poblacion-estimada.html">Población Estimada en Torreón</a></td>
            <td>Población estimada a mitad de año.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-promedio-de-descendencia-por-varon.html">Promedio de Descendencia por Varón en Torreón</a></td>
            <td>Calcula el promedio estimado de hijos por cada varón.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-usuarios-de-internet.html">Usuarios de Internet en Torreón</a></td>
            <td>Porcentaje de la población que usa internet.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2008-12-31', dato: 1.8100 },{ fecha: '2009-12-31', dato: 1.7700 },{ fecha: '2010-12-31', dato: 1.7200 },{ fecha: '2011-12-31', dato: 1.6900 },{ fecha: '2012-12-31', dato: 1.6600 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadPromedioDescendenciaPorVaron

?>
