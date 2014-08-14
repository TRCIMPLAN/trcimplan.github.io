<?php
/**
 * GobiernoCumplimientoEnInformacionPublicaMinina.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLerdo;

/**
 * Clase GobiernoCumplimientoEnInformacionPublicaMinina
 */
class GobiernoCumplimientoEnInformacionPublicaMinina extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cumplimiento en información pública mínina en Lerdo';
        $this->directorio  = 'lib/SMIIndicadoresLerdo';
        $this->archivo     = 'gobierno-cumplimiento-en-informacion-publica-minina';
        $this->descripcion = 'Cumplimiento sobre total de obligaciones';
        $this->claves      = 'Lerdo, Transparencia';
        $this->categorias  = array('Transparencia');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Cumplimiento sobre total de obligaciones

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
<td class="centrado">31/12/2013</td>
<td class="derecha">79.00 %</td>
<td>ICAI-IDAIP</td>
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
<td>2014-03-03</td>
<td class="derecha">100.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">79.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-03</td>
<td class="derecha">63.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">80.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase GobiernoCumplimientoEnInformacionPublicaMinina

?>
