<?php
/**
 * SociedadPoblacionEstimada.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadPoblacionEstimada
 */
class SociedadPoblacionEstimada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Población Estimada en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-poblacion-estimada';
        $this->descripcion = 'Población estimada a mitad de año.';
        $this->claves      = 'Gómez Palacio, Población';
        $this->categorias  = array('Población');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="lenguetasindicador">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
<p>Población estimada a mitad de año.</p>

      <h4>Información recopilada</h4>
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
            <td class="centrado">30/06/2011</td>
            <td class="derecha">339,355</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2012</td>
            <td class="derecha">343,135</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2013</td>
            <td class="derecha">346,836</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">350,513</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2015</td>
            <td class="derecha">354,123</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2016</td>
            <td class="derecha">357,664</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2017</td>
            <td class="derecha">361,144</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2018</td>
            <td class="derecha">364,540</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2019</td>
            <td class="derecha">367,828</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2020</td>
            <td class="derecha">371,002</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h4>Observaciones</h4>
<p>Estimaciones de CONAPO en base a INEGI. Consulta la <a href="http://www.conapo.gob.mx/es/CONAPO/Proyecciones_Datos">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="grafica">
<h4>Gráfica</h4>
<div id="Morrisrilvwsjg" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
<h4>En otras regiones</h4>
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
            <td>2011-06-30</td>
            <td class="derecha">656,988</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2012-06-30</td>
            <td class="derecha">666,226</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2013-06-30</td>
            <td class="derecha">675,210</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2014-06-30</td>
            <td class="derecha">683,914</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2015-06-30</td>
            <td class="derecha">692,386</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2016-06-30</td>
            <td class="derecha">700,656</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2017-06-30</td>
            <td class="derecha">708,755</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2018-06-30</td>
            <td class="derecha">716,672</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2019-06-30</td>
            <td class="derecha">724,386</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2020-06-30</td>
            <td class="derecha">731,902</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2011-06-30</td>
            <td class="derecha">146,164</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-06-30</td>
            <td class="derecha">147,985</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-06-30</td>
            <td class="derecha">149,721</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-06-30</td>
            <td class="derecha">151,409</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-06-30</td>
            <td class="derecha">153,040</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-06-30</td>
            <td class="derecha">154,621</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2017-06-30</td>
            <td class="derecha">156,161</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2018-06-30</td>
            <td class="derecha">157,655</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2019-06-30</td>
            <td class="derecha">159,094</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2020-06-30</td>
            <td class="derecha">160,479</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2011-06-30</td>
            <td class="derecha">109,264</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-06-30</td>
            <td class="derecha">110,244</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-06-30</td>
            <td class="derecha">111,305</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-06-30</td>
            <td class="derecha">112,434</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-06-30</td>
            <td class="derecha">113,612</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2016-06-30</td>
            <td class="derecha">114,829</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2017-06-30</td>
            <td class="derecha">116,078</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2018-06-30</td>
            <td class="derecha">117,349</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2019-06-30</td>
            <td class="derecha">118,631</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2020-06-30</td>
            <td class="derecha">119,919</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2011-06-30</td>
            <td class="derecha">1,251,771</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-06-30</td>
            <td class="derecha">1,267,630</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-06-30</td>
            <td class="derecha">1,283,072</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-06-30</td>
            <td class="derecha">1,298,270</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-06-30</td>
            <td class="derecha">1,313,161</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-06-30</td>
            <td class="derecha">1,327,769</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2017-06-30</td>
            <td class="derecha">1,342,139</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2018-06-30</td>
            <td class="derecha">1,356,216</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2019-06-30</td>
            <td class="derecha">1,369,939</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2020-06-30</td>
            <td class="derecha">1,383,303</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2011-06-30</td>
            <td class="derecha">2,818,077</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2012-06-30</td>
            <td class="derecha">2,854,334</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-06-30</td>
            <td class="derecha">2,890,108</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-06-30</td>
            <td class="derecha">2,925,594</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2015-06-30</td>
            <td class="derecha">2,960,681</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2016-06-30</td>
            <td class="derecha">2,995,374</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2017-06-30</td>
            <td class="derecha">3,029,740</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2018-06-30</td>
            <td class="derecha">3,063,662</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2019-06-30</td>
            <td class="derecha">3,097,014</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2020-06-30</td>
            <td class="derecha">3,129,782</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2011-06-30</td>
            <td class="derecha">1,690,418</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2012-06-30</td>
            <td class="derecha">1,709,741</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-06-30</td>
            <td class="derecha">1,728,429</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-06-30</td>
            <td class="derecha">1,746,809</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2015-06-30</td>
            <td class="derecha">1,764,726</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2016-06-30</td>
            <td class="derecha">1,782,205</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2017-06-30</td>
            <td class="derecha">1,799,320</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2018-06-30</td>
            <td class="derecha">1,815,966</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2019-06-30</td>
            <td class="derecha">1,832,043</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2020-06-30</td>
            <td class="derecha">1,847,547</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2011-06-30</td>
            <td class="derecha">115,682,868</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2012-06-30</td>
            <td class="derecha">117,053,750</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-06-30</td>
            <td class="derecha">118,395,054</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-06-30</td>
            <td class="derecha">119,713,203</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2015-06-30</td>
            <td class="derecha">121,005,815</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2016-06-30</td>
            <td class="derecha">122,273,473</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2017-06-30</td>
            <td class="derecha">123,518,270</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2018-06-30</td>
            <td class="derecha">124,737,789</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2019-06-30</td>
            <td class="derecha">125,929,439</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2020-06-30</td>
            <td class="derecha">127,091,642</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#lenguetasindicador a:first').tab('show')
});
// LENGUETA
$('#lenguetasindicador a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisrilvwsjg === 'undefined') {
    varMorrisrilvwsjg = Morris.Line({
      element: 'Morrisrilvwsjg',
      data: [{ fecha: '2011-06-30', dato: 339355 },{ fecha: '2012-06-30', dato: 343135 },{ fecha: '2013-06-30', dato: 346836 },{ fecha: '2014-06-30', dato: 350513 },{ fecha: '2015-06-30', dato: 354123 },{ fecha: '2016-06-30', dato: 357664 },{ fecha: '2017-06-30', dato: 361144 },{ fecha: '2018-06-30', dato: 364540 },{ fecha: '2019-06-30', dato: 367828 },{ fecha: '2020-06-30', dato: 371002 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
FINAL;
    } // constructor

} // Clase SociedadPoblacionEstimada

?>
