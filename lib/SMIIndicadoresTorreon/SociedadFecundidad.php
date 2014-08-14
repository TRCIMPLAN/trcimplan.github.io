<?php
/**
 * SociedadFecundidad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SociedadFecundidad
 */
class SociedadFecundidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Fecundidad en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'sociedad-fecundidad';
        $this->descripcion = 'Tasa de fecundidad.';
        $this->claves      = 'Torreón, Género, Población';
        $this->categorias  = array('Género', 'Población');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Tasa de fecundidad.

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
<td class="centrado">31/12/2008</td>
<td class="derecha">2.2000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">2.1700</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">2.1400</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">2.1400</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">2.1300</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.



<h4>Gráfica</h4>

<div id="Morrisvfnqzgll" class="grafica"></div>



FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisvfnqzgll === 'undefined') {
    varMorrisvfnqzgll = Morris.Line({
      element: 'Morrisvfnqzgll',
      data: [{ fecha: '2008-12-31', dato: 2.2000 },{ fecha: '2009-12-31', dato: 2.1700 },{ fecha: '2010-12-31', dato: 2.1400 },{ fecha: '2011-12-31', dato: 2.1400 },{ fecha: '2012-12-31', dato: 2.1300 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // constructor

} // Clase SociedadFecundidad

?>
