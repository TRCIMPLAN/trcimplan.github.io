<?php
/**
 * SeguridadRoboDeVehiculos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SeguridadRoboDeVehiculos
 */
class SeguridadRoboDeVehiculos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Robo de Vehículos en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'seguridad-robo-de-vehiculos';
        $this->descripcion = 'Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014';
        $this->claves      = 'Torreón, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014

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
<td class="centrado">30/06/2014</td>
<td class="derecha">259</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
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
<td>Gómez Palacio</td>
<td>2014-06-30</td>
<td class="derecha">201</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-06-30</td>
<td class="derecha">22</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">8</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">490</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadRoboDeVehiculos

?>
