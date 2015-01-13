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
        $this->nombre       = 'Índice de Desarrollo Humano (IDH) en Lerdo';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-lerdo';
        $this->archivo      = 'sociedad-indice-de-desarrollo-humano--idh-';
        $this->descripcion  = 'El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).';
        $this->claves       = 'Lerdo, Bienestar';
        $this->categorias   = array('Bienestar');
        $this->region_nivel = 121;
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
            <td>31/12/2000</td>
            <td>0.8193</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>0.8600</td>
            <td>INAFED-PNUD</td>
            <td>Descargar [base de datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>0.8661</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> De 0 a 1.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Índice de Desarrollo Humano (IDH) en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
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
            <td>2010-12-31</td>
            <td>0.8976</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>0.8681</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>0.8661</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>0.8404</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td>0.8680</td>
            <td>INAFED-PNUD</td>
            <td>El dato es un promedio de los cuatro municipios que integran la Zona Metropolitana de la Laguna. Se publica únicamente como referencia. Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td>0.7760</td>
            <td>INAFED-PNUD</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td>0.7320</td>
            <td>INAFED-PNUD</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2010-12-31</td>
            <td>0.7500</td>
            <td>INAFED-PNUD</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Índice de Desarrollo Humano (IDH)</h3>
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
            <td>09/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/urgencia-ser-estrategicos.html">La urgencia de ser estratégicos</a></td>
            <td>El futuro tiene cada vez más peso en las decisiones presentes, traer los probables escenarios futuros al presente nos pide innovar, ser más creativos y también nos invita a ser urgentes.</td>
          </tr>
          <tr>
            <td>02/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudades-mas-humanas.html">Ciudades más Humanas</a></td>
            <td>La calidad de vida en las ciudades es la posibilidad que tiene una persona, una familia o una comunidad, de alcanzar el bienestar y la satisfacción de todas sus necesidades.</td>
          </tr>
          <tr>
            <td>28/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudades-reto-transformacion.html">Las ciudades y el reto de su transformación</a></td>
            <td>El futuro de la humanidad está intrínsecamente relacionado al futuro de las ciudades. A partir de la revolución industrial hubo una movilización de personas del campo a la ciudad, lo que trajo consigo una revolución urbana.</td>
          </tr>
          <tr>
            <td>18/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/competitividad-planeacion-metropolitana.html">Competitividad y Planeación Metropolitana</a></td>
            <td>El Instituto Mexicano para la Competitividad dio a conocer el Índice de Competitividad Urbana 2014; en él muestra que la Zona Metropolitana de la Laguna (ZML) continúa en un nivel de competitividad media baja.</td>
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
            <td><a href="../indicadores-lerdo/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en Lerdo</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-pobreza-extrema.html">Pobreza Extrema en Lerdo</a></td>
            <td>Porcentaje de la población en situación de pobreza extrema.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-pobreza-moderada.html">Pobreza Moderada en Lerdo</a></td>
            <td>Porcentaje de la población en situación de pobreza moderada.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-pobreza.html">Pobreza en Lerdo</a></td>
            <td>Porcentaje de la población en situación de pobreza.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-rezago-alimentario.html">Rezago Alimentario en Lerdo</a></td>
            <td>Personas que presenten un grado de inseguridad alimentaria moderado o severo.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-indice-de-hacinamiento.html">Índice de hacinamiento en Lerdo</a></td>
            <td>Resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</td>
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
      data: [{ fecha: '2000-12-31', dato: 0.8193 },{ fecha: '2005-12-31', dato: 0.8600 },{ fecha: '2010-12-31', dato: 0.8661 }],
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
      data: [{ region: 'Torreón', dato: 0.8976 },{ region: 'Gómez Palacio', dato: 0.8681 },{ region: 'Lerdo', dato: 0.8661 },{ region: 'Matamoros', dato: 0.8404 },{ region: 'La Laguna', dato: 0.8680 },{ region: 'Coahuila', dato: 0.7760 },{ region: 'Durango', dato: 0.7320 },{ region: 'Nacional', dato: 0.7500 }],
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
