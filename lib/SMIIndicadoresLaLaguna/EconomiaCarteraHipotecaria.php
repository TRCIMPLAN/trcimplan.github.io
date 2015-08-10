<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Economía Cartera Hipotecaria (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Cartera Hipotecaria en La Laguna';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'economia-cartera-hipotecaria';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Monto total de créditos otorgados hasta la fecha indicada.';
        $this->claves            = 'IMPLAN, La Laguna, Mercados';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-la-laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = '';
        $region->addressLocality = '';
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
        $this->categorias        = array('Mercados');
        $this->fuentes           = array('Comisión Nacional Bancaria y de Valores (CNBV)');
        $this->regiones          = 'La Laguna';
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
            <td>31/12/2010</td>
            <td>$ 4,205,870,657.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 4,528,969,820.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 4,896,553,645.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 5,442,162,894.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>$ 5,671,976,037.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Cartera Hipotecaria en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Cartera Hipotecaria</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Cartera Hipotecaria</h3>
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
            <td>$ 4,664,619,926.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-03-31</td>
            <td>$ 614,765,352.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-03-31</td>
            <td>$ 334,888,287.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-03-31</td>
            <td>$ 57,702,472.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-03-31</td>
            <td>$ 5,671,976,037.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
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
            <td><a href="../indicadores-gomez-palacio/economia-diversificacion-economica.html">Diversificación Económica en Gómez Palacio</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-diversificacion-economica.html">Diversificación Económica en La Laguna</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-diversificacion-economica.html">Diversificación Económica en Lerdo</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-diversificacion-economica.html">Diversificación Económica en Matamoros</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-diversificacion-economica.html">Diversificación Económica en Torreón</a></td>
            <td>Número de sectores económicos presentes en la ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-ciudad-fronteriza-o-portuaria.html">Ciudad Fronteriza o Portuaria en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide si una ciudad tiene puerto, es fronteriza o ninguna de las dos. Esta condición ofrece una ventaja competitiva inicial para cualquier ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-ciudad-fronteriza-o-portuaria.html">Ciudad Fronteriza o Portuaria en La Laguna</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide si una ciudad tiene puerto, es fronteriza o ninguna de las dos. Esta condición ofrece una ventaja competitiva inicial para cualquier ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-ciudad-fronteriza-o-portuaria.html">Ciudad Fronteriza o Portuaria en Lerdo</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide si una ciudad tiene puerto, es fronteriza o ninguna de las dos. Esta condición ofrece una ventaja competitiva inicial para cualquier ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-ciudad-fronteriza-o-portuaria.html">Ciudad Fronteriza o Portuaria en Matamoros</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide si una ciudad tiene puerto, es fronteriza o ninguna de las dos. Esta condición ofrece una ventaja competitiva inicial para cualquier ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-ciudad-fronteriza-o-portuaria.html">Ciudad Fronteriza o Portuaria en Torreón</a></td>
            <td>Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide si una ciudad tiene puerto, es fronteriza o ninguna de las dos. Esta condición ofrece una ventaja competitiva inicial para cualquier ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en La Laguna</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Lerdo</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Matamoros</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-crecimiento-del-salario-promedio.html">Crecimiento del Salario Promedio en Torreón</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el salario promedio entre el año 2008 y el 2012. Este indicador es un proxy de cuánto ha crecido el poder adquisitivo de los trabajadores.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-crecimiento-del-pib-estatal.html">Crecimiento del PIB Estatal en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el PIB estatal entre el año 2006 y el 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-crecimiento-del-pib-estatal.html">Crecimiento del PIB Estatal en La Laguna</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el PIB estatal entre el año 2006 y el 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-crecimiento-del-pib-estatal.html">Crecimiento del PIB Estatal en Lerdo</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el PIB estatal entre el año 2006 y el 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-crecimiento-del-pib-estatal.html">Crecimiento del PIB Estatal en Matamoros</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el PIB estatal entre el año 2006 y el 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-crecimiento-del-pib-estatal.html">Crecimiento del PIB Estatal en Torreón</a></td>
            <td>Incluido en el subíndice de "Economía Estable". Mide el cambio porcentual en el PIB estatal entre el año 2006 y el 2012.</td>
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
      data: [{ fecha: '2010-12-31', dato: 4205870657.00 },{ fecha: '2011-12-31', dato: 4528969820.00 },{ fecha: '2012-12-31', dato: 4896553645.00 },{ fecha: '2013-12-31', dato: 5442162894.00 },{ fecha: '2014-03-31', dato: 5671976037.00 }],
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
      data: [{ region: 'Torreón', dato: 4664619926.00 },{ region: 'Gómez Palacio', dato: 614765352.00 },{ region: 'Lerdo', dato: 334888287.00 },{ region: 'Matamoros', dato: 57702472.00 },{ region: 'La Laguna', dato: 5671976037.00 }],
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
<p>Monto total de créditos otorgados hasta la fecha indicada.</p>

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
            <td>$ 4,205,870,657.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 4,528,969,820.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 4,896,553,645.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 5,442,162,894.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>$ 5,671,976,037.00</td>
            <td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
            <td>Dato trimestral</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional.</p>

<p>Datos obtenidos de <a href="http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx">CNBV</a></p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaCarteraHipotecaria

?>
