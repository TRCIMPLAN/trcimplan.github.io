<?php
/*
 * TrcIMPLAN - Potencial Económico del Sector Salud en La Laguna
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace Blog;

/**
 * Clase PotencialEconomicoDelSectorSaludEnLaLaguna
 */
class PotencialEconomicoDelSectorSaludEnLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Potencial Económico del Sector Salud en La Laguna';
        $this->autor           = array('Lic. Rodrigo González Morales', 'Lic. Alicia Valdez Ibarra', 'Lic. Luis A. Gutiérrez Arizpe');
        $this->fecha           = '2015-09-17T15:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'potencial-economico-del-sector-salud-en-la-laguna';
        $this->imagen          = 'potencial-economico-del-sector-salud-en-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'potencial-economico-del-sector-salud-en-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'En la Zona Metropolitana de La Laguna el sector salud es una cadena de valor con un relevante potencial económico. Ello gracias a su tradición, sus recursos humanos, su infraestructura y su productividad.';
        $this->claves          = 'IMPLAN, Torreon, Salud';
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
        $schema->author        = implode(', ', $this->autor);
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/PotencialEconomicoDelSectorSaludEnLaLaguna.md';
        // Para el Organizador
        $this->categorias      = array('Salud', 'Empresas');
        $this->fuentes         = array('INEGI');
        $this->regiones        = array('Torreón', 'La Laguna', 'Nacional');
    } // constructor

} // Clase PotencialEconomicoDelSectorSaludEnLaLaguna

?>
