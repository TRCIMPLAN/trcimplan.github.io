<?php
/**
 * SeguridadAccidentesViales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadAccidentesViales
 */
class SeguridadAccidentesViales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Accidentes Viales en La Laguna';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'seguridad-accidentes-viales';
        $this->descripcion = 'Cantidad de accidentes viales por año.';
        $this->claves      = 'La Laguna, Vialidad';
        $this->categorias  = array('Vialidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad de accidentes viales por año.</p>

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
            <td class="centrado">31/12/1997</td>
            <td class="derecha">4,404</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/1998</td>
            <td class="derecha">5,709</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/1999</td>
            <td class="derecha">6,208</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2000</td>
            <td class="derecha">8,169</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2001</td>
            <td class="derecha">8,933</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2002</td>
            <td class="derecha">8,986</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2003</td>
            <td class="derecha">8,507</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2005</td>
            <td class="derecha">9,366</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2006</td>
            <td class="derecha">10,324</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2007</td>
            <td class="derecha">9,612</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">8,831</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2009</td>
            <td class="derecha">6,995</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">5,577</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">4,568</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">4,107</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td class="centrado">31/12/2013</td>
            <td class="derecha">3,362</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
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
            <td>1997-12-31</td>
            <td class="derecha">3,203</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>1998-12-31</td>
            <td class="derecha">3,529</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>1999-12-31</td>
            <td class="derecha">3,250</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2000-12-31</td>
            <td class="derecha">4,622</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2001-12-31</td>
            <td class="derecha">5,259</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2002-12-31</td>
            <td class="derecha">5,417</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2003-12-31</td>
            <td class="derecha">5,472</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2004-12-31</td>
            <td class="derecha">5,256</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2005-12-31</td>
            <td class="derecha">5,287</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2006-12-31</td>
            <td class="derecha">6,562</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2007-12-31</td>
            <td class="derecha">5,993</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2008-12-31</td>
            <td class="derecha">5,634</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2009-12-31</td>
            <td class="derecha">4,346</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2010-12-31</td>
            <td class="derecha">3,026</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2011-12-31</td>
            <td class="derecha">2,218</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2012-12-31</td>
            <td class="derecha">1,958</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2013-12-31</td>
            <td class="derecha">1,831</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>1997-12-31</td>
            <td class="derecha">691</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>1998-12-31</td>
            <td class="derecha">1,600</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>1999-12-31</td>
            <td class="derecha">2,422</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2000-12-31</td>
            <td class="derecha">2,797</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2001-12-31</td>
            <td class="derecha">2,876</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2002-12-31</td>
            <td class="derecha">2,783</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2003-12-31</td>
            <td class="derecha">2,225</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2004-12-31</td>
            <td class="derecha">2,396</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2005-12-31</td>
            <td class="derecha">2,524</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2006-12-31</td>
            <td class="derecha">2,323</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2007-12-31</td>
            <td class="derecha">2,211</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td class="derecha">2,049</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2009-12-31</td>
            <td class="derecha">1,714</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td class="derecha">1,593</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2011-12-31</td>
            <td class="derecha">1,596</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td class="derecha">1,498</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="derecha">1,128</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>1997-12-31</td>
            <td class="derecha">423</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>1998-12-31</td>
            <td class="derecha">486</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>1999-12-31</td>
            <td class="derecha">497</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2000-12-31</td>
            <td class="derecha">581</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2001-12-31</td>
            <td class="derecha">643</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2002-12-31</td>
            <td class="derecha">645</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2003-12-31</td>
            <td class="derecha">670</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2004-12-31</td>
            <td class="derecha">666</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2005-12-31</td>
            <td class="derecha">1,343</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2006-12-31</td>
            <td class="derecha">1,104</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2007-12-31</td>
            <td class="derecha">884</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">602</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2009-12-31</td>
            <td class="derecha">566</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">519</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2011-12-31</td>
            <td class="derecha">433</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td class="derecha">362</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="derecha">242</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>1997-12-31</td>
            <td class="derecha">87</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>1998-12-31</td>
            <td class="derecha">94</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>1999-12-31</td>
            <td class="derecha">39</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2000-12-31</td>
            <td class="derecha">169</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2001-12-31</td>
            <td class="derecha">155</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2002-12-31</td>
            <td class="derecha">141</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2003-12-31</td>
            <td class="derecha">140</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2004-12-31</td>
            <td class="derecha">281</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2005-12-31</td>
            <td class="derecha">212</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2006-12-31</td>
            <td class="derecha">335</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2007-12-31</td>
            <td class="derecha">524</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td class="derecha">546</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2009-12-31</td>
            <td class="derecha">369</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">439</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2011-12-31</td>
            <td class="derecha">321</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td class="derecha">289</td>
            <td>INEGI</td>
            <td>Número de accidentes registrados durante el año 2012.</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">161</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1997-12-31', dato: 4404 },{ fecha: '1998-12-31', dato: 5709 },{ fecha: '1999-12-31', dato: 6208 },{ fecha: '2000-12-31', dato: 8169 },{ fecha: '2001-12-31', dato: 8933 },{ fecha: '2002-12-31', dato: 8986 },{ fecha: '2003-12-31', dato: 8507 },{ fecha: '2005-12-31', dato: 9366 },{ fecha: '2006-12-31', dato: 10324 },{ fecha: '2007-12-31', dato: 9612 },{ fecha: '2008-12-31', dato: 8831 },{ fecha: '2009-12-31', dato: 6995 },{ fecha: '2010-12-31', dato: 5577 },{ fecha: '2011-12-31', dato: 4568 },{ fecha: '2012-12-31', dato: 4107 },{ fecha: '2013-12-31', dato: 3362 }],
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

} // Clase SeguridadAccidentesViales

?>
