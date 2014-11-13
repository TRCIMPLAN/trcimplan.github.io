<?php
/**
 * SociedadIndiceDeDesarrolloHumanoIdh.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadIndiceDeDesarrolloHumanoIdh
 */
class SociedadIndiceDeDesarrolloHumanoIdh extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Desarrollo Humano (IDH) en Lerdo';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'sociedad-indice-de-desarrollo-humano--idh-';
        $this->descripcion = 'El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).';
        $this->claves      = 'Lerdo, Bienestar';
        $this->categorias  = array('Bienestar');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en <a href="http://www.undp.org.mx/desarrollohumano/disco/index.html">PNUD</a>.</p>

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
            <td class="centrado">31/03/2005</td>
            <td class="derecha">0.7970</td>
            <td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
            <td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> De 0 a 1.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Índice de Desarrollo Humano (IDH)</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Índice de Desarrollo Humano (IDH)</h3>
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
            <td>2005-03-31</td>
            <td class="derecha">0.8470</td>
            <td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
            <td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2005-03-31</td>
            <td class="derecha">0.8160</td>
            <td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
            <td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2005-03-31</td>
            <td class="derecha">0.7970</td>
            <td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
            <td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2005-03-31</td>
            <td class="derecha">0.7820</td>
            <td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
            <td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 0.8470 },{ region: 'Gómez Palacio', dato: 0.8160 },{ region: 'Lerdo', dato: 0.7970 },{ region: 'Matamoros', dato: 0.7820 }],
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

} // Clase SociedadIndiceDeDesarrolloHumanoIdh

?>
