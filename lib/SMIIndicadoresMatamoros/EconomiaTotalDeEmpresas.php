<?php
/**
 * EconomiaTotalDeEmpresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaTotalDeEmpresas
 */
class EconomiaTotalDeEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Total de Empresas en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'economia-total-de-empresas';
        $this->descripcion = '';
        $this->claves      = 'Matamoros, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetastcdromob">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>

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
<td class="derecha">166</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/07/2014</td>
<td class="derecha">173</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad de Empresas
<h4>Observaciones</h4>
Las empresas de La Laguna representan el 1.34% del total de 666,684 empresas a nivel nacional para el año 2013.
Datos obtenidos de [SIEM](http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisemhpmeoc" class="grafica"></div>
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
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">158</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-07-31</td>
<td class="derecha">178</td>
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
  $('#Lenguetastcdromob a:first').tab('show')
});
// LENGUETA
$('#Lenguetastcdromob a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisemhpmeoc === 'undefined') {
    varMorrisemhpmeoc = Morris.Line({
      element: 'Morrisemhpmeoc',
      data: [{ fecha: '2013-12-31', dato: 166 },{ fecha: '2014-07-31', dato: 173 }],
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
