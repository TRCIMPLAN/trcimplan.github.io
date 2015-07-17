<?php
/**
 * TrcIMPLAN - SMI Indicadores Gómez Palacio Economía Crecimiento de la Mancha Urbana (Creado por Central:SmiLanzadera)
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
 * Clase EconomiaCrecimientoDeLaManchaUrbana
 */
class EconomiaCrecimientoDeLaManchaUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Crecimiento de la Mancha Urbana en Gómez Palacio';
     // $this->autor             = '';
        $this->fecha             = '2015-07-14T13:51';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-crecimiento-de-la-mancha-urbana';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.';
        $this->claves            = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Infraestructura';
        $this->categorias        = array('Índice de Competitividad Urbana', 'Infraestructura');
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
<p>Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.</p>

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
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Número de veces.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Crecimiento de la Mancha Urbana en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Crecimiento de la Mancha Urbana</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Crecimiento de la Mancha Urbana</h3>
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
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>1.2467</td>
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
            <td>07/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/hacia-ciudades-que-construyen-humanos-en-convivencia.html">Hacia Ciudades que Construyen Humanos en Convivencia</a></td>
            <td>El espacio público es donde se tejen las relaciones sociales, por lo tanto su conformación debe contribuir a desarrollar las capacidades humanas.</td>
          </tr>
          <tr>
            <td>01/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/la-ciudad-compacta-vive-mejor.html">La Ciudad Compacta (como la familia pequeña) Vive Mejor</a></td>
            <td>La política pública a adoptar como estrategia debe ser la de crecimiento interno: densificar la ciudad implotando su crecimiento hacia adentro y hacia arriba.</td>
          </tr>
          <tr>
            <td>27/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/reflexion-crecimiento-urbano-torreon.html">Reflexión del Crecimiento Urbano en Torreón</a></td>
            <td>La ciudad de Torreón nace a partir de la visión de Sr. Andrés Guillermo Eppen con trazos ordenados, calles anchas, manzanas cuadradas y alineadas con la vía de ferrocarril.</td>
          </tr>
          <tr>
            <td>28/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-urbana-competitividad.html">Movilidad Urbana y Competitividad</a></td>
            <td>La movilidad es eje fundamental del desarrollo; al no considerar el transporte como parte de la planeación urbana, se generan graves deficiencias, como dispersión, distanciamiento y desconexión urbana.</td>
          </tr>
          <tr>
            <td>15/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudadano-agente-cambio.html">Ciudadano como agente de cambio</a></td>
            <td>La participación de la sociedad en proyectos urbanos crea una cultura de co-creación. Destaca Medellín, Colombia donde se aplica en la coordinación, participación y construcción de obra pública.</td>
          </tr>
          <tr>
            <td>20/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/espacio-publico-urbano.html">Espacio Público Urbano</a></td>
            <td>Las calles son la forma más importante de espacio público. Requieren algunos cambios urbanos para que sean más seguras y amistosas para los niños y niñas; que lleguen a ser de alta calidad.</td>
          </tr>
          <tr>
            <td>03/03/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/reciclaje-urbano.html">Reciclaje Urbano</a></td>
            <td>Con en el reciclaje urbano, se han logrado grandes resultados al convertir zonas degradadas en nuevos barrios con gran potencial y desarrollo que se resulta un nuevo punto de interés para los habitantes y visitantes de la ciudad.</td>
          </tr>
          <tr>
            <td>24/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudad-abierta-ciudad-fraccionada.html">Ciudad abierta y ciudad fraccionada</a></td>
            <td>La fragmentación social y urbana provocada por desarrollos habitacionales “seguros” tiene efectos que agravan la percepción de la inseguridad en la ciudad.</td>
          </tr>
          <tr>
            <td>11/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/direccionando-hacia-innovacion-urbana.html">Direccionando hacia la innovación urbana</a></td>
            <td>Actualmente el concepto de ciudad inteligente o digital se maneja a nivel global. Muchas ciudades de este tipo se están desarrollando en diferentes lugares del mundo, cada una con su propio sistema, diseño, estructura y organización.</td>
          </tr>
          <tr>
            <td>10/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/nueva-infraestructura-base-tecnologia-led-torreon.html">Nueva infraestructura a base de tecnología LED en Torreón</a></td>
            <td>La luz blanca de calidad puede transformar el paisaje nocturno, realzando la arquitectura urbana y creando ambientes acogedores que inviten a las personas a pasar más tiempo en ellos.</td>
          </tr>
          <tr>
            <td>28/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delito-espacio-publico.html">Prevención del delito mediante la construcción del espacio público</a></td>
            <td>Ante el miedo y el temor, el lagunero ha tomado medidas en lo individual y lo colectivo en un intento por evitar ser víctimas de algún delito, se ha encerrado en lo privado despreciando el espacio público como si fuera ajeno.</td>
          </tr>
          <tr>
            <td>13/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudad-espacio-publico.html">Ciudad y Espacio Público</a></td>
            <td>Actualmente las teorías urbanas afirman que el buen diseño de calles puede promover calidad de vida para todos.</td>
          </tr>
          <tr>
            <td>16/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/urbanismo-participativo.html">Urbanismo Participativo</a></td>
            <td>Es un concepto de corresponsabilidad que se forma entre el Estado y la sociedad dentro de un modelo de gobernanza, en donde los ciudadanos aportan ideas y evalúan los procesos de planeación del territorio y de los espacios públicos urbanos que lo conforman.</td>
          </tr>
          <tr>
            <td>03/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/calle-completa-espacio-vital-todos.html">La Calle Completa: espacio vial para todos</a></td>
            <td>Con la inclusión del automóvil en el espacio urbano se causó problemas como alta incidencia de accidentes, inaccesibilidad, contaminación, y el deterioro del espacio público más importante: la calle.</td>
          </tr>
          <tr>
            <td>02/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudades-mas-humanas.html">Ciudades más Humanas</a></td>
            <td>La calidad de vida en las ciudades es la posibilidad que tiene una persona, una familia o una comunidad, de alcanzar el bienestar y la satisfacción de todas sus necesidades.</td>
          </tr>
          <tr>
            <td>25/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-nuestra-ciudad.html">Movilidad y nuestra ciudad</a></td>
            <td>De 1970 a la fecha la expansión de la mancha urbana en la ciudad de Torreón ha crecido siete veces mientras que la población únicamente tres.</td>
          </tr>
          <tr>
            <td>19/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/bicimetro-innovacion-transporte-urbano.html">Bicimetro: La innovación del Transporte Urbano</a></td>
            <td>Cada vez son más los ciudadanos que optan por dejar sus carros y se animan a desempolvar las bicicletas guardadas en los garajes y utilizarlas como medio de transporte ya sea habitual o por recreación.</td>
          </tr>
          <tr>
            <td>05/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/dot-desarrollo-orientado-transporte.html">DOT: Desarrollo Orientado al Transporte</a></td>
            <td>En las últimas décadas, han surgido nuevos modelos urbanos que retoman el componente humano como eje principal de la planeación, buscando el equilibrio entre una ciudad altamente competitiva pero con servicios e infraestructura orientada al confort y las necesidades del ser humano.</td>
          </tr>
          <tr>
            <td>28/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/ciudades-reto-transformacion.html">Las ciudades y el reto de su transformación</a></td>
            <td>El futuro de la humanidad está intrínsecamente relacionado al futuro de las ciudades. A partir de la revolución industrial hubo una movilización de personas del campo a la ciudad, lo que trajo consigo una revolución urbana.</td>
          </tr>
          <tr>
            <td>23/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-camino-redensificacion-2.html">Torreón, camino a la redensificación II</a></td>
            <td>Continuación del tema de la redensificación de ciudades. Las cifras nos indican como el territorio ocupado en Torreón es siete veces contra tres del crecimiento poblacional de la década de 1970 a la fecha.</td>
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
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-total.html">Red Carretera Total en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-red-carretera-total.html">Red Carretera Total en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-red-carretera-total.html">Red Carretera Total en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-red-carretera-total.html">Red Carretera Total en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-troncal-federal.html">Red Carretera Troncal Federal en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-red-carretera-troncal-federal.html">Red Carretera Troncal Federal en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-red-carretera-troncal-federal.html">Red Carretera Troncal Federal en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-red-carretera-troncal-federal.html">Red Carretera Troncal Federal en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-de-alimentadoras-estatales.html">Red Carretera de Alimentadoras Estatales en Gómez Palacio</a></td>
            <td>Red carretera de alimentadoras estatales.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sustentabilidad-red-carretera-de-alimentadoras-estatales.html">Red Carretera de Alimentadoras Estatales en Lerdo</a></td>
            <td>Red carretera de alimentadoras estatales.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-red-carretera-de-alimentadoras-estatales.html">Red Carretera de Alimentadoras Estatales en Matamoros</a></td>
            <td>Red carretera de alimentadoras estatales.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sustentabilidad-red-carretera-de-alimentadoras-estatales.html">Red Carretera de Alimentadoras Estatales en Torreón</a></td>
            <td>Red carretera de alimentadoras estatales.</td>
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
            <td>15/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/importancia-suelo-ciudades.html">La importancia del suelo en las ciudades</a></td>
            <td>En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual.</td>
          </tr>
          <tr>
            <td>14/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/poligonos-actuacion-desarrollo-urbano-integral.html">Polígonos de Actuación para un Desarrollo Urbano Integral</a></td>
            <td>El nuevo modelo de desarrollo urbano mexicano que se impulsa en el país es el de fomentar la consolidación de las ciudades y lograr que sean más competitivas, equilibradas, densas, prósperas, justas, seguras y sustentables.</td>
          </tr>
          <tr>
            <td>28/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-camino-redensificacion.html">Torreón, camino a la redensificación</a></td>
            <td>Torreón no ha aprovechado su territorio e infraestructura contenida, de una manera óptima, debido a su baja densidad de ocupación en su área urbana.</td>
          </tr>
          <tr>
            <td>06/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/movilidad-laboral-cotidiana-zml.html">Movilidad laboral cotidiana en la ZML</a></td>
            <td>Población ocupada que tiene trabajo en su PROPIO municipio y que tiene trabajo en OTRO Municipio de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>26/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/infraestructura.html">Infraestructura (Sectores precursores de clase mundial)</a></td>
            <td>Análisis de los indicadores sobre infraestructura en tecnologías de la información, carreteras avanzadas y tasa de accidentes viales.</td>
          </tr>
          <tr>
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
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
        $this->javascript = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2008-12-31', dato: 1.2467 },{ fecha: '2009-12-31', dato: 1.2467 },{ fecha: '2010-12-31', dato: 1.2467 },{ fecha: '2011-12-31', dato: 1.2467 },{ fecha: '2012-12-31', dato: 1.2467 }],
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
      data: [{ region: 'Torreón', dato: 1.2467 },{ region: 'Gómez Palacio', dato: 1.2467 },{ region: 'Lerdo', dato: 1.2467 },{ region: 'Matamoros', dato: 1.2467 },{ region: 'La Laguna', dato: 1.2467 }],
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
<p>Mide la razón de crecimiento de la mancha urbana entre 2005 y 2010 respecto del crecimiento de la población de la ciudad correspondiente durante el mismo periodo.</p>

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
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>1.2467</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Número de veces.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaCrecimientoDeLaManchaUrbana

?>
