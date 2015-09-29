<?php
/**
 * TrcIMPLAN Central - El Corredor Económico del Norte y su fortaleza nacional
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
 * Clase ElCorredorEconomicoDelNorteYSuFortalezaNacional
 */
class ElCorredorEconomicoDelNorteYSuFortalezaNacional extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'El Corredor Económico del Norte y su fortaleza nacional';
        $this->autor           = array('Lic. Alicia Valdez Ibarra', 'Lic. Rodrigo González Morales');
        $this->fecha           = '2015-09-29T10:40';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'el-corredor-economico-del-norte-y-su-fortaleza-nacional';
        $this->imagen          = 'el-corredor-economico-del-norte-y-su-fortaleza-nacional/imagen.jpg';
        $this->imagen_previa   = 'el-corredor-economico-del-norte-y-su-fortaleza-nacional/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La Zona Metropolitana de la Laguna, anfitriona del 6to Encuentro de Instituciones del Corredor Económico del Norte, es una región líder en formación de capital humano, transparencia y productividad.';
        $this->claves          = 'IMPLAN, Torreon';
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
        $this->contenido_archivo_markdown = 'lib/Blog/ElCorredorEconomicoDelNorteYSuFortalezaNacional.md';
        // Para el Organizador
        $this->categorias      = array('Competitividad', 'Educación', 'Empleo', 'Mercados', 'Movilidad', 'Participación Ciudadana', 'Transparencia');
        $this->fuentes         = array('Ayuntamiento de Torreón', 'IMCO', 'IMPLAN', 'INEGI', 'Operadora Mexicana de Aeropuertos (OMA)', 'Secretaría de Economía', 'SEP');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElCorredorEconomicoDelNorteYSuFortalezaNacional

?>
