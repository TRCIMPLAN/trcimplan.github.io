<?php
/**
 * EconomiaTotalDeEmpresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaTotalDeEmpresas
 */
class EconomiaTotalDeEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Total de Empresas en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-total-de-empresas';
        $this->descripcion = '';
        $this->claves      = 'Lerdo, Empresas';
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
            <td class="derecha">158</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/07/2014</td>
            <td class="derecha">178</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Empresas.</p>
      <h3>Observaciones</h3>
<p>Las empresas de La Laguna representan el 1.34% del total de 666,684 empresas a nivel nacional para el año 2013.
Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morrisalunqgwr" class="grafica"></div>
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
            <td class="derecha">6,671</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2014-07-31</td>
            <td class="derecha">7,402</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="derecha">1,942</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-07-31</td>
            <td class="derecha">2,032</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">166</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-07-31</td>
            <td class="derecha">173</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">8,937</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-07-31</td>
            <td class="derecha">9,785</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td class="derecha">16,577</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-07-31</td>
            <td class="derecha">17,810</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td class="derecha">6,941</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-07-31</td>
            <td class="derecha">7,193</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td class="derecha">666,684</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-07-31</td>
            <td class="derecha">701,136</td>
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
  if (typeof varMorrisalunqgwr === 'undefined') {
    varMorrisalunqgwr = Morris.Line({
      element: 'Morrisalunqgwr',
      data: [{ fecha: '2013-12-31', dato: 158 },{ fecha: '2014-07-31', dato: 178 }],
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

} // Clase EconomiaTotalDeEmpresas

?>
