<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Gobierno Litros de Combustible Gastados por Unidad Recolectora de Residuos Sólidos Propiedad del Municipio (Creado por Central:SmiLanzadera)
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
 * Clase GobiernoLitrosDeCombustibleGastadosPorUnidadRecolectoraDeResiduosSolidosPropiedadDelMunicipio
 */
class GobiernoLitrosDeCombustibleGastadosPorUnidadRecolectoraDeResiduosSolidosPropiedadDelMunicipio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Litros de Combustible Gastados por Unidad Recolectora de Residuos Sólidos Propiedad del Municipio en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2015-07-14T18:44';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'gobierno-litros-de-combustible-gastados-por-unidad-recolectora-de-residuos-solidos-propiedad-del-municipio';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Determina la relación de litros de combustible gastados por unidad recolectora de residuos sólidos del municipio.';
        $this->claves            = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Recursos Naturales, Finanzas Públicas';
        $this->categorias        = array('Sistema de Indicadores de Desempeño (SINDES)', 'Recursos Naturales', 'Finanzas Públicas');
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
            <td>$ 21,430.36</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Litros.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

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
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en La Laguna</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Lerdo</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Matamoros</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html">Consumo de Diesel en Transporte de Bienes en Torreón</a></td>
            <td>Incluido en el subíndice "Precursores". Qué mide: El consumo de diesel en metros cúbicos por cada 10 mil habitantes por kilómetro de carretera. Este indicador intenta medir la eficiencia en la distribución de bienes dentro de la ciudad por medio del consumo de diesel. Mientras más poblada y más densa sea la ciudad, el costo unitario de distribución de bienes debe de ser menor debido a las economías de densidad. Un menor consumo de diesel, por kilómetro recorrido y habitante abastecido, es más eficiente que un consumo mayor ya que nos indica que para dicha ciudad, se necesita menos combustible para mover los bienes de un lugar a otro. Esto último provoca beneficios tanto económicos (el costo por unidad transportada es menor) como ambientales.</td>
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
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-emergencias-ambientales.html">Emergencias Ambientales en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide el número de emergencias ambientales reportadas (situaciones que pueden generar daños a la salud o a la propiedad que fueron ocasionadas por factores ambientales, humanos o una combinación de ambos).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-emergencias-ambientales.html">Emergencias Ambientales en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide el número de emergencias ambientales reportadas (situaciones que pueden generar daños a la salud o a la propiedad que fueron ocasionadas por factores ambientales, humanos o una combinación de ambos).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-emergencias-ambientales.html">Emergencias Ambientales en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide el número de emergencias ambientales reportadas (situaciones que pueden generar daños a la salud o a la propiedad que fueron ocasionadas por factores ambientales, humanos o una combinación de ambos).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-emergencias-ambientales.html">Emergencias Ambientales en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide el número de emergencias ambientales reportadas (situaciones que pueden generar daños a la salud o a la propiedad que fueron ocasionadas por factores ambientales, humanos o una combinación de ambos).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-emergencias-ambientales.html">Emergencias Ambientales en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide el número de emergencias ambientales reportadas (situaciones que pueden generar daños a la salud o a la propiedad que fueron ocasionadas por factores ambientales, humanos o una combinación de ambos).</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-economia-intensiva-en-energia.html">Economía Intensiva en Energía en Gómez Palacio</a></td>
            <td>Se incluye en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el volumen de combustibles que requiere una ciudad para generar un millón de pesos del PIB.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-economia-intensiva-en-energia.html">Economía Intensiva en Energía en La Laguna</a></td>
            <td>Se incluye en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el volumen de combustibles que requiere una ciudad para generar un millón de pesos del PIB.</td>
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
<p>Determina la relación de litros de combustible gastados por unidad recolectora de residuos sólidos del municipio.</p>

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
            <td>$ 21,430.36</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Litros.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase GobiernoLitrosDeCombustibleGastadosPorUnidadRecolectoraDeResiduosSolidosPropiedadDelMunicipio

?>
