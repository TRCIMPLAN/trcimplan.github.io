<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Seguridad Accidentes Viales Fatales (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadAccidentesVialesFatales
 */
class SeguridadAccidentesVialesFatales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Accidentes Viales Fatales en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'seguridad-accidentes-viales-fatales';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Cantidad de accidentes viales fatales por año.';
        $this->claves            = 'IMPLAN, Torreón, Vialidad';
        $this->categorias        = array('Vialidad');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Torreón';
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
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el HTML de las lengüetas
        $this->contenido->articleBody = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad de accidentes viales fatales por año.</p>

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
            <td>23</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Accidentes Viales Fatales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Accidentes Viales Fatales</h3>
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
            <td>23</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>29</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>11</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>3</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>66</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        // Cargar en el Schema el HTML con los artículos relacionados
        $this->contenido->extra = <<<FINAL
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
            <td>17/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/recomendaciones-pacificacion-transito.html">Recomendaciones para la Pacificación del Tránsito</a></td>
            <td>Técnicas para bajar la velocidad de los vehículos motorizados, logrando mejorar la seguridad de los peatones, incrementar las ventas y hacer de las calles céntricas espacios sociales y culturales.</td>
          </tr>
          <tr>
            <td>10/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/camina-la-roma-por-buenos-disenos-peatonales.html">#Camina La Roma por buenos diseños peatonales</a></td>
            <td>Ejercicio realizado por el Instituto de Políticas para el Transporte y el Desarrollo (ITDP por sus siglas en inglés) México para analizar cómo funcionaría una intersección vial si estuviera diseñada para las personas que andan a pie.</td>
          </tr>
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
            <td>21/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/francisco-i-madero-ejemplo-rescate-espacio-publico.html">Francisco I. Madero: Ejemplo de un rescate de Espacio Público</a></td>
            <td>El Corredor Peatonal Madero ha motivado el crecimiento comercial y favorecido la conservación sus edificios históricos, en lo que hoy es una calle sólo para transeúntes.</td>
          </tr>
          <tr>
            <td>24/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-disponibilidad-de-banqueta.html">Disponibilidad de Banqueta en Gómez Palacio</a></td>
            <td>Porcentaje de manzanas que cuentan con banquetas en todas o en alguna de sus vialidades.</td>
          </tr>
          <tr>
            <td>24/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-disponibilidad-de-banqueta.html">Disponibilidad de Banqueta en La Laguna</a></td>
            <td>Porcentaje de manzanas que cuentan con banquetas en todas o en alguna de sus vialidades.</td>
          </tr>
          <tr>
            <td>24/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-disponibilidad-de-banqueta.html">Disponibilidad de Banqueta en Lerdo</a></td>
            <td>Porcentaje de manzanas que cuentan con banquetas en todas o en alguna de sus vialidades.</td>
          </tr>
          <tr>
            <td>24/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-disponibilidad-de-banqueta.html">Disponibilidad de Banqueta en Matamoros</a></td>
            <td>Porcentaje de manzanas que cuentan con banquetas en todas o en alguna de sus vialidades.</td>
          </tr>
          <tr>
            <td>24/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-disponibilidad-de-banqueta.html">Disponibilidad de Banqueta en Torreón</a></td>
            <td>Porcentaje de manzanas que cuentan con banquetas en todas o en alguna de sus vialidades.</td>
          </tr>
          <tr>
            <td>10/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-traslados-a-pie.html">Traslados a Pie en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</td>
          </tr>
          <tr>
            <td>10/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-uso-de-bicicleta.html">Uso de Bicicleta en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</td>
          </tr>
          <tr>
            <td>10/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-uso-de-transporte-publico.html">Uso de Transporte Público en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad. No se consideran los viajes en taxi.</td>
          </tr>
          <tr>
            <td>10/11/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-uso-de-automovil-particular.html">Uso de Automóvil Particular en La Laguna</a></td>
            <td>Distribución porcentual del total de viajes cotidianos realizados por modalidad.</td>
          </tr>
          <tr>
            <td>05/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/dot-desarrollo-orientado-transporte.html">DOT: Desarrollo Orientado al Transporte</a></td>
            <td>En las últimas décadas, han surgido nuevos modelos urbanos que retoman el componente humano como eje principal de la planeación, buscando el equilibrio entre una ciudad altamente competitiva pero con servicios e infraestructura orientada al confort y las necesidades del ser humano.</td>
          </tr>
          <tr>
            <td>22/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/cultura-seguridad-vial.html">Cultura y seguridad vial</a></td>
            <td>La cultura vial se refiere a la construcción de una convivencia armoniosa, responsable y de respeto entre todos los que hacemos uso de las vías de tránsito, sean estas aceras, rutas, caminos, ciclo vías, etc.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-acceso-a-vialidades-pavimentadas.html">Acceso a Vialidades Pavimentadas en Gómez Palacio</a></td>
            <td>Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-acceso-a-vialidades-pavimentadas.html">Acceso a Vialidades Pavimentadas en La Laguna</a></td>
            <td>Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-acceso-a-vialidades-pavimentadas.html">Acceso a Vialidades Pavimentadas en Lerdo</a></td>
            <td>Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-acceso-a-vialidades-pavimentadas.html">Acceso a Vialidades Pavimentadas en Matamoros</a></td>
            <td>Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-acceso-a-vialidades-pavimentadas.html">Acceso a Vialidades Pavimentadas en Torreón</a></td>
            <td>Porcentaje de manzanas que cuentan con acceso a vialidades pavimentadas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales-fatales.html">Accidentes Viales Fatales en Gómez Palacio</a></td>
            <td>Cantidad de accidentes viales fatales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-accidentes-viales-fatales.html">Accidentes Viales Fatales en La Laguna</a></td>
            <td>Cantidad de accidentes viales fatales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-accidentes-viales-fatales.html">Accidentes Viales Fatales en Lerdo</a></td>
            <td>Cantidad de accidentes viales fatales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-accidentes-viales-fatales.html">Accidentes Viales Fatales en Matamoros</a></td>
            <td>Cantidad de accidentes viales fatales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html">Accidentes Viales Fatales en Torreón</a></td>
            <td>Cantidad de accidentes viales fatales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales.html">Accidentes Viales en Gómez Palacio</a></td>
            <td>Cantidad de accidentes viales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-accidentes-viales.html">Accidentes Viales en La Laguna</a></td>
            <td>Cantidad de accidentes viales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-accidentes-viales.html">Accidentes Viales en Lerdo</a></td>
            <td>Cantidad de accidentes viales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-accidentes-viales.html">Accidentes Viales en Matamoros</a></td>
            <td>Cantidad de accidentes viales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-accidentes-viales.html">Accidentes Viales en Torreón</a></td>
            <td>Cantidad de accidentes viales por año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-motorizacion.html">Motorización en Gómez Palacio</a></td>
            <td>Vehículos automotores registrados en circulación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-motorizacion.html">Motorización en La Laguna</a></td>
            <td>Vehículos automotores registrados en circulación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-motorizacion.html">Motorización en Lerdo</a></td>
            <td>Vehículos automotores registrados en circulación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-motorizacion.html">Motorización en Matamoros</a></td>
            <td>Vehículos automotores registrados en circulación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-motorizacion.html">Motorización en Torreón</a></td>
            <td>Vehículos automotores registrados en circulación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-porcentaje-de-accidentes-viales-fatales.html">Porcentaje de Accidentes Viales Fatales en Gómez Palacio</a></td>
            <td>Porcentaje de accidentes fatales entre accidentes viales totales</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html">Porcentaje de Accidentes Viales Fatales en La Laguna</a></td>
            <td>Porcentaje de accidentes fatales entre accidentes viales totales</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html">Porcentaje de Accidentes Viales Fatales en Lerdo</a></td>
            <td>Porcentaje de accidentes fatales entre accidentes viales totales</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-porcentaje-de-accidentes-viales-fatales.html">Porcentaje de Accidentes Viales Fatales en Matamoros</a></td>
            <td>Porcentaje de accidentes fatales entre accidentes viales totales</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html">Porcentaje de Accidentes Viales Fatales en Torreón</a></td>
            <td>Porcentaje de accidentes fatales entre accidentes viales totales</td>
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
        </tbody>
      </table>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // JavaScript
        $this->javascript[] = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 23 },{ region: 'Gómez Palacio', dato: 29 },{ region: 'Lerdo', dato: 11 },{ region: 'Matamoros', dato: 3 },{ region: 'La Laguna', dato: 66 }],
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
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion = <<<FINAL
      <h3>Descripción</h3>
<p>Cantidad de accidentes viales fatales por año.</p>

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
            <td>23</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SeguridadAccidentesVialesFatales

?>
