<?php
/**
 * SustentabilidadRedCarreteraAlimentadorasEstatales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SustentabilidadRedCarreteraAlimentadorasEstatales
 */
class SustentabilidadRedCarreteraAlimentadorasEstatales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Red Carretera de Alimentadoras Estatales en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'sustentabilidadred-carretera-alimentadoras-estatales';
        $this->descripcion  = 'Red carretera de alimentadoras estatales.';
        $this->claves       = 'Lerdo, Infraestructura';
        $this->categorias   = array('Infraestructura');
        $this->region_nivel = 121;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Red carretera de alimentadoras estatales.</p>

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
            <td>31/12/2012</td>
            <td>43</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Kilómetros.</p>
      <h3>Observaciones</h3>
<p>No aplica a nivel metropolitano</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Red Carretera de Alimentadoras Estatales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Red Carretera de Alimentadoras Estatales</h3>
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
            <td>2012-12-31</td>
            <td>0</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>111</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>43</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>0</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Red Carretera de Alimentadoras Estatales</h3>
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
            <td>28/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-urbana-competitividad.html">Movilidad Urbana y Competitividad</a></td>
            <td>La movilidad es eje fundamental del desarrollo; al no considerar el transporte como parte de la planeación urbana, se generan graves deficiencias, como dispersión, distanciamiento y desconexión urbana.</td>
          </tr>
          <tr>
            <td>15/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudadano-agente-cambio.html">Ciudadano como agente de cambio</a></td>
            <td>La participación de la sociedad en proyectos urbanos crea una cultura de co-creación. Destaca Medellín, Colombia donde se aplica en la coordinación, participación y construcción de obra pública.</td>
          </tr>
          <tr>
            <td>20/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/espacio-publico-urbano.html">Espacio Público Urbano</a></td>
            <td>Las calles son la forma más importante de espacio público. Requieren algunos cambios urbanos para que sean más seguras y amistosas para los niños y niñas; que lleguen a ser de alta calidad.</td>
          </tr>
          <tr>
            <td>03/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/reciclaje-urbano.html">Reciclaje Urbano</a></td>
            <td>Con en el reciclaje urbano, se han logrado grandes resultados al convertir zonas degradadas en nuevos barrios con gran potencial y desarrollo que se resulta un nuevo punto de interés para los habitantes y visitantes de la ciudad.</td>
          </tr>
          <tr>
            <td>24/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudad-abierta-ciudad-fraccionada.html">Ciudad abierta y ciudad fraccionada</a></td>
            <td>La fragmentación social y urbana provocada por desarrollos habitacionales “seguros” tiene efectos que agravan la percepción de la inseguridad en la ciudad.</td>
          </tr>
          <tr>
            <td>11/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/direccionando-hacia-innovacion-urbana.html">Direccionando hacia la innovación urbana</a></td>
            <td>Actualmente el concepto de ciudad inteligente o digital se maneja a nivel global. Muchas ciudades de este tipo se están desarrollando en diferentes lugares del mundo, cada una con su propio sistema, diseño, estructura y organización.</td>
          </tr>
          <tr>
            <td>10/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/nueva-infraestructura-base-tecnologia-led-torreon.html">Nueva infraestructura a base de tecnología LED en Torreón</a></td>
            <td>La luz blanca de calidad puede transformar el paisaje nocturno, realzando la arquitectura urbana y creando ambientes acogedores que inviten a las personas a pasar más tiempo en ellos.</td>
          </tr>
          <tr>
            <td>28/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delito-espacio-publico.html">Prevención del delito mediante la construcción del espacio público</a></td>
            <td>Ante el miedo y el temor, el lagunero ha tomado medidas en lo individual y lo colectivo en un intento por evitar ser víctimas de algún delito, se ha encerrado en lo privado despreciando el espacio público como si fuera ajeno.</td>
          </tr>
          <tr>
            <td>13/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudad-espacio-publico.html">Ciudad y Espacio Público</a></td>
            <td>Actualmente las teorías urbanas afirman que el buen diseño de calles puede promover calidad de vida para todos.</td>
          </tr>
          <tr>
            <td>16/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/urbanismo-participativo.html">Urbanismo Participativo</a></td>
            <td>Es un concepto de corresponsabilidad que se forma entre el Estado y la sociedad dentro de un modelo de gobernanza, en donde los ciudadanos aportan ideas y evalúan los procesos de planeación del territorio y de los espacios públicos urbanos que lo conforman.</td>
          </tr>
          <tr>
            <td>03/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/calle-completa-espacio-vital-todos.html">La Calle Completa: espacio vial para todos</a></td>
            <td>Con la inclusión del automóvil en el espacio urbano se causó problemas como alta incidencia de accidentes, inaccesibilidad, contaminación, y el deterioro del espacio público más importante: la calle.</td>
          </tr>
          <tr>
            <td>02/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudades-mas-humanas.html">Ciudades más Humanas</a></td>
            <td>La calidad de vida en las ciudades es la posibilidad que tiene una persona, una familia o una comunidad, de alcanzar el bienestar y la satisfacción de todas sus necesidades.</td>
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
            <td>05/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/dot-desarrollo-orientado-transporte.html">DOT: Desarrollo Orientado al Transporte</a></td>
            <td>En las últimas décadas, han surgido nuevos modelos urbanos que retoman el componente humano como eje principal de la planeación, buscando el equilibrio entre una ciudad altamente competitiva pero con servicios e infraestructura orientada al confort y las necesidades del ser humano.</td>
          </tr>
          <tr>
            <td>28/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudades-reto-transformacion.html">Las ciudades y el reto de su transformación</a></td>
            <td>El futuro de la humanidad está intrínsecamente relacionado al futuro de las ciudades. A partir de la revolución industrial hubo una movilización de personas del campo a la ciudad, lo que trajo consigo una revolución urbana.</td>
          </tr>
          <tr>
            <td>23/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-camino-redensificacion-2.html">Torreón, camino a la redensificación II</a></td>
            <td>Continuación del tema de la redensificación de ciudades. Las cifras nos indican como el territorio ocupado en Torreón es siete veces contra tres del crecimiento poblacional de la década de 1970 a la fecha.</td>
          </tr>
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
            <td>28/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-camino-redensificacion.html">Torreón, camino a la redensificación</a></td>
            <td>Torreón no ha aprovechado su territorio e infraestructura contenida, de una manera óptima, debido a su baja densidad de ocupación en su área urbana.</td>
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
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-red-carretera-total.html">Red Carretera Total en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-red-carretera-troncal-federal.html">Red Carretera Troncal Federal en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-red-carretera-de-alimentadoras-estatales.html">Red Carretera de Alimentadoras Estatales en Lerdo</a></td>
            <td>Red carretera de alimentadoras estatales.</td>
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
      data: [{ region: 'Torreón', dato: 0 },{ region: 'Gómez Palacio', dato: 111 },{ region: 'Lerdo', dato: 43 },{ region: 'Matamoros', dato: 0 }],
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

} // Clase SustentabilidadRedCarreteraAlimentadorasEstatales

?>
