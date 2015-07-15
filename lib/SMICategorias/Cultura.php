<?php
/**
 * TrcIMPLAN - SMI Categorías Cultura (Creado por Central:SmiLanzadera)
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
 * Clase Cultura
 */
class Cultura extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Cultura';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'cultura';
        $this->imagen           = '../imagenes/categorias/cultura.jpg';
        $this->imagen_previa    = '../imagenes/categorias/cultura.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Cultura';
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
    <td class="indicador color1">Sitios UNESCO</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-sitios-unesco.html" data-toggle="tooltip" title="Número de sitios, 31/12/2012, IMCO">0</a></td>
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
    <td class="indicador color4">Espacios Culturales (según IMCO)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.36</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.15</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.22</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.11</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-espacios-culturales-segun-imco.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.26</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Visitas a Museos INAH</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">172.0800</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-visitas-a-museos-inah.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">90.4452</a></td>
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

} // Clase Cultura

?>
