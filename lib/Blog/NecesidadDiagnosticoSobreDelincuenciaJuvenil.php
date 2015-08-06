<?php
/*
 * TrcIMPLAN - DESCRIPCION
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
 */

// Namespace
namespace Blog;

/**
 * Clase NecesidadDiagnosticoSobreDelincuenciaJuvenil
 */
class NecesidadDiagnosticoSobreDelincuenciaJuvenil extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Necesidad de un Diagnóstico sobre la Delincuencia Juvenil en el Municipio de Torreón';
        $this->autor           = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha           = '2015-04-22T09:25';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'necesidad-diagnostico-sobre-delincuencia-juvenil';
        $this->imagen          = 'necesidad-diagnostico-sobre-delincuencia-juvenil/imagen.jpg';
        $this->imagen_previa   = 'necesidad-diagnostico-sobre-delincuencia-juvenil/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion     = 'Se debe desarrollar un trabajo conjunto entre autoridades y organizaciones civiles en el tema de la delincuencia juvenil para tener un conocimiento claro de cómo ha evolucionado, de su situación real y para crear las políticas públicas pertinentes.';
        $this->claves          = 'IMPLAN, Torreon, Delincuencia, Juvenil, Autoridad, Organizaciones, Civiles, Politicas, Publicas';
        $this->categorias      = array('Delincuencia', 'Seguridad');
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
        $this->contenido_archivo_markdown = 'lib/Blog/NecesidadDiagnosticoSobreDelincuenciaJuvenil.md';
    } // constructor

} // Clase NecesidadDiagnosticoSobreDelincuenciaJuvenil

?>
