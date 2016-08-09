<?php
/**
 * Sitio Web - Sistemas Urbanos Rurales: un nuevo enfoque para el desarrollo regional
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
 * Clase SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional
 */
class SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Sistemas Urbanos Rurales: un nuevo enfoque para el desarrollo regional';
        $this->autor           = array('Lic. Luis A. Gutiérrez Arizpe', 'Lic. Rodrigo González Morales');
        $this->fecha           = '2016-08-09T11:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'sistemas-urbanos-rurales-un-nuevo-enfoque-para-el-desarrollo-regional';
        $this->imagen          = 'sistemas-urbanos-rurales-un-nuevo-enfoque-para-el-desarrollo-regional/imagen.jpg';
        $this->imagen_previa   = 'sistemas-urbanos-rurales-un-nuevo-enfoque-para-el-desarrollo-regional/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Este enfoque permite analizar la influencia de las ciudades al desarrollo de una región para elaborar diagnósticos y políticas más certeros acorde a las necesidades del país.';
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
        $this->contenido_archivo_markdown = 'lib/Blog/SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional.md';
        // Para el Organizador
        $this->categorias      = array('Infraestructura', 'Macroeconomía', 'Población');
        $this->fuentes         = array('INEGI', 'Secretaría de Desarrollo Urbano Territorial y Urbano (SEDATU)');
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SistemasUrbanosRuralesUnNuevoEnfoqueParaElDesarrolloRegional

?>
