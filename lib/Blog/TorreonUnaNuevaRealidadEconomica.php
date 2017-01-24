<?php
/**
 * TrcIMPLAN - Torreon Una Nueva Realidad Economica
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
 * Clase TorreonUnaNuevaRealidadEconomica
 */
class TorreonUnaNuevaRealidadEconomica extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Torreón: Una Nueva Realidad Económica';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2015-09-01T09:50';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'torreon-una-nueva-realidad-economica';
        $this->imagen          = 'torreon-una-nueva-realidad-economica/imagen.jpg';
        $this->imagen_previa   = 'torreon-una-nueva-realidad-economica/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La apertura de negocios, la baja inflación y una disminución en la tasa de informalidad caracterizan al segundo trimestre en el municipio de Torreón, de acuerdo con el Balance Económico Local.';
        $this->claves          = 'IMPLAN, Torreon, Apertura, Negocios, Empresas, Informalidad, Desempleo';
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio      = 'blog';
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
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonUnaNuevaRealidadEconomica.md';
        // Para el Organizador
        $this->categorias      = array('Competitividad', 'Empleo', 'Empresas');
        $this->fuentes         = array('INEGI', 'IMSS Subdelegación Torreón', 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
        $this->regiones        = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase TorreonUnaNuevaRealidadEconomica

?>
