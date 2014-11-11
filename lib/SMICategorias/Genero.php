<?php
/**
 * Genero.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMICategorias;

/**
 * Clase Genero
 */
class Genero extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Género';
        $this->nombre_menu   = 'Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'genero';
        $this->descripcion   = 'Matriz de indicadores en la categoría Género';
        $this->imagen_previa = '';
        $this->icono         = 'fa fa-bullseye';
        $this->claves        = 'IMPLAN, Indicadores, Género';
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
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Femenino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">25,310</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">10,863</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">4,950</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">3,668</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">44,790</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Diferencial de Grado Promedio de Escolaridad por Género</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.32</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.20</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.06</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">0.02</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Fecundidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI. Censos de Población y Vivienda">2.13</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Hogares con Jefatura Femenina</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">24.91 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">23.19 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">22.70 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">18.48 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">23.67 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Madres Adolescentes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-madres-adolescentes.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SINAIS (SSA)">1,778</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Maternidad Adolescente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">13.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">16.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">17.2 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">19.9 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">4.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">8.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">6.2</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.3</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Genero

?>
