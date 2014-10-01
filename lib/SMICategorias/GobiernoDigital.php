<?php
/**
 * GobiernoDigital.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMICategorias;

/**
 * Clase GobiernoDigital
 */
class GobiernoDigital extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Gobierno Digital';
        $this->nombre_menu   = 'Categorías';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'gobierno-digital';
        $this->descripcion   = 'Matriz de indicadores en la categoría Gobierno Digital';
        $this->imagen_previa = '';
        $this->icono         = 'fa fa-laptop';
        $this->claves        = 'IMPLAN, Indicadores, Gobierno Digital';
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
    <td class="indicador color2">Índice de Gobierno Electrónico Municipal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.6916</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.4763</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.4714</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.5366</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.5440</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase GobiernoDigital

?>
