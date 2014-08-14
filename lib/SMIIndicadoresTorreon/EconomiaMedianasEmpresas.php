<?php
/**
 * EconomiaMedianasEmpresas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaMedianasEmpresas
 */
class EconomiaMedianasEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Medianas Empresas en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-medianas-empresas';
        $this->descripcion = 'Porcentaje del total de empresas que emplean de 51 a 250 personas.';
        $this->claves      = 'Torreón, Empresas';
        $this->categorias  = array('Empresas');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje del total de empresas que emplean de 51 a 250 personas.

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
<td class="derecha">2.14 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/07/2014</td>
<td class="derecha">1.57 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad de Empresas.

<h4>Observaciones</h4>
A nivel nacional el 1.29% de las empresas son medianas.

Datos obtenidos de [SIEM](http://www.siem.gob.mx/siem/estadisticas/EstadoTamanoPublico.asp?p=1)

<h4>Gráfica</h4>

<div id="Morrisdmokdymz" class="grafica"></div>


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
<td class="derecha">2.52 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-07-31</td>
<td class="derecha">2.36 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">3.16 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-07-31</td>
<td class="derecha">1.69 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">3.01 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-07-31</td>
<td class="derecha">1.73 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">2.26 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-07-31</td>
<td class="derecha">1.74 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2013-12-31</td>
<td class="derecha">1.95 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2014-07-31</td>
<td class="derecha">1.65 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2013-12-31</td>
<td class="derecha">1.74 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2014-07-31</td>
<td class="derecha">1.63 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-12-31</td>
<td class="derecha">1.29 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2014-07-31</td>
<td class="derecha">1.19 %</td>
<td>Sistema de Información Empresarial Mexicano (SIEM)</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisdmokdymz === 'undefined') {
    varMorrisdmokdymz = Morris.Line({
      element: 'Morrisdmokdymz',
      data: [{ fecha: '2013-12-31', dato: 2.1400 },{ fecha: '2014-07-31', dato: 1.5700 }],
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

} // Clase EconomiaMedianasEmpresas

?>
