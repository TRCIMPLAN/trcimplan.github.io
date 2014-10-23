<?php
/**
 * SeguridadRobosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadRobosTotales
 */
class SeguridadRobosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Robos Totales en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'seguridad-robos-totales';
        $this->descripcion = 'Cantidad total de robos en el mes.';
        $this->claves      = 'Gómez Palacio';
        $this->categorias  = array();
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetashbcjowyd">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Cantidad total de robos en el mes.
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
<td class="centrado">31/01/2014</td>
<td class="derecha">320</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">28/02/2014</td>
<td class="derecha">271</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">345</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/04/2014</td>
<td class="derecha">338</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/05/2014</td>
<td class="derecha">281</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">183</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisegufceeg" class="grafica"></div>
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
<td>2014-01-31</td>
<td class="derecha">552</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-02-28</td>
<td class="derecha">485</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-03-31</td>
<td class="derecha">397</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-04-30</td>
<td class="derecha">360</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-05-31</td>
<td class="derecha">575</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">392</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-01-31</td>
<td class="derecha">53</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-02-28</td>
<td class="derecha">48</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">52</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-04-30</td>
<td class="derecha">39</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-05-31</td>
<td class="derecha">39</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">43</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-01-31</td>
<td class="derecha">27</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-02-28</td>
<td class="derecha">32</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">31</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-04-30</td>
<td class="derecha">26</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-05-31</td>
<td class="derecha">32</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">20</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-01-31</td>
<td class="derecha">952</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-02-28</td>
<td class="derecha">836</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">825</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-04-30</td>
<td class="derecha">763</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-05-31</td>
<td class="derecha">927</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">638</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
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
  $('#Lenguetashbcjowyd a:first').tab('show')
});
// LENGUETA
$('#Lenguetashbcjowyd a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisegufceeg === 'undefined') {
    varMorrisegufceeg = Morris.Line({
      element: 'Morrisegufceeg',
      data: [{ fecha: '2014-01-31', dato: 320 },{ fecha: '2014-02-28', dato: 271 },{ fecha: '2014-03-31', dato: 345 },{ fecha: '2014-04-30', dato: 338 },{ fecha: '2014-05-31', dato: 281 },{ fecha: '2014-06-30', dato: 183 }],
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

} // Clase SeguridadRobosTotales

?>
