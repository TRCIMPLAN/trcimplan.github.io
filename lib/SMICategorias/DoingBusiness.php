<?php
/**
 * TrcIMPLAN - SMI Categorías Doing Business (Creado por Central:SmiLanzadera)
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
 * Clase DoingBusiness
 */
class DoingBusiness extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Doing Business';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'doing-business';
        $this->imagen           = '../imagenes/categorias/doing-business.jpg';
        $this->imagen_previa    = '../imagenes/categorias/doing-business.jpg';
        $this->imagen_id        = 'categorias-doing-business';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Doing Business';
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
    <td class="indicador color1">Apertura de un Negocio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-apertura-de-un-negocio.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">9.5</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ejecución de Contratos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">270</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">243</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">243</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">270</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">256.5</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Permiso de Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-permiso-de-construccion.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">107</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de una Propiedad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-de-una-propiedad.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">28</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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

} // Clase DoingBusiness

?>
