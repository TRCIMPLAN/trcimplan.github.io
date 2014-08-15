<?php
/**
 * SustentabilidadSobreexplotacionDelAcuifero.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadSobreexplotacionDelAcuifero
 */
class SustentabilidadSobreexplotacionDelAcuifero extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Sobreexplotación del Acuífero en Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'sustentabilidad-sobreexplotacion-del-acuifero';
        $this->descripcion = '';
        $this->claves      = 'Lerdo, Recursos Naturales';
        $this->categorias  = array('Recursos Naturales');
        $this->contenido   = <<<FINAL


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
<td class="centrado">31/12/2010</td>
<td class="derecha">28.00 %</td>
<td>IMCO-CONAGUA</td>
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
<td>2010-12-31</td>
<td class="derecha">100.00 %</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">100.00 %</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">100.00 %</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">82.00 %</td>
<td>IMCO-CONAGUA</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SustentabilidadSobreexplotacionDelAcuifero

?>
