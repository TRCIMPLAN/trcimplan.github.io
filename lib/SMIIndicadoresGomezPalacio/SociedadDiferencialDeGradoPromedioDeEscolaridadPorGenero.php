<?php
/**
 * SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero
 */
class SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Diferencial de Grado Promedio de Escolaridad por Género en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero';
        $this->descripcion  = 'Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.';
        $this->claves       = 'Gómez Palacio, Género, Educación';
        $this->categorias   = array('Género', 'Educación');
        $this->region_nivel = 111;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</p>

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
            <td>-0.2000</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Promedio.</p>
      <h3>Observaciones</h3>
<p>Años de escolaridad.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Diferencial de Grado Promedio de Escolaridad por Género</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Diferencial de Grado Promedio de Escolaridad por Género</h3>
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
            <td>-0.3200</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>-0.2000</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>-0.0600</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>0.0200</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Diferencial de Grado Promedio de Escolaridad por Género</h3>
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
            <td><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores-femenino.html">Adultos Mayores Femenino en Gómez Palacio</a></td>
            <td>Población estimada a mediados de año de personas de 65 años y más de sexo femenino.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-cientifico-matematico.html">Alumnos con Perfil Científico-Matemático en Gómez Palacio</a></td>
            <td>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-gramatico-espanol.html">Alumnos con Perfil Gramático-Español en Gómez Palacio</a></td>
            <td>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-espacios-culturales.html">Espacios Culturales en Gómez Palacio</a></td>
            <td>Espacios culturales físicamente delimitados.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-hogares-con-jefatura-femenina.html">Hogares con Jefatura Femenina en Gómez Palacio</a></td>
            <td>Porcentaje de hogares con jefatura femenina.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-maternidad-adolescente.html">Maternidad Adolescente en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-mortalidad-materna.html">Mortalidad Materna en Gómez Palacio</a></td>
            <td>Defunciones maternas por cada cien mil partos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html">Rezago Educativo en Gómez Palacio</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-universidades.html">Universidades en Gómez Palacio</a></td>
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
      data: [{ region: 'Torreón', dato: -0.3200 },{ region: 'Gómez Palacio', dato: -0.2000 },{ region: 'Lerdo', dato: -0.0600 },{ region: 'Matamoros', dato: 0.0200 }],
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

} // Clase SociedadDiferencialDeGradoPromedioDeEscolaridadPorGenero

?>
