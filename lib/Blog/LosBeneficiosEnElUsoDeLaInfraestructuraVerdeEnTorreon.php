<?php
/**
 * TrcIMPLAN Sitio Web - Los beneficios en el uso de la Infraestructura Verde en Torreón
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
 * Clase LosBeneficiosEnElUsoDeLaInfraestructuraVerdeEnTorreon
 */
class LosBeneficiosEnElUsoDeLaInfraestructuraVerdeEnTorreon extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Los beneficios en el uso de la Infraestructura Verde en Torreón';
        $this->autor           = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha           = '2016-11-04T13:22';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'los-beneficios-en-el-uso-de-la-infraestructura-verde-en-torreon';
        $this->imagen          = 'los-beneficios-en-el-uso-de-la-infraestructura-verde-en-torreon/imagen.jpg';
        $this->imagen_previa   = 'los-beneficios-en-el-uso-de-la-infraestructura-verde-en-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Implementar la Infraestructura Verde en la planeación de la ciudad podría tener beneficios ambientales, económicos, sociales y de salud. Entre otros puntos fomenta la creación de espacios públicos arborizados que atraen a las personas a realizar actividades recreativas.';
        $this->claves          = 'IMPLAN, Torreon, Sustentabilidad, Infraestructura';
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
        $this->contenido_archivo_markdown = 'lib/Blog/LosBeneficiosEnElUsoDeLaInfraestructuraVerdeEnTorreon.md';
        // Para el Organizador
        $this->categorias      = array('Infraestructura', 'Sustentabilidad');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros');
    } // constructor

} // Clase LosBeneficiosEnElUsoDeLaInfraestructuraVerdeEnTorreon

?>
