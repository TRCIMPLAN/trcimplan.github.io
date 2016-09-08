<?php
/**
 * Sitio Web - Matriz energética lagunera: necesaria visión de futuro
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase MatrizEnergeticaLaguneraNecesariaVisionDeFuturo
 */
class MatrizEnergeticaLaguneraNecesariaVisionDeFuturo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Matriz energética lagunera: necesaria visión de futuro';
        $this->autor           = array('Lic. Eduardo Holguín Zehfuss', 'Lic. Adriana Vargas Flores');
        $this->fecha           = '2016-09-08T10:25';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'matriz-energetica-lagunera-necesaria-vision-de-futuro';
        $this->imagen          = 'matriz-energetica-lagunera-necesaria-vision-de-futuro/imagen.jpg';
        $this->imagen_previa   = 'matriz-energetica-lagunera-necesaria-vision-de-futuro/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Es necesario reconocer el gran potencial de La Laguna en materia de energías limpias o energías renovables, dado que contamos con importantes ventajas competitivas y comparativas en la rama de energía solar, energía de la biomasa y energía eólica.';
        $this->claves          = 'IMPLAN, Torreon, ';
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
        $this->contenido_archivo_markdown = 'lib/Blog/MatrizEnergeticaLaguneraNecesariaVisionDeFuturo.md';
        // Para el Organizador
        $this->categorias      = array('Infraestructura', 'Innovación', 'Recursos Naturales');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MatrizEnergeticaLaguneraNecesariaVisionDeFuturo

?>
