<?php
/**
 * SociedadMadresAdolescentes.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadMadresAdolescentes
 */
class SociedadMadresAdolescentes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Madres Adolescentes en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-madres-adolescentes';
        $this->descripcion = 'Total de partos registrados (nacidos vivos) de mujeres entre 10 y 18 años de edad';
        $this->claves      = 'Torreón, Grupos Vulnerables, Género';
        $this->categorias  = array('Grupos Vulnerables', 'Género');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Total de partos registrados (nacidos vivos) de mujeres entre 10 y 18 años de edad</p>

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
            <td class="derecha">2,302</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2009</td>
            <td class="derecha">2,056</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">1,442</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">1,296</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">1,198</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2013</td>
            <td class="derecha">1,778</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Fuente: Dirección General de Información de Salud (DGIS). [en linea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaria de Salud. <a href="http://www.sinais.salud.gob.mx">SINAIS</a></p>

    </div>
    <div class="tab-pane active" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morrisflcweloz" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#smi-indicador a:first').tab('show')
});
// LENGUETA
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisflcweloz === 'undefined') {
    varMorrisflcweloz = Morris.Line({
      element: 'Morrisflcweloz',
      data: [{ fecha: '2008-12-31', dato: 2302 },{ fecha: '2009-12-31', dato: 2056 },{ fecha: '2010-12-31', dato: 1442 },{ fecha: '2011-12-31', dato: 1296 },{ fecha: '2012-12-31', dato: 1198 },{ fecha: '2013-12-31', dato: 1778 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
FINAL;
    } // constructor

} // Clase SociedadMadresAdolescentes

?>
