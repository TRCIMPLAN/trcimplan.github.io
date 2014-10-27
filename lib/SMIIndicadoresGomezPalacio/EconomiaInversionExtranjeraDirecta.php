<?php
/**
 * EconomiaInversionExtranjeraDirecta.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaInversionExtranjeraDirecta
 */
class EconomiaInversionExtranjeraDirecta extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Inversión Extranjera Directa en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'economia-inversion-extranjera-directa';
        $this->descripcion = 'Promedio de inversión entre 2008 y 2012.';
        $this->claves      = 'Gómez Palacio, Macroeconomía';
        $this->categorias  = array('Macroeconomía');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="lenguetasindicador">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
<p>Promedio de inversión entre 2008 y 2012.</p>

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
            <td class="centrado">31/12/2012</td>
            <td class="derecha">$ 214.49</td>
            <td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Millones de dólares.</p>
      <h4>Observaciones</h4>
<p>El promedio de IED nacional de 2008 a 2012 es de 20685.96 millones de dólares, por lo que la IED de La Laguna representa el 1.31% de la nacional.</p>

<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a>
y <a href="http://www.economia.gob.mx/comunidad-negocios/competitividad-normatividad/inversion-extranjera-directa/estadistica-oficial-de-ied-en-mexico">Secretaría de Economía</a></p>

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
            <td>Torreón</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 46.50</td>
            <td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-05-31</td>
            <td class="derecha">$ 9.79</td>
            <td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 0.61</td>
            <td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 271.40</td>
            <td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 20,685.96</td>
            <td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
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
  $('#lenguetasindicador a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaInversionExtranjeraDirecta

?>
