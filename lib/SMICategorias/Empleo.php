<?php
/**
 * Empleo.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMICategorias;

/**
 * Clase Empleo
 */
class Empleo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Empleo';
        $this->nombre_menu   = 'Indicadores por Categoría';
        $this->directorio    = 'indicadores-categorias';
        $this->archivo       = 'empleo';
        $this->descripcion   = 'Matriz de indicadores en la categoría Empleo';
        $this->imagen_previa = '';
        $this->icono         = 'fa fa-wrench';
        $this->claves        = 'IMPLAN, Indicadores, Empleo';
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
    <td class="indicador color1">Desempleo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">19,536</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">9,705</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">3,795</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">2,380</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">35,416</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Desocupados como porcentaje de la PEA</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-desocupados-como-porcentaje-de-la-pea.html" data-toggle="tooltip" title="Porcentaje, 25/06/2010, INEGI">7.46 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-desocupados-como-porcentaje-de-la-pea.html" data-toggle="tooltip" title="Porcentaje, 25/06/2010, INEGI">7.80 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-desocupados-como-porcentaje-de-la-pea.html" data-toggle="tooltip" title="Porcentaje, 25/06/2010, INEGI">7.41 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-desocupados-como-porcentaje-de-la-pea.html" data-toggle="tooltip" title="Porcentaje, 25/06/2010, INEGI">6.07 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-desocupados-como-porcentaje-de-la-pea.html" data-toggle="tooltip" title="Porcentaje, 25/06/2010, INEGI">7.43 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">27.6529 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">27.6120 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">31.0701 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">34.3232 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">28.0342 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">25.6975 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">32.0975 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">37.6371 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">41.5338 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">28.5940 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">35.6387 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">30.2786 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">24.2010 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">17.9535 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">32.9908 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 530,143.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 462,597.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 51,284.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 45,744.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 421,204.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/09/2014, Instituto Mexicano del Seguro Social (IMSS)">170,628</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/09/2014, Instituto Mexicano del Seguro Social (IMSS)">7,763</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/09/2014, Instituto Mexicano del Seguro Social (IMSS)">266,616</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados (Región)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados--region-.html" data-toggle="tooltip" title="Personas, 31/12/2013, IMSS Subdelegación Torreón">187,050</a></td>
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

} // Clase Empleo

?>
