<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Seguridad Delitos Patrimoniales (Creado por Central:SmiLanzadera)
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
 * Clase SeguridadDelitosPatrimoniales
 */
class SeguridadDelitosPatrimoniales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Delitos Patrimoniales en La Laguna';
     // $this->autor             = '';
        $this->fecha             = '2015-06-04T11:25';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'seguridad-delitos-patrimoniales';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.';
        $this->claves            = 'IMPLAN, La Laguna, Seguridad, Delincuencia';
        $this->categorias        = array('Seguridad', 'Delincuencia');
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
<p>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</p>

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
            <td>31/01/2015</td>
            <td>152</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>144</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>153</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>210</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>186</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Delitos Patrimoniales en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Delitos Patrimoniales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Delitos Patrimoniales</h3>
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
            <td>2015-05-31</td>
            <td>134</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-05-31</td>
            <td>36</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-05-31</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-05-31</td>
            <td>8</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-05-31</td>
            <td>186</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
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
            <td><a href="../indicadores-torreon/sociedad-estimacion-de-menores-huerfanos-por-agresiones.html">Estimación de Menores Huérfanos por Agresiones en Torreón</a></td>
            <td>Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).</td>
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
      data: [{ fecha: '2015-01-31', dato: 152 },{ fecha: '2015-02-28', dato: 144 },{ fecha: '2015-03-31', dato: 153 },{ fecha: '2015-04-30', dato: 210 },{ fecha: '2015-05-31', dato: 186 }],
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
      data: [{ region: 'Torreón', dato: 134 },{ region: 'Gómez Palacio', dato: 36 },{ region: 'Lerdo', dato: 8 },{ region: 'Matamoros', dato: 8 },{ region: 'La Laguna', dato: 186 }],
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
<p>Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.</p>

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
            <td>31/01/2015</td>
            <td>152</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>144</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>153</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>210</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>186</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
    } // constructor

} // Clase SeguridadDelitosPatrimoniales

?>
