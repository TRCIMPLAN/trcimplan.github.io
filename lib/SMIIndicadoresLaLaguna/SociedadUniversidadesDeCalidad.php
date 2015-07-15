<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Sociedad Universidades de Calidad (Creado por Central:SmiLanzadera)
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
 * Clase SociedadUniversidadesDeCalidad
 */
class SociedadUniversidadesDeCalidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Universidades de Calidad en La Laguna';
     // $this->autor             = '';
        $this->fecha             = '2015-07-14T14:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'sociedad-universidades-de-calidad';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de universidades dentro de las 300 mejores de América Latina.

Fuente: QS Top Universities.';
        $this->claves            = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Educación';
        $this->categorias        = array('Índice de Competitividad Urbana', 'Educación');
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
        $schema->articleBody     = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de universidades dentro de las 300 mejores de América Latina.</p>

<p>Fuente: QS Top Universities.</p>

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
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Universidades de Calidad en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Universidades de Calidad</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Universidades de Calidad</h3>
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
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $schema->extra           = <<<FINAL
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
            <td>16/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/alumnos-por-docente-parte-1.html">Alumnos por docente, indicador clave para la mejora de la educación (parte 1)</a></td>
            <td>Estudio sobre si debe considerarse la cantidad de alumnos por profesor como un factor en la mejora educativa.</td>
          </tr>
          <tr>
            <td>09/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/panorama-educacion-superior-zml-parte-1.html">Panorama de la Educación Superior en la Z.M.L. (parte 1)</a></td>
            <td>Al comparar la Zona Metropolitana de La Laguna (Z.M.L.) con datos nacionales se tienen más alumnos en carreras de Ingenerías y de Agronomía.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-alumnos-de-secundaria-por-docente.html">Alumnos de Secundaria por Docente en Gómez Palacio</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación secundaria y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-alumnos-de-secundaria-por-docente.html">Alumnos de Secundaria por Docente en La Laguna</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación secundaria y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-alumnos-de-secundaria-por-docente.html">Alumnos de Secundaria por Docente en Lerdo</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación secundaria y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-alumnos-de-secundaria-por-docente.html">Alumnos de Secundaria por Docente en Matamoros</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación secundaria y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-alumnos-de-secundaria-por-docente.html">Alumnos de Secundaria por Docente en Torreón</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación secundaria y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-alumnos-de-primaria-por-docente.html">Alumnos de Primaria por Docente en Gómez Palacio</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente de nivel de educación primaria, basado en el número bruto de estudiantes y de docentes durante el ciclo escolar dado. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-alumnos-de-primaria-por-docente.html">Alumnos de Primaria por Docente en La Laguna</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente de nivel de educación primaria, basado en el número bruto de estudiantes y de docentes durante el ciclo escolar dado. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-alumnos-de-primaria-por-docente.html">Alumnos de Primaria por Docente en Lerdo</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente de nivel de educación primaria, basado en el número bruto de estudiantes y de docentes durante el ciclo escolar dado. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-alumnos-de-primaria-por-docente.html">Alumnos de Primaria por Docente en Matamoros</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente de nivel de educación primaria, basado en el número bruto de estudiantes y de docentes durante el ciclo escolar dado. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-alumnos-de-primaria-por-docente.html">Alumnos de Primaria por Docente en Torreón</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente de nivel de educación primaria, basado en el número bruto de estudiantes y de docentes durante el ciclo escolar dado. Incluye las escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-alumnos-de-preescolar-por-docente.html">Alumnos de Preescolar por Docente en Gómez Palacio</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación preescolar y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-alumnos-de-preescolar-por-docente.html">Alumnos de Preescolar por Docente en La Laguna</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación preescolar y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-alumnos-de-preescolar-por-docente.html">Alumnos de Preescolar por Docente en Lerdo</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación preescolar y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-alumnos-de-preescolar-por-docente.html">Alumnos de Preescolar por Docente en Matamoros</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación preescolar y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>21/05/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-alumnos-de-preescolar-por-docente.html">Alumnos de Preescolar por Docente en Torreón</a></td>
            <td>Número de alumnos (estudiantes) promedio por docente a nivel de educación preescolar y en un año escolar dado, basado en el número bruto de estudiantes y de docentes. Incluye escuelas públicas y privadas, así como de localidades urbanas y rurales.</td>
          </tr>
          <tr>
            <td>14/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/papel-educacion-desarrollo-economico.html">El papel de la educación en el desarrollo económico</a></td>
            <td>Cómo la educación contribuye al crecimiento económico y la importancia de implementar políticas públicas para incrementar su calidad.</td>
          </tr>
          <tr>
            <td>27/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/objetivos-milenio.html">La Zona Metropolitana de La Laguna y los Objetivos del Milenio</a></td>
            <td>En septiembre del año 2000 fue celebrada la Cumbre del Milenio de las Naciones Unidas, durante la cual 147 jefes de estado firman y 189 países aprueban uno de los retos consensuados más ambicioso de las últimas décadas.</td>
          </tr>
          <tr>
            <td>22/01/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior en Gómez Palacio</a></td>
            <td>Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.</td>
          </tr>
          <tr>
            <td>22/01/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior en Lerdo</a></td>
            <td>Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.</td>
          </tr>
          <tr>
            <td>22/01/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior en Matamoros</a></td>
            <td>Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.</td>
          </tr>
          <tr>
            <td>22/01/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior en Torreón</a></td>
            <td>Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.</td>
          </tr>
          <tr>
            <td>10/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/papel-organizaciones-civiles-aumento-competitividad.html">El papel de las Organizaciones Civiles en el aumento del bienestar y competitividad</a></td>
            <td>En toda ciudad, estado o país debe haber sinergia entre ciudadanos, asociaciones civiles y empresas para definir programas a largo plazo que mejoren la calidad y el bienestar de todos nosotros.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-cientifico-matematico.html">Alumnos con Perfil Científico-Matemático en Gómez Palacio</a></td>
            <td>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-cientifico-matematico.html">Alumnos con Perfil Científico-Matemático en La Laguna</a></td>
            <td>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-cientifico-matematico.html">Alumnos con Perfil Científico-Matemático en Lerdo</a></td>
            <td>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-cientifico-matematico.html">Alumnos con Perfil Científico-Matemático en Matamoros</a></td>
            <td>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientifico-matematico.html">Alumnos con Perfil Científico-Matemático en Torreón</a></td>
            <td>Porcentaje de alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-gramatico-espanol.html">Alumnos con Perfil Gramático-Español en Gómez Palacio</a></td>
            <td>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-gramatico-espanol.html">Alumnos con Perfil Gramático-Español en La Laguna</a></td>
            <td>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-gramatico-espanol.html">Alumnos con Perfil Gramático-Español en Lerdo</a></td>
            <td>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-gramatico-espanol.html">Alumnos con Perfil Gramático-Español en Matamoros</a></td>
            <td>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramatico-espanol.html">Alumnos con Perfil Gramático-Español en Torreón</a></td>
            <td>Alumnos buenos y excelentes en Prueba Enlace nivel básico.</td>
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
            <td><a href="../indicadores-gomez-palacio/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html">Diferencial de Grado Promedio de Escolaridad por Género en Gómez Palacio</a></td>
            <td>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html">Diferencial de Grado Promedio de Escolaridad por Género en Lerdo</a></td>
            <td>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html">Diferencial de Grado Promedio de Escolaridad por Género en Matamoros</a></td>
            <td>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html">Diferencial de Grado Promedio de Escolaridad por Género en Torreón</a></td>
            <td>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</td>
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
            <td><a href="../indicadores-gomez-palacio/sociedad-espacios-culturales.html">Espacios Culturales en Gómez Palacio</a></td>
            <td>Espacios culturales físicamente delimitados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-espacios-culturales.html">Espacios Culturales en La Laguna</a></td>
            <td>Espacios culturales físicamente delimitados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-espacios-culturales.html">Espacios Culturales en Lerdo</a></td>
            <td>Espacios culturales físicamente delimitados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-espacios-culturales.html">Espacios Culturales en Matamoros</a></td>
            <td>Espacios culturales físicamente delimitados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-espacios-culturales.html">Espacios Culturales en Torreón</a></td>
            <td>Espacios culturales físicamente delimitados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-posgrados-de-calidad.html">Posgrados de Calidad en Matamoros</a></td>
            <td>Programas aceptados por CONACYT como posgrados de calidad</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-posgrados-de-calidad.html">Posgrados de Calidad en Torreón</a></td>
            <td>Programas aceptados por CONACYT como posgrados de calidad</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html">Rezago Educativo en Gómez Palacio</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-rezago-educativo.html">Rezago Educativo en Lerdo</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-rezago-educativo.html">Rezago Educativo en Matamoros</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-rezago-educativo.html">Rezago Educativo en Torreón</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
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
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-universidades.html">Universidades en Gómez Palacio</a></td>
            <td>Planteles de Instituciones de Educación Superior.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-universidades.html">Universidades en La Laguna</a></td>
            <td>Planteles de Instituciones de Educación Superior.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-universidades.html">Universidades en Lerdo</a></td>
            <td>Planteles de Instituciones de Educación Superior.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-universidades.html">Universidades en Matamoros</a></td>
            <td>Planteles de Instituciones de Educación Superior.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-universidades.html">Universidades en Torreón</a></td>
            <td>Planteles de Instituciones de Educación Superior.</td>
          </tr>
          <tr>
            <td>19/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-genero-informatica.html">Equidad de Género en Informática</a></td>
            <td>Aunque vivimos el mejor momento de las Ciencias Computacionales, el género femenino tiene muy poca participación en el sector.</td>
          </tr>
          <tr>
            <td>06/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sociedad-incluyente-preparada-sana.html">Sociedad Incluyente, Preparada y Sana</a></td>
            <td>Este es uno de los subíndices que muestra mayores contrastes al interior de la zona metropolitana, ubicándose Torreón en la parte alta del ranking, la ZML en su conjunto en media alta, Gómez Palacio y Lerdo en media baja y Matamoros en la zona baja.</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // JavaScript
        $this->javascript        = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2008-12-31', dato: 0 },{ fecha: '2009-12-31', dato: 0 },{ fecha: '2010-12-31', dato: 0 },{ fecha: '2011-12-31', dato: 0 },{ fecha: '2012-12-31', dato: 0 }],
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
      data: [{ region: 'Torreón', dato: 0 },{ region: 'Gómez Palacio', dato: 0 },{ region: 'Lerdo', dato: 0 },{ region: 'Matamoros', dato: 0 },{ region: 'La Laguna', dato: 0 }],
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
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion        = <<<FINAL
      <h3>Descripción</h3>
<p>Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de universidades dentro de las 300 mejores de América Latina.</p>

<p>Fuente: QS Top Universities.</p>

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
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>0</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
    } // constructor

} // Clase SociedadUniversidadesDeCalidad

?>
