<?php
/**
 * SociedadDiscapacidad.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadDiscapacidad
 */
class SociedadDiscapacidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Discapacidad en Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-discapacidad';
        $this->descripcion = 'Porcentaje de la población total con alguna limitación (motriz, visión, auditivo, habla y/o cognitivas)';
        $this->claves      = 'Torreón, Grupos Vulnerables';
        $this->categorias  = array('Grupos Vulnerables');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de la población total con alguna limitación (motriz, visión, auditivo, habla y/o cognitivas)

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
<td class="derecha">10.17 %</td>
<td>INEGI. Censos de Población y Vivienda</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Consulta o descarga la [Base de Datos](http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&s=est)



FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadDiscapacidad

?>
