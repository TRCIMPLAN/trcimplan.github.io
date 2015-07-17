<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Seguridad Percepción de Inseguridad (Creado por Central:SmiLanzadera)
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
 * Clase SeguridadPercepcionDeInseguridad
 */
class SeguridadPercepcionDeInseguridad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Percepción de Inseguridad en La Laguna';
     // $this->autor             = '';
        $this->fecha             = '2015-07-14T14:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'seguridad-percepcion-de-inseguridad';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.';
        $this->claves            = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Seguridad';
        $this->categorias        = array('Índice de Competitividad Urbana', 'Seguridad');
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
      <h3>Descripción</h3>
<p>Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.</p>

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
            <td>31/12/2008</td>
            <td>70.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>70.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>70.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>70.94 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>68.84 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Unidades: Porcentaje de la población total. Fuente: INEGI (Encuesta Nacional de Victimización y Percepción sobre Seguridad Pública), 2011-2013.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Percepción de Inseguridad en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Percepción de Inseguridad</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Percepción de Inseguridad</h3>
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
            <td>2012-12-31</td>
            <td>71.71 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>65.97 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>65.97 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>71.71 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>68.84 %</td>
            <td>IMCO</td>
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
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-desastres-naturales.html">Desastres Naturales en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de apoyos solicitados al Fondo de Desastres Naturales (FONDEN) o al Programa para Atender contingencias Climáticas (PACC) por eventos naturales y que superaron las capacidades financieras de respuesta de las dependencias responsables estatales y municipales.
Fuente: Centro Nacional de Prevención de Desastres (CENAPRED), 2006-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-desastres-naturales.html">Desastres Naturales en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de apoyos solicitados al Fondo de Desastres Naturales (FONDEN) o al Programa para Atender contingencias Climáticas (PACC) por eventos naturales y que superaron las capacidades financieras de respuesta de las dependencias responsables estatales y municipales.
Fuente: Centro Nacional de Prevención de Desastres (CENAPRED), 2006-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-desastres-naturales.html">Desastres Naturales en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de apoyos solicitados al Fondo de Desastres Naturales (FONDEN) o al Programa para Atender contingencias Climáticas (PACC) por eventos naturales y que superaron las capacidades financieras de respuesta de las dependencias responsables estatales y municipales.
Fuente: Centro Nacional de Prevención de Desastres (CENAPRED), 2006-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-desastres-naturales.html">Desastres Naturales en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de apoyos solicitados al Fondo de Desastres Naturales (FONDEN) o al Programa para Atender contingencias Climáticas (PACC) por eventos naturales y que superaron las capacidades financieras de respuesta de las dependencias responsables estatales y municipales.
Fuente: Centro Nacional de Prevención de Desastres (CENAPRED), 2006-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-desastres-naturales.html">Desastres Naturales en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de apoyos solicitados al Fondo de Desastres Naturales (FONDEN) o al Programa para Atender contingencias Climáticas (PACC) por eventos naturales y que superaron las capacidades financieras de respuesta de las dependencias responsables estatales y municipales.
Fuente: Centro Nacional de Prevención de Desastres (CENAPRED), 2006-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-registro-de-una-propiedad.html">Registro de Una Propiedad en La Laguna</a></td>
            <td>Incluido en el Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para registrar una propiedad: número de trámites, tiempo (días) y costo (% valor de la propiedad). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-registro-de-una-propiedad.html">Registro de Una Propiedad en Matamoros</a></td>
            <td>Incluido en el Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para registrar una propiedad: número de trámites, tiempo (días) y costo (% valor de la propiedad). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.
Unidades: Empresas certificadas como limpias por cada mil.
Fuente: Procuraduría Federal de Protección al Ambiente (PROFEPA), 2009-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.
Unidades: Empresas certificadas como limpias por cada mil.
Fuente: Procuraduría Federal de Protección al Ambiente (PROFEPA), 2009-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.
Unidades: Empresas certificadas como limpias por cada mil.
Fuente: Procuraduría Federal de Protección al Ambiente (PROFEPA), 2009-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.
Unidades: Empresas certificadas como limpias por cada mil.
Fuente: Procuraduría Federal de Protección al Ambiente (PROFEPA), 2009-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-empresas-certificadas-como-limpias.html">Empresas Certificadas como Limpias en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide el número de empresas que cuentan con la certificación de “Empresa Limpia”emitido por la Procuraduría Federal de Protección al Ambiente (PROFEPA), que evidencia el cumplimiento de la normatividad y buenas prácticas ambientales.
Unidades: Empresas certificadas como limpias por cada mil.
Fuente: Procuraduría Federal de Protección al Ambiente (PROFEPA), 2009-2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html">Aprovechamiento del Biogás en Rellenos Sanitarios en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide si la ciudad cuenta con captación, conducción e impulsión del biogás que se genera en los rellenos sanitarios de la ciudad.
Fuente: Secretaría de Desarrollo Social (SEDESOL), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html">Aprovechamiento del Biogás en Rellenos Sanitarios en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide si la ciudad cuenta con captación, conducción e impulsión del biogás que se genera en los rellenos sanitarios de la ciudad.
Fuente: Secretaría de Desarrollo Social (SEDESOL), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html">Aprovechamiento del Biogás en Rellenos Sanitarios en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide si la ciudad cuenta con captación, conducción e impulsión del biogás que se genera en los rellenos sanitarios de la ciudad.
Fuente: Secretaría de Desarrollo Social (SEDESOL), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html">Aprovechamiento del Biogás en Rellenos Sanitarios en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide si la ciudad cuenta con captación, conducción e impulsión del biogás que se genera en los rellenos sanitarios de la ciudad.
Fuente: Secretaría de Desarrollo Social (SEDESOL), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html">Aprovechamiento del Biogás en Rellenos Sanitarios en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide si la ciudad cuenta con captación, conducción e impulsión del biogás que se genera en los rellenos sanitarios de la ciudad.
Fuente: Secretaría de Desarrollo Social (SEDESOL), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html">Disposición Adecuada de Residuos Sólidos en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide la proporción de residuos que se disponen en sitios controlados.
Fuente: Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html">Disposición Adecuada de Residuos Sólidos en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide la proporción de residuos que se disponen en sitios controlados.
Fuente: Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html">Disposición Adecuada de Residuos Sólidos en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide la proporción de residuos que se disponen en sitios controlados.
Fuente: Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html">Disposición Adecuada de Residuos Sólidos en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide la proporción de residuos que se disponen en sitios controlados.
Fuente: Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html">Disposición Adecuada de Residuos Sólidos en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide la proporción de residuos que se disponen en sitios controlados.
Fuente: Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU), 2012.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-apertura-de-un-negocio.html">Apertura de un Negocio en La Laguna</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Lerdo</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Matamoros</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Torreón</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html">Índice de Gestión de Calidad del Aire en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide los esfuerzos que dedica la administración de la ciudad a la gestión de la calidad
del aire.
Unidades: Variable discreta que asigna valores de 0 a 3, según la medición de la calidad del
aire (se da el valor de: 1 si mide calidad, 2 si la reporta, 3 si cuenta con PROAIRE, 0 en otro
caso). No se penaliza a las ciudades que no tienen la obligación de medir su calidad del aire
de acuerdo con la NOM-156-SEMARNAT-2012, por lo que a ésas se les asigna el valor 3.
Fuente: IMCO, con información al 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html">Índice de Gestión de Calidad del Aire en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide los esfuerzos que dedica la administración de la ciudad a la gestión de la calidad
del aire.
Unidades: Variable discreta que asigna valores de 0 a 3, según la medición de la calidad del
aire (se da el valor de: 1 si mide calidad, 2 si la reporta, 3 si cuenta con PROAIRE, 0 en otro
caso). No se penaliza a las ciudades que no tienen la obligación de medir su calidad del aire
de acuerdo con la NOM-156-SEMARNAT-2012, por lo que a ésas se les asigna el valor 3.
Fuente: IMCO, con información al 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html">Índice de Gestión de Calidad del Aire en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide los esfuerzos que dedica la administración de la ciudad a la gestión de la calidad
del aire.
Unidades: Variable discreta que asigna valores de 0 a 3, según la medición de la calidad del
aire (se da el valor de: 1 si mide calidad, 2 si la reporta, 3 si cuenta con PROAIRE, 0 en otro
caso). No se penaliza a las ciudades que no tienen la obligación de medir su calidad del aire
de acuerdo con la NOM-156-SEMARNAT-2012, por lo que a ésas se les asigna el valor 3.
Fuente: IMCO, con información al 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html">Índice de Gestión de Calidad del Aire en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide los esfuerzos que dedica la administración de la ciudad a la gestión de la calidad
del aire.
Unidades: Variable discreta que asigna valores de 0 a 3, según la medición de la calidad del
aire (se da el valor de: 1 si mide calidad, 2 si la reporta, 3 si cuenta con PROAIRE, 0 en otro
caso). No se penaliza a las ciudades que no tienen la obligación de medir su calidad del aire
de acuerdo con la NOM-156-SEMARNAT-2012, por lo que a ésas se les asigna el valor 3.
Fuente: IMCO, con información al 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html">Índice de Gestión de Calidad del Aire en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide los esfuerzos que dedica la administración de la ciudad a la gestión de la calidad
del aire.
Unidades: Variable discreta que asigna valores de 0 a 3, según la medición de la calidad del
aire (se da el valor de: 1 si mide calidad, 2 si la reporta, 3 si cuenta con PROAIRE, 0 en otro
caso). No se penaliza a las ciudades que no tienen la obligación de medir su calidad del aire
de acuerdo con la NOM-156-SEMARNAT-2012, por lo que a ésas se les asigna el valor 3.
Fuente: IMCO, con información al 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Gómez Palacio</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en La Laguna</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Lerdo</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Matamoros</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Torreón</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-agua.html">Consumo de Agua en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la cantidad promedio de agua potable que consume cada persona al año.
Unidades: Metros cúbicos por persona.
Fuente: CONAGUA, 2008-2009.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-consumo-de-agua.html">Consumo de Agua en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la cantidad promedio de agua potable que consume cada persona al año.
Unidades: Metros cúbicos por persona.
Fuente: CONAGUA, 2008-2009.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-consumo-de-agua.html">Consumo de Agua en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la cantidad promedio de agua potable que consume cada persona al año.
Unidades: Metros cúbicos por persona.
Fuente: CONAGUA, 2008-2009.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-consumo-de-agua.html">Consumo de Agua en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la cantidad promedio de agua potable que consume cada persona al año.
Unidades: Metros cúbicos por persona.
Fuente: CONAGUA, 2008-2009.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-consumo-de-agua.html">Consumo de Agua en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la cantidad promedio de agua potable que consume cada persona al año.
Unidades: Metros cúbicos por persona.
Fuente: CONAGUA, 2008-2009.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-ingresos-propios.html">Ingresos Propios en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-ingresos-propios.html">Ingresos Propios en La Laguna</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-ingresos-propios.html">Ingresos Propios en Lerdo</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-ingresos-propios.html">Ingresos Propios en Matamoros</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-ingresos-propios.html">Ingresos Propios en Torreón</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide el total de ingresos propios (impuestos, derechos, productos, aprovechamientos y contribuciones de mejoras) de la ciudad como porcentaje de sus ingresos totales.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-indice-de-informacion-presupuestal.html">Índice de Información Presupuestal en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide la calidad de la información tanto de los presupuestos de egresos como de las leyes de ingresos de las ciudades.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-indice-de-informacion-presupuestal.html">Índice de Información Presupuestal en La Laguna</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide la calidad de la información tanto de los presupuestos de egresos como de las leyes de ingresos de las ciudades.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-indice-de-informacion-presupuestal.html">Índice de Información Presupuestal en Lerdo</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide la calidad de la información tanto de los presupuestos de egresos como de las leyes de ingresos de las ciudades.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-indice-de-informacion-presupuestal.html">Índice de Información Presupuestal en Matamoros</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide la calidad de la información tanto de los presupuestos de egresos como de las leyes de ingresos de las ciudades.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-indice-de-informacion-presupuestal.html">Índice de Información Presupuestal en Torreón</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficientes y Eficaces". Mide la calidad de la información tanto de los presupuestos de egresos como de las leyes de ingresos de las ciudades.</td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/la-otra-violencia-contra-los-ninos.html">La Otra Violencia Contra los Niños</a></td>
            <td>El Comité de los Derechos del Niño de la ONU ha señalado que el Gobierno Mexicano debe entregar información sobre las víctimas infantiles.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en Gómez Palacio</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en La Laguna</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en Lerdo</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en Matamoros</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
          </tr>
          <tr>
            <td>04/06/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-delitos-patrimoniales.html">Delitos Patrimoniales en Torreón</a></td>
            <td>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</td>
          </tr>
          <tr>
            <td>02/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ninos-violencia.html">Los Niños y la Violencia</a></td>
            <td>Datos y evidencias sobre los diferentes tipos de violencia contra niños, niñas y adolescentes en México. ¿Qué hacer?... todos los caminos apuntan a la prevención.</td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-comun.html">Presuntos Delitos del Fuero Común en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-presuntos-delitos-del-fuero-comun.html">Presuntos Delitos del Fuero Común en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-comun.html">Presuntos Delitos del Fuero Común en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-comun.html">Presuntos Delitos del Fuero Común en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-federal.html">Presuntos Delitos del Fuero Federal en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-presuntos-delitos-del-fuero-federal.html">Presuntos Delitos del Fuero Federal en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-federal.html">Presuntos Delitos del Fuero Federal en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-federal.html">Presuntos Delitos del Fuero Federal en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html">Personas Involucradas en Delitos del Fuero Federal en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html">Personas Involucradas en Delitos del Fuero Federal en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html">Personas Involucradas en Delitos del Fuero Federal en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html">Personas Involucradas en Delitos del Fuero Federal en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html">Personas Involucradas en Delitos del Fuero Común en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html">Personas Involucradas en Delitos del Fuero Común en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html">Personas Involucradas en Delitos del Fuero Común en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html">Personas Involucradas en Delitos del Fuero Común en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html">Tasa de Robo de Vehículo sin Violencia en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html">Tasa de Robo de Vehículo sin Violencia en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html">Tasa de Robo de Vehículo sin Violencia en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html">Tasa de Robo de Vehículo sin Violencia en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html">Tasa de Robo de Vehículo sin Violencia en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html">Tasa de Robo de Vehículo con Violencia en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html">Tasa de Robo de Vehículo con Violencia en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html">Tasa de Robo de Vehículo con Violencia en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html">Tasa de Robo de Vehículo con Violencia en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html">Tasa de Robo de Vehículo con Violencia en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-tasa-de-extorsion.html">Tasa de Extorsión en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-extorsion.html">Tasa de Extorsión en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-extorsion.html">Tasa de Extorsión en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-extorsion.html">Tasa de Extorsión en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-extorsion.html">Tasa de Extorsión en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidio-doloso.html">Tasa de Homicidio Doloso en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-homicidio-doloso.html">Tasa de Homicidio Doloso en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-homicidio-doloso.html">Tasa de Homicidio Doloso en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-homicidio-doloso.html">Tasa de Homicidio Doloso en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>29/04/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-homicidio-doloso.html">Tasa de Homicidio Doloso en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>22/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/necesidad-diagnostico-sobre-delincuencia-juvenil.html">La Necesidad de un Diagnóstico sobre la Delincuencia Juvenil en el Municipio de Torreón</a></td>
            <td>Se debe desarrollar un trabajo conjunto entre autoridades y organizaciones civiles en el tema de la delincuencia juvenil para tener un conocimiento claro de cómo ha evolucionado, de su situación real y para crear las políticas públicas pertinentes.</td>
          </tr>
          <tr>
            <td>17/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/seguridad-humana.html">Seguridad Humana</a></td>
            <td>La población se siente insegura no solo por las acciones de la delincuencia organizada, también la genera la falta de empleo, la pobreza persistente, la ausencia de acceso a cuidados básicos de salud, la violencia física, la violencia familiar, la represión política, la violación a los derechos humanos, el deterioro ambiental, la incertidumbre política, la falta de educación, la imposibilidad de ejercer el derecho de libre expresión y la ausencia de equidad de género entre otros.</td>
          </tr>
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
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-cantidad-de-policias.html">Cantidad de Policías en Torreón</a></td>
            <td>Cantidad total de policías en el municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html">Capacidad de Tratamiento de Agua en Operación en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la capacidad instalada de tratamiento de aguas que aprovecha cada ciudad,
ajustada por el tamaño de su población.
Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2010.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html">Capacidad de Tratamiento de Agua en Operación en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la capacidad instalada de tratamiento de aguas que aprovecha cada ciudad,
ajustada por el tamaño de su población.
Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2010.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html">Capacidad de Tratamiento de Agua en Operación en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la capacidad instalada de tratamiento de aguas que aprovecha cada ciudad,
ajustada por el tamaño de su población.
Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2010.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html">Capacidad de Tratamiento de Agua en Operación en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la capacidad instalada de tratamiento de aguas que aprovecha cada ciudad,
ajustada por el tamaño de su población.
Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2010.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html">Capacidad de Tratamiento de Agua en Operación en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable del Medio Ambiente". Mide la capacidad instalada de tratamiento de aguas que aprovecha cada ciudad,
ajustada por el tamaño de su población.
Fuente: Instituto Nacional de Estadística y Geografía (INEGI), 2008-2010.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-delitos.html">Delitos en Gómez Palacio</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-delitos.html">Delitos en La Laguna</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-delitos.html">Delitos en Lerdo</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-delitos.html">Delitos en Matamoros</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-delitos.html">Delitos en Torreón</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Gómez Palacio</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html">Ejecución de Contratos en La Laguna</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Lerdo</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Matamoros</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Torreón</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-homicidios.html">Homicidios en Gómez Palacio</a></td>
            <td>Número de homicidios por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-homicidios.html">Homicidios en La Laguna</a></td>
            <td>Número de homicidios por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-homicidios.html">Homicidios en Lerdo</a></td>
            <td>Número de homicidios por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-homicidios.html">Homicidios en Matamoros</a></td>
            <td>Número de homicidios por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-homicidios.html">Homicidios en Torreón</a></td>
            <td>Número de homicidios por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-robo-a-negocios.html">Robo a Negocios en Gómez Palacio</a></td>
            <td>Robos totales por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robo-a-negocios.html">Robo a Negocios en La Laguna</a></td>
            <td>Robos totales por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-robo-a-negocios.html">Robo a Negocios en Lerdo</a></td>
            <td>Robos totales por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robo-a-negocios.html">Robo a Negocios en Matamoros</a></td>
            <td>Robos totales por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-robo-a-negocios.html">Robo a Negocios en Torreón</a></td>
            <td>Robos totales por mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-robo-a-transeuntes.html">Robo a Transeuntes en Gómez Palacio</a></td>
            <td>Robos a Transeuntes totales por mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robo-a-transeuntes.html">Robo a Transeuntes en La Laguna</a></td>
            <td>Robos a Transeuntes totales por mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-robo-a-transeuntes.html">Robo a Transeuntes en Lerdo</a></td>
            <td>Robos a Transeuntes totales por mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robo-a-transeuntes.html">Robo a Transeuntes en Matamoros</a></td>
            <td>Robos a Transeuntes totales por mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-robo-a-transeuntes.html">Robo a Transeuntes en Torreón</a></td>
            <td>Robos a Transeuntes totales por mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Gómez Palacio</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robo-de-vehiculos.html">Robo de Vehículos en La Laguna</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Lerdo</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Matamoros</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Torreón</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-robos-totales.html">Robos Totales en Gómez Palacio</a></td>
            <td>Cantidad total de robos en el mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robos-totales.html">Robos Totales en La Laguna</a></td>
            <td>Cantidad total de robos en el mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-robos-totales.html">Robos Totales en Lerdo</a></td>
            <td>Cantidad total de robos en el mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robos-totales.html">Robos Totales en Matamoros</a></td>
            <td>Cantidad total de robos en el mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-robos-totales.html">Robos Totales en Torreón</a></td>
            <td>Cantidad total de robos en el mes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-robos-a-casa-habitacion.html">Robos a Casa Habitación en Gómez Palacio</a></td>
            <td>Robos totales por mes a casa habitación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robos-a-casa-habitacion.html">Robos a Casa Habitación en La Laguna</a></td>
            <td>Robos totales por mes a casa habitación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-robos-a-casa-habitacion.html">Robos a Casa Habitación en Lerdo</a></td>
            <td>Robos totales por mes a casa habitación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robos-a-casa-habitacion.html">Robos a Casa Habitación en Matamoros</a></td>
            <td>Robos totales por mes a casa habitación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-robos-a-casa-habitacion.html">Robos a Casa Habitación en Torreón</a></td>
            <td>Robos totales por mes a casa habitación.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-secuestros.html">Secuestros en Gómez Palacio</a></td>
            <td>Cantidad de secuestros en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-secuestros.html">Secuestros en La Laguna</a></td>
            <td>Cantidad de secuestros en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-secuestros.html">Secuestros en Lerdo</a></td>
            <td>Cantidad de secuestros en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-secuestros.html">Secuestros en Matamoros</a></td>
            <td>Cantidad de secuestros en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-secuestros.html">Secuestros en Torreón</a></td>
            <td>Cantidad de secuestros en el mes</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-sobreexplotacion-del-acuifero.html">Sobreexplotación del Acuífero en Gómez Palacio</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable Del Medio Ambiente". Mide la proporción del área de la ciudad que se ubica sobre acuíferos sobreexplotados.
Fuente: Comisión Nacional del Agua (CONAGUA), 2009.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sustentabilidad-sobreexplotacion-del-acuifero.html">Sobreexplotación del Acuífero en La Laguna</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable Del Medio Ambiente". Mide la proporción del área de la ciudad que se ubica sobre acuíferos sobreexplotados.
Fuente: Comisión Nacional del Agua (CONAGUA), 2009.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-sobreexplotacion-del-acuifero.html">Sobreexplotación del Acuífero en Lerdo</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable Del Medio Ambiente". Mide la proporción del área de la ciudad que se ubica sobre acuíferos sobreexplotados.
Fuente: Comisión Nacional del Agua (CONAGUA), 2009.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-sobreexplotacion-del-acuifero.html">Sobreexplotación del Acuífero en Matamoros</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable Del Medio Ambiente". Mide la proporción del área de la ciudad que se ubica sobre acuíferos sobreexplotados.
Fuente: Comisión Nacional del Agua (CONAGUA), 2009.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html">Sobreexplotación del Acuífero en Torreón</a></td>
            <td>Incluido en el subíndice "Manejo Sustentable Del Medio Ambiente". Mide la proporción del área de la ciudad que se ubica sobre acuíferos sobreexplotados.
Fuente: Comisión Nacional del Agua (CONAGUA), 2009.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en Gómez Palacio</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes. 
En el Índice de Competitividad Urbana pertenece al subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de robo de vehículos en cada ciudad. Sólo se cuenta con observaciones para 2011 y 2012. Unidades: Robo de autos por cada mil vehículos registrados. Fuente: Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (SESNSP) e INEGI, 2008-2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en La Laguna</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes. 
En el Índice de Competitividad Urbana pertenece al subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de robo de vehículos en cada ciudad. Sólo se cuenta con observaciones para 2011 y 2012. Unidades: Robo de autos por cada mil vehículos registrados. Fuente: Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (SESNSP) e INEGI, 2008-2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en Lerdo</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes. 
En el Índice de Competitividad Urbana pertenece al subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de robo de vehículos en cada ciudad. Sólo se cuenta con observaciones para 2011 y 2012. Unidades: Robo de autos por cada mil vehículos registrados. Fuente: Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (SESNSP) e INEGI, 2008-2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en Matamoros</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes. 
En el Índice de Competitividad Urbana pertenece al subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de robo de vehículos en cada ciudad. Sólo se cuenta con observaciones para 2011 y 2012. Unidades: Robo de autos por cada mil vehículos registrados. Fuente: Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (SESNSP) e INEGI, 2008-2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en Torreón</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes. 
En el Índice de Competitividad Urbana pertenece al subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número relativo de robo de vehículos en cada ciudad. Sólo se cuenta con observaciones para 2011 y 2012. Unidades: Robo de autos por cada mil vehículos registrados. Fuente: Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública (SESNSP) e INEGI, 2008-2012.</td>
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
      data: [{ fecha: '2008-12-31', dato: 70.0700 },{ fecha: '2009-12-31', dato: 70.0700 },{ fecha: '2010-12-31', dato: 70.0700 },{ fecha: '2011-12-31', dato: 70.9400 },{ fecha: '2012-12-31', dato: 68.8400 }],
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
      data: [{ region: 'Torreón', dato: 71.7100 },{ region: 'Gómez Palacio', dato: 65.9700 },{ region: 'Lerdo', dato: 65.9700 },{ region: 'Matamoros', dato: 71.7100 },{ region: 'La Laguna', dato: 68.8400 }],
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
<p>Forma parte de subíndice de "Sistema de Derecho Confiable y Objetivo". Mide: El porcentaje de personas que se sienten inseguras dentro de su municipio. Ésta es una variable a nivel estatal debido a que la encuesta no es representativa a nivel ciudad.</p>

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
            <td>31/12/2008</td>
            <td>70.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>70.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>70.07 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>70.94 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>68.84 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Unidades: Porcentaje de la población total. Fuente: INEGI (Encuesta Nacional de Victimización y Percepción sobre Seguridad Pública), 2011-2013.</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SeguridadPercepcionDeInseguridad

?>
