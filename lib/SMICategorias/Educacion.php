<?php
/**
 * TrcIMPLAN - SMI Categorías Educación (Creado por Central:SmiLanzadera)
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
namespace SMICategorias;

/**
 * Clase Educacion
 */
class Educacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Educación';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'educacion';
        $this->imagen           = '../imagenes/categorias/educacion.jpg';
        $this->imagen_previa    = '../imagenes/categorias/educacion.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Educación';
        $this->categorias       = array();
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-categorias';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores > Indicadores por Categoría';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 30/04/2014, CONACYT">11</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 31/03/2014, CONACYT">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Científico-Matemático</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">46 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">35 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">43 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">41 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">42 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Gramático-Español</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">44 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">37 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">37 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">32 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">40 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Preescolar por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">24.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">22.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">22.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">25.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-de-preescolar-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">23.9</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Primaria por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">29.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">26.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">25.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">26.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-de-primaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">27.9</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos de Secundaria por Docente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">12.7</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">14.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">14.7</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">14.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-alumnos-de-secundaria-por-docente.html" data-toggle="tooltip" title="Personas, 01/07/2014, SEP">13.5</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Diferencial de Grado Promedio de Escolaridad por Género</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.32</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.20</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.06</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">0.02</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">16</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">10</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">13</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">13</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.002</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.021</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.030</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.078</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Educativo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">10.83 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">17.31 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">16.76 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">19.20 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">18</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">31</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL

FINAL;
    } // constructor

} // Clase Educacion

?>
