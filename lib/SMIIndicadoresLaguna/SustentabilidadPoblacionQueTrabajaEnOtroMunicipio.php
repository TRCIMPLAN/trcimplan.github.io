<?php
/**
 * SustentabilidadPoblacionQueTrabajaEnOtroMunicipio.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaguna;

/**
 * Clase SustentabilidadPoblacionQueTrabajaEnOtroMunicipio
 */
class SustentabilidadPoblacionQueTrabajaEnOtroMunicipio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Población que Trabaja en OTRO Municipio en La Laguna';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-laguna';
        $this->archivo      = 'sustentabilidadpoblacion-que-trabaja-en-otro-municipio';
        $this->descripcion  = 'Porcentaje de la población que trabaja en un municipio diferente al que reside dentro de la Zona Metropolitana de La Laguna.';
        $this->claves       = 'La Laguna, Movilidad';
        $this->categorias   = array('Movilidad');
        $this->region_nivel = 401;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje de la población que trabaja en un municipio diferente al que reside dentro de la Zona Metropolitana de La Laguna.</p>

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
            <td>10.20 %</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.conapo.gob.mx/en/CONAPO/Catalogo_Sistema_Urbano_Nacional_2012">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Población que Trabaja en OTRO Municipio</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Población que Trabaja en OTRO Municipio</h3>
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
            <td>4.20 %</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>12.00 %</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>28.00 %</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>20.00 %</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td>10.20 %</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Población que Trabaja en OTRO Municipio</h3>
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
            <td>19/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/principios-nuevo-urbanismo.html">Los Principios del Nuevo Urbanismo</a></td>
            <td>Los principios del nuevo urbanismo: fundamento de una nueva forma de pensar, construir y gestionar ciudades.</td>
          </tr>
          <tr>
            <td>05/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/bicicleta-alternativa-transporte.html">La Bicicleta como alternativa de transporte</a></td>
            <td>No importa cuánto gastemos en construir vías rápidas, siempre serán insuficientes para alojar la creciente cantidad de vehículos que entran a la ciudad. Todos los ciudadanos debemos hacer conciencia e impulsar y fomentar el uso de la bicicleta.</td>
          </tr>
          <tr>
            <td>03/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/calle-completa-espacio-vital-todos.html">La Calle Completa: espacio vial para todos</a></td>
            <td>Con la inclusión del automóvil en el espacio urbano se causó problemas como alta incidencia de accidentes, inaccesibilidad, contaminación, y el deterioro del espacio público más importante: la calle.</td>
          </tr>
          <tr>
            <td>25/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-nuestra-ciudad.html">Movilidad y nuestra ciudad</a></td>
            <td>De 1970 a la fecha la expansión de la mancha urbana en la ciudad de Torreón ha crecido siete veces mientras que la población únicamente tres.</td>
          </tr>
          <tr>
            <td>19/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/bicimetro-innovacion-transporte-urbano.html">Bicimetro: La innovación del Transporte Urbano</a></td>
            <td>Cada vez son más los ciudadanos que optan por dejar sus carros y se animan a desempolvar las bicicletas guardadas en los garajes y utilizarlas como medio de transporte ya sea habitual o por recreación.</td>
          </tr>
          <tr>
            <td>22/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/cultura-seguridad-vial.html">Cultura y seguridad vial</a></td>
            <td>La cultura vial se refiere a la construcción de una convivencia armoniosa, responsable y de respeto entre todos los que hacemos uso de las vías de tránsito, sean estas aceras, rutas, caminos, ciclo vías, etc.</td>
          </tr>
          <tr>
            <td>06/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-laboral-cotidiana-zml.html">Movilidad laboral cotidiana en la ZML</a></td>
            <td>Población ocupada que tiene trabajo en su PROPIO municipio y que tiene trabajo en OTRO Municipio de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>26/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/infraestructura.html">Infraestructura (Sectores precursores de clase mundial)</a></td>
            <td>Análisis de los indicadores sobre infraestructura en tecnologías de la información, carreteras avanzadas y tasa de accidentes viales.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-acceso-a-vialidades-pavimentadas.html">Acceso a Vialidades Pavimentadas en La Laguna</a></td>
            <td>Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-destinos-via-aerea.html">Destinos Vía Aérea en La Laguna</a></td>
            <td>Destinos directos ofertados desde el Aeropuerto Internacional Francisco Sarabia de la ciudad de Torreón.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-destinos-via-terrestre.html">Destinos Vía Terrestre en La Laguna</a></td>
            <td>Número total de Estados de la República Mexicana y E.U. a los cuales se puede acceder desde las Centrales de Autobuses de Torreón y Gómez Palacio</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-disponibilidad-de-banqueta.html">Disponibilidad de Banqueta en La Laguna</a></td>
            <td>Porcentaje de manzanas que cuentan con banquetas en todas o en alguna de sus vialidades.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-motorizacion.html">Motorización en La Laguna</a></td>
            <td>Vehículos automotores registrados en circulación.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-internacionales.html">Pasajeros Aéreos Internacionales en La Laguna</a></td>
            <td>Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-totales.html">Pasajeros Aéreos Totales en La Laguna</a></td>
            <td>Flujo de pasajeros del Aeropuerto Internacional Francisco Sarabia.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html">Población que Trabaja en OTRO Municipio en La Laguna</a></td>
            <td>Porcentaje de la población que trabaja en un municipio diferente al que reside dentro de la Zona Metropolitana de La Laguna.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html">Población que Trabaja en su PROPIO Municipio en La Laguna</a></td>
            <td>Porcentaje de la población ocupada que trabaja en el mismo municipio en el que reside.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-traslados-a-pie.html">Traslados a Pie en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-uso-de-automovil-particular.html">Uso de Automóvil Particular en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-uso-de-bicicleta.html">Uso de Bicicleta en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-uso-de-transporte-publico.html">Uso de Transporte Público en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad. No se consideran los viajes en taxi.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-viviendas-ocupadas-temporalmente.html">Viviendas Ocupadas Temporalmente en La Laguna</a></td>
            <td>Vivienda particular destinada para vacacionar o vivir algunos días, semanas o meses.</td>
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
      data: [{ region: 'Torreón', dato: 4.2000 },{ region: 'Gómez Palacio', dato: 12.0000 },{ region: 'Lerdo', dato: 28.0000 },{ region: 'Matamoros', dato: 20.0000 },{ region: 'La Laguna', dato: 10.2000 }],
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

} // Clase SustentabilidadPoblacionQueTrabajaEnOtroMunicipio

?>
