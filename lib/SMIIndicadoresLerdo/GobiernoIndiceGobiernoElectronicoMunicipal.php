<?php
/**
 * GobiernoIndiceGobiernoElectronicoMunicipal.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase GobiernoIndiceGobiernoElectronicoMunicipal
 */
class GobiernoIndiceGobiernoElectronicoMunicipal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Índice de Gobierno Electrónico Municipal en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'gobiernoindice-gobierno-electronico-municipal';
        $this->descripcion  = 'índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.';
        $this->claves       = 'Lerdo, Gobierno Digital';
        $this->categorias   = array('Gobierno Digital');
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
<p>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</p>

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
            <td>0.4714</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> De 0 a 1.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Índice de Gobierno Electrónico Municipal</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Índice de Gobierno Electrónico Municipal</h3>
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
            <td>2011-12-31</td>
            <td>0.6916</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2011-12-31</td>
            <td>0.4763</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2011-12-31</td>
            <td>0.4714</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2011-12-31</td>
            <td>0.5366</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2011-12-31</td>
            <td>0.5440</td>
            <td>CIDE</td>
            <td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Índice de Gobierno Electrónico Municipal</h3>
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
            <td>04/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/datos-abiertos-gobiernos-municipales.html">Datos Abiertos en los Gobiernos Municipales</a></td>
            <td>Con la parte tecnológica resuelta, ha sido común que cualquiera de nosotros se pregunte... ¿Cómo se podrían mejorar los servicios gubernamentales? La respuesta es Datos Abiertos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-indice-de-gobierno-electronico-municipal.html">Índice de Gobierno Electrónico Municipal en Lerdo</a></td>
            <td>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</td>
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
      data: [{ region: 'Torreón', dato: 0.6916 },{ region: 'Gómez Palacio', dato: 0.4763 },{ region: 'Lerdo', dato: 0.4714 },{ region: 'Matamoros', dato: 0.5366 },{ region: 'La Laguna', dato: 0.5440 }],
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

} // Clase GobiernoIndiceGobiernoElectronicoMunicipal

?>
