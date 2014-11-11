<?php
/**
 * EconomiaSectoresQueHanFrenadoElCrecimiento20082012.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaSectoresQueHanFrenadoElCrecimiento20082012
 */
class EconomiaSectoresQueHanFrenadoElCrecimiento20082012 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Sectores que Han Frenado el Crecimiento (2008-2012) en Matamoros';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'economia-sectores-que-han-frenado-el-crecimiento--2008-2012-';
        $this->descripcion = 'Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.';
        $this->claves      = 'Matamoros, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador-">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</p>

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
            <td class="centrado">31/12/2008</td>
            <td class="derecha">56.40 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>A nivel nacional, el porcentaje de producción en sectores con tasa promedio de crecimiento negativo es de 25.66%.</p>

<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a> y <a href="http://www.cefp.gob.mx/Pub_Macro_Estadisticas.htm">Centro de Estudios de las Finanzas Públicas</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
<h3>En otras regiones</h3>
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
            <td class="derecha">7.36 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td class="derecha">9.84 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">40.97 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td class="derecha">16.81 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td class="derecha">25.66 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador- a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaSectoresQueHanFrenadoElCrecimiento20082012

?>
