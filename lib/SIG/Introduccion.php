<?php
/*
 * TrcIMPLAN Sitio Web - Introducción al Sistema de Información Geográfica del IMPLAN Torreón
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
namespace SIG;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Introducción al Sistema de Información Geográfica';
     // $this->autor            = '';
        $this->fecha            = '2014-08-01T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'introduccion';
        $this->imagen           = 'introduccion/imagen.jpg';
        $this->imagen_previa    = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Introducción al Sistema de Información Geográfica del IMPLAN Torreón.';
        $this->claves           = 'IMPLAN, Torreon, Informacion, Geografica, SIG, GIS';
        $this->categorias       = array();
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'sig';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Información Geográfica > Introducción al SIG';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = <<<FINAL

<p>Un Sistema de Información Geográfica (SIG) más que una importante herramienta tecnológica es una estructura de personas y equipos computacionales dedicados a la recopilación, procesamiento, almacenamiento y análisis de datos con información valiosa para una adecuada toma de decisiones.</p>

<p>La base de datos integrada al SIG, permitirá representar visualmente variables muy diversas (estadísticas, infraestructura, equipamiento, programas, proyectos) de distintas fuentes (imágenes de satélite, INEGI, CONEVAL, IMCO, IMPLAN y dependencias municipales) generando mapas de análisis, temáticos o informativos con datos de utilidad que permitan impulsar la competitividad de la ciudad y la zona metropolitana mediante la planeación a corto, mediano y largo plazo.</p>

<p>La principal característica de este sistema es que está diseñado para ser una herramienta que permita el acceso a la ciudadanía como medio de consulta de información de la situación del municipio y de la zona metropolitana.</p>

<p><img class="img-responsive contenido-imagen" src="introduccion/gis-01-relieve.jpg" alt="GIS Relieve"></p>

<p><img class="img-responsive contenido-imagen" src="introduccion/gis-02-poligonos-pobreza.jpg" alt="GIS Poligonos Pobreza"></p>

<p><img class="img-responsive contenido-imagen" src="introduccion/gis-03-poligonos-cruzados.jpg" alt="GIS Polígonos Cruzados"></p>

FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase Introduccion

?>
