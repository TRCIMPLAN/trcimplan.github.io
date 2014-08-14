<?php
/**
 * EconomiaRegistroDePropiedades.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaRegistroDePropiedades
 */
class EconomiaRegistroDePropiedades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Registro de Propiedades en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-registro-de-propiedades';
        $this->descripcion = 'Días que toma el trámite para el registro de una propiedad.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Días que toma el trámite para el registro de una propiedad.

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
<td class="derecha">51</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son: 

- # de procedimientos/trámites: 8
- Costo (% del valor de la propiedad): 4.27 
- Ranking en registro de propiedades: 29</td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">33</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 6 
- Costo (% del valor de la propiedad): 4.3 
- Ranking en registro de propiedades: 22</td>
</tr>
<tr>
<td class="centrado">31/10/2013</td>
<td class="derecha">28</td>
<td>Doing Business</td>
<td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en registro de propiedades fueron los siguientes para Torreón: 
Procedimientos (número) = 6 ; 
Costo (% del valor de la propiedad) = 4,5</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Días.



<h4>Gráfica</h4>

<div id="Morrisrnqcghxq" class="grafica"></div>



FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisrnqcghxq === 'undefined') {
    varMorrisrnqcghxq = Morris.Line({
      element: 'Morrisrnqcghxq',
      data: [{ fecha: '2007-12-31', dato: 51 },{ fecha: '2012-12-31', dato: 33 },{ fecha: '2013-10-31', dato: 28 }],
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

} // Clase EconomiaRegistroDePropiedades

?>
