<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Gobierno Capacitación a Empleados de Base (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase GobiernoCapacitacionAEmpleadosDeBase
 */
class GobiernoCapacitacionAEmpleadosDeBase extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Capacitación a Empleados de Base en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2015-07-14T17:40';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'gobierno-capacitacion-a-empleados-de-base';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Expresa la relación de horas de capacitación promedio brindadas a los empleados municipales cuyo estatus es de base. Total de Horas de Capacitación a Empleados de Base, entre Total de Empleados de Base Semestral.';
        $this->claves            = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Gobierno';
        $this->categorias        = array('Sistema de Indicadores de Desempeño (SINDES)', 'Gobierno');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Torreón';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el HTML de las lengüetas
        $this->contenido->articleBody = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Expresa la relación de horas de capacitación promedio brindadas a los empleados municipales cuyo estatus es de base. Total de Horas de Capacitación a Empleados de Base, entre Total de Empleados de Base Semestral.</p>

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
            <td>30/06/2014</td>
            <td>5.4100</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>0.4000</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Horas.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Capacitación a Empleados de Base en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
  </div>
FINAL;
        // Cargar en el Schema el HTML con los artículos relacionados
        $this->contenido->extra = <<<FINAL

FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // JavaScript
        $this->javascript[] = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2014-06-30', dato: 5.4100 },{ fecha: '2014-12-31', dato: 0.4000 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion = <<<FINAL
      <h3>Descripción</h3>
<p>Expresa la relación de horas de capacitación promedio brindadas a los empleados municipales cuyo estatus es de base. Total de Horas de Capacitación a Empleados de Base, entre Total de Empleados de Base Semestral.</p>

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
            <td>30/06/2014</td>
            <td>5.4100</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>0.4000</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Horas.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase GobiernoCapacitacionAEmpleadosDeBase

?>
