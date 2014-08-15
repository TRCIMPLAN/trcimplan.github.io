<?php
/**
 * SeguridadAccidentesVialesFatales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SeguridadAccidentesVialesFatales
 */
class SeguridadAccidentesVialesFatales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Accidentes Viales Fatales en Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'seguridad-accidentes-viales-fatales';
        $this->descripcion = 'Cantidad de accidentes viales fatales por año.';
        $this->claves      = 'Lerdo, Vialidad';
        $this->categorias  = array('Vialidad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Cantidad de accidentes viales fatales por año.

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
<td>2012-12-31</td>
<td class="derecha">23</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">29</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">3</td>
<td>INEGI</td>
<td>Número de accidentes registrados durante el año 2012.</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">66</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadAccidentesVialesFatales

?>
