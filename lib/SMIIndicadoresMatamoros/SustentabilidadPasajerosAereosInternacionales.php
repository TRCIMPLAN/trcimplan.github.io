<?php
/**
 * SustentabilidadPasajerosAereosInternacionales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SustentabilidadPasajerosAereosInternacionales
 */
class SustentabilidadPasajerosAereosInternacionales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Pasajeros Aéreos Internacionales en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-internacionales';
        $this->descripcion = 'Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.';
        $this->claves      = 'Matamoros, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.</p>

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
            <td class="centrado">31/12/2013</td>
            <td class="centrado">NO TIENE</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>El flujo de pasajeros a nivel internacional es de:</p>

<ul>
<li>2013 = 1,833,223</li>
<li>2012 = 1,825,145</li>
<li>2011 = 1,784,252</li>
<li>2010 = 1,927,529</li>
<li>2009 = 1,806,105</li>
<li>2008 = 2,327,839</li>
<li>2007 = 2,471,947</li>
<li>2006 = 2,525,279</li>
<li>2005 = 2,479,772</li>
</ul>

<p>Se considera a nivel metropolitano. Consulta la <a href="http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/">Base de Datos</a></p>

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
            <td>2005-12-31</td>
            <td class="derecha">64,316</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2006-12-31</td>
            <td class="derecha">73,900</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2007-12-31</td>
            <td class="derecha">80,742</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2008-12-31</td>
            <td class="derecha">77,199</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2009-12-31</td>
            <td class="derecha">53,112</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2010-12-31</td>
            <td class="derecha">51,238</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2011-12-31</td>
            <td class="derecha">51,401</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2012-12-31</td>
            <td class="derecha">61,443</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2013-12-31</td>
            <td class="derecha">55,446</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="centrado">NO TIENE</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="centrado">NO TIENE</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2005-12-31</td>
            <td class="derecha">64,316</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2006-12-31</td>
            <td class="derecha">73,900</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2007-12-31</td>
            <td class="derecha">80,742</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td class="derecha">77,199</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2009-12-31</td>
            <td class="derecha">53,112</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">51,238</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2011-12-31</td>
            <td class="derecha">51,401</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td class="derecha">61,443</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">55,446</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td class="derecha">1,833,223</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
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

} // Clase SustentabilidadPasajerosAereosInternacionales

?>
