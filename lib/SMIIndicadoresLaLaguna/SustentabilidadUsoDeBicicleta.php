<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Sustentabilidad Uso de Bicicleta (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SustentabilidadUsoDeBicicleta
 */
class SustentabilidadUsoDeBicicleta extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Uso de Bicicleta en La Laguna';
     // $this->autor            = '';
        $this->fecha            = '2014-11-10T10:24';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'sustentabilidad-uso-de-bicicleta';
        $this->imagen           = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa    = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Distribución porcentual del total de viajes cotidianos realizados por modalidad.';
        $this->claves           = 'IMPLAN, La Laguna, Movilidad, Recursos Naturales, Vialidad';
        $this->categorias       = array('Movilidad', 'Recursos Naturales', 'Vialidad');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-la-laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</p>

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
            <td>31/12/2011</td>
            <td>2.00 %</td>
            <td>Logit</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Estudio realizado por Logit en 2011. Contempla los viajes de los municipios de Torreón y Matamoros.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Uso de Bicicleta en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
  </div>
FINAL;
        $schema->extra          = <<<FINAL
      <h3>Publicaciones relacionadas</h3>
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
            <td>27/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/reflexion-crecimiento-urbano-torreon.html">Reflexión del Crecimiento Urbano en Torreón</a></td>
            <td>La ciudad de Torreón nace a partir de la visión de Sr. Andrés Guillermo Eppen con trazos ordenados, calles anchas, manzanas cuadradas y alineadas con la vía de ferrocarril.</td>
          </tr>
          <tr>
            <td>25/05/2015</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/calle-completa.html">Programa Calle Completa</a></td>
            <td>Calle Completa es una calle que incluye al peatón y a todos los medios de transporte (ciclistas, motociclistas, autobuses, automovilistas), de todas las edades y con todo tipo de habilidades motoras.</td>
          </tr>
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
            <td>27/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/objetivos-milenio.html">La Zona Metropolitana de La Laguna y los Objetivos del Milenio</a></td>
            <td>En septiembre del año 2000 fue celebrada la Cumbre del Milenio de las Naciones Unidas, durante la cual 147 jefes de estado firman y 189 países aprueban uno de los retos consensuados más ambicioso de las últimas décadas.</td>
          </tr>
          <tr>
            <td>14/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/mas-areas-verdes-proteger-salud-laguneros.html">Más áreas verdes para proteger la salud de los laguneros</a></td>
            <td>Manejar el tema de protección a la salud como punto estratégico en materia de ordenamiento territorial y urbano representa una oportunidad para el desarrollo de la región.</td>
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
            <td>22/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/cultura-seguridad-vial.html">Cultura y seguridad vial</a></td>
            <td>La cultura vial se refiere a la construcción de una convivencia armoniosa, responsable y de respeto entre todos los que hacemos uso de las vías de tránsito, sean estas aceras, rutas, caminos, ciclo vías, etc.</td>
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
            <td>18/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/competitividad-planeacion-metropolitana.html">Competitividad y Planeación Metropolitana</a></td>
            <td>El Instituto Mexicano para la Competitividad dio a conocer el Índice de Competitividad Urbana 2014; en él muestra que la Zona Metropolitana de la Laguna (ZML) continúa en un nivel de competitividad media baja.</td>
          </tr>
          <tr>
            <td>06/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-laboral-cotidiana-zml.html">Movilidad laboral cotidiana en la ZML</a></td>
            <td>Población ocupada que tiene trabajo en su PROPIO municipio y que tiene trabajo en OTRO Municipio de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>01/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gas-shale-impacto.html">El Gas Shale y su impacto</a></td>
            <td>La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.</td>
          </tr>
          <tr>
            <td>26/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/infraestructura.html">Infraestructura (Sectores precursores de clase mundial)</a></td>
            <td>Análisis de los indicadores sobre infraestructura en tecnologías de la información, carreteras avanzadas y tasa de accidentes viales.</td>
          </tr>
          <tr>
            <td>04/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/zml-manejo-sustentable-del-medio-ambiente.html">La Zona Metropolitana de La Laguna y sus municipios en manejo sustentable del medio ambiente</a></td>
            <td>De acuerdo al ICU 2012, en cuanto a medio ambiente La Laguna ocupa el lugar 35 de 77.</td>
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
            <td><a href="../indicadores-la-laguna/seguridad-accidentes-viales-fatales.html">Accidentes Viales Fatales en La Laguna</a></td>
            <td>Cantidad de accidentes viales fatales por año.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-accidentes-viales.html">Accidentes Viales en La Laguna</a></td>
            <td>Cantidad de accidentes viales por año.</td>
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
            <td><a href="../indicadores-la-laguna/sustentabilidad-generacion-de-basura.html">Generación de Basura en La Laguna</a></td>
            <td>Se considera la basura generada que ha sido recolectada y que termina en los depósitos adecuados para el manejo de ésta, ya que existen otras formas que implican la incineración y los depósitos no controlados y/o no autorizados.</td>
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
            <td><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-internacionales-anuales.html">Pasajeros Aéreos Internacionales Anuales en La Laguna</a></td>
            <td>Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-totales-anual.html">Pasajeros Aéreos Totales Anual en La Laguna</a></td>
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
            <td><a href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html">Porcentaje de Accidentes Viales Fatales en La Laguna</a></td>
            <td>Porcentaje de accidentes fatales entre accidentes viales totales</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-sobreexplotacion-del-acuifero.html">Sobreexplotación del Acuífero en La Laguna</a></td>
            <td></td>
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
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-volumen-tratado-de-aguas-residuales.html">Volumen Tratado de Aguas Residuales en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-area-no-urbanizada.html">Área No Urbanizada en La Laguna</a></td>
            <td>Área total de localidades no urbanizadas sobre la superficie municipal.</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // JavaScript
        $this->javascript       = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2011-12-31', dato: 2.0000 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL
      <h3>Descripción</h3>
<p>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</p>

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
            <td>31/12/2011</td>
            <td>2.00 %</td>
            <td>Logit</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Estudio realizado por Logit en 2011. Contempla los viajes de los municipios de Torreón y Matamoros.</p>

FINAL;
    } // constructor

} // Clase SustentabilidadUsoDeBicicleta

?>
