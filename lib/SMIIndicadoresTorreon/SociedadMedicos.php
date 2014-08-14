<?php
/**
 * SociedadMedicos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase SociedadMedicos
 */
class SociedadMedicos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Médicos en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'sociedad-medicos';
        $this->descripcion = 'Médicos en contacto con pacientes por cada diez mil personas.';
        $this->claves      = 'Torreón, Salud';
        $this->categorias  = array('Salud');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Médicos en contacto con pacientes por cada diez mil personas.

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
<td class="derecha">2.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2002</td>
<td class="derecha">1.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">1.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2004</td>
<td class="derecha">1.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2005</td>
<td class="derecha">1.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2006</td>
<td class="derecha">1.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2007</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">2.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">2.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Por cada 10 mil.

<h4>Observaciones</h4>
Dirección General de Información en Salud (DGIS). Base de datos de recursos (infraestructura, materiales y humanos) de la Secretaría de Salud y los Servicios Estatales de Salud 2001-2009: [Sistema Nacional de Información en Salud](http://www.sinais.salud.gob.mx) (SINAIS). México: Secretaría de Salud. Consulta: 01 abril 2014.

<h4>Gráfica</h4>

<div id="Morrisvmvcrtrc" class="grafica"></div>


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
<td>Gómez Palacio</td>
<td>2001-12-31</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2002-12-31</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2003-12-31</td>
<td class="derecha">4.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2004-12-31</td>
<td class="derecha">4.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2005-12-31</td>
<td class="derecha">4.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2006-12-31</td>
<td class="derecha">3.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2007-12-31</td>
<td class="derecha">4.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">5.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2009-12-31</td>
<td class="derecha">5.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">4.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">4.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">4.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">4.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2001-12-31</td>
<td class="derecha">5.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2002-12-31</td>
<td class="derecha">5.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2003-12-31</td>
<td class="derecha">5.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2004-12-31</td>
<td class="derecha">5.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2005-12-31</td>
<td class="derecha">5.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2006-12-31</td>
<td class="derecha">4.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2007-12-31</td>
<td class="derecha">6.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">5.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">5.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">6.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">6.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">6.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">6.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2001-12-31</td>
<td class="derecha">3.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2002-12-31</td>
<td class="derecha">3.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">3.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2004-12-31</td>
<td class="derecha">3.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2005-12-31</td>
<td class="derecha">3.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2006-12-31</td>
<td class="derecha">3.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2007-12-31</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2009-12-31</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">4.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">4.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">4.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2001-12-31</td>
<td class="derecha">3.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2002-12-31</td>
<td class="derecha">2.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">3.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2004-12-31</td>
<td class="derecha">3.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2005-12-31</td>
<td class="derecha">2.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2006-12-31</td>
<td class="derecha">2.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2007-12-31</td>
<td class="derecha">3.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">3.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">3.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">3.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">3.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-12-31</td>
<td class="derecha">4.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-12-31</td>
<td class="derecha">8.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-12-31</td>
<td class="derecha">7.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisvmvcrtrc === 'undefined') {
    varMorrisvmvcrtrc = Morris.Line({
      element: 'Morrisvmvcrtrc',
      data: [{ fecha: '2001-12-31', dato: 2.2000 },{ fecha: '2002-12-31', dato: 1.7000 },{ fecha: '2003-12-31', dato: 1.8000 },{ fecha: '2004-12-31', dato: 1.7000 },{ fecha: '2005-12-31', dato: 1.3000 },{ fecha: '2006-12-31', dato: 1.9000 },{ fecha: '2007-12-31', dato: 2.5000 },{ fecha: '2008-12-31', dato: 2.5000 },{ fecha: '2009-12-31', dato: 2.6000 },{ fecha: '2010-12-31', dato: 2.7000 },{ fecha: '2011-12-31', dato: 2.5000 },{ fecha: '2012-12-31', dato: 2.5000 },{ fecha: '2013-12-31', dato: 2.5000 }],
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

} // Clase SociedadMedicos

?>
