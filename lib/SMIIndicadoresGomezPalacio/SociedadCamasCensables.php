<?php
/**
 * SociedadCamasCensables.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadCamasCensables
 */
class SociedadCamasCensables extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Camas Censables en Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-camas-censables';
        $this->descripcion = '';
        $this->claves      = 'Gómez Palacio, Salud';
        $this->categorias  = array('Salud');
        $this->contenido   = <<<FINAL


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
<td class="centrado">31/12/2001</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2002</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2004</td>
<td class="derecha">74</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2005</td>
<td class="derecha">74</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2006</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2007</td>
<td class="derecha">75</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">64</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">64</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">74</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.

<h4>Observaciones</h4>
SINAIS considera únicamente al Hospital General de Torreón y el Hospital Integral de Matamoros, Hospital General de Lerdo y el Hospital General de Gómez Palacio.

<h4>Gráfica</h4>

<div id="Morriskybfqjek" class="grafica"></div>


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
<td>2001-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2002-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">72</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2004-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2005-12-31</td>
<td class="derecha">42</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2006-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2007-12-31</td>
<td class="derecha">48</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2010-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">51</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2001-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2002-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2003-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2004-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2005-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2006-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2007-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">34</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">38</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2001-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2002-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2004-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2005-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2006-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2007-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2009-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">10</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2001-12-31</td>
<td class="derecha">158</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2002-12-31</td>
<td class="derecha">158</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">158</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2004-12-31</td>
<td class="derecha">160</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2005-12-31</td>
<td class="derecha">160</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2006-12-31</td>
<td class="derecha">167</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2007-12-31</td>
<td class="derecha">167</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">159</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">159</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">171</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">171</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">171</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">173</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2001-12-31</td>
<td class="derecha">473</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2002-12-31</td>
<td class="derecha">473</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2003-12-31</td>
<td class="derecha">473</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2004-12-31</td>
<td class="derecha">483</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2005-12-31</td>
<td class="derecha">483</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2006-12-31</td>
<td class="derecha">482</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2007-12-31</td>
<td class="derecha">483</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2008-12-31</td>
<td class="derecha">511</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2009-12-31</td>
<td class="derecha">529</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2010-12-31</td>
<td class="derecha">652</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2011-12-31</td>
<td class="derecha">633</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-12-31</td>
<td class="derecha">608</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2013-12-31</td>
<td class="derecha">605</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2001-12-31</td>
<td class="derecha">484</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2002-12-31</td>
<td class="derecha">530</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2003-12-31</td>
<td class="derecha">530</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2004-12-31</td>
<td class="derecha">672</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2005-12-31</td>
<td class="derecha">554</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2006-12-31</td>
<td class="derecha">633</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2007-12-31</td>
<td class="derecha">652</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2008-12-31</td>
<td class="derecha">643</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2009-12-31</td>
<td class="derecha">678</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2010-12-31</td>
<td class="derecha">708</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2011-12-31</td>
<td class="derecha">712</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-12-31</td>
<td class="derecha">717</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2013-12-31</td>
<td class="derecha">863</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2001-12-31</td>
<td class="derecha">31,852</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2002-12-31</td>
<td class="derecha">32,217</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2003-12-31</td>
<td class="derecha">31,664</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2004-12-31</td>
<td class="derecha">32,863</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2005-12-31</td>
<td class="derecha">33,631</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2006-12-31</td>
<td class="derecha">34,005</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2007-12-31</td>
<td class="derecha">34,580</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2008-12-31</td>
<td class="derecha">35,071</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2009-12-31</td>
<td class="derecha">36,557</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2010-12-31</td>
<td class="derecha">37,851</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2011-12-31</td>
<td class="derecha">37,835</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-12-31</td>
<td class="derecha">37,890</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-12-31</td>
<td class="derecha">39,231</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorriskybfqjek === 'undefined') {
    varMorriskybfqjek = Morris.Line({
      element: 'Morriskybfqjek',
      data: [{ fecha: '2001-12-31', dato: 72 },{ fecha: '2002-12-31', dato: 72 },{ fecha: '2004-12-31', dato: 74 },{ fecha: '2005-12-31', dato: 74 },{ fecha: '2006-12-31', dato: 72 },{ fecha: '2007-12-31', dato: 75 },{ fecha: '2008-12-31', dato: 64 },{ fecha: '2009-12-31', dato: 64 },{ fecha: '2010-12-31', dato: 72 },{ fecha: '2011-12-31', dato: 72 },{ fecha: '2012-12-31', dato: 72 },{ fecha: '2013-12-31', dato: 74 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // constructor

} // Clase SociedadCamasCensables

?>
