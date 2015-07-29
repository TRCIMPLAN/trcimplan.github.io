<?php
/**
 * TrcIMPLAN - MODULO ResultadosDeLosCensosEconomicos2014
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
 * @package TrcIMPLAN
 */

namespace Blog;

/**
 * Clase ResultadosDeLosCensosEconomicos2014
 */
class ResultadosDeLosCensosEconomicos2014 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Resultados de los Censos Económicos 2014';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2015-07-29T15:40';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo         = 'resultados-de-los-censos-economicos-2014';
        $this->imagen          = 'resultados-de-los-censos-economicos-2014/imagen.jpg';
        $this->imagen_previa   = 'resultados-de-los-censos-economicos-2014/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion     = 'Torreón tuvo un crecimiento mayor al de municipios como Saltillo, Querétaro y San Luis Potosí.';
        $this->claves          = 'IMPLAN, Torreon, INEGI, Censos, Economicos, 2014, Resultados, Crecimiento, Personal, Ocupado, Produccion, Bruta';
        $this->categorias      = array('Competitividad', 'Empleo', 'Macroeconomía', );
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir  = true;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = true; // Si es verdadero, pone la imagen entre el encabezado y el contenido
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el archivo markdown y convertirlo a HTML
        $this->contenido->articleBody = $this->cargar_archivo_markdown_extra('lib/Blog/ResultadosDeLosCensosEconomicos2014.md');
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Cargar el archivo markdown y convertirlo a HTML
        $markdown = $this->cargar_archivo_markdown_extra('lib/Blog/ResultadosDeLosCensosEconomicos2014.md');
        // Si tiene la imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion = "<img src=\"{$this->imagen}\"><br>\n\n{$markdown}";
        } else {
            $this->redifusion = $markdown;
        }
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase ResultadosDeLosCensosEconomicos2014

?>
