<?php
/*
 * SMIbeta - Una ciudad con futuro
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
 * Clase UnaCiudadConFuturo
 */
class UnaCiudadConFuturo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Una ciudad con futuro';
        $this->autor            = 'Lic. Enrique Sada Sandoval';
        $this->fecha            = '2014-09-17T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'una-ciudad-con-futuro';
        $this->imagen           = 'una-ciudad-con-futuro/imagen.jpg';
        $this->imagen_previa    = 'una-ciudad-con-futuro/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Es grande el legado histórico de la ciudad de Torreón, su importancia y la bonanza del pasado. Hoy, el lanzamiento del Plan Estratégico Metropolitano es la apuesta por el futuro de la ciudad con más productividad.';
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
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>Fundada en el año de 1850 como el Rancho del Carrizal, en el extremo norte de la República Mexicana, la ciudad de Torreón, Coahuila, celebró su elevación de rango —de villa a ciudad— un 15 de septiembre de 1907.</p>

<p>Contando con poco más de medio siglo oficial de su existencia, gracias al detonante que supuso la conexión del Ferrocarril Central Mexicano con el Ferrocarril Internacional, este lejano punto cobró muy pronto vida e importancia debido a la gran afluencia de extranjeros y nacionales que se asentaron en este sitio, traídos por la bonanza del “oro blanco” y de la uva, estableciendo un entorno cosmopolita que sentó las bases para el detonamiento de un desarrollo y prosperidad sin precedentes en la Historia de México y del norte del país.</p>

<p>No en balde fue identificada desde aquél entonces como hija legítima y perla del Porfiriato, y la razón salta a la vista hasta por el día en que se conmemoró por vez primera su estatus, puesto que la fecha misma de este acto simbólico celebra no solo el cumplimiento de un procedimiento estamental o burocrático sino un recordatorio —al igual que el cambio de las fiestas patrias del 27 de septiembre al 15— del cumpleaños del “Héroe de la Paz y el Progreso” como presidente de la República en aquél entonces.</p>

<p>La importancia de esta joven ciudad se mantuvo vigente, como su bonanza creciente, aún pese al escollo y el atraso que significó la Revolución Mexicana y las luchas de poder entre caudillos a partir de 1913, llegando a la década de los treintas como sitio estratégico, siendo elegido nada menos que por el Banco de México para construir un significativo edificio sede para depósito de oro y transacciones por encima de capitales de estados como Monterrey, Durango, Zacatecas y Saltillo.</p>

<p>Sin embargo, el peso de varias décadas de políticas centralizadoras, el rezago histórico de las administraciones municipales durante los últimos 15 años y el embate de la inseguridad en la región, detonada por la irresponsable “guerra contra el crimen organizado” durante el sexenio anterior, generó pérdida de inversiones y fluctuación en el mercado laboral, hecho que vino a acentuar la situación debido a una auténtica falta de vocación y de visión entorno a lo que ya se consolidaba como una zona metropolitana con Torreón a la cabeza de varios municipios aledaños.</p>

<p>Con motivo de contrarrestar estas inercias heredadas, el pasado 11 de septiembre de 2014 se reunió el Consejo Directivo del Instituto Municipal de Planeación para lanzar la convocatoria ciudadana para la elaboración del Plan Estratégico Metropolitano ante la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social tanto de la ciudad como de la región en sí, hecho que se celebra por igual tanto en la iniciativa de Eduardo Holguín, como director del mismo, tanto como en el respaldo del alcalde Miguel Ángel Riquelme en lo que por primera vez en mucho tiempo se presenta como la apuesta desde el gobierno por el futuro de la ciudad con más productividad en el norte del país en 2014 (según indicadores nacionales), a través de la planeación estratégica y la proyección a largo plazo, justo en el marco de la celebración del 107 aniversario de la misma.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase UnaCiudadConFuturo

?>
