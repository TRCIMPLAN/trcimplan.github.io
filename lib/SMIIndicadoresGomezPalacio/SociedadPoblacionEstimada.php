<?php
/**
 * TrcIMPLAN - SMI Indicadores Gómez Palacio Sociedad Población Estimada (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadPoblacionEstimada
 */
class SociedadPoblacionEstimada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Población Estimada en Gómez Palacio';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sociedad-poblacion-estimada';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Población estimada a mitad de año.';
        $this->claves            = 'IMPLAN, Gómez Palacio, Población';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-gomez-palacio';
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
        $region->addressLocality = 'Gómez Palacio';
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
        $this->categorias        = array('Población');
        $this->fuentes           = array('CONAPO');
        $this->regiones          = 'Gómez Palacio';
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
            <td>30/06/2011</td>
            <td>339,355</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>343,135</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>346,836</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>350,513</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>354,123</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>357,664</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2017</td>
            <td>361,144</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2018</td>
            <td>364,540</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2019</td>
            <td>367,828</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2020</td>
            <td>371,002</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Estimaciones de CONAPO en base a INEGI. Consulta la <a href="http://www.conapo.gob.mx/es/CONAPO/Proyecciones_Datos">Base de Datos</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Población Estimada en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Población Estimada</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Población Estimada</h3>
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
            <td>2015-06-30</td>
            <td>692,386</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-06-30</td>
            <td>354,123</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-06-30</td>
            <td>153,040</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-06-30</td>
            <td>113,612</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-06-30</td>
            <td>1,313,161</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2015-06-30</td>
            <td>2,960,681</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2015-06-30</td>
            <td>1,764,726</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2015-06-30</td>
            <td>121,005,815</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        // Cargar en el Schema el HTML con los artículos relacionados
        $this->contenido->extra = <<<FINAL
      <h3>Publicaciones relacionadas</h3>
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
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-densidad-poblacional.html">Densidad Poblacional en Gómez Palacio</a></td>
            <td>Mide el número de habitantes de la ciudad por kilómetro cuadrado en 2010. Una mayor densidad poblacional reduce los costos que enfrenta el gobierno local para proveer servicios públicos como agua potable, alumbrado público y seguridad, entre otros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-densidad-poblacional.html">Densidad Poblacional en La Laguna</a></td>
            <td>Mide el número de habitantes de la ciudad por kilómetro cuadrado en 2010. Una mayor densidad poblacional reduce los costos que enfrenta el gobierno local para proveer servicios públicos como agua potable, alumbrado público y seguridad, entre otros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-densidad-poblacional.html">Densidad Poblacional en Lerdo</a></td>
            <td>Mide el número de habitantes de la ciudad por kilómetro cuadrado en 2010. Una mayor densidad poblacional reduce los costos que enfrenta el gobierno local para proveer servicios públicos como agua potable, alumbrado público y seguridad, entre otros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-densidad-poblacional.html">Densidad Poblacional en Matamoros</a></td>
            <td>Mide el número de habitantes de la ciudad por kilómetro cuadrado en 2010. Una mayor densidad poblacional reduce los costos que enfrenta el gobierno local para proveer servicios públicos como agua potable, alumbrado público y seguridad, entre otros.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-densidad-poblacional.html">Densidad Poblacional en Torreón</a></td>
            <td>Mide el número de habitantes de la ciudad por kilómetro cuadrado en 2010. Una mayor densidad poblacional reduce los costos que enfrenta el gobierno local para proveer servicios públicos como agua potable, alumbrado público y seguridad, entre otros.</td>
          </tr>
          <tr>
            <td>03/06/2015</td>
            <td>GIS</td>
            <td><a href="../sig-mapas-torreon/crecimiento-decrecimiento-poblacion.html">Crecimiento y Decrecimiento de Población</a></td>
            <td>Identifique los AGEBs donde hay incremento, decremento o igualdad en cantidad de habitantes.</td>
          </tr>
          <tr>
            <td>26/03/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-poblacion-catolica.html">Población Católica en Gómez Palacio</a></td>
            <td>Porcentaje de la población que dijo ser, pertenecer o profesar la religión católica.</td>
          </tr>
          <tr>
            <td>26/03/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-poblacion-catolica.html">Población Católica en La Laguna</a></td>
            <td>Porcentaje de la población que dijo ser, pertenecer o profesar la religión católica.</td>
          </tr>
          <tr>
            <td>26/03/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-poblacion-catolica.html">Población Católica en Lerdo</a></td>
            <td>Porcentaje de la población que dijo ser, pertenecer o profesar la religión católica.</td>
          </tr>
          <tr>
            <td>26/03/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-poblacion-catolica.html">Población Católica en Matamoros</a></td>
            <td>Porcentaje de la población que dijo ser, pertenecer o profesar la religión católica.</td>
          </tr>
          <tr>
            <td>26/03/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-poblacion-catolica.html">Población Católica en Torreón</a></td>
            <td>Porcentaje de la población que dijo ser, pertenecer o profesar la religión católica.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-fecundidad.html">Fecundidad en Torreón</a></td>
            <td>Tasa de fecundidad.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-poblacion-estimada.html">Población Estimada en Gómez Palacio</a></td>
            <td>Población estimada a mitad de año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-poblacion-estimada.html">Población Estimada en La Laguna</a></td>
            <td>Población estimada a mitad de año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-poblacion-estimada.html">Población Estimada en Lerdo</a></td>
            <td>Población estimada a mitad de año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-poblacion-estimada.html">Población Estimada en Matamoros</a></td>
            <td>Población estimada a mitad de año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-poblacion-estimada.html">Población Estimada en Torreón</a></td>
            <td>Población estimada a mitad de año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-promedio-de-descendencia-por-varon.html">Promedio de Descendencia por Varón en Torreón</a></td>
            <td>Calcula el promedio estimado de hijos por cada varón.</td>
          </tr>
          <tr>
            <td>13/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-vulnerabilidad-social.html">Torreón y la Vulnerabilidad Social</a></td>
            <td>Análisis de los indicadores sobre la infancia, alimentación, educación, maternidad adolescente, adultos mayores, vulnerabilidad por la delincuencia y discapacidad.</td>
          </tr>
          <tr>
            <td>03/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-economica-torreon.html">Equidad Económica en Torreón</a></td>
            <td>Torreón, como la zona metropolitana de La Laguna, se encuentra en una situación favorable en temas de igualdad y cohesión social.</td>
          </tr>
        </tbody>
      </table>
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
      data: [{ fecha: '2011-06-30', dato: 339355 },{ fecha: '2012-06-30', dato: 343135 },{ fecha: '2013-06-30', dato: 346836 },{ fecha: '2014-06-30', dato: 350513 },{ fecha: '2015-06-30', dato: 354123 },{ fecha: '2016-06-30', dato: 357664 },{ fecha: '2017-06-30', dato: 361144 },{ fecha: '2018-06-30', dato: 364540 },{ fecha: '2019-06-30', dato: 367828 },{ fecha: '2020-06-30', dato: 371002 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 692386 },{ region: 'Gómez Palacio', dato: 354123 },{ region: 'Lerdo', dato: 153040 },{ region: 'Matamoros', dato: 113612 },{ region: 'La Laguna', dato: 1313161 },{ region: 'Coahuila', dato: 2960681 },{ region: 'Durango', dato: 1764726 },{ region: 'Nacional', dato: 121005815 }],
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
<p>Población estimada a mitad de año.</p>

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
            <td>30/06/2011</td>
            <td>339,355</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>343,135</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>346,836</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>350,513</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>354,123</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>357,664</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2017</td>
            <td>361,144</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2018</td>
            <td>364,540</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2019</td>
            <td>367,828</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2020</td>
            <td>371,002</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Estimaciones de CONAPO en base a INEGI. Consulta la <a href="http://www.conapo.gob.mx/es/CONAPO/Proyecciones_Datos">Base de Datos</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadPoblacionEstimada

?>
