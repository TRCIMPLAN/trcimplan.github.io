<?php
/**
 * SustentabilidadConsumoDeAguaFacturado.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadConsumoDeAguaFacturado
 */
class SustentabilidadConsumoDeAguaFacturado extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Consumo de Agua Facturado en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'sustentabilidad-consumo-de-agua-facturado';
        $this->descripcion  = 'Consumo anual de agua por persona expresado en metros cúbicos.';
        $this->claves       = 'Torreón, Recursos Naturales';
        $this->categorias   = array('Recursos Naturales');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Consumo anual de agua por persona expresado en metros cúbicos.</p>

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
            <td>47.7700</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>46.7500</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>44.5700</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>41.9900</td>
            <td>SIMAS</td>
            <td>Consumo anual</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Metros cúbicos per cápita.</p>
      <h3>Observaciones</h3>
<p>Total facturado dividido entre la población.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Consumo de Agua Facturado en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Consumo de Agua Facturado</h3>
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
            <td>28/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudades-reto-transformacion.html">Las ciudades y el reto de su transformación</a></td>
            <td>El futuro de la humanidad está intrínsecamente relacionado al futuro de las ciudades. A partir de la revolución industrial hubo una movilización de personas del campo a la ciudad, lo que trajo consigo una revolución urbana.</td>
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
            <td>01/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gas-shale-impacto.html">El Gas Shale y su impacto</a></td>
            <td>La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.</td>
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
            <td><a href="../indicadores-torreon/sustentabilidad-generacion-de-basura.html">Generación de Basura en Torreón</a></td>
            <td>Se considera la basura generada que ha sido recolectada y que termina en los depósitos adecuados para el manejo de ésta, ya que existen otras formas que implican la incineración y los depósitos no controlados y/o no autorizados.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-motorizacion.html">Motorización en Torreón</a></td>
            <td>Vehículos automotores registrados en circulación.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html">Sobreexplotación del Acuífero en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-volumen-tratado-de-aguas-residuales.html">Volumen Tratado de Aguas Residuales en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-area-no-urbanizada.html">Área No Urbanizada en Torreón</a></td>
            <td>Área total de localidades no urbanizadas sobre la superficie municipal.</td>
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
      data: [{ fecha: '2010-12-31', dato: 47.7700 },{ fecha: '2011-12-31', dato: 46.7500 },{ fecha: '2012-12-31', dato: 44.5700 },{ fecha: '2013-12-31', dato: 41.9900 }],
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
    } // constructor

} // Clase SustentabilidadConsumoDeAguaFacturado

?>
