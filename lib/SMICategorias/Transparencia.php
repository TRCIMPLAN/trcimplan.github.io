<?php
/**
 * Transparencia.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMICategorias;

/**
 * Clase Transparencia
 */
class Transparencia extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Transparencia';
        $this->nombre_menu   = 'Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'transparencia';
        $this->descripcion   = 'Matriz de indicadores en la categoría Transparencia';
        $this->imagen_previa = '';
        $this->icono         = 'fa fa-eye';
        $this->claves        = 'IMPLAN, Indicadores, Transparencia';
        $this->categorias    = array('Indicadores');
        $this->contenido     = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Cumplimiento en información pública mínina</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 30/06/2014, ICAI-IDAIP">98.72 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 31/08/2014, ICAI-IDAIP">86.00 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 31/08/2014, ICAI-IDAIP">100.00 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 30/06/2014, ICAI-IDAIP">64.10 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, ICAI-IDAIP">80.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">índice de Información Presupuestal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">22 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">35 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">28 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">20 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">26 %</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Transparencia

?>
