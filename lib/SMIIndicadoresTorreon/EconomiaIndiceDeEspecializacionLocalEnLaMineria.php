<?php
/**
 * EconomiaIndiceDeEspecializacionLocalEnLaMineria.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaIndiceDeEspecializacionLocalEnLaMineria
 */
class EconomiaIndiceDeEspecializacionLocalEnLaMineria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Especialización Local en la Minería en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-indice-de-especializacion-local-en-la-mineria';
        $this->descripcion = 'Producción bruta total de la actividad económica de minería entre la producción bruta total.';
        $this->claves      = 'Torreón, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Producción bruta total de la actividad económica de minería entre la producción bruta total.

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
<td class="derecha">1.40 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
El índice de especialización en manufactura a nivel nacional es de: 

- 2008 = 11.81%

Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)


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
<td>2008-12-31</td>
<td class="derecha">0.20 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">2.80 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">0.40 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">4.80 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase EconomiaIndiceDeEspecializacionLocalEnLaMineria

?>
