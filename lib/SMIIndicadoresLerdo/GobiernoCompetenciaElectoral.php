<?php
/**
 * TrcIMPLAN - SMI Indicadores Lerdo Gobierno Competencia Electoral (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresLerdo;

/**
 * Clase GobiernoCompetenciaElectoral
 */
class GobiernoCompetenciaElectoral extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Competencia Electoral en Lerdo';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'gobierno-competencia-electoral';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Diferencia entre los dos candidatos con más votación entre el total de votos.';
        $this->claves            = 'IMPLAN, Lerdo, Participación Ciudadana, Gobierno';
        $this->categorias        = array('Participación Ciudadana', 'Gobierno');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-lerdo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Durango';
        $region->addressLocality = 'Lerdo';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        $schema->articleBody     = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Diferencia entre los dos candidatos con más votación entre el total de votos.</p>

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
            <td>02/07/2012</td>
            <td>5.15 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Competencia Electoral en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Competencia Electoral</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Competencia Electoral</h3>
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
            <td>2013-07-07</td>
            <td>1.77 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-06-30</td>
            <td>4.48 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-07-02</td>
            <td>5.15 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-07-07</td>
            <td>39.67 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-07-07</td>
            <td>6.70 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $schema->extra           = <<<FINAL
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
            <td>03/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/experiencias-sobre-datos-abiertos-en-mexico.html">Experiencias sobre Datos Abiertos en México</a></td>
            <td>Representantes del gobierno del estado de Puebla y del municipio de Xalapa, Veracruz compartieron sus experiencias en materia de Datos Abiertos.</td>
          </tr>
          <tr>
            <td>26/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/zona-metropolitana-laguna.html">Zona Metropolitana de La Laguna</a></td>
            <td>La Zona Metropolitana de La Laguna está conformada por los municipios de Torreón, Matamoros en el estado de Coahuila, Gómez Palacio y Lerdo en Durango.</td>
          </tr>
          <tr>
            <td>15/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudadano-agente-cambio.html">Ciudadano como agente de cambio</a></td>
            <td>La participación de la sociedad en proyectos urbanos crea una cultura de co-creación. Destaca Medellín, Colombia donde se aplica en la coordinación, participación y construcción de obra pública.</td>
          </tr>
          <tr>
            <td>08/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/innovacion-internet-competitividad.html">Innovación, Internet y Competitividad</a></td>
            <td>Cada día se hace más necesario que el gobierno realice gran número de sus trámites por Internet. Los ciudadanos y la banca lo exigen en aras de aumentar la competitividad.</td>
          </tr>
          <tr>
            <td>07/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/nuevas-tecnologias-estandares-web.html">Nuevas Tecnologías y Estándares para la Web</a></td>
            <td>Recopilación de las nuevas técnicas que se deben de usar para la elaboración de sitios web institucionales. Con el objetivo de mejorarlas tanto para los humanos como para los robots (motores de búsqueda).</td>
          </tr>
          <tr>
            <td>26/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/que-son-datos-abiertos.html">¿Qué son los datos abiertos?</a></td>
            <td>Los datos abiertos son los datos digitales de carácter público que son accesibles en línea y que también pueden ser usados, reutilizados y redistribuidos por cualquier interesado.</td>
          </tr>
          <tr>
            <td>11/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/direccionando-hacia-innovacion-urbana.html">Direccionando hacia la innovación urbana</a></td>
            <td>Actualmente el concepto de ciudad inteligente o digital se maneja a nivel global. Muchas ciudades de este tipo se están desarrollando en diferentes lugares del mundo, cada una con su propio sistema, diseño, estructura y organización.</td>
          </tr>
          <tr>
            <td>01/01/2015</td>
            <td>Otro</td>
            <td><a href="..//../sig-planes/index.html">Planes</a></td>
            <td>Documentos oficiales que tienen que ver con desarrollo urbano.</td>
          </tr>
          <tr>
            <td>18/11/2014</td>
            <td>Otro</td>
            <td><a href="..//../sig-mapas-torreon/zonificacion-primaria.html">Zonificación Primaria</a></td>
            <td>Mapa para identificar el área urbana, el crecimiento urbano, la zona agrícola y las zonas de restauración y protección de Torreón, Coahuila.</td>
          </tr>
          <tr>
            <td>18/11/2014</td>
            <td>Otro</td>
            <td><a href="..//../sig-mapas-torreon/zonificacion-secundaria.html">Zonificación Secundaria</a></td>
            <td>Mapa referente para consultar los usos de suelo del área urbana de Torreón. De clic en un área para mostrar detalles y el enlace al reglamento.</td>
          </tr>
          <tr>
            <td>04/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/datos-abiertos-gobiernos-municipales.html">Datos Abiertos en los Gobiernos Municipales</a></td>
            <td>Con la parte tecnológica resuelta, ha sido común que cualquiera de nosotros se pregunte... ¿Cómo se podrían mejorar los servicios gubernamentales? La respuesta es Datos Abiertos.</td>
          </tr>
          <tr>
            <td>08/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/implan-somos-todos.html">El IMPLAN somos todos</a></td>
            <td>Al iniciar este año se puso en marcha las labores del IMPLAN Torreón, con la firme intención de brindar a la ciudad y su zona metropolitana la posibilidad de crecer de manera ordenada.</td>
          </tr>
          <tr>
            <td>19/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/independencia-finanzas-publicas.html">Independencia de las Finanzas Públicas</a></td>
            <td>Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>12/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gobiernos-eficaces-eficientes.html">Gobiernos eficaces y eficientes</a></td>
            <td>La eficiencia de los gobiernos es el subíndice peor evaluado para la metrópoli ubicándonos en el lugar 63 de 77.</td>
          </tr>
          <tr>
            <td>10/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sistema-politico-estable-funcional.html">Sistema Político Estable y Funcional</a></td>
            <td>El Sistema Político Estable y Funcional es el subíndice mejor calificado de la zona metropolitana, ya que IMCO nos sitúa en el lugar 11 del ranking.</td>
          </tr>
          <tr>
            <td>01/05/2014</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/banco-municipal-proyectos-inversion.html">Banco Municipal de Proyectos de Inversión</a></td>
            <td>Es un instrumento dinámico de gestión pública, orientado a consolidar una cultura municipal de formulación (preparación), planeación, seguimiento y evaluación de programas y proyectos de inversión, por medio de sus componentes y funciones.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-competencia-electoral-diferencia-de-votos.html">Competencia Electoral Diferencia de Votos en Lerdo</a></td>
            <td>Diferencia de votos entre primer y segundo lugar en la elección federal.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-competencia-electoral-votos-totales.html">Competencia Electoral Votos Totales en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-competencia-electoral.html">Competencia Electoral en Lerdo</a></td>
            <td>Diferencia entre los dos candidatos con más votación entre el total de votos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html">Organizaciones de la Sociedad Civil en Lerdo</a></td>
            <td>Organizaciones de la sociedad civil por cada cien mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-participacion-electoral.html">Participación Electoral en Lerdo</a></td>
            <td>Porcentaje de personas que emitieron su voto.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-indice-de-gobierno-electronico-municipal.html">Índice de Gobierno Electrónico Municipal en Lerdo</a></td>
            <td>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // JavaScript
        $this->javascript        = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2012-07-02', dato: 5.1500 }],
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
      data: [{ region: 'Torreón', dato: 1.7700 },{ region: 'Gómez Palacio', dato: 4.4800 },{ region: 'Lerdo', dato: 5.1500 },{ region: 'Matamoros', dato: 39.6700 },{ region: 'La Laguna', dato: 6.7000 }],
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
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion        = <<<FINAL
      <h3>Descripción</h3>
<p>Diferencia entre los dos candidatos con más votación entre el total de votos.</p>

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
            <td>02/07/2012</td>
            <td>5.15 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
FINAL;
    } // constructor

} // Clase GobiernoCompetenciaElectoral

?>
