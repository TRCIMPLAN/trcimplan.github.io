<?php
/**
 * SustentabilidadDestinosViaAerea.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadDestinosViaAerea
 */
class SustentabilidadDestinosViaAerea extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Destinos Vía Aérea en Lerdo';
        $this->directorio  = 'lib/SMIIndicadoresLerdo';
        $this->archivo     = 'sustentabilidad-destinos-via-aerea';
        $this->descripcion = 'Destinos directos ofertados desde el Aeropuerto Internacional Francisco Sarabia de la ciudad de Torreón.';
        $this->claves      = 'Lerdo, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Destinos directos ofertados desde el Aeropuerto Internacional Francisco Sarabia de la ciudad de Torreón.

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
<td class="centrado">31/03/2014</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.

<h4>Observaciones</h4>
Se considera a nivel metropolitano. Consulta la [Base de Datos](http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/)


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
<td>2014-03-31</td>
<td class="derecha">7</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">7</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SustentabilidadDestinosViaAerea

?>
