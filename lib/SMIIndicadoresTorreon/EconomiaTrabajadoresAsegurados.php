<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Economía Trabajadores Asegurados (Creado por Central:SmiLanzadera)
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
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Trabajadores Asegurados en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2014-11-07T09:04';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-trabajadores-asegurados';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves            = 'IMPLAN, Torreón, Empleo';
        $this->categorias        = array('Empleo');
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
        $schema->articleBody     = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</p>

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
            <td>30/11/2013</td>
            <td>162,744</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>161,591</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>161,679</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>162,541</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>163,726</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>164,698</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>165,762</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>166,473</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>167,134</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>169,162</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>170,628</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 9037 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>171,233</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>171,804</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>169,066</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>169,434</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>171,485</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Trabajadores Asegurados en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Trabajadores Asegurados</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Trabajadores Asegurados</h3>
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
            <td>2015-02-28</td>
            <td>171,485</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-02-28</td>
            <td>74,991</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-02-28</td>
            <td>13,380</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-02-28</td>
            <td>7,547</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-02-28</td>
            <td>267,403</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
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
            <td>20/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/indicadores-economicos-primer-trimestre-2015-torreon.html">Indicadores Económicos del primer trimestre de 2015 para el Municipio de Torreón</a></td>
            <td>Análisis de los indicadores de inflación, apertura de empresas, trabajadores asegurados y salario promedio para el municipio de Torreón.</td>
          </tr>
          <tr>
            <td>10/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/efectos-informalidad-politicas-prevenirla.html">Efectos de la informalidad y políticas para prevenirla</a></td>
            <td>La informalidad tiene repercusiones directas sobre la competitividad y el crecimiento económico. Es cierto que ocupa a población desempleada en el sector formal y sus insumos e inversión apoyan a la economía, sin embargo es mayor el daño generado en el crecimiento a largo plazo.</td>
          </tr>
          <tr>
            <td>06/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/comercio-al-por-menor-alternativa-crecimiento-economico.html">Comercio al por menor como alternativa de crecimiento económico</a></td>
            <td>El comercio se vuelve tan importante como la industria tradicional para una localidad en la medida en que éste aumente el ingreso local y reduzca la fuga de consumo y empleo hacia otras ciudades.</td>
          </tr>
          <tr>
            <td>12/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/industrial-metalmecanica-la-laguna.html">La industria metalmecánica y La Laguna</a></td>
            <td>A diferencia del año 2013 cuando la industria metalmecánica creció 4% a nivel nacional, la directora de Fabetch México pronosticó en Julio un crecimiento de 8% para el presente año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/vision-vencedores.html">La visión de los vencedores</a></td>
            <td>El regreso de La Laguna a los primeros lugares en el ranking de competitividad nacional demanda de una comunidad que retome los valores y el empuje de “Los Fundadores”, de los hombres y mujeres que lejos de considerarse victimas de las adversidades, de su entorno natural y político, construyeron una de las regiones más prósperas de México.</td>
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
            <td><a href="../blog/retrospectiva-estado-actual-empleo.html">Retrospectiva y estado actual del empleo en Torreón y la ZML</a></td>
            <td>El empleo es uno de los principales indicadores, que muestra el desempeño económico de una ciudad, región o país. Desde hace 9 años Torreón y la Zona Metropolitana de la Laguna se habían separado a la alza de la media nacional.</td>
          </tr>
          <tr>
            <td>19/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-genero-informatica.html">Equidad de Género en Informática</a></td>
            <td>Aunque vivimos el mejor momento de las Ciencias Computacionales, el género femenino tiene muy poca participación en el sector.</td>
          </tr>
          <tr>
            <td>06/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-laboral-cotidiana-zml.html">Movilidad laboral cotidiana en la ZML</a></td>
            <td>Población ocupada que tiene trabajo en su PROPIO municipio y que tiene trabajo en OTRO Municipio de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>04/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/contribucion-tic-competitividad-productividad.html">Contribución de las TICs en la competitividad y productividad</a></td>
            <td>La implementación de las TICs en las actividades económicas se ha vuelto indispensable para el óptimo desarrollo de una región.</td>
          </tr>
          <tr>
            <td>30/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/laguna-apostarle-industria-automotriz.html">La Laguna debe apostarle a la Industria Automotriz</a></td>
            <td>En industria automotriz hay mayor inversión en la investigación y desarrollo que origina una derrama de capacidades tecnológicas con aplicación en otros sectores como el eléctrico, electrónico y aeroespacial.</td>
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
            <td>28/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/indicadores-por-municipio-metodologia-imco.html">Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO</a></td>
            <td>Índice de Competitividad Urbana de la Zona Metropolitana de la Laguna, Torreón, Gómez Palacio, Lerdo y Matamoros en 2012.</td>
          </tr>
          <tr>
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
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
            <td><a href="../indicadores-torreon/economia-desempleo.html">Desempleo en Torreón</a></td>
            <td>Cantidad de personas desempleadas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html">Personal Ocupado en el Comercio en Torreón</a></td>
            <td>Personal ocupado en comercio al por mayor y al por menor entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html">Personal Ocupado en la Industria Manufacturera en Torreón</a></td>
            <td>Personal ocupado en la Industria manufacturera entre el personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html">Personal Ocupado en los Servicios en Torreón</a></td>
            <td>Personal ocupado en las actividades de servicios entre personal ocupado total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-productividad-laboral.html">Productividad Laboral en Torreón</a></td>
            <td>PIB sin petróleo / PEA.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-salario-promedio.html">Salario promedio en Torreón</a></td>
            <td>Salario promedio mensual para personal ocupado con jornadas laborales de 35 a 48 horas semanales.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-tasa-de-desempleo-abierto.html">Tasa de Desempleo Abierto en Torreón</a></td>
            <td>Número total de desempleados entre la Población económicamente activa.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-tasa-de-informalidad.html">Tasa de informalidad en Torreón</a></td>
            <td>Tasa de empleos informales.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-trabajadores-asegurados-region.html">Trabajadores Asegurados (Región) en Torreón</a></td>
            <td>Evolución del empleo medida en trabajadores asegurados por el IMSS.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-trabajadores-asegurados.html">Trabajadores Asegurados en Torreón</a></td>
            <td>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</td>
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
      data: [{ fecha: '2013-11-30', dato: 162744 },{ fecha: '2013-12-31', dato: 161591 },{ fecha: '2014-01-31', dato: 161679 },{ fecha: '2014-02-28', dato: 162541 },{ fecha: '2014-03-31', dato: 163726 },{ fecha: '2014-04-30', dato: 164698 },{ fecha: '2014-05-31', dato: 165762 },{ fecha: '2014-06-30', dato: 166473 },{ fecha: '2014-07-31', dato: 167134 },{ fecha: '2014-08-31', dato: 169162 },{ fecha: '2014-09-30', dato: 170628 },{ fecha: '2014-10-31', dato: 171233 },{ fecha: '2014-11-30', dato: 171804 },{ fecha: '2014-12-31', dato: 169066 },{ fecha: '2015-01-31', dato: 169434 },{ fecha: '2015-02-28', dato: 171485 }],
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
      data: [{ region: 'Torreón', dato: 171485 },{ region: 'Gómez Palacio', dato: 74991 },{ region: 'Lerdo', dato: 13380 },{ region: 'Matamoros', dato: 7547 },{ region: 'La Laguna', dato: 267403 }],
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
<p>Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal</p>

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
            <td>30/11/2013</td>
            <td>162,744</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>161,591</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>161,679</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>162,541</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>163,726</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>164,698</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>165,762</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>166,473</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>167,134</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>169,162</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>170,628</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 9037 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>171,233</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>171,804</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>169,066</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>169,434</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>171,485</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

FINAL;
    } // constructor

} // Clase EconomiaTrabajadoresAsegurados

?>
