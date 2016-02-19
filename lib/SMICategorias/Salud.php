<?php
/**
 * TrcIMPLAN - SMI Categorías Salud (Creado por Central:SmiLanzadera)
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
 * Clase Salud
 */
class Salud extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Salud';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'salud';
        $this->imagen           = '../imagenes/categorias/salud.jpg';
        $this->imagen_previa    = '../imagenes/categorias/salud.jpg';
        $this->imagen_id        = 'categorias-salud';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Salud';
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
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Muertes por Infecciones Instestinales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.7523</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.7886</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">2.0272</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.6283</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-muertes-por-infecciones-instestinales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">3.5499</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.38 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.72 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.65 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.82 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.82 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Acceso a Instituciones de Salud</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">41.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">48.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">31.9 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">37.3 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-acceso-a-instituciones-de-salud.html" data-toggle="tooltip" title="Porcentaje de la PEA, 31/12/2012, IMCO">42.0 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Camas Censables</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 30/08/2015, Secretaria de Salud del Estado de Coahuila">106</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, SINAIS (SSA)">72</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, SINAIS (SSA)">52</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, SINAIS (SSA)">19</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, SINAIS (SSA)">194</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Camas de Hospital</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">0.7655</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">2.0983</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">2.5678</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">0.9071</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-camas-de-hospital.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, IMCO">1.3490</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Crecimiento en Acceso a Servicios de Salud</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.12 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-4.55 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-7.29 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">4.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-2.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Médicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">2.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">4.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">6.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">4.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2014, SINAIS (SSA)">3.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">5.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">7.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">3.2</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">4.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">5.6</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Infantil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">12.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">9.1</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">20.5</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">15.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">12.2</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por Diabetes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">8.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">6.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.5</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por VIH-SIDA</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">4.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">2.9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">1.8</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-mortalidad-por-vih-sida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.4</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Derechohabiente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">453,423</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">241,537</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">98,265</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">77,538</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">870,763</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.0</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2011, SINAIS (SSA)">55.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-razon-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">62.7</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Tasa de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">4.6</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.4</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">8.3</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">6.2</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-tasa-de-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.3</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas que Disponen de Retrete</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">98.71 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-viviendas-que-disponen-de-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">97.10 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-viviendas-que-disponen-de-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">94.60 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-viviendas-que-disponen-de-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">95.14 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-que-disponen-de-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">97.54 %</a></td>
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

} // Clase Salud

?>
