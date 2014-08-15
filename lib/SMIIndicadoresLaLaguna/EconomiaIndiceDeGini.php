<?php
/**
 * EconomiaIndiceDeGini.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaIndiceDeGini
 */
class EconomiaIndiceDeGini extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Gini en La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-indice-de-gini';
        $this->descripcion = 'Indicador de igualdad usado internacionalmente donde 0 representa la igualdad perfecta y 1 la total inequidad.';
        $this->claves      = 'La Laguna';
        $this->categorias  = array();
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Indicador de igualdad usado internacionalmente donde 0 representa la igualdad perfecta y 1 la total inequidad.

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
<td class="derecha">0.4238</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> De 0 a 1.

<h4>Observaciones</h4>
El índice de Ginni a nivel nacional es de: 0.472


Datos obtenidos de [CONEVAL](http://www.coneval.gob.mx/Paginas/principal.aspx)


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
<td class="derecha">0.4520</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">0.4208</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">0.4387</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">0.3831</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase EconomiaIndiceDeGini

?>
