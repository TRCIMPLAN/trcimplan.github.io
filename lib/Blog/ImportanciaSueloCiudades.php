<?php
/*
 * SMIbeta - La importancia del suelo en las ciudades
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
 * Clase ImportanciaSueloCiudades
 */
class ImportanciaSueloCiudades extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'La importancia del suelo en las ciudades';
        $this->autor            = 'Arq. Ilse Ávila García';
        $this->fecha            = '2014-10-15T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'importancia-suelo-ciudades';
        $this->imagen           = 'importancia-suelo-ciudades/imagen.jpg';
        $this->imagen_previa    = 'importancia-suelo-ciudades/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual.';
        $this->claves           = 'IMPLAN, Torreon, Suelo, Urbano, Ordenamiento';
        $this->categorias       = array('Infraestructura', 'Vivienda', 'Recursos Naturales');
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
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>Históricamente el suelo ha sido una de las principales fuentes de riqueza, desarrollo económico y armonía social.</p>

<p>En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual. Buscando una tendencia cada vez más sustentable y en armonía con su entorno natural inmediato.</p>

<p>El suelo urbano es la base del patrimonio de las familias mexicanas, un bien indispensable para crear las condiciones apropiadas de habitabilidad en las ciudades, por ello, tener acceso a este bien material es considerado en los planes de desarrollo como un factor de equidad social.</p>

<p>Actualmente en las ciudades estamos viviendo el fenómeno de la expansión, lo que nos lleva a constatar la relación entre la ocupación contra el aprovechamiento del suelo, detonado por la desproporción que existe entre la extensión y el número de habitantes, condicionado por la disponibilidad y los grupos sociales que lo demandan. Esto ha generado una agresiva proliferación de vivienda que carece de una política que regule y ponga una racionalidad social, debido a que, el crecimiento en las ciudades se ha dado basándose en el “libre mercado”, en relación, de las áreas que deben desarrollarse a cual ritmo y con qué destino.</p>

<p>En Torreón la expansión de la ciudad ha absorbido al ejido, desincorporando tierras del régimen agrario e incorporándolas al uso urbano por medio de sociedades mercantiles, generando oferta de suelo legal y barato para la vivienda de interés social, a este esquema se han sumado pequeñas propiedades de uso agrícola que dejan de ser rentables como tal y las ofrecen al uso habitacional campestre, con densidades de medias a bajas, cediendo el desarrollo de las ciudades a las regulaciones del mercado inmobiliario. Por ello es necesario promover políticas públicas que regulen el uso del suelo para llegar a un equilibrio óptimo entre sus diferentes usos, necesidades y compatibilidades que permitan el crecimiento ordenado y planeado de nuestra ciudad.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase ImportanciaSueloCiudades

?>
