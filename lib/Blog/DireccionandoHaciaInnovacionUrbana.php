<?php
/*
 * TrcIMPLAN Sitio Web - DESCRIPCION
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
 * Clase DireccionandoHaciaInnovacionUrbana
 */
class DireccionandoHaciaInnovacionUrbana extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Direccionando hacia la innovación urbana';
        $this->autor            = 'Arq. Ilse Ávila García';
        $this->fecha            = '2015-02-11T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'direccionando-hacia-innovacion-urbana';
        $this->imagen_previa    = 'direccionando-hacia-innovacion-urbana/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Actualmente el concepto de ciudad inteligente o digital se maneja a nivel global. Muchas ciudades de este tipo se están desarrollando en diferentes lugares del mundo, cada una con su propio sistema, diseño, estructura y organización.';
        $this->claves           = 'IMPLAN, Torreon, Ciudad Inteligente';
        $this->categorias       = array('Infraestructura', 'Gobierno Digital');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = 'direccionando-hacia-innovacion-urbana/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/Blog/DireccionandoHaciaInnovacionUrbana.md');
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase DireccionandoHaciaInnovacionUrbana

?>
