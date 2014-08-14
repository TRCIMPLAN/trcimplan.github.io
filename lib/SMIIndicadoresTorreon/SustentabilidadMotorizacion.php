<?php
/**
 * SustentabilidadMotorizacion.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadMotorizacion
 */
class SustentabilidadMotorizacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Motorización en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'sustentabilidad-motorizacion';
        $this->descripcion = 'Vehículos automotores registrados en circulación.';
        $this->claves      = 'Torreón, Recursos Naturales, Movilidad, Vialidad';
        $this->categorias  = array('Recursos Naturales', 'Movilidad', 'Vialidad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Vehículos automotores registrados en circulación.

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
<td class="centrado">31/12/2012</td>
<td class="derecha">226</td>
<td>INEGI</td>
<td>VEHICULOS AUTOMOTORES REGISTRADOS EN CIRCULACIÓN, EXCLUYE MOTOCICLETAS</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Por cada mil habitantes.

<h4>Observaciones</h4>
Índice de motorización. Consulta la [Base de Datos](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/vehiculos.asp?s=est&c=13158&proy=vmrc_vehiculos)


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
<td>2012-12-31</td>
<td class="derecha">308</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">235</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">162</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">244</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-12-31</td>
<td class="derecha">247</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-12-31</td>
<td class="derecha">282</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-12-31</td>
<td class="derecha">299</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SustentabilidadMotorizacion

?>
