<?php
/**
 * EconomiaGrandesEmpresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaGrandesEmpresas
 */
class EconomiaGrandesEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Grandes Empresas en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'economia-grandes-empresas';
        $this->descripcion = 'Porcentaje del total de empresas que cuentan con más de 250 empleados.';
        $this->claves      = 'Gómez Palacio, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasypoybidc">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Porcentaje del total de empresas que cuentan con más de 250 empleados.
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
<td class="derecha">0.41 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/07/2014</td>
<td class="derecha">0.98 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
<h4>Observaciones</h4>
A nivel nacional, el 0.63% de las empresas son grandes.

Datos obtenidos de [SIEM](http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrishdoqtxkc" class="grafica"></div>
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
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">0.53 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-07-31</td>
<td class="derecha">1.07 %</td>
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
  $('#Lenguetasypoybidc a:first').tab('show')
});
// LENGUETA
$('#Lenguetasypoybidc a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrishdoqtxkc === 'undefined') {
    varMorrishdoqtxkc = Morris.Line({
      element: 'Morrishdoqtxkc',
      data: [{ fecha: '2013-12-31', dato: 0.4100 },{ fecha: '2014-07-31', dato: 0.9800 }],
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
