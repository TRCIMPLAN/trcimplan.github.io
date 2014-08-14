<?php
/**
 * SeguridadPresuntosDelincuentesDelFueroFederal.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadPresuntosDelincuentesDelFueroFederal
 */
class SeguridadPresuntosDelincuentesDelFueroFederal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Presuntos Delincuentes del Fuero Federal en Gómez Palacio';
        $this->directorio  = 'lib/SMIIndicadoresGomezPalacio';
        $this->archivo     = 'seguridad-presuntos-delincuentes-del-fuero-federal';
        $this->descripcion = 'Presuntos delincuentes registrados en los juzgados de primera instancia en materia penal del fuero federal';
        $this->claves      = 'Gómez Palacio, Delincuencia';
        $this->categorias  = array('Delincuencia');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Presuntos delincuentes registrados en los juzgados de primera instancia en materia penal del fuero federal

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
<td class="derecha">130</td>
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
<td class="derecha">194</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">29</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">55</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">408</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadPresuntosDelincuentesDelFueroFederal

?>
