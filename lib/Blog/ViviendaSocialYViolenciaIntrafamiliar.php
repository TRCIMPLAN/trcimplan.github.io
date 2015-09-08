<?php
/**
 * TrcIMPLAN Central - Vivienda Social y Violencia Intrafamiliar
 *
 * Copyright (C) 2015 Guillermo Valdes Lozano
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
 * Clase ViviendaSocialYViolenciaIntrafamiliar
 */
class ViviendaSocialYViolenciaIntrafamiliar extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Vivienda Social y Violencia Intrafamiliar';
        $this->autor           = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha           = '2015-09-08T11:50';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'vivienda-social-y-violencia-intrafamiliar';
        $this->imagen          = 'vivienda-social-y-violencia-intrafamiliar/imagen.jpg';
        $this->imagen_previa   = 'vivienda-social-y-violencia-intrafamiliar/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'En la medida en que los espacios habitacionales no sean lo suficientemente amplios, se genera una alta probabilidad de que la violencia aparezca.';
        $this->claves          = 'IMPLAN, Torreon, Vivienda, Social, Violencia, Intrafamiliar, Espacio, Habitacional';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/ViviendaSocialYViolenciaIntrafamiliar.md';
        // Para el Organizador
        $this->categorias      = array('Delincuencia', 'Seguridad', 'Vivienda');
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

} // Clase ViviendaSocialYViolenciaIntrafamiliar

?>
