<?php
/**
 * SociedadAlumnosConPerfilCientificomatematico.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadAlumnosConPerfilCientificomatematico
 */
class SociedadAlumnosConPerfilCientificomatematico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Alumnos con Perfil Científico-Matemático en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-alumnos-con-perfil-cientifico-matematico';
        $this->descripcion = 'Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.';
        $this->claves      = 'Torreón, Educación';
        $this->categorias  = array('Educación');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</p>

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
            <td class="derecha">46.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El criterio de "Alumnos buenos y excelentes" provienen de <a href="http://www.mejoratuescuela.org">mejoratuescuela.org</a>
Consulta la <a href="http://www.enlace.sep.gob.mx/content/ba/pages/base_de_datos_completa_2013/">Base de datos</a></p>

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
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td class="derecha">35.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="derecha">43.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">41.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">42.00 %</td>
            <td>SEP</td>
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

} // Clase SociedadAlumnosConPerfilCientificomatematico

?>
