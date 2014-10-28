<?php
/**
 * SociedadEspaciosCulturales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadEspaciosCulturales
 */
class SociedadEspaciosCulturales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Espacios Culturales en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'sociedad-espacios-culturales';
        $this->descripcion = 'Espacios culturales físicamente delimitados.';
        $this->claves      = 'La Laguna, Educación, Cultura';
        $this->categorias  = array('Educación', 'Cultura');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Espacios culturales físicamente delimitados.</p>

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
            <td class="centrado">31/03/2014</td>
            <td class="derecha">13</td>
            <td>CONACULTA-IMPLAN</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Se realizó un filtrado básico de la totalidad de los espacios culturales considerados por CONACULTA, ya que ellos consideran programas, fondos y proyectos a sus estadísticas totales, así como eventos que fueron realizados en una ocasión y datan de hace más de 5 años. Consulta la <a href="http://www.sic.gob.mx">Base de Datos completa</a></p>

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
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td class="derecha">13</td>
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
FINAL;
    } // constructor

} // Clase SociedadEspaciosCulturales

?>
