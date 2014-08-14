<?php
/**
 * GobiernoParticipacionElectoral.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresMatamoros;

/**
 * Clase GobiernoParticipacionElectoral
 */
class GobiernoParticipacionElectoral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Participación Electoral en Matamoros';
        $this->directorio  = 'lib/SMIIndicadoresMatamoros';
        $this->archivo     = 'gobierno-participacion-electoral';
        $this->descripcion = 'Porcentaje de personas que emitieron su voto.';
        $this->claves      = 'Matamoros, Participación Ciudadana';
        $this->categorias  = array('Participación Ciudadana');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de personas que emitieron su voto.

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
<td class="centrado">01/07/2012</td>
<td class="derecha">64.58 %</td>
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
<td>2012-07-01</td>
<td class="derecha">53.75 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-07-01</td>
<td class="derecha">58.31 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-07-01</td>
<td class="derecha">59.57 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-07-01</td>
<td class="derecha">57.68 %</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase GobiernoParticipacionElectoral

?>
