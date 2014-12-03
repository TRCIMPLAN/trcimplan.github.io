<?php
/**
 * EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera
 */
class EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Unidades Económicas Dedicadas a la Industria Manufacturera en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'economia-unidades-economicas-dedicadas-a-la-industria-manufacturera';
        $this->descripcion  = 'Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.';
        $this->claves       = 'Gómez Palacio, Empresas, Mercados';
        $this->categorias   = array('Empresas', 'Mercados');
        $this->region_nivel = 111;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</p>

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
            <td>31/12/1998</td>
            <td>13.68 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>10.62 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>10.45 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>8.84 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Unidades Económicas Dedicadas a la Industria Manufacturera en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Unidades Económicas Dedicadas a la Industria Manufacturera</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Unidades Económicas Dedicadas a la Industria Manufacturera</h3>
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
            <td>2013-10-31</td>
            <td>8.55 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-10-31</td>
            <td>8.84 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-10-31</td>
            <td>8.52 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-10-31</td>
            <td>9.58 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-10-31</td>
            <td>8.69 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-10-31</td>
            <td>10.71 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Unidades Económicas Dedicadas a la Industria Manufacturera</h3>
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
            <td>12/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/industrial-metalmecanica-la-laguna.html">La industria metalmecánica y La Laguna</a></td>
            <td>A diferencia del año 2013 cuando la industria metalmecánica creció 4% a nivel nacional, la directora de Fabetch México pronosticó en Julio un crecimiento de 8% para el presente año.</td>
          </tr>
          <tr>
            <td>07/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-sector-salud-laguna.html">Economía del Sector Salud en La Laguna</a></td>
            <td>El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.</td>
          </tr>
          <tr>
            <td>26/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/dinamica-pib-per-capita-laguna.html">Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)</a></td>
            <td>Entre los indicadores Banamex de 2011 y 2014 el PIB per cápita de La Laguna creció 22.82%.</td>
          </tr>
          <tr>
            <td>24/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/apertura-empresas-2014.html">Apertura de Empresas 2014</a></td>
            <td>La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.</td>
          </tr>
          <tr>
            <td>01/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gas-shale-impacto.html">El Gas Shale y su impacto</a></td>
            <td>La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.</td>
          </tr>
          <tr>
            <td>30/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/laguna-apostarle-industria-automotriz.html">La Laguna debe apostarle a la Industria Automotriz</a></td>
            <td>En industria automotriz hay mayor inversión en la investigación y desarrollo que origina una derrama de capacidades tecnológicas con aplicación en otros sectores como el eléctrico, electrónico y aeroespacial.</td>
          </tr>
          <tr>
            <td>03/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sectores-innovacion-sofisticacion.html">Sectores de Innovación y Sofisticación</a></td>
            <td>Análisis de los indicadores relativos a la innovación.</td>
          </tr>
          <tr>
            <td>01/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/productividad-zml.html">Productividad en la Zona Metropolitana de La Laguna</a></td>
            <td>Análisis de la productividad laboral, industria manufacturera y eficiencia del trabajo en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>24/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-estable.html">Economía Estable</a></td>
            <td>Análisis de las variables macroeconómicas como crédito, mercado hipotecario, cartera vencida, PIB y desempleo.</td>
          </tr>
          <tr>
            <td>17/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/mercado-factores-eficientes.html">Mercado de Factores Eficientes</a></td>
            <td>Análisis del mercado, las huelgas, el salario promedio mensual, productividad y demandas laborales en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>29/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/doing-business-torreon.html">Doing Business en Torreón</a></td>
            <td>Este índice sirve para señalar en cual ciudad es más fácil hacer negaocios. En 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas.</td>
          </tr>
          <tr>
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
          </tr>
          <tr>
            <td>25/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/estabilidad-de-precios-en-torreon.html">Estabilidad de Precios en Torreón</a></td>
            <td>En términos generales la inflación de Torreón se encuentra estable, lo cual genera certidumbre tanto a planta productiva local como extranjera.</td>
          </tr>
          <tr>
            <td>16/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/hacia-donde-debe-dirigirse-torreon.html">Hacia dónde debe dirigirse Torreón</a></td>
            <td>¿En realidad generan más valor las actividades tecnológicas y de servicios?</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-cartera-hipotecaria.html">Cartera Hipotecaria en Gómez Palacio</a></td>
            <td>Monto total de créditos otorgados hasta la fecha indicada.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-grandes-empresas.html">Grandes Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-medianas-empresas.html">Medianas Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-microempresas.html">Microempresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-pequenas-empresas.html">Pequeñas Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en Gómez Palacio</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en Gómez Palacio</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en Gómez Palacio</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html">Sectores que Han Frenado el Crecimiento (2008-2012) en Gómez Palacio</a></td>
            <td>Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html">Sectores que Han Presentado Alto Crecimiento (2008-2012) en Gómez Palacio</a></td>
            <td>% de la producción en sectores con tasa promedio de crecimiento superior al promedio nacional en los últimos 5 años.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-tamano-del-mercado-hipotecario.html">Tamaño del Mercado Hipotecario en Gómez Palacio</a></td>
            <td>Créditos dispuestos marginalmente durante el año indicado.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-total-de-empresas.html">Total de Empresas en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-comercio.html">Índice de Especialización Local en Comercio en Gómez Palacio</a></td>
            <td>Producción bruta total del comercio al por mayor y al por menor entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-industria-manufacturera.html">Índice de Especialización Local en Industria Manufacturera en Gómez Palacio</a></td>
            <td>Producción bruta total de la industria manufacturera entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-servicios.html">Índice de Especialización Local en Servicios en Gómez Palacio</a></td>
            <td>Producción bruta total de los servicios entre la producción bruta total de todas las actividades económicas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-construccion.html">Índice de Especialización Local en la Construcción en Gómez Palacio</a></td>
            <td>Producción bruta total de la actividad económica de construcción entre la producción bruta total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-mineria.html">Índice de Especialización Local en la Minería en Gómez Palacio</a></td>
            <td>Producción bruta total de la actividad económica de minería entre la producción bruta total.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1998-12-31', dato: 13.6800 },{ fecha: '2003-12-31', dato: 10.6200 },{ fecha: '2008-12-31', dato: 10.4500 },{ fecha: '2013-10-31', dato: 8.8400 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 8.5500 },{ region: 'Gómez Palacio', dato: 8.8400 },{ region: 'Lerdo', dato: 8.5200 },{ region: 'Matamoros', dato: 9.5800 },{ region: 'La Laguna', dato: 8.6900 },{ region: 'Nacional', dato: 10.7100 }],
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

} // Clase EconomiaUnidadesEconomicasDedicadasALaIndustriaManufacturera

?>
