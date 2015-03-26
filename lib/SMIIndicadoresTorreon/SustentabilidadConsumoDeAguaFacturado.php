<?php
/**
 * SustentabilidadConsumoDeAguaFacturado.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadConsumoDeAguaFacturado
 */
class SustentabilidadConsumoDeAguaFacturado extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Consumo de Agua Facturado en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sustentabilidad-consumo-de-agua-facturado';
        $this->descripcion  = 'Consumo anual de agua por persona expresado en metros cúbicos.';
        $this->claves       = 'Torreón, Recursos Naturales, Objetivos del Milenio';
        $this->categorias   = array('Recursos Naturales', 'Objetivos del Milenio');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Consumo anual de agua por persona expresado en metros cúbicos.</p>

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
            <td>31/12/2010</td>
            <td>47.7700</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>46.7500</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>44.5700</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>41.9900</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Metros cúbicos per cápita.</p>
      <h3>Observaciones</h3>
<p>Total facturado dividido entre la población.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Consumo de Agua Facturado en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2010-12-31', dato: 47.7700 },{ fecha: '2011-12-31', dato: 46.7500 },{ fecha: '2012-12-31', dato: 44.5700 },{ fecha: '2013-12-31', dato: 41.9900 }],
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
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SustentabilidadConsumoDeAguaFacturado

?>
