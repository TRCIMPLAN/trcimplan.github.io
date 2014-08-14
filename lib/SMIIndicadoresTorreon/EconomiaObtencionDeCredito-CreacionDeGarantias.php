<?php
/**
 * EconomiaObtencionDeCredito-CreacionDeGarantias.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaObtencionDeCredito-CreacionDeGarantias
 */
class EconomiaObtencionDeCredito-CreacionDeGarantias extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Obtención de crédito - Creación de garantías en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-obtencion-de-credito---creacion-de-garantias';
        $this->descripcion = 'Días transcurridos en el proceso de obtención de un crédito.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Días transcurridos en el proceso de obtención de un crédito.

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
<td class="derecha">13</td>
<td>Doing Business</td>
<td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son:

- Costo (% del valor del préstamo): 1.29 
- Ranking en crear una garantía: 6</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Días.





FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase EconomiaObtencionDeCredito-CreacionDeGarantias

?>
