<?php
/*
 * SMIbeta - Relaciones Internacionales
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
 * Clase RelacionesInternacionales
 */
class RelacionesInternacionales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Relaciones Internacionales';
        $this->autor            = 'Lic. Rodrigo González Morales';
        $this->fecha            = '2014-06-30T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'relaciones-internacionales';
        $this->imagen_previa    = 'relaciones-internacionales/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Análisis de las cuestiones internacionales como la inversión extranjera, el flujo de pasajeros y la ausencia de puertos o frontera con otro país.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Competitividad', 'Macroeconomía', 'Transporte');
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
        $schema->image          = 'relaciones-internacionales/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>En este subíndice, la ZML pasó de ubicarse en el lugar 23 en el ICU 2007 a ocupar el lugar 54 en el ICU 2012. De los municipios de la zona metropolitana, el mejor posicionado en cuanto a relaciones internacionales es Gómez Palacio, el cual por sí mismo ocuparía el lugar número 11, mientras que Torreón se ubicaría en el lugar 70.</p>

<img class="img-responsive contenido-imagen" src="relaciones-internacionales/relaciones-internacionales.png" alt="Relaciones Internacionales">

<p>Este subíndice evalúa la inversión extranjera directa (IED), el flujo de pasajeros del o hacia el extranjero, la comunicación con el extranjero y si la ciudad es fronteriza o portuaria.</p>

<p>En cuanto al primer indicador mencionado, éste se calcula aplicando a la Inversión extranjera directa neta del estado la tasa de participación del municipio en la producción estatal. Gómez Palacio es el municipio de la zona metropolitana con mejor resultado, captando 6,247 millones de dólares anuales promedio. Sin embargo Colima, el mejor valor a nivel nacional para este indicador, capta 29,083.89 millones de dólares.</p>

<p>En el flujo de pasajeros, ocupamos el lugar 22 con 36 pasajeros por cada mil habitantes. El número total de pasajeros es de 44,253 por lo que en el municipio de Torreón el dato sube a 69 pasajeros por cada mil habitantes. En cuanto a comunicación con el extranjero, nuestra zona metropolitana ocupa el lugar 65 con 14 piezas de correspondencia por cada mil habitantes, cuando el primer lugar en este indicador es de 866 piezas por cada mil habitantes.</p>

<img class="img-responsive contenido-imagen" src="relaciones-internacionales/indicadores.png" alt="Indicadores">

<p>Finalmente, otro factor que considera el IMCO como ventaja competitiva es si la ciudad es fronteriza o portuaria, por lo cual tanto la ZML como sus municipios por separado presentan el valor de cero (0) en éste indicador.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase RelacionesInternacionales

?>
