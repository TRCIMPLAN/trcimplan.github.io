<?php
/*
 * TrcIMPLAN Sitio Web - Proyectos Plata Laguna
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
namespace Proyectos;

/**
 * Clase PlataLaguna
 */
class PlataLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Plata Laguna';
     // $this->autor            = '';
        $this->fecha            = '2014-06-01T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'plata-laguna';
     // $this->imagen_previa    = '';
        $this->encabezado_color = '#C41C84';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Contribuir a que la plata de La Laguna sea un sector mundialmente competitivo; reconocida por su calidad e identificable por el consumidor.';
        $this->claves           = 'IMPLAN, Torreon, Plata, Laguna';
        $this->categorias       = array('Proyectos');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'proyectos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Banco de Proyectos > Plata Laguna';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen_previa;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = <<<FINAL

<span class="contenido-imagen-previa"><img src="plata-laguna/imagen.jpg"></span>

<p>ESTRATEGIA COMPETITIVA<br>
<em>2014-2017</em></p>

<h3>Antecedentes</h3>

<p>El Sector Plata la Laguna cuenta con externalidades positivas que lo potencian como una industria capaz de generar importantes beneficios sociales y económicos. La puesta en marcha de una eficiente estrategia de competitividad convertirá a este sector en una vigorosa cadena productiva exportadora, generadora de empleos y motor de desarrollo de las comunidades involucradas.</p>

<h3>Objetivos</h3>

<p>1. Contribuir a que la plata de La Laguna se convierta en un sector mundialmente competitivo y en un vigoroso conjunto de pequeñas y medianas empresas exportadoras generadoras de muchos empleos y motores de desarrollo de la comunidad de laguneros que habitan la región de la plata.</p>
<p>2. Posicionar globalmente a la Plata de la laguna como una industria que desarrolla y comercializa productos diferenciados por su origen y competitivos por su calidad y precio.</p>
<p>3. Facilitar al consumidor la identificación de la joyería de plata originaria de la Laguna.</p>

<h3>100 días de acciones</h3>

<ul>
  <li>Se desarrolló el análisis FODA del Sector Plata en la Laguna.</li>
  <li>Se convino con TEC, Peñoles y joyeros de la región la creación del consejo regulador que se encargará de verificar que la norma de calidad se cumpla para que los consumidores de la marca colectiva Plata Laguna tengan la certeza de adquirir un producto certificado.</li>
  <li>El ITESM y Peñoles de la mano con el IMPLAN están desarrollando la Norma Oficial que dará los acotamientos de calidad de la Plata Laguna.</li>
  <li>El Dr. Manuel Márquez Barraza, socio director del despacho LL&amp;MM consultores SC., visitó la ciudad de Torreón para el comienzo del desarrollo de la marca colectiva “Plata Laguna” y buscar llegar a la denominación de origen.</li>
  <li>Se están estableciendo los contactos para crear el instituto de capacitación para y en el trabajo con recursos federales que capacitará a los productores del sector plata y otros sectores de la región.</li>
</ul>

FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase PlataLaguna

?>
