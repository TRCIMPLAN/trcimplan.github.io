<?php
/**
 * SeguridadTasaDeDelitos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadTasaDeDelitos
 */
class SeguridadTasaDeDelitos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tasa de Delitos en Gómez Palacio';
        $this->directorio  = 'lib/SMIIndicadoresGomezPalacio';
        $this->archivo     = 'seguridad-tasa-de-delitos';
        $this->descripcion = 'Delitos por cada 100 mil habitantes';
        $this->claves      = 'Gómez Palacio, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Delitos por cada 100 mil habitantes

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
<td class="derecha">1,078.3200</td>
<td>SNSP</td>
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
<td>2013-12-31</td>
<td class="derecha">1,466.3600</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">706.6500</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">820.2700</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">1,216.7700</td>
<td>SNSP</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadTasaDeDelitos

?>
