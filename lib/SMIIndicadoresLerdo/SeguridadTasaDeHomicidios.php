<?php
/**
 * SeguridadTasaDeHomicidios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLerdo;

/**
 * Clase SeguridadTasaDeHomicidios
 */
class SeguridadTasaDeHomicidios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Tasa de Homicidios en Lerdo';
        $this->directorio  = 'lib/SMIIndicadoresLerdo';
        $this->archivo     = 'seguridad-tasa-de-homicidios';
        $this->descripcion = 'Número de homicidios por cada 100 mil habitantes.';
        $this->claves      = 'Lerdo, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Número de homicidios por cada 100 mil habitantes.

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
<td class="centrado">31/12/2013</td>
<td class="derecha">46.7500</td>
<td>SNSP</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Por cada 100 mil.




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
<td>2013-12-31</td>
<td class="derecha">45.7600</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">57.3800</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">55.7000</td>
<td>SNSP</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">49.8800</td>
<td>SNSP</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SeguridadTasaDeHomicidios

?>
