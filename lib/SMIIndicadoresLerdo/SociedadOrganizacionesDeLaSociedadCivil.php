<?php
/**
 * SociedadOrganizacionesDeLaSociedadCivil.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadOrganizacionesDeLaSociedadCivil
 */
class SociedadOrganizacionesDeLaSociedadCivil extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Organizaciones de la Sociedad Civil en Lerdo';
        $this->nombre_menu = 'Indicadores';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'sociedad-organizaciones-de-la-sociedad-civil';
        $this->descripcion = 'Organizaciones de la sociedad civil por cada cien mil habitantes.';
        $this->claves      = 'Lerdo, Participación Ciudadana, Gobierno';
        $this->categorias  = array('Participación Ciudadana', 'Gobierno');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Organizaciones de la sociedad civil por cada cien mil habitantes.</p>

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
            <td class="derecha">22.7000</td>
            <td>RFOSC</td>
            <td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
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
            <td>2014-03-31</td>
            <td class="derecha">47.9800</td>
            <td>RFOSC</td>
            <td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td class="derecha">45.8400</td>
            <td>RFOSC</td>
            <td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td class="derecha">10.7800</td>
            <td>RFOSC</td>
            <td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td class="derecha">41.2200</td>
            <td>RFOSC</td>
            <td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadOrganizacionesDeLaSociedadCivil

?>
