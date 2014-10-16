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
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'La importancia del suelo en las ciudades';
        $this->autor         = 'Arq. Ilse Ávila García';
        $this->fecha         = '2014-10-15';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'importancia-suelo-ciudades';
        $this->imagen_previa = 'importancia-suelo-ciudades/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="importancia-suelo-ciudades/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Blog');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio    = 'blog';
        $this->nombre_menu   = 'Análisis Publicados';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="importancia-suelo-ciudades/imagen.jpg"></span>

<p>Históricamente el suelo ha sido una de las principales fuentes de riqueza, desarrollo económico y armonía social.</p>

<p>En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual. Buscando una tendencia cada vez más sustentable y en armonía con su entorno natural inmediato.</p>

<p>El suelo urbano es la base del patrimonio de las familias mexicanas, un bien indispensable para crear las condiciones apropiadas de habitabilidad en las ciudades, por ello, tener acceso a este bien material es considerado en los planes de desarrollo como un factor de equidad social.</p>

<p>Actualmente en las ciudades estamos viviendo el fenómeno de la expansión, lo que nos lleva a constatar la relación entre la ocupación contra el aprovechamiento del suelo, detonado por la desproporción que existe entre la extensión y el número de habitantes, condicionado por la disponibilidad y los grupos sociales que lo demandan. Esto ha generado una agresiva proliferación de vivienda que carece de una política que regule y ponga una racionalidad social, debido a que, el crecimiento en las ciudades se ha dado basándose en el “libre mercado”, en relación, de las áreas que deben desarrollarse a cual ritmo y con qué destino.</p>

<p>En Torreón la expansión de la ciudad ha absorbido al ejido, desincorporando tierras del régimen agrario e incorporándolas al uso urbano por medio de sociedades mercantiles, generando oferta de suelo legal y barato para la vivienda de interés social, a este esquema se han sumado pequeñas propiedades de uso agrícola que dejan de ser rentables como tal y las ofrecen al uso habitacional campestre, con densidades de medias a bajas, cediendo el desarrollo de las ciudades a las regulaciones del mercado inmobiliario. Por ello es necesario promover políticas públicas que regulen el uso del suelo para llegar a un equilibrio óptimo entre sus diferentes usos, necesidades y compatibilidades que permitan el crecimiento ordenado y planeado de nuestra ciudad.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase ImportanciaSueloCiudades

?>
