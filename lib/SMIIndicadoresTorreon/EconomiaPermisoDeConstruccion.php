<?php
/**
 * EconomiaPermisoDeConstruccion.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaPermisoDeConstruccion
 */
class EconomiaPermisoDeConstruccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Permiso de Construcción en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-permiso-de-construccion';
        $this->descripcion = 'Número de días necesarios para conseguir un permiso de construcción.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Número de días necesarios para conseguir un permiso de construcción.

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
<b>Unidad:</b> Días.



<h4>Gráfica</h4>

<div id="Morrisfuirtzxw" class="grafica"></div>



FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisfuirtzxw === 'undefined') {
    varMorrisfuirtzxw = Morris.Line({
      element: 'Morrisfuirtzxw',
      data: [{ fecha: '2012-12-31', dato: 72 },{ fecha: '2013-10-31', dato: 107 }],
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

} // Clase EconomiaPermisoDeConstruccion

?>
