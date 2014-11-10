<?php
/**
 * EconomiaPermisoDeConstruccion.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaPermisoDeConstruccion
 */
class EconomiaPermisoDeConstruccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Permiso de Construcción en Torreón';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-permiso-de-construccion';
        $this->descripcion = 'Número de días necesarios para conseguir un permiso de construcción.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Número de días necesarios para conseguir un permiso de construcción.</p>

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
            <td class="centrado">31/12/2012</td>
            <td class="derecha">72</td>
            <td>Doing Business</td>
            <td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 11
- Costo (% del ingreso per cápita): 37.4 
- Ranking en permiso de construcción: 10</td>
          </tr>
          <tr>
            <td class="centrado">31/10/2013</td>
            <td class="derecha">107</td>
            <td>Doing Business</td>
            <td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en permiso de construcción fueron los siguientes para Torreón: 
Procedimientos (número) = 13 ; 
Costo (% de ingreso per cápita) = 40,6</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Días.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="graficaDatos" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2012-12-31', dato: 72 },{ fecha: '2013-10-31', dato: 107 }],
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

} // Clase EconomiaPermisoDeConstruccion

?>
