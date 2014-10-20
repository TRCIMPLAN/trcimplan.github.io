<?php
/**
 * EconomiaMedianasEmpresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaMedianasEmpresas
 */
class EconomiaMedianasEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Medianas Empresas en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'economia-medianas-empresas';
        $this->descripcion = 'Porcentaje del total de empresas que emplean de 51 a 250 personas.';
        $this->claves      = 'Gómez Palacio, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasfbyzzicr">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Porcentaje del total de empresas que emplean de 51 a 250 personas.
<h4>Información recopilada</h4>
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
<td class="derecha">2.52 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/07/2014</td>
<td class="derecha">2.36 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad de Empresas
<h4>Observaciones</h4>
A nivel nacional el 1.29% de las empresas son medianas.

Datos obtenidos de [SIEM](http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisxtwpcwtg" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <h4>En otras regiones</h4>
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
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">3.16 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-07-31</td>
<td class="derecha">1.69 %</td>
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
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasfbyzzicr a:first').tab('show')
});
// LENGUETA
$('#Lenguetasfbyzzicr a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisxtwpcwtg === 'undefined') {
    varMorrisxtwpcwtg = Morris.Line({
      element: 'Morrisxtwpcwtg',
      data: [{ fecha: '2013-12-31', dato: 2.5200 },{ fecha: '2014-07-31', dato: 2.3600 }],
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

} // Clase EconomiaMedianasEmpresas

?>
