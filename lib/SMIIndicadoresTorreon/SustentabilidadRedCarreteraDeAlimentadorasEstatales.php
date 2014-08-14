<?php
/**
 * SustentabilidadRedCarreteraDeAlimentadorasEstatales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadRedCarreteraDeAlimentadorasEstatales
 */
class SustentabilidadRedCarreteraDeAlimentadorasEstatales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Red Carretera de Alimentadoras Estatales en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'sustentabilidad-red-carretera-de-alimentadoras-estatales';
        $this->descripcion = 'Red carretera de alimentadoras estatales.';
        $this->claves      = 'Torreón, Infraestructura';
        $this->categorias  = array('Infraestructura');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Red carretera de alimentadoras estatales.

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
<td class="derecha">0</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Kilómetros.

<h4>Observaciones</h4>
No aplica a nivel metropolitano


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
<td class="derecha">111</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">43</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">0</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SustentabilidadRedCarreteraDeAlimentadorasEstatales

?>
