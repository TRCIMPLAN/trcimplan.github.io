<?php
/**
 * SociedadEspaciosCulturales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLerdo;

/**
 * Clase SociedadEspaciosCulturales
 */
class SociedadEspaciosCulturales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Espacios Culturales en Lerdo';
        $this->directorio  = 'lib/SMIIndicadoresLerdo';
        $this->archivo     = 'sociedad-espacios-culturales';
        $this->descripcion = 'Espacios culturales físicamente delimitados.';
        $this->claves      = 'Lerdo, Educación, Cultura';
        $this->categorias  = array('Educación', 'Cultura');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Espacios culturales físicamente delimitados.

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
<td class="centrado">31/03/2014</td>
<td class="derecha">13</td>
<td>CONACULTA-IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Por cada 100 mil.

<h4>Observaciones</h4>
Se realizó un filtrado básico de la totalidad de los espacios culturales considerados por CONACULTA, ya que ellos consideran programas, fondos y proyectos a sus estadísticas totales, así como eventos que fueron realizados en una ocasión y datan de hace más de 5 años. Consulta la [Base de Datos completa](http://www.sic.gob.mx)


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
<td>2014-03-31</td>
<td class="derecha">16</td>
<td>CONACULTA-IMPLAN</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="derecha">10</td>
<td>CONACULTA-IMPLAN</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">8</td>
<td>CONACULTA-IMPLAN</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">13</td>
<td>CONACULTA-IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadEspaciosCulturales

?>
