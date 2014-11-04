<?php
/**
 * EconomiaGrandesEmpresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaGrandesEmpresas
 */
class EconomiaGrandesEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Grandes Empresas en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-grandes-empresas';
        $this->descripcion = 'Porcentaje del total de empresas que cuentan con más de 250 empleados.';
        $this->claves      = 'La Laguna, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje del total de empresas que cuentan con más de 250 empleados.</p>

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
            <td class="centrado">31/12/2013</td>
            <td class="derecha">0.53 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/07/2014</td>
            <td class="derecha">1.07 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>A nivel nacional, el 0.63% de las empresas son grandes.</p>

<p>Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morrisjydrzntw" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="smi-indicador-otras_regiones">
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
            <td>2013-12-31</td>
            <td class="derecha">0.58 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2014-07-31</td>
            <td class="derecha">1.13 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="derecha">0.41 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-07-31</td>
            <td class="derecha">0.98 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="centrado">ND</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-07-31</td>
            <td class="derecha">0.00 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="centrado">ND</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-07-31</td>
            <td class="derecha">0.58 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td class="derecha">0.58 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-07-31</td>
            <td class="derecha">1.04 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td class="derecha">0.27 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-07-31</td>
            <td class="derecha">0.78 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td class="derecha">0.63 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-07-31</td>
            <td class="derecha">0.59 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
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
  if (typeof varMorrisjydrzntw === 'undefined') {
    varMorrisjydrzntw = Morris.Line({
      element: 'Morrisjydrzntw',
      data: [{ fecha: '2013-12-31', dato: 0.5300 },{ fecha: '2014-07-31', dato: 1.0700 }],
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

} // Clase EconomiaGrandesEmpresas

?>
