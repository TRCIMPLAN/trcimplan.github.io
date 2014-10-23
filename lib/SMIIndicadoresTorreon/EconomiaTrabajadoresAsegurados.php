<?php
/**
 * EconomiaTrabajadoresAsegurados.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Trabajadores Asegurados en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-trabajadores-asegurados';
        $this->descripcion = 'Evolución del empleo medida en trabajadores asegurados por el IMSS.';
        $this->claves      = 'Torreón, Empleo';
        $this->categorias  = array('Empleo');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasmiomaqav">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Evolución del empleo medida en trabajadores asegurados por el IMSS.
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
<td class="centrado">31/12/2007</td>
<td class="derecha">171,936</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">164,258</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">157,898</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">168,723</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">176,045</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">184,407</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">187,050</td>
<td>IMSS Subdelegación Torreón</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Personas
<h4>Observaciones</h4>
El dato incluye a los trabajadores asegurados de los municipios de la región abarcados por la subdelegación Torreón.

Datos obtenidos de [IMSS](http://201.144.108.20/imssdigital/conoce/estadisticas/pages/memoria2012.aspx)
    </div>
    <div class="tab-pane active" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisgfbsqtnd" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasmiomaqav a:first').tab('show')
});
// LENGUETA
$('#Lenguetasmiomaqav a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisgfbsqtnd === 'undefined') {
    varMorrisgfbsqtnd = Morris.Line({
      element: 'Morrisgfbsqtnd',
      data: [{ fecha: '2007-12-31', dato: 171936 },{ fecha: '2008-12-31', dato: 164258 },{ fecha: '2009-12-31', dato: 157898 },{ fecha: '2010-12-31', dato: 168723 },{ fecha: '2011-12-31', dato: 176045 },{ fecha: '2012-12-31', dato: 184407 },{ fecha: '2013-12-31', dato: 187050 }],
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

} // Clase EconomiaTrabajadoresAsegurados

?>
