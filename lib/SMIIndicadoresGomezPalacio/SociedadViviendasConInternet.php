<?php
/**
 * SociedadViviendasConInternet.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadViviendasConInternet
 */
class SociedadViviendasConInternet extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Viviendas con Internet en Gómez Palacio';
        $this->directorio  = 'lib/SMIIndicadoresGomezPalacio';
        $this->archivo     = 'sociedad-viviendas-con-internet';
        $this->descripcion = 'Porcentaje de viviendas habitadas con internet.';
        $this->claves      = 'Gómez Palacio, Vivienda';
        $this->categorias  = array('Vivienda');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de viviendas habitadas con internet.

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
<td class="derecha">19.00 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Consulta la [Base de Datos](http://www.inegi.org.mx/biinegi/).

Enlace al [Sistema de Información Geográfica](http://201.159.104.45:8080/apps/implan2.html).


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
<td class="derecha">28.00 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">17.00 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">9.00 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">23.00 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadViviendasConInternet

?>
