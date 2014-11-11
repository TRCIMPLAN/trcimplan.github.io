<?php
/**
 * ParticipacionCiudadana.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMICategorias;

/**
 * Clase ParticipacionCiudadana
 */
class ParticipacionCiudadana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Participación Ciudadana';
        $this->nombre_menu   = 'Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'participacion-ciudadana';
        $this->descripcion   = 'Matriz de indicadores en la categoría Participación Ciudadana';
        $this->imagen_previa = '';
        $this->icono         = 'fa fa-puzzle-piece';
        $this->claves        = 'IMPLAN, Indicadores, Participación Ciudadana';
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
    <td class="indicador color2">Competencia Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">1.77 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 30/06/2012, INE-IEPCC">4.48 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 02/07/2012, INE-IEPCC">5.15 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">39.67 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">6.70 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Diferencia de Votos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral-diferencia-de-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">4,367</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-competencia-electoral-diferencia-de-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">5,784</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-competencia-electoral-diferencia-de-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">2,910</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-competencia-electoral-diferencia-de-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">19,079</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-competencia-electoral-diferencia-de-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">32,140</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Votos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">246,044</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">120,131</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">56,517</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">48,093</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">479,785</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Participación Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">53.75 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">58.31 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">59.57 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">64.58 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">57.68 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">47.98</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">45.84</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">22.70</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">10.78</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">41.22</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase ParticipacionCiudadana

?>
