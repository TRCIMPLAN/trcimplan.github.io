<?php
/**
 * DoingBusiness.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMICategorias;

/**
 * Clase DoingBusiness
 */
class DoingBusiness extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Doing Business';
        $this->nombre_menu   = 'Indicadores > Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'doing-business';
        $this->descripcion   = 'Matriz de indicadores en la categoría Doing Business';
        $this->imagen_previa = '';
        $this->icono         = 'fa fa-check-circle-o';
        $this->claves        = 'IMPLAN, Indicadores, Doing Business';
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Apertura de Negocios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-apertura-de-negocios.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">9.5</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase DoingBusiness

?>
