<?php
/**
 * GobiernoCompetenciaElectoral.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLaLaguna;

/**
 * Clase GobiernoCompetenciaElectoral
 */
class GobiernoCompetenciaElectoral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Competencia Electoral en La Laguna';
        $this->directorio  = 'lib/SMIIndicadoresLaLaguna';
        $this->archivo     = 'gobierno-competencia-electoral';
        $this->descripcion = 'Diferencia entre los dos candidatos con más votación entre el total de votos.';
        $this->claves      = 'La Laguna, Participación Ciudadana, Gobierno';
        $this->categorias  = array('Participación Ciudadana', 'Gobierno');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Diferencia entre los dos candidatos con más votación entre el total de votos.

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
<td class="centrado">07/07/2013</td>
<td class="derecha">6.70 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.




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
<td>2013-07-07</td>
<td class="derecha">1.77 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-06-30</td>
<td class="derecha">4.48 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-07-02</td>
<td class="derecha">5.15 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-07-07</td>
<td class="derecha">39.67 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase GobiernoCompetenciaElectoral

?>
