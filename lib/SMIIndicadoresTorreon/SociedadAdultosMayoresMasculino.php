<?php
/**
 * SociedadAdultosMayoresMasculino.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadAdultosMayoresMasculino
 */
class SociedadAdultosMayoresMasculino extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Adultos Mayores Masculino en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sociedad-adultos-mayores-masculino';
        $this->descripcion  = 'Población estimada a mediados de año de personas de 65 años y más de sexo masculino';
        $this->claves       = 'Torreón, Grupos Vulnerables';
        $this->categorias   = array('Grupos Vulnerables');
        $this->region_nivel = 101;
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
<p>Población estimada a mediados de año de personas de 65 años y más de sexo masculino</p>

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
            <td>30/06/2011</td>
            <td>17,498</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>18,233</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>19,010</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>19,829</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>20,691</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>21,594</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2017</td>
            <td>22,537</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2018</td>
            <td>23,517</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2019</td>
            <td>24,531</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2020</td>
            <td>25,576</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Adultos Mayores Masculino en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Adultos Mayores Masculino</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Adultos Mayores Masculino</h3>
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
            <td>2014-06-30</td>
            <td>19,829</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-06-30</td>
            <td>9,400</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-06-30</td>
            <td>4,529</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-06-30</td>
            <td>3,780</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-06-30</td>
            <td>37,538</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-06-30</td>
            <td>87,565</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-06-30</td>
            <td>57,418</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-06-30</td>
            <td>3,662,907</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Adultos Mayores Masculino</h3>
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
            <td>02/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ninos-violencia.html">Los Niños y la Violencia</a></td>
            <td>Datos y evidencias sobre los diferentes tipos de violencia contra niños, niñas y adolescentes en México. ¿Qué hacer?... todos los caminos apuntan a la prevención.</td>
          </tr>
          <tr>
            <td>13/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-vulnerabilidad-social.html">Torreón y la Vulnerabilidad Social</a></td>
            <td>Análisis de los indicadores sobre la infancia, alimentación, educación, maternidad adolescente, adultos mayores, vulnerabilidad por la delincuencia y discapacidad.</td>
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
            <td><a href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html">Adultos Mayores Femenino en Torreón</a></td>
            <td>Población estimada a mediados de año de personas de 65 años y más de sexo femenino.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-adultos-mayores.html">Adultos Mayores en Torreón</a></td>
            <td>Población estimada a mediados de año de personas de 65 años y más</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-discapacidad.html">Discapacidad en Torreón</a></td>
            <td>Porcentaje de la población total con alguna limitación (motriz, visión, auditivo, habla y/o cognitivas)</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-estimacion-de-menores-huerfanos-por-agresiones.html">Estimación de Menores Huérfanos por Agresiones en Torreón</a></td>
            <td>Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-madres-adolescentes.html">Madres Adolescentes en Torreón</a></td>
            <td>Total de partos registrados (nacidos vivos) de mujeres entre 10 y 18 años de edad</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en Torreón</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-rezago-alimentario.html">Rezago Alimentario en Torreón</a></td>
            <td>Personas que presenten un grado de inseguridad alimentaria moderado o severo.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-rezago-educativo.html">Rezago Educativo en Torreón</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
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
      data: [{ fecha: '2011-06-30', dato: 17498 },{ fecha: '2012-06-30', dato: 18233 },{ fecha: '2013-06-30', dato: 19010 },{ fecha: '2014-06-30', dato: 19829 },{ fecha: '2015-06-30', dato: 20691 },{ fecha: '2016-06-30', dato: 21594 },{ fecha: '2017-06-30', dato: 22537 },{ fecha: '2018-06-30', dato: 23517 },{ fecha: '2019-06-30', dato: 24531 },{ fecha: '2020-06-30', dato: 25576 }],
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
      data: [{ region: 'Torreón', dato: 19829 },{ region: 'Gómez Palacio', dato: 9400 },{ region: 'Lerdo', dato: 4529 },{ region: 'Matamoros', dato: 3780 },{ region: 'La Laguna', dato: 37538 },{ region: 'Coahuila', dato: 87565 },{ region: 'Durango', dato: 57418 },{ region: 'Nacional', dato: 3662907 }],
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

} // Clase SociedadAdultosMayoresMasculino

?>
