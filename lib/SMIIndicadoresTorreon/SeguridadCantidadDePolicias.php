<?php
/**
 * SeguridadCantidadDePolicias.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SeguridadCantidadDePolicias
 */
class SeguridadCantidadDePolicias extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Cantidad de Policías en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'seguridad-cantidad-de-policias';
        $this->descripcion  = 'Cantidad total de policías en el municipio.';
        $this->claves       = 'Torreón, Seguridad';
        $this->categorias   = array('Seguridad');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad total de policías en el municipio.</p>

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
            <td>28/02/2014</td>
            <td>768</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Determinado en base al reporte de Transparencia de la Nómina.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Cantidad de Policías</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>07/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delincuencia-juvenil.html">La prevención de la Delincuencia Juvenil, elemento central de la prevención integral del delito y la violencia</a></td>
            <td>Dentro de una estrategia de prevención integral del delito, la delincuencia juvenil constituye desde luego el elemento fundamental, si lo que se pretende es evitar que niños de doce años decidan formar parte de la delincuencia.</td>
          </tr>
          <tr>
            <td>18/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delito-seguridad.html">La Prevención del Delito como elemento fundamental para la Seguridad</a></td>
            <td>La prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).</td>
          </tr>
          <tr>
            <td>25/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/comportamiento-tendencia-incidencia-delictiva.html">Comportamiento y tendencia de la incidencia delictiva. Una visión ampliada.</a></td>
            <td>Mostramos las tendencias de los delitos más recurrentes en la ciudad de Torreón; con datos del Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública.</td>
          </tr>
          <tr>
            <td>02/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/zml-sistema-derecho-confiable-objetivo.html">La Zona Metropolitana de La Laguna y sus municipios en Sistema de Derecho Confiable y Objetivo</a></td>
            <td>De acuerdo al ICU 2012, es el subíndice más débil de la región; algunos de sus subíndices ponderados con alto peso por el IMCO corresponden a rubros de seguridad pública.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-delitos.html">Delitos en Torreón</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-homicidios.html">Homicidios en Torreón</a></td>
            <td>Número de homicidios durante el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Torreón</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-secuestros.html">Secuestros en Torreón</a></td>
            <td>Cantidad de secuestros en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-delitos.html">Tasa de Delitos en Torreón</a></td>
            <td>Delitos por cada 100 mil habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-homicidios.html">Tasa de Homicidios en Torreón</a></td>
            <td>Número de homicidios por cada 100 mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-policias-por-habitante.html">Tasa de Policías por Habitante en Torreón</a></td>
            <td>Cantidad de policías por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en Torreón</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en Torreón</a></td>
            <td>Homicidios por habitantes por 100 mil</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase SeguridadCantidadDePolicias

?>
