<?php
/**
 * SeguridadTasaDeRoboDeVehiculos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLerdo;

/**
 * Clase SeguridadTasaDeRoboDeVehiculos
 */
class SeguridadTasaDeRoboDeVehiculos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tasa de Robo de VehÍculos en Lerdo';
        $this->directorio  = 'lib/SMIIndicadoresLerdo';
        $this->archivo     = 'seguridad-tasa-de-robo-de-vehiculos';
        $this->descripcion = 'Cantidad de robos de vehículos por cada 100 mil habitantes.';
        $this->claves      = 'Lerdo, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Cantidad de robos de vehículos por cada 100 mil habitantes.

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
<td class="derecha">148.2800</td>
<td>SNSP</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Por cada 100 mil.




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
<td class="derecha">232.8200</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">347.4300</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">113.2000</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">243.5600</td>
<td>SNSP</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadTasaDeRoboDeVehiculos

?>
