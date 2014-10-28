<?php
/**
 * SociedadAdultosMayoresMasculino.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadAdultosMayoresMasculino
 */
class SociedadAdultosMayoresMasculino extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Adultos Mayores Masculino en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-adultos-mayores-masculino';
        $this->descripcion = 'Población estimada a mediados de año de personas de 65 años y más de sexo masculino';
        $this->claves      = 'Matamoros, Grupos Vulnerables';
        $this->categorias  = array('Grupos Vulnerables');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
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
            <td class="centrado">30/06/2011</td>
            <td class="derecha">3,423</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2012</td>
            <td class="derecha">3,542</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2013</td>
            <td class="derecha">3,660</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2014</td>
            <td class="derecha">3,780</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2015</td>
            <td class="derecha">3,901</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2016</td>
            <td class="derecha">4,024</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2017</td>
            <td class="derecha">4,148</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2018</td>
            <td class="derecha">4,274</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2019</td>
            <td class="derecha">4,399</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">30/06/2020</td>
            <td class="derecha">4,524</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morrisllkoztmc" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="smi-indicador-otras_regiones">
<h3>En otras regiones</h3>
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
            <td class="derecha">17,498</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2012-06-30</td>
            <td class="derecha">18,233</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2013-06-30</td>
            <td class="derecha">19,010</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2014-06-30</td>
            <td class="derecha">19,829</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2015-06-30</td>
            <td class="derecha">20,691</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2016-06-30</td>
            <td class="derecha">21,594</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2017-06-30</td>
            <td class="derecha">22,537</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2018-06-30</td>
            <td class="derecha">23,517</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2019-06-30</td>
            <td class="derecha">24,531</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2020-06-30</td>
            <td class="derecha">25,576</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2011-06-30</td>
            <td class="derecha">8,437</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-06-30</td>
            <td class="derecha">8,736</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-06-30</td>
            <td class="derecha">9,056</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-06-30</td>
            <td class="derecha">9,400</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-06-30</td>
            <td class="derecha">9,767</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2016-06-30</td>
            <td class="derecha">10,158</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2017-06-30</td>
            <td class="derecha">10,573</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2018-06-30</td>
            <td class="derecha">11,009</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2019-06-30</td>
            <td class="derecha">11,464</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2020-06-30</td>
            <td class="derecha">11,936</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2011-06-30</td>
            <td class="derecha">4,135</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-06-30</td>
            <td class="derecha">4,260</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-06-30</td>
            <td class="derecha">4,391</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-06-30</td>
            <td class="derecha">4,529</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-06-30</td>
            <td class="derecha">4,674</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-06-30</td>
            <td class="derecha">4,827</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2017-06-30</td>
            <td class="derecha">4,989</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2018-06-30</td>
            <td class="derecha">5,160</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2019-06-30</td>
            <td class="derecha">5,338</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2020-06-30</td>
            <td class="derecha">5,523</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2011-06-30</td>
            <td class="derecha">33,494</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-06-30</td>
            <td class="derecha">34,770</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-06-30</td>
            <td class="derecha">36,117</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-06-30</td>
            <td class="derecha">37,538</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-06-30</td>
            <td class="derecha">39,033</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-06-30</td>
            <td class="derecha">40,603</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2017-06-30</td>
            <td class="derecha">42,247</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2018-06-30</td>
            <td class="derecha">43,959</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2019-06-30</td>
            <td class="derecha">45,732</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2020-06-30</td>
            <td class="derecha">47,559</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2011-06-30</td>
            <td class="derecha">78,392</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2012-06-30</td>
            <td class="derecha">81,329</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-06-30</td>
            <td class="derecha">84,382</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-06-30</td>
            <td class="derecha">87,565</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2015-06-30</td>
            <td class="derecha">90,893</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2016-06-30</td>
            <td class="derecha">94,379</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2017-06-30</td>
            <td class="derecha">98,035</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2018-06-30</td>
            <td class="derecha">101,864</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2019-06-30</td>
            <td class="derecha">105,861</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2020-06-30</td>
            <td class="derecha">110,020</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2011-06-30</td>
            <td class="derecha">53,398</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2012-06-30</td>
            <td class="derecha">54,718</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-06-30</td>
            <td class="derecha">56,053</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-06-30</td>
            <td class="derecha">57,418</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2015-06-30</td>
            <td class="derecha">58,832</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2016-06-30</td>
            <td class="derecha">60,311</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2017-06-30</td>
            <td class="derecha">61,870</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2018-06-30</td>
            <td class="derecha">63,514</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2019-06-30</td>
            <td class="derecha">65,246</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2020-06-30</td>
            <td class="derecha">67,066</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2011-06-30</td>
            <td class="derecha">3,349,651</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2012-06-30</td>
            <td class="derecha">3,449,315</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-06-30</td>
            <td class="derecha">3,553,513</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-06-30</td>
            <td class="derecha">3,662,907</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2015-06-30</td>
            <td class="derecha">3,778,399</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2016-06-30</td>
            <td class="derecha">3,900,878</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2017-06-30</td>
            <td class="derecha">4,030,687</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2018-06-30</td>
            <td class="derecha">4,167,816</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2019-06-30</td>
            <td class="derecha">4,312,048</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2020-06-30</td>
            <td class="derecha">4,463,109</td>
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
  $('#smi-indicador a:first').tab('show')
});
// LENGUETA
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisllkoztmc === 'undefined') {
    varMorrisllkoztmc = Morris.Line({
      element: 'Morrisllkoztmc',
      data: [{ fecha: '2011-06-30', dato: 3423 },{ fecha: '2012-06-30', dato: 3542 },{ fecha: '2013-06-30', dato: 3660 },{ fecha: '2014-06-30', dato: 3780 },{ fecha: '2015-06-30', dato: 3901 },{ fecha: '2016-06-30', dato: 4024 },{ fecha: '2017-06-30', dato: 4148 },{ fecha: '2018-06-30', dato: 4274 },{ fecha: '2019-06-30', dato: 4399 },{ fecha: '2020-06-30', dato: 4524 }],
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

} // Clase SociedadAdultosMayoresMasculino

?>
