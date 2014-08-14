<?php
/**
 * EconomiaMicroempresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaMicroempresas
 */
class EconomiaMicroempresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Microempresas en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-microempresas';
        $this->descripcion = 'Porcentaje del total de empresas que emplean de 0 a 10 personas.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje del total de empresas que emplean de 0 a 10 personas.

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
<td class="centrado">31/12/2013</td>
<td class="derecha">88.61 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/07/2014</td>
<td class="derecha">89.65 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
A nivel nacional, el 92.58% de las empresas con micro.

Datos obtenidos de [SIEM](http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1)

<h4>Gráfica</h4>

<div id="Morriskqznnvrn" class="grafica"></div>


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
<td>2013-12-31</td>
<td class="derecha">87.69 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-07-31</td>
<td class="derecha">88.88 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">89.87 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-07-31</td>
<td class="derecha">92.70 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">93.98 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-07-31</td>
<td class="derecha">95.38 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">88.53 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-07-31</td>
<td class="derecha">89.65 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2013-12-31</td>
<td class="derecha">88.63 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2014-07-31</td>
<td class="derecha">89.51 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2013-12-31</td>
<td class="derecha">90.77 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2014-07-31</td>
<td class="derecha">91.35 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-12-31</td>
<td class="derecha">92.58 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2014-07-31</td>
<td class="derecha">92.99 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorriskqznnvrn === 'undefined') {
    varMorriskqznnvrn = Morris.Line({
      element: 'Morriskqznnvrn',
      data: [{ fecha: '2013-12-31', dato: 88.6100 },{ fecha: '2014-07-31', dato: 89.6500 }],
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

} // Clase EconomiaMicroempresas

?>
