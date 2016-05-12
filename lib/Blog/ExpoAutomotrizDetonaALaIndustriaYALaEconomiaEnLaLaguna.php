<?php
/**
 * Sitio Web - Expo Automotriz detona a la industria y a la economía en La Laguna
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
 * Clase ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna
 */
class ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Expo Automotriz detona a la industria y a la economía en La Laguna';
        $this->autor           = 'Lic. Adriana Vargas Flores';
        $this->fecha           = '2016-05-12T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'expo-automotriz-detona-a-la-industria-y-a-la-economia-en-la-laguna';
        $this->imagen          = 'expo-automotriz-detona-a-la-industria-y-a-la-economia-en-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'expo-automotriz-detona-a-la-industria-y-a-la-economia-en-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La Expo Congreso Automotriz Laguna 2016, dejó una derrama de más de 700 mil pesos en la región, contó con la participación de casi 70 empresarios como expositores. El resultado fueron importantes perspectivas de negocio y la necesidad de contar en La Laguna con un Centro de Manufactura Avanzada.';
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
        $this->contenido_archivo_markdown = 'lib/Blog/ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna.md';
        // Para el Organizador
        $this->categorias      = array('Empleo', 'Empresas');
        $this->fuentes         = array('IMPLAN');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ExpoAutomotrizDetonaALaIndustriaYALaEconomiaEnLaLaguna

?>
