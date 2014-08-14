<?php
/**
 * SociedadOcupacionPorVivienda.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SociedadOcupacionPorVivienda
 */
class SociedadOcupacionPorVivienda extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Ocupación por Vivienda en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'sociedad-ocupacion-por-vivienda';
        $this->descripcion = 'Promedio de ocupantes por vivienda.';
        $this->claves      = 'Torreón, Vivienda';
        $this->categorias  = array('Vivienda');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Promedio de ocupantes por vivienda.

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
<td class="derecha">3.7000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Promedio.

<h4>Observaciones</h4>
Datos obtenidos de [INEGI. Censos de población y vivienda 2010](http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx)


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
<td>2010-12-31</td>
<td class="derecha">3.9000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">4.1000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">4.1000</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">3.9500</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadOcupacionPorVivienda

?>
