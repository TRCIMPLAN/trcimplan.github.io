<?php
/**
 * SustentabilidadRedDeTransportePublico.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadRedDeTransportePublico
 */
class SustentabilidadRedDeTransportePublico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Red de Transporte Público en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'sustentabilidad-red-de-transporte-publico';
        $this->descripcion = 'Extensión de la red de transporte público en Kilómetros totales.';
        $this->claves      = 'Torreón, Servicios Públicos';
        $this->categorias  = array('Servicios Públicos');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Extensión de la red de transporte público en Kilómetros totales.

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
<td class="derecha">250</td>
<td>IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Kilómetros.





FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SustentabilidadRedDeTransportePublico

?>
