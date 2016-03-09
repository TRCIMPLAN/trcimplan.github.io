<?php
/**
 * Sitio Web - Principales Retos De La ZML
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
 * Clase PrincipalesRetosDeLaZML
 */
class PrincipalesRetosDeLaZML extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Principales retos de la Zona Metropolitana de La Laguna';
        $this->autor           = 'Arq. Ilse Ávila García';
        $this->fecha           = '2016-03-09T11:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'principales-retos-de-la-zona-metropolitana-de-la-laguna';
        $this->imagen          = 'principales-retos-de-la-zona-metropolitana-de-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'principales-retos-de-la-zona-metropolitana-de-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Es necesaria una concertación entre los cuatro municipios de la ZML (Torreón, Matamoros, Gómez Palacio y Lerdo) por medio de una agenda de temas metropolitananos, en los ejes de: Buen Gobierno, Desarrollo Económico, Desarrollo Social, Entorno Urbano, Movilidad, Medio Ambiente y Sustentabilidad.';
        $this->claves          = 'IMPLAN, Torreon, Comarca Lagunera, Retos, Movilidad, Infraestructura, Recursos, Vivienda, Gobierno';
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
        $this->contenido_archivo_markdown = 'lib/Blog/PrincipalesRetosDeLaZML.md';
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Gobierno', 'Infraestructura', 'Movilidad', 'Recursos Naturales', 'Vivienda');
        $this->fuentes         = array('CONAPO', 'Secretaría de Desarrollo Urbano Territorial y Urbano (SEDATU)', 'INEGI');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PrincipalesRetosDeLaZML

?>
