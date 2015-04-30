<?php
/*
 * TrcIMPLAN Sitio Web - La Comarca Lagunera y el IMPLAN
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
 * Clase LaComarcaLaguneraIMPLAN
 */
class LaComarcaLaguneraIMPLAN extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'La Comarca Lagunera y el IMPLAN';
        $this->autor            = 'María Isabel Saldaña';
        $this->fecha            = '2015-03-07T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'la-comarca-lagunera-implan';
        $this->imagen           = 'la-comarca-lagunera-implan/imagen.jpg';
        $this->imagen_previa    = 'la-comarca-lagunera-implan/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'El jueves 5 de marzo en la Universidad LaSalle en Gómez Palacio, Durango se signa el convenio por José Miguel Campillo Carrete alcalde de Gómez Palacio, Dgo. y Miguel Ángel Riquelme Solís alcalde de Torreón, Coahuila para un plan metropolitano en donde en breve se sumaran Lerdo, Durango y Matamoros, Coahuila.';
        $this->claves           = 'IMPLAN, Torreon, Plan Estrategico Metropolitano';
        $this->categorias       = array('Plan Estratégico Metropolitano');
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
        $schema->image          = $this->imagen;
        $schema->image_show     = false; // No mostrar la imagen en el contenido
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/Blog/LaComarcaLaguneraIMPLAN.md');
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, la imagen previa aparece más grande al final
        $this->redifusion       = $schema->articleBody;
    } // constructor

} // Clase LaComarcaLaguneraIMPLAN

?>
