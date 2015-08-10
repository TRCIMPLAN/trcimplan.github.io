<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Economía Gasto en Nómina por Empleado (Creado por Central:SmiLanzadera)
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
 * Clase EconomiaGastoEnNominaPorEmpleado
 */
class EconomiaGastoEnNominaPorEmpleado extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Gasto en Nómina por Empleado en Torreón';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2015-07-14T18:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'economia-gasto-en-nomina-por-empleado';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Mide la eficiencia en el gasto en nómina ejercido por el Ayuntamiento por cada empleado. Gasto en Nómina Semestral entre el Total de Empleados Municipales.';
        $this->claves            = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Finanzas Públicas';
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
        // Para el Organizador
        $this->categorias        = array('Sistema de Indicadores de Desempeño (SINDES)', 'Finanzas Públicas');
        $this->fuentes           = array('Ayuntamiento de Torreón');
        $this->regiones          = 'Torreón';
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
            <td>$ 51,420.70</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>$ 63,791.74</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Gasto en Nómina por Empleado en Torreón</h3>
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
            <td><a href="../indicadores-gomez-palacio/gobierno-ingresos-propios.html">Ingresos Propios en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-ingresos-propios.html">Ingresos Propios en La Laguna</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-ingresos-propios.html">Ingresos Propios en Lerdo</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-ingresos-propios.html">Ingresos Propios en Matamoros</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-ingresos-propios.html">Ingresos Propios en Torreón</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>06/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-vehiculos-automotores-por-habitante.html">Vehículos Automotores por Habitante en Torreón</a></td>
            <td>Determina el número de vehículos automotores por habitante.</td>
          </tr>
          <tr>
            <td>06/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-habitante.html">Litros de Combustible Gastados por Habitante en Torreón</a></td>
            <td>Determina la relación de litros de combustible gastados por el gobierno municipal respecto de su población total.</td>
          </tr>
          <tr>
            <td>06/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-empleados-municipales.html">Empleados Municipales en Torreón</a></td>
            <td>Indicador de eficiencia que determina el número de empleados municipales por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-capacidad-financiera.html">Capacidad Financiera en Gómez Palacio</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-capacidad-financiera.html">Capacidad Financiera en La Laguna</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-capacidad-financiera.html">Capacidad Financiera en Lerdo</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-capacidad-financiera.html">Capacidad Financiera en Matamoros</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
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
      data: [{ fecha: '2014-06-30', dato: 51420.70 },{ fecha: '2014-12-31', dato: 63791.74 }],
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
<p>Mide la eficiencia en el gasto en nómina ejercido por el Ayuntamiento por cada empleado. Gasto en Nómina Semestral entre el Total de Empleados Municipales.</p>

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
            <td>$ 51,420.70</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>$ 63,791.74</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaGastoEnNominaPorEmpleado

?>
