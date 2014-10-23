<?php
/**
 * SociedadUniversidades.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadUniversidades
 */
class SociedadUniversidades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Universidades en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-universidades';
        $this->descripcion = 'Planteles de Instituciones de Educación Superior.';
        $this->claves      = 'Torreón, Educación';
        $this->categorias  = array('Educación');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetastauvfagk">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Planteles de Instituciones de Educación Superior.
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
<td class="derecha">18</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
Las escuelas y facultades de la UAdeC son contabilizadas en una unidad. Únicamente se contabilizan los planteles ubicados en Matamoros, Torreón, Gómez Palacio y Lerdo.

* Escuela Normal de la Laguna
* Escuela Normal de Torreón
* Instituto 18 de Marzo
* Instituto Superior Francisco Gonzalez de la Vega
* Instituto Tecnológico de Torreón (ITA 10)
* Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Laguna
* Instituto Tecnológico de la Laguna
* Instituto Tecnológico Superior de Lerdo
* Universidad Autónoma Agraria Antonio Narro
* Universidad Autónoma de Coahuila
* Universidad Autónoma de la Laguna
* Universidad Autónoma del Noreste
* Universidad Iberoamericana
* Universidad Juárez del Estado de Durango
* Universidad La Salle
* Universidad Pedagógica Nacional
* Universidad del Valle de México
* Universidad Tec Milenio
* Universidad Interamericana para el Desarrollo
* Universidad Politécnica de Gómez Palacio
* Universidad del Desarrollo Profesional
* National Institute of Information Technologies
* Universidad Tecnológica de Torreón
* Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Matamoros
* Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Torreón
* Universidad Autónoma de Durango Campus Gómez Palacio
* Universidad Autónoma de Durango Campus Torreón
* Instituto Ma Esther Zuno de Echeverría
* Instituto de Estudios Superiores y Educación Normal Gral. Lázaro Cárdenas
* Instituto Tecnológico de Lerdo
* Universidad Pedagógica de Durango-UGP
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
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="derecha">9</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">3</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">1</td>
<td>CIESLAG-FOMEC</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">31</td>
<td>CIESLAG-FOMEC</td>
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
  $('#Lenguetastauvfagk a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadUniversidades

?>
