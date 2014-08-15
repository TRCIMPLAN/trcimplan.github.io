<?php
/**
 * SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio
 */
class SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Población que Trabaja en su PROPIO Municipio en Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio';
        $this->descripcion = 'Porcentaje de la población ocupada que trabaja en el mismo municipio en el que reside.';
        $this->claves      = 'Lerdo, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de la población ocupada que trabaja en el mismo municipio en el que reside.

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
<td class="derecha">67.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Consulta la [Base de Datos](http://www.conapo.gob.mx/en/CONAPO/Catalogo_Sistema_Urbano_Nacional_2012)


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
<td class="derecha">89.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">78.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">76.00 %</td>
<td>CONAPO</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">82.90 %</td>
<td>CONAPO</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SustentabilidadPoblacionQueTrabajaEnSuPropioMunicipio

?>
