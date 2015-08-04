<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Sociedad Viviendas con Agua de la Red Pública (Creado por Central:SmiLanzadera)
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
 * Clase SociedadViviendasConAguaDeLaRedPublica
 */
class SociedadViviendasConAguaDeLaRedPublica extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Viviendas con Agua de la Red Pública en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'sociedad-viviendas-con-agua-de-la-red-publica';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Porcentaje de viviendas habitadas que cuentan con acceso al agua de la red pública.';
        $this->claves            = 'IMPLAN, Torreón, Vivienda';
        $this->categorias        = array('Vivienda');
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
    <li><a href="#smi-indicador-mapa" data-toggle="tab">Georreferenciado</a></li>
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-mapa">
<iframe width='100%' height='520' frameborder='0' src='https://implantorreon.cartodb.com/u/sigimplan/viz/28b06c78-de19-11e4-8197-0e0c41326911/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
<h3>Notas</h3>
<p><a href="https://implantorreon.cartodb.com/u/sigimplan/viz/28b06c78-de19-11e4-8197-0e0c41326911/embed_map">Ver a pantalla completa</a></p>

    </div>
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
            <td>31/12/2010</td>
            <td>98.18 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.inegi.org.mx/biinegi/">Base de Datos</a>.</p>

<p>Enlace al <a href="http://201.159.104.45:8080/apps/implan2.html">Sistema de Información Geográfica</a>.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Viviendas con Agua de la Red Pública</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Viviendas con Agua de la Red Pública</h3>
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
            <td>2010-12-31</td>
            <td>98.18 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>98.03 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>98.29 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>96.80 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td>98.04 %</td>
            <td>INEGI</td>
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
            <td><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-lineas-telefonicas-moviles.html">Viviendas con Líneas Telefónicas Móviles en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Mide el número de viviendas que cuentan con líneas telefónicas móviles como porcentaje del total de viviendas habitadas.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-viviendas-con-lineas-telefonicas-moviles.html">Viviendas con Líneas Telefónicas Móviles en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Mide el número de viviendas que cuentan con líneas telefónicas móviles como porcentaje del total de viviendas habitadas.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-viviendas-con-lineas-telefonicas-moviles.html">Viviendas con Líneas Telefónicas Móviles en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Mide el número de viviendas que cuentan con líneas telefónicas móviles como porcentaje del total de viviendas habitadas.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-lineas-telefonicas-moviles.html">Viviendas con Líneas Telefónicas Móviles en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Mide el número de viviendas que cuentan con líneas telefónicas móviles como porcentaje del total de viviendas habitadas.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-viviendas-con-lineas-telefonicas-moviles.html">Viviendas con Líneas Telefónicas Móviles en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Mide el número de viviendas que cuentan con líneas telefónicas móviles como porcentaje del total de viviendas habitadas.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-piso-de-tierra.html">Viviendas con Piso de Tierra en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de viviendas con piso de tierra.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-viviendas-con-piso-de-tierra.html">Viviendas con Piso de Tierra en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de viviendas con piso de tierra.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-viviendas-con-piso-de-tierra.html">Viviendas con Piso de Tierra en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de viviendas con piso de tierra.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-piso-de-tierra.html">Viviendas con Piso de Tierra en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de viviendas con piso de tierra.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-viviendas-con-piso-de-tierra.html">Viviendas con Piso de Tierra en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de viviendas con piso de tierra.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html">Viviendas con Drenaje (sólo conexión a red pública) en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide las Viviendas con acceso a la red pública de drenaje.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html">Viviendas con Drenaje (sólo conexión a red pública) en La Laguna</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide las Viviendas con acceso a la red pública de drenaje.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html">Viviendas con Drenaje (sólo conexión a red pública) en Lerdo</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide las Viviendas con acceso a la red pública de drenaje.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html">Viviendas con Drenaje (sólo conexión a red pública) en Matamoros</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide las Viviendas con acceso a la red pública de drenaje.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html">Viviendas con Drenaje (sólo conexión a red pública) en Torreón</a></td>
            <td>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide las Viviendas con acceso a la red pública de drenaje.</td>
          </tr>
          <tr>
            <td>03/06/2015</td>
            <td>GIS</td>
            <td><a href="../sig-mapas-torreon/crecimiento-decrecimiento-poblacion.html">Crecimiento y Decrecimiento de Población</a></td>
            <td>Identifique los AGEBs donde hay incremento, decremento o igualdad en cantidad de habitantes.</td>
          </tr>
          <tr>
            <td>13/04/2015</td>
            <td>GIS</td>
            <td><a href="../sig-mapas-torreon/viviendas-deshabitadas.html">Viviendas Deshabitadas</a></td>
            <td>Mapa que muestra la incidencia de las viviendas deshabitadas en Torreón, Coahuila.</td>
          </tr>
          <tr>
            <td>13/04/2015</td>
            <td>GIS</td>
            <td><a href="../sig-mapas-torreon/viviendas-con-agua-red-publica.html">Viviendas con Agua de la Red Pública</a></td>
            <td>Accesibilidad de viviendas a agua potable.</td>
          </tr>
          <tr>
            <td>13/04/2015</td>
            <td>GIS</td>
            <td><a href="../sig-mapas-torreon/viviendas-con-computadora.html">Viviendas con Computadora</a></td>
            <td>Accesibilidad de las viviendas a contar con computadora.</td>
          </tr>
          <tr>
            <td>13/04/2015</td>
            <td>GIS</td>
            <td><a href="../sig-mapas-torreon/viviendas-con-drenaje.html">Viviendas con Drenaje</a></td>
            <td>Accesibilidad de Viviendas a Drenaje</td>
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
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 98.1800 },{ region: 'Gómez Palacio', dato: 98.0300 },{ region: 'Lerdo', dato: 98.2900 },{ region: 'Matamoros', dato: 96.8000 },{ region: 'La Laguna', dato: 98.0400 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-mapa
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-mapa"]').tab('show')
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
<p>Porcentaje de viviendas habitadas que cuentan con acceso al agua de la red pública.</p>

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
            <td>31/12/2010</td>
            <td>98.18 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.inegi.org.mx/biinegi/">Base de Datos</a>.</p>

<p>Enlace al <a href="http://201.159.104.45:8080/apps/implan2.html">Sistema de Información Geográfica</a>.</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadViviendasConAguaDeLaRedPublica

?>
