<?php
/**
 * GobiernoIndiceDeGobiernoElectronicoMunicipal.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresMatamoros;

/**
 * Clase GobiernoIndiceDeGobiernoElectronicoMunicipal
 */
class GobiernoIndiceDeGobiernoElectronicoMunicipal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Gobierno Electrónico Municipal en Matamoros';
        $this->directorio  = 'lib/SMIIndicadoresMatamoros';
        $this->archivo     = 'gobierno-indice-de-gobierno-electronico-municipal';
        $this->descripcion = 'índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.';
        $this->claves      = 'Matamoros, Gobierno Digital';
        $this->categorias  = array('Gobierno Digital');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.

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
<td class="centrado">31/12/2011</td>
<td class="derecha">0.5366</td>
<td>CIDE</td>
<td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> De 0 a 1.




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
<td>2011-12-31</td>
<td class="derecha">0.6916</td>
<td>CIDE</td>
<td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">0.4763</td>
<td>CIDE</td>
<td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">0.4714</td>
<td>CIDE</td>
<td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">0.5440</td>
<td>CIDE</td>
<td>Consulta la base de datos del Índice de [Gobierno Electrónico Municipal](http://biiacs-dspace.cide.edu/handle/10089/16427)</td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase GobiernoIndiceDeGobiernoElectronicoMunicipal

?>
