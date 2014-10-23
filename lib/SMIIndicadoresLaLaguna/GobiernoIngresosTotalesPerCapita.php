<?php
/**
 * GobiernoIngresosTotalesPerCapita.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase GobiernoIngresosTotalesPerCapita
 */
class GobiernoIngresosTotalesPerCapita extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Ingresos Totales Per Cápita en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'gobierno-ingresos-totales-per-capita';
        $this->descripcion = 'Ingresos totales del municipio entre el total de la población.';
        $this->claves      = 'La Laguna, Finanzas Públicas';
        $this->categorias  = array('Finanzas Públicas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasunjhmlsg">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Ingresos totales del municipio entre el total de la población.
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
<td class="derecha">$ 2,069.57</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">$ 2,595.45</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">$ 2,623.62</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">$ 2,498.19</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">$ 2,735.96</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">$ 2,772.32</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Pesos
<h4>Observaciones</h4>
El ingreso per cápita a nivel nacional es de:

- 2012 = $2,486.26 
- 2011 = $2,697.76 
- 2010 = $2,458.53 
- 2009 = $2,418.96 
- 2008 = $2,300.63 
- 2007 = $1,865.79 

Datos obtenidos de [INEGI. Estadística de finanzas públicas estatales y municipales](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&c=11289&proy=efipem_fmun)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisznpglxxs" class="grafica"></div>
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
<td>2007-12-31</td>
<td class="derecha">$ 2,312.71</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">$ 2,713.59</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">$ 2,467.92</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2010-12-31</td>
<td class="derecha">$ 2,858.83</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">$ 2,921.67</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">$ 2,753.40</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">$ 2,821.23</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2007-12-31</td>
<td class="derecha">$ 2,015.23</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">$ 2,942.54</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2009-12-31</td>
<td class="derecha">$ 3,429.10</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">$ 2,376.48</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">$ 3,008.95</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">$ 3,328.92</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2007-12-31</td>
<td class="derecha">$ 1,803.84</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">$ 1,921.94</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">$ 2,213.26</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">$ 1,980.37</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">$ 2,255.84</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">$ 2,460.58</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2007-12-31</td>
<td class="derecha">$ 1,155.87</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">$ 1,717.79</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2009-12-31</td>
<td class="derecha">$ 1,623.19</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">$ 1,399.66</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">$ 1,418.38</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">$ 1,594.68</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
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
  $('#Lenguetasunjhmlsg a:first').tab('show')
});
// LENGUETA
$('#Lenguetasunjhmlsg a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisznpglxxs === 'undefined') {
    varMorrisznpglxxs = Morris.Line({
      element: 'Morrisznpglxxs',
      data: [{ fecha: '2007-12-31', dato: 2069.57 },{ fecha: '2008-12-31', dato: 2595.45 },{ fecha: '2009-12-31', dato: 2623.62 },{ fecha: '2010-12-31', dato: 2498.19 },{ fecha: '2011-12-31', dato: 2735.96 },{ fecha: '2012-12-31', dato: 2772.32 }],
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

} // Clase GobiernoIngresosTotalesPerCapita

?>
