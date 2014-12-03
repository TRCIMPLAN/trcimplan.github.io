<?php
/**
 * EconomiaProduccionBrutaTotalPerCapita.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaProduccionBrutaTotalPerCapita
 */
class EconomiaProduccionBrutaTotalPerCapita extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Producción Bruta Total Per Cápita en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'economia-produccion-bruta-total-per-capita';
        $this->descripcion  = 'Producción bruta total (de los sectores industria, comercio y servicios) entre población total.';
        $this->claves       = 'Matamoros, Macroeconomía, Finanzas Públicas';
        $this->categorias   = array('Macroeconomía', 'Finanzas Públicas');
        $this->region_nivel = 131;
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
<p>Producción bruta total (de los sectores industria, comercio y servicios) entre población total.</p>

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
            <td>$ 3,080.72</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $311.30. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630</td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>$ 6,803.48</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $605.44. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720</td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>$ 15,373.03</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $1,111.37. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La producción bruta total per cápita a nivel nacional es de:</p>

<ul>
<li>2008 = $103,094.93 </li>
<li>2003 = $60,324.54 </li>
<li>1998 = $37,765.57 </li>
</ul>

<p>La producción bruta total per cápita en dólares a nivel nacional es de:</p>

<ul>
<li>2008 = $7,453.09 </li>
<li>2003 = $5,368.29 </li>
<li>1998 = $3,816.13 </li>
</ul>

<p>Calculados con el tipo de cambio Fix publicado por el Banxico al cierre del año correspondiente.</p>

<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI Censos económicos.</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Producción Bruta Total Per Cápita en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Producción Bruta Total Per Cápita</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Producción Bruta Total Per Cápita</h3>
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
            <td>2008-12-31</td>
            <td>$ 197,853.91</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $14,303.55. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td>$ 157,032.38</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $11,352.42. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td>$ 16,746.04</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $1,210.63. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td>$ 15,373.03</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $1,111.37. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td>$ 149,559.46</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $10,812.18. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td>$ 103,094.92</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Producción Bruta Total Per Cápita</h3>
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
            <td>04/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/datos-abiertos-gobiernos-municipales.html">Datos Abiertos en los Gobiernos Municipales</a></td>
            <td>Con la parte tecnológica resuelta, ha sido común que cualquiera de nosotros se pregunte... ¿Cómo se podrían mejorar los servicios gubernamentales? La respuesta es Datos Abiertos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/vision-vencedores.html">La visión de los vencedores</a></td>
            <td>El regreso de La Laguna a los primeros lugares en el ranking de competitividad nacional demanda de una comunidad que retome los valores y el empuje de “Los Fundadores”, de los hombres y mujeres que lejos de considerarse victimas de las adversidades, de su entorno natural y político, construyeron una de las regiones más prósperas de México.</td>
          </tr>
          <tr>
            <td>26/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/dinamica-pib-per-capita-laguna.html">Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)</a></td>
            <td>Entre los indicadores Banamex de 2011 y 2014 el PIB per cápita de La Laguna creció 22.82%.</td>
          </tr>
          <tr>
            <td>01/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/productividad-zml.html">Productividad en la Zona Metropolitana de La Laguna</a></td>
            <td>Análisis de la productividad laboral, industria manufacturera y eficiencia del trabajo en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/relaciones-internacionales.html">Relaciones Internacionales</a></td>
            <td>Análisis de las cuestiones internacionales como la inversión extranjera, el flujo de pasajeros y la ausencia de puertos o frontera con otro país.</td>
          </tr>
          <tr>
            <td>24/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-estable.html">Economía Estable</a></td>
            <td>Análisis de las variables macroeconómicas como crédito, mercado hipotecario, cartera vencida, PIB y desempleo.</td>
          </tr>
          <tr>
            <td>19/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/independencia-finanzas-publicas.html">Independencia de las Finanzas Públicas</a></td>
            <td>Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.</td>
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
            <td>28/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/la-laguna-metropoli-del-conocimiento.html">La Laguna: Metrópoli del Conocimiento</a></td>
            <td>Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento.</td>
          </tr>
          <tr>
            <td>25/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/estabilidad-de-precios-en-torreon.html">Estabilidad de Precios en Torreón</a></td>
            <td>En términos generales la inflación de Torreón se encuentra estable, lo cual genera certidumbre tanto a planta productiva local como extranjera.</td>
          </tr>
          <tr>
            <td>03/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-economica-torreon.html">Equidad Económica en Torreón</a></td>
            <td>Torreón, como la zona metropolitana de La Laguna, se encuentra en una situación favorable en temas de igualdad y cohesión social.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-capacidad-financiera.html">Capacidad Financiera en Matamoros</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-ingresos-totales-per-capita.html">Ingresos Totales Per Cápita en Matamoros</a></td>
            <td>Ingresos totales del municipio entre el total de la población.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-ingresos-totales.html">Ingresos Totales en Matamoros</a></td>
            <td>Ingresos totales por municipio.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-ingresos-por-cobro-de-servicios.html">Ingresos por Cobro de Servicios en Matamoros</a></td>
            <td>Ingresos recaudados por el municipio por cobro de servicios</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-inversion-extranjera-directa.html">Inversión Extranjera Directa en Matamoros</a></td>
            <td>Promedio de inversión entre 2008 y 2012.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-inversion-per-capita.html">Inversión Per cápita en Matamoros</a></td>
            <td>Gasto en obras públicas y acciones sociales entre población total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-productividad-laboral.html">Productividad Laboral en Matamoros</a></td>
            <td>PIB sin petróleo / PEA.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-relacion-de-ingresos-propios-y-totales.html">Relación de Ingresos Propios y Totales en Matamoros</a></td>
            <td>Porcentaje de Ingresos propios el municipio con respecto a sus ingresos totales.</td>
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
      data: [{ fecha: '1998-12-31', dato: 3080.72 },{ fecha: '2003-12-31', dato: 6803.48 },{ fecha: '2008-12-31', dato: 15373.03 }],
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
      data: [{ region: 'Torreón', dato: 197853.91 },{ region: 'Gómez Palacio', dato: 157032.38 },{ region: 'Lerdo', dato: 16746.04 },{ region: 'Matamoros', dato: 15373.03 },{ region: 'La Laguna', dato: 149559.46 },{ region: 'Nacional', dato: 103094.92 }],
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

} // Clase EconomiaProduccionBrutaTotalPerCapita

?>
