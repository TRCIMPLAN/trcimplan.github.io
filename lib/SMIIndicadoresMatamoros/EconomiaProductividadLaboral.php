<?php
/**
 * EconomiaProductividadLaboral.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresMatamoros;

/**
 * Clase EconomiaProductividadLaboral
 */
class EconomiaProductividadLaboral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Productividad Laboral en Matamoros';
        $this->directorio  = 'lib/SMIIndicadoresMatamoros';
        $this->archivo     = 'economia-productividad-laboral';
        $this->descripcion = 'PIB sin petróleo / PEA.';
        $this->claves      = 'Matamoros, Macroeconomía, Empleo';
        $this->categorias  = array('Macroeconomía', 'Empleo');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
PIB sin petróleo / PEA.

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
<td class="derecha">$ 45,744.00</td>
<td>IMCO</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Pesos.

<h4>Observaciones</h4>
Indicador tomado del Índice de Competitividad Urbana 2012 del Instituto Mexicano para la Competitividad. Ir a [base de datos](http://porciudad.comparadondevives.org/contacto)


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
<td class="derecha">$ 530,143.00</td>
<td>IMCO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">$ 462,597.00</td>
<td>IMCO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">$ 51,284.00</td>
<td>IMCO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">$ 421,204.00</td>
<td>IMCO</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase EconomiaProductividadLaboral

?>
