<?php
/**
 * EconomiaAperturaDeNegocio.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaAperturaDeNegocio
 */
class EconomiaAperturaDeNegocio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Apertura de Negocio en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-apertura-de-negocio';
        $this->descripcion = 'Número de días necesarios para el trámite de apertura de un negocio.';
        $this->claves      = 'Torreón, Empresas, Doing Bussines';
        $this->categorias  = array('Empresas', 'Doing Bussines');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasunmvfidb">
    <li class="active"><a href="#datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="datos">
      <h4>Descripción</h4>
Número de días necesarios para el trámite de apertura de un negocio.
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
<td class="derecha">28</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son: 

- # de procedimientos/trámites: 9 
- Costo (% del PIB per cápita): 13 
- Ranking en apertura de negocio: 6</td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">11</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son:

- # de procedimientos: 7
- Costo (% del ingreso per cápita): 12.8

- Ranking en apertura de negocio: 22</td>
</tr>
<tr>
<td class="centrado">31/10/2013</td>
<td class="derecha">9.5000</td>
<td>Doing Business</td>
<td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014.

Los Indicadores complementarios en apertura de un negocio fueron los siguientes para Torreón:
Procedimientos (número) = 7 ; 
Costo (% de ingreso per cápita) = 21,2 ;
Requisito de capital mínimo pagado (% de ingreso per cápita) = 0,0</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Días
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasunmvfidb a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaAperturaDeNegocio

?>
