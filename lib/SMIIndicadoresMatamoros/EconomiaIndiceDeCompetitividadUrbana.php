<?php
/**
 * EconomiaIndiceDeCompetitividadUrbana.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresMatamoros;

/**
 * Clase EconomiaIndiceDeCompetitividadUrbana
 */
class EconomiaIndiceDeCompetitividadUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Competitividad Urbana en Matamoros';
        $this->directorio  = 'lib/SMIIndicadoresMatamoros';
        $this->archivo     = 'economia-indice-de-competitividad-urbana';
        $this->descripcion = 'El índice de Competitividad Urbana (ICU) ha sido dado a conocer por el Instituto Mexicano para la Competitividad (IMCO)en 2007, 2010 y 2012, con información proveniente de fuentes diversas verificables de años anteriores a su publicación.';
        $this->claves      = 'Matamoros, Competitividad';
        $this->categorias  = array('Competitividad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
El índice de Competitividad Urbana (ICU) ha sido dado a conocer por el Instituto Mexicano para la Competitividad (IMCO)en 2007, 2010 y 2012, con información proveniente de fuentes diversas verificables de años anteriores a su publicación.

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
<td class="derecha">41.5400</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 64 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> De 0 a 1.




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
<td class="derecha">50.6700</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 21 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">42.5700</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 59 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">37.3900</td>
<td>IMCO</td>
<td>Ese valor equivale al lugar 74 de 77 ciudades, de acuerdo a la edición 2012 del ICU.</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">45.1100</td>
<td>IMCO</td>
<td>En el ranking Nacional La Laguna, ocupa el lugar 44 de 77 zonas metropolitanas.</td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase EconomiaIndiceDeCompetitividadUrbana

?>
