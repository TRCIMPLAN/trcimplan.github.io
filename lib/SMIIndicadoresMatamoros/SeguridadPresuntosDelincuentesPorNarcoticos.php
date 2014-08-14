<?php
/**
 * SeguridadPresuntosDelincuentesPorNarcoticos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresMatamoros;

/**
 * Clase SeguridadPresuntosDelincuentesPorNarcoticos
 */
class SeguridadPresuntosDelincuentesPorNarcoticos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Presuntos Delincuentes por Narcóticos en Matamoros';
        $this->directorio  = 'lib/SMIIndicadoresMatamoros';
        $this->archivo     = 'seguridad-presuntos-delincuentes-por-narcoticos';
        $this->descripcion = 'Presuntos delincuentes por delitos en materia de narcóticos registrados en los juzgados del fuero federal.';
        $this->claves      = 'Matamoros, Delincuencia';
        $this->categorias  = array('Delincuencia');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Presuntos delincuentes por delitos en materia de narcóticos registrados en los juzgados del fuero federal.

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
<td class="centrado">31/12/2008</td>
<td class="derecha">11</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.




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
<td>2008-12-31</td>
<td class="derecha">111</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">84</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">22</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">228</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadPresuntosDelincuentesPorNarcoticos

?>
