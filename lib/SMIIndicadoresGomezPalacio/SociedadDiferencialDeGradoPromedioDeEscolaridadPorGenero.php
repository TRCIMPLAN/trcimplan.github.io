<?php
/**
 * SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero
 */
class SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Diferencial de Grado Promedio de Escolaridad por Género en Gómez Palacio';
        $this->directorio  = 'lib/SMIIndicadoresGomezPalacio';
        $this->archivo     = 'sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero';
        $this->descripcion = 'Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.';
        $this->claves      = 'Gómez Palacio, Género, Educación';
        $this->categorias  = array('Género', 'Educación');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.

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
<td class="derecha">-0.2000</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Promedio.

<h4>Observaciones</h4>
Años de escolaridad.


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
<td class="derecha">-0.3200</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">-0.0600</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">0.0200</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero

?>
