<?php
/**
 * EconomiaMedianasEmpresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase EconomiaMedianasEmpresas
 */
class EconomiaMedianasEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Medianas Empresas en Lerdo';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'economia-medianas-empresas';
        $this->descripcion = 'Porcentaje del total de empresas que emplean de 51 a 250 personas.';
        $this->claves      = 'Lerdo, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador-">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje del total de empresas que emplean de 51 a 250 personas.</p>

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
            <td class="derecha">3.16 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/07/2014</td>
            <td class="derecha">1.69 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad de Empresas.</p>
      <h3>Observaciones</h3>
<p>A nivel nacional el 1.29% de las empresas son medianas.</p>

<p>Datos obtenidos de <a href="http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1">SIEM</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="graficaDatos" class="grafica"></div>
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
            <td>2013-12-31</td>
            <td class="derecha">2.14 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2014-07-31</td>
            <td class="derecha">1.57 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="derecha">2.52 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-07-31</td>
            <td class="derecha">2.36 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">3.01 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-07-31</td>
            <td class="derecha">1.73 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">2.26 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-07-31</td>
            <td class="derecha">1.74 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td class="derecha">1.95 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-07-31</td>
            <td class="derecha">1.65 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td class="derecha">1.74 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-07-31</td>
            <td class="derecha">1.63 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td class="derecha">1.29 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-07-31</td>
            <td class="derecha">1.19 %</td>
            <td>Sistema de Información Empresarial Mexicano (SIEM)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador- a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2013-12-31', dato: 3.1600 },{ fecha: '2014-07-31', dato: 1.6900 }],
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
  $('#smi-indicador- a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaMedianasEmpresas

?>
