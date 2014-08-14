<?php
/**
 * EconomiaEjecucionDeContratos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaEjecucionDeContratos
 */
class EconomiaEjecucionDeContratos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Ejecución de Contratos en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-ejecucion-de-contratos';
        $this->descripcion = 'Días transcurridos para la ejecución de un contrato.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Días transcurridos para la ejecución de un contrato.

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
<td class="derecha">386</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son: 

- Índice de complejidad (1-100): 84 
- Costo (% de la deuda): 20
- Ranking en ejecución de contratos: 19</td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">270</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 37 
- Costo (% de cantidad demandada): 27.9 
- Ranking en ejecución de contratos: 7</td>
</tr>
<tr>
<td class="centrado">31/10/2013</td>
<td class="derecha">270</td>
<td>Doing Business</td>
<td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en ejecución de contratos fueron los siguientes para Torreón: 
Procedimientos (número) = 37 ; 
Costo (% de cantidad demandada) = 27,9</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Días.



<h4>Gráfica</h4>

<div id="Morrisvmezcwve" class="grafica"></div>



FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisvmezcwve === 'undefined') {
    varMorrisvmezcwve = Morris.Line({
      element: 'Morrisvmezcwve',
      data: [{ fecha: '2007-12-31', dato: 386 },{ fecha: '2012-12-31', dato: 270 },{ fecha: '2013-10-31', dato: 270 }],
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

} // Clase EconomiaEjecucionDeContratos

?>
