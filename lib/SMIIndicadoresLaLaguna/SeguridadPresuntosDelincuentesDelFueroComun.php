<?php
/**
 * SeguridadPresuntosDelincuentesDelFueroComun.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadPresuntosDelincuentesDelFueroComun
 */
class SeguridadPresuntosDelincuentesDelFueroComun extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Presuntos Delincuentes del Fuero Común en La Laguna';
        $this->directorio  = 'lib/SMIIndicadoresLaLaguna';
        $this->archivo     = 'seguridad-presuntos-delincuentes-del-fuero-comun';
        $this->descripcion = 'Cantidad de presuntos delincuentes registrados en los juzgados de primera instancia del fuero común por año.';
        $this->claves      = 'La Laguna, Delincuencia';
        $this->categorias  = array('Delincuencia');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Cantidad de presuntos delincuentes registrados en los juzgados de primera instancia del fuero común por año.

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
<td class="derecha">1,301</td>
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
<td class="derecha">765</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">384</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">118</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">34</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadPresuntosDelincuentesDelFueroComun

?>
