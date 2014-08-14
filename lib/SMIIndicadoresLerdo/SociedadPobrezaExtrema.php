<?php
/**
 * SociedadPobrezaExtrema.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLerdo;

/**
 * Clase SociedadPobrezaExtrema
 */
class SociedadPobrezaExtrema extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Pobreza Extrema en Lerdo';
        $this->directorio  = 'lib/SMIIndicadoresLerdo';
        $this->archivo     = 'sociedad-pobreza-extrema';
        $this->descripcion = 'Porcentaje de la población en situación de pobreza extrema.';
        $this->claves      = 'Lerdo, Bienestar';
        $this->categorias  = array('Bienestar');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de la población en situación de pobreza extrema.

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
<td class="derecha">6.80 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Consulta la [Base de Datos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Pobreza%202012/Pobreza-2012.aspx)


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
<td class="derecha">2.84 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">5.30 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">3.90 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">4.00 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2010-12-31</td>
<td class="derecha">2.94 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2010-12-31</td>
<td class="derecha">10.12 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2010-12-31</td>
<td class="derecha">11.20 %</td>
<td>CONEVAL</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadPobrezaExtrema

?>
