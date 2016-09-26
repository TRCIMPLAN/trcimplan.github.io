<?php
/**
 * TrcIMPLAN - SMI Indicadores Lerdo Sociedad Universidades (Creado por Central:SmiLanzadera)
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadUniversidades
 */
class SociedadUniversidades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Universidades en Lerdo';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19:49';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sociedad-universidades';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Planteles de Instituciones de Educación Superior.';
        $this->claves            = 'IMPLAN, Lerdo, Educación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-lerdo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Durango';
        $region->addressLocality = 'Lerdo';
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
        // Para el Organizador
        $this->categorias        = array('Educación');
        $this->fuentes           = array('CIESLAG-FOMEC');
        $this->regiones          = 'Lerdo';
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
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
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
            <td>31/03/2014</td>
            <td>3</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Las escuelas y facultades de la UAdeC son contabilizadas en una unidad. Únicamente se contabilizan los planteles ubicados en Matamoros, Torreón, Gómez Palacio y Lerdo.</p>

<ul>
<li>Escuela Normal de la Laguna</li>
<li>Escuela Normal de Torreón</li>
<li>Instituto 18 de Marzo</li>
<li>Instituto Superior Francisco Gonzalez de la Vega</li>
<li>Instituto Tecnológico de Torreón (ITA 10)</li>
<li>Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Laguna</li>
<li>Instituto Tecnológico de la Laguna</li>
<li>Instituto Tecnológico Superior de Lerdo</li>
<li>Universidad Autónoma Agraria Antonio Narro</li>
<li>Universidad Autónoma de Coahuila</li>
<li>Universidad Autónoma de la Laguna</li>
<li>Universidad Autónoma del Noreste</li>
<li>Universidad Iberoamericana</li>
<li>Universidad Juárez del Estado de Durango</li>
<li>Universidad La Salle</li>
<li>Universidad Pedagógica Nacional</li>
<li>Universidad del Valle de México</li>
<li>Universidad Tec Milenio</li>
<li>Universidad Interamericana para el Desarrollo</li>
<li>Universidad Politécnica de Gómez Palacio</li>
<li>Universidad del Desarrollo Profesional</li>
<li>National Institute of Information Technologies</li>
<li>Universidad Tecnológica de Torreón</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Matamoros</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Torreón</li>
<li>Universidad Autónoma de Durango Campus Gómez Palacio</li>
<li>Universidad Autónoma de Durango Campus Torreón</li>
<li>Instituto Ma Esther Zuno de Echeverría</li>
<li>Instituto de Estudios Superiores y Educación Normal Gral. Lázaro Cárdenas</li>
<li>Universidad Tecnológica de La Laguna Durango</li>
<li>Universidad Pedagógica de Durango-UGP</li>
</ul>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Universidades</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Universidades</h3>
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
            <td>18</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td>9</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td>3</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td>1</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td>31</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
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
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 18 },{ region: 'Gómez Palacio', dato: 9 },{ region: 'Lerdo', dato: 3 },{ region: 'Matamoros', dato: 1 },{ region: 'La Laguna', dato: 31 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
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
<p>Planteles de Instituciones de Educación Superior.</p>

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
            <td>31/03/2014</td>
            <td>3</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Las escuelas y facultades de la UAdeC son contabilizadas en una unidad. Únicamente se contabilizan los planteles ubicados en Matamoros, Torreón, Gómez Palacio y Lerdo.</p>

<ul>
<li>Escuela Normal de la Laguna</li>
<li>Escuela Normal de Torreón</li>
<li>Instituto 18 de Marzo</li>
<li>Instituto Superior Francisco Gonzalez de la Vega</li>
<li>Instituto Tecnológico de Torreón (ITA 10)</li>
<li>Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Laguna</li>
<li>Instituto Tecnológico de la Laguna</li>
<li>Instituto Tecnológico Superior de Lerdo</li>
<li>Universidad Autónoma Agraria Antonio Narro</li>
<li>Universidad Autónoma de Coahuila</li>
<li>Universidad Autónoma de la Laguna</li>
<li>Universidad Autónoma del Noreste</li>
<li>Universidad Iberoamericana</li>
<li>Universidad Juárez del Estado de Durango</li>
<li>Universidad La Salle</li>
<li>Universidad Pedagógica Nacional</li>
<li>Universidad del Valle de México</li>
<li>Universidad Tec Milenio</li>
<li>Universidad Interamericana para el Desarrollo</li>
<li>Universidad Politécnica de Gómez Palacio</li>
<li>Universidad del Desarrollo Profesional</li>
<li>National Institute of Information Technologies</li>
<li>Universidad Tecnológica de Torreón</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Matamoros</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Torreón</li>
<li>Universidad Autónoma de Durango Campus Gómez Palacio</li>
<li>Universidad Autónoma de Durango Campus Torreón</li>
<li>Instituto Ma Esther Zuno de Echeverría</li>
<li>Instituto de Estudios Superiores y Educación Normal Gral. Lázaro Cárdenas</li>
<li>Universidad Tecnológica de La Laguna Durango</li>
<li>Universidad Pedagógica de Durango-UGP</li>
</ul>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadUniversidades

?>
