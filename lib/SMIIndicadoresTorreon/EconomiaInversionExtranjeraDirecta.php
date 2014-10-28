<?php
/**
 * EconomiaInversionExtranjeraDirecta.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaInversionExtranjeraDirecta
 */
class EconomiaInversionExtranjeraDirecta extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Inversión Extranjera Directa en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-inversion-extranjera-directa';
        $this->descripcion = 'Promedio de inversión entre 2008 y 2012.';
        $this->claves      = 'Torreón, Macroeconomía';
        $this->categorias  = array('Macroeconomía');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Promedio de inversión entre 2008 y 2012.</p>

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
            <td class="centrado">31/12/2012</td>
            <td class="derecha">$ 46.50</td>
            <td>Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Millones de dólares.</p>
      <h3>Observaciones</h3>
<p>El promedio de IED nacional de 2008 a 2012 es de 20685.96 millones de dólares, por lo que la IED de La Laguna representa el 1.31% de la nacional.</p>

<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI. Censos económicos</a>
y <a href="http://www.economia.gob.mx/comunidad-negocios/competitividad-normatividad/inversion-extranjera-directa/estadistica-oficial-de-ied-en-mexico">Secretaría de Economía</a></p>

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
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td class="derecha">$ 214.49</td>
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
  $('#smi-indicador a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase EconomiaInversionExtranjeraDirecta

?>
