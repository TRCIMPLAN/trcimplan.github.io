<?php
/**
 * SociedadAlumnosDePrimariaPorDocente.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadAlumnosDePrimariaPorDocente
 */
class SociedadAlumnosDePrimariaPorDocente extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Alumnos de Primaria por Docente en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sociedad-alumnos-de-primaria-por-docente';
        $this->descripcion  = 'Número de alumnos (estudiantes) promedio por docente de nivel de educación primaria, basado en el número bruto de estudiantes y de docentes durante el ciclo escolar dado.';
        $this->claves       = 'Torreón, Educación';
        $this->categorias   = array('Educación');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Número de alumnos (estudiantes) promedio por docente de nivel de educación primaria, basado en el número bruto de estudiantes y de docentes durante el ciclo escolar dado.</p>

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
            <td>01/07/2014</td>
            <td>29.5000</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://planeacion.sep.gob.mx/principalescifras/">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Alumnos de Primaria por Docente</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Alumnos de Primaria por Docente</h3>
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
            <td>2014-07-01</td>
            <td>29.5000</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-07-01</td>
            <td>26.6000</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-07-01</td>
            <td>25.4000</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-07-01</td>
            <td>26.9000</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-07-01</td>
            <td>27.9000</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-07-01</td>
            <td>28.9000</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-07-01</td>
            <td>21.7000</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-07-01</td>
            <td>25.4000</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Alumnos de Primaria por Docente</h3>
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
            <td>14/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/papel-educacion-desarrollo-economico.html">El papel de la educación en el desarrollo económico</a></td>
            <td>Cómo la educación contribuye al crecimiento económico y la importancia de implementar políticas públicas para incrementar su calidad.</td>
          </tr>
          <tr>
            <td>27/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/objetivos-milenio.html">La Zona Metropolitana de La Laguna y los Objetivos del Milenio</a></td>
            <td>En septiembre del año 2000 fue celebrada la Cumbre del Milenio de las Naciones Unidas, durante la cual 147 jefes de estado firman y 189 países aprueban uno de los retos consensuados más ambicioso de las últimas décadas.</td>
          </tr>
          <tr>
            <td>10/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/papel-organizaciones-civiles-aumento-competitividad.html">El papel de las Organizaciones Civiles en el aumento del bienestar y competitividad</a></td>
            <td>En toda ciudad, estado o país debe haber sinergia entre ciudadanos, asociaciones civiles y empresas para definir programas a largo plazo que mejoren la calidad y el bienestar de todos nosotros.</td>
          </tr>
          <tr>
            <td>19/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-genero-informatica.html">Equidad de Género en Informática</a></td>
            <td>Aunque vivimos el mejor momento de las Ciencias Computacionales, el género femenino tiene muy poca participación en el sector.</td>
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
            <td><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientifico-matematico.html">Alumnos con Perfil Científico-Matemático en Torreón</a></td>
            <td>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramatico-espanol.html">Alumnos con Perfil Gramático-Español en Torreón</a></td>
            <td>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html">Diferencial de Grado Promedio de Escolaridad por Género en Torreón</a></td>
            <td>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-espacios-culturales.html">Espacios Culturales en Torreón</a></td>
            <td>Espacios culturales físicamente delimitados.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-posgrados-de-calidad.html">Posgrados de Calidad en Torreón</a></td>
            <td>Programas aceptados por CONACYT como posgrados de calidad</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior en Torreón</a></td>
            <td>Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-rezago-educativo.html">Rezago Educativo en Torreón</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-universidades.html">Universidades en Torreón</a></td>
            <td>Planteles de Instituciones de Educación Superior.</td>
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
      data: [{ region: 'Torreón', dato: 29.5000 },{ region: 'Gómez Palacio', dato: 26.6000 },{ region: 'Lerdo', dato: 25.4000 },{ region: 'Matamoros', dato: 26.9000 },{ region: 'La Laguna', dato: 27.9000 },{ region: 'Coahuila', dato: 28.9000 },{ region: 'Durango', dato: 21.7000 },{ region: 'Nacional', dato: 25.4000 }],
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

} // Clase SociedadAlumnosDePrimariaPorDocente

?>
