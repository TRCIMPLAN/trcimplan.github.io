<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Gobierno Empleados Municipales (Creado por Central:SmiLanzadera)
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
 * Clase GobiernoEmpleadosMunicipales
 */
class GobiernoEmpleadosMunicipales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Empleados Municipales en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2015-07-06T15:01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'gobierno-empleados-municipales';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Indicador de eficiencia que determina el número de empleados municipales por cada mil habitantes.';
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
            <td>5.8400</td>
            <td>Ayuntamiento de Torreón</td>
            <td>Comparativos y mas información sobre el Sistema de Indicadores de Desempeño (SINDES) en http://www.sindes.org/</td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>6.2200</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil habitantes.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Empleados Municipales en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
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
            <td><a href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-unidad-recolectora-de-residuos-solidos-propiedad-del-municipio.html">Litros de Combustible Gastados por Unidad Recolectora de Residuos Sólidos Propiedad del Municipio en Torreón</a></td>
            <td>Determina la relación de litros de combustible gastados por unidad recolectora de residuos sólidos del municipio.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-gasto-en-nomina-por-empleado.html">Gasto en Nómina por Empleado en Torreón</a></td>
            <td>Mide la eficiencia en el gasto en nómina ejercido por el Ayuntamiento por cada empleado. Gasto en Nómina Semestral entre el Total de Empleados Municipales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-confianza.html">Capacitación a Empleados de Confianza en Torreón</a></td>
            <td>Expresa la relación de horas de capacitación promedio brindadas a los empleados municipales cuyo estatus es de confianza. Total de Horas de Capacitación a Empleados de Confianza entre el total de Empleados de Confianza.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-base.html">Capacitación a Empleados de Base en Torreón</a></td>
            <td>Expresa la relación de horas de capacitación promedio brindadas a los empleados municipales cuyo estatus es de base. Total de Horas de Capacitación a Empleados de Base, entre Total de Empleados de Base Semestral.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-promedio-de-horas-para-la-realizacion-del-tramite-de-carta-de-no-adeudo-predial.html">Promedio de Horas para la Realización del Trámite de Carta de No Adeudo Predial en Torreón</a></td>
            <td>Determina el número de horas requeridas para la realización del trámite de carta de No adeudo de predial.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-permiso-de-construccion-de-una-adicion-residencial-o-comercial.html">Promedio de Horas para la Realizacion del Trámite de Permiso de Construcción de una Adición Residencial o Comercial en Torreón</a></td>
            <td>Determina el número de horas requeridas para realizar el trámite de permiso de construcción de una adición (residencial/comercial). Calculado por Número de Horas Empleadas para el Trámite de Permisos de Construcción de Una Adición, entre Número de Permisos de Construcción Una Adición Otorgados.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-licencia-para-negocio.html">Promedio de Horas para la Realización del Trámite de Licencia para Negocio en Torreón</a></td>
            <td>Determina el número de horas requeridas para la realización del trámite de licencia para negocios. Número de Horas Empleadas para el Trámite de Licencias para Negocios, entre Número de Licencias para Negocios Otorgadas.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-policias-operativos-de-seguridad-publica.html">Policías Operativos de Seguridad Pública en Torreón</a></td>
            <td>Determina el número de policías operativos por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-indice-de-herramientas-electronicas-de-gobiernos-locales.html">Índice de Herramientas Electrónicas de Gobiernos Locales en Torreón</a></td>
            <td>El Índice de herramientas electrónicas locales desarrollado por IMCO evaluó cuatro aspectos para determinar los avances de gobierno electrónico en los municipios de la muestra: información, interacción, transacción, experiencia de usuario.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Gómez Palacio</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en La Laguna</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Lerdo</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Matamoros</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-periodistas-muertos-o-desaparecidos.html">Periodistas Muertos o Desaparecidos en Torreón</a></td>
            <td>Periodistas muertos o desaparecidos en los últimos 5 años. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de periodistas muertos o desaparecidos en los últimos cinco años. Este indicador busca captar el grado de libertad de expresión que hay en una ciudad.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-duracion-de-periodo-para-ediles-y-delegados.html">Duración de Período para Ediles y Delegados en Gómez Palacio</a></td>
            <td>Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de años durante los cuales el gobierno municipal / delegacional ejerce el cargo. Se asume que entre más largos sean los periodos de gobierno, mayor será el aprendizaje de los funcionarios y el conocimiento acumulado, lo que podría derivar en políticas públicas más eficientes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-duracion-de-periodo-para-ediles-y-delegados.html">Duración de Período para Ediles y Delegados en La Laguna</a></td>
            <td>Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de años durante los cuales el gobierno municipal / delegacional ejerce el cargo. Se asume que entre más largos sean los periodos de gobierno, mayor será el aprendizaje de los funcionarios y el conocimiento acumulado, lo que podría derivar en políticas públicas más eficientes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-duracion-de-periodo-para-ediles-y-delegados.html">Duración de Período para Ediles y Delegados en Lerdo</a></td>
            <td>Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de años durante los cuales el gobierno municipal / delegacional ejerce el cargo. Se asume que entre más largos sean los periodos de gobierno, mayor será el aprendizaje de los funcionarios y el conocimiento acumulado, lo que podría derivar en políticas públicas más eficientes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-duracion-de-periodo-para-ediles-y-delegados.html">Duración de Período para Ediles y Delegados en Matamoros</a></td>
            <td>Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de años durante los cuales el gobierno municipal / delegacional ejerce el cargo. Se asume que entre más largos sean los periodos de gobierno, mayor será el aprendizaje de los funcionarios y el conocimiento acumulado, lo que podría derivar en políticas públicas más eficientes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-duracion-de-periodo-para-ediles-y-delegados.html">Duración de Período para Ediles y Delegados en Torreón</a></td>
            <td>Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide el número de años durante los cuales el gobierno municipal / delegacional ejerce el cargo. Se asume que entre más largos sean los periodos de gobierno, mayor será el aprendizaje de los funcionarios y el conocimiento acumulado, lo que podría derivar en políticas públicas más eficientes.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-registro-de-una-propiedad-percentil-promedio.html">Registro de una Propiedad (percentil promedio) en Gómez Palacio</a></td>
            <td>Incluido en el Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para registrar una propiedad: número de trámites, tiempo (días) y costo (% valor de la propiedad). Este indicador se calcula a nivel estatal.</td>
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
      data: [{ fecha: '2014-06-30', dato: 5.8400 },{ fecha: '2014-12-31', dato: 6.2200 }],
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
<p>Indicador de eficiencia que determina el número de empleados municipales por cada mil habitantes.</p>

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
            <td>5.8400</td>
            <td>Ayuntamiento de Torreón</td>
            <td>Comparativos y mas información sobre el Sistema de Indicadores de Desempeño (SINDES) en http://www.sindes.org/</td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>6.2200</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil habitantes.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase GobiernoEmpleadosMunicipales

?>
