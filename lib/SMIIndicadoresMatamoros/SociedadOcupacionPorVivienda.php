<?php
/**
 * SociedadOcupacionPorVivienda.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadOcupacionPorVivienda
 */
class SociedadOcupacionPorVivienda extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Ocupación por Vivienda en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'sociedadocupacion-por-vivienda';
        $this->descripcion  = 'Promedio de ocupantes por vivienda. Difiere del índice de hacinamiento en que el segundo es resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.';
        $this->claves       = 'Matamoros, Vivienda';
        $this->categorias   = array('Vivienda');
        $this->region_nivel = 131;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Promedio de ocupantes por vivienda. Difiere del índice de hacinamiento en que el segundo es resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</p>

      <h3>Información recopilada</h3>
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
            <td>31/12/2010</td>
            <td>4.1000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Promedio.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx">INEGI. Censos de población y vivienda 2010</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Ocupación por Vivienda</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Ocupación por Vivienda</h3>
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
            <td>3.7000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>3.9000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>4.1000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>4.1000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td>3.9500</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Ocupación por Vivienda</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>15/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/importancia-suelo-ciudades.html">La importancia del suelo en las ciudades</a></td>
            <td>En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual.</td>
          </tr>
          <tr>
            <td>14/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/poligonos-actuacion-desarrollo-urbano-integral.html">Polígonos de Actuación para un Desarrollo Urbano Integral</a></td>
            <td>El nuevo modelo de desarrollo urbano mexicano que se impulsa en el país es el de fomentar la consolidación de las ciudades y lograr que sean más competitivas, equilibradas, densas, prósperas, justas, seguras y sustentables.</td>
          </tr>
          <tr>
            <td>06/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sociedad-incluyente-preparada-sana.html">Sociedad Incluyente, Preparada y Sana</a></td>
            <td>Este es uno de los subíndices que muestra mayores contrastes al interior de la zona metropolitana, ubicándose Torreón en la parte alta del ranking, la ZML en su conjunto en media alta, Gómez Palacio y Lerdo en media baja y Matamoros en la zona baja.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-ocupacion-por-vivienda.html">Ocupación por Vivienda en Matamoros</a></td>
            <td>Promedio de ocupantes por vivienda. Difiere del índice de hacinamiento en que el segundo es resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-viviendas-deshabitadas.html">Viviendas Deshabitadas en Matamoros</a></td>
            <td>Viviendas deshabitadas con respecto al total de viviendas totales.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-habitadas.html">Viviendas Habitadas en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-viviendas-ocupadas-temporalmente.html">Viviendas Ocupadas Temporalmente en Matamoros</a></td>
            <td>Vivienda particular destinada para vacacionar o vivir algunos días, semanas o meses.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-totales.html">Viviendas Totales en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-agua-de-la-red-publica.html">Viviendas con Agua de la Red Pública en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas que cuentan con acceso al agua de la red pública.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-computadora.html">Viviendas con Computadora en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas con computadora.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-drenaje.html">Viviendas con Drenaje en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas que disponen de drenaje.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-energia-electrica.html">Viviendas con Energía Eléctrica en Matamoros</a></td>
            <td>Porcentaje de viviendas con acceso a energía eléctrica</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-internet.html">Viviendas con Internet en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas con internet.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-que-disponen-de-retrete.html">Viviendas que Disponen de Retrete en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas que disponen de retrete.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-indice-de-hacinamiento.html">Índice de hacinamiento en Matamoros</a></td>
            <td>Resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 3.7000 },{ region: 'Gómez Palacio', dato: 3.9000 },{ region: 'Lerdo', dato: 4.1000 },{ region: 'Matamoros', dato: 4.1000 },{ region: 'La Laguna', dato: 3.9500 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadOcupacionPorVivienda

?>
