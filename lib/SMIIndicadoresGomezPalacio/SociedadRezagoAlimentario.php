<?php
/**
 * SociedadRezagoAlimentario.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadRezagoAlimentario
 */
class SociedadRezagoAlimentario extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Rezago Alimentario en Gómez Palacio';
        $this->directorio  = 'lib/SMIIndicadoresGomezPalacio';
        $this->archivo     = 'sociedad-rezago-alimentario';
        $this->descripcion = 'Personas que presenten un grado de inseguridad alimentaria moderado o severo.';
        $this->claves      = 'Gómez Palacio, Grupos Vulnerables, Bienestar';
        $this->categorias  = array('Grupos Vulnerables', 'Bienestar');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Personas que presenten un grado de inseguridad alimentaria moderado o severo.

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
<td class="derecha">18.11 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Consulta la [BasedeDatos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Anexo-estad%C3%ADstico-municipal-2010.aspx)


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
<td class="derecha">17.77 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">20.89 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">25.10 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadRezagoAlimentario

?>
