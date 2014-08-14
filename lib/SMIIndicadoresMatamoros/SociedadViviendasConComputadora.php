<?php
/**
 * SociedadViviendasConComputadora.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresMatamoros;

/**
 * Clase SociedadViviendasConComputadora
 */
class SociedadViviendasConComputadora extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Viviendas con Computadora en Matamoros';
        $this->directorio  = 'lib/SMIIndicadoresMatamoros';
        $this->archivo     = 'sociedad-viviendas-con-computadora';
        $this->descripcion = 'Porcentaje de viviendas habitadas con computadora.';
        $this->claves      = 'Matamoros, Vivienda';
        $this->categorias  = array('Vivienda');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de viviendas habitadas con computadora.

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
<td class="derecha">18.73 %</td>
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
<td class="derecha">38.74 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">28.87 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">27.47 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">33.20 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadViviendasConComputadora

?>
