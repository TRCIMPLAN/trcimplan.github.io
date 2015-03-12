<?php
/*
 * SMIbeta - Comportamiento y tendencia de la incidencia delictiva. Una visión ampliada.
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
 * Clase ComportamientoTendenciaIncidenciaDelictiva
 */
class ComportamientoTendenciaIncidenciaDelictiva extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Comportamiento y tendencia de la incidencia delictiva. Una visión ampliada.';
        $this->autor            = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha            = '2014-09-25T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'comportamiento-tendencia-incidencia-delictiva';
        $this->imagen_previa    = 'comportamiento-tendencia-incidencia-delictiva/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Mostramos las tendencias de los delitos más recurrentes en la ciudad de Torreón; con datos del Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública.';
        $this->claves           = 'IMPLAN, Torreon, Delitos, Tendencias';
        $this->categorias       = array('Seguridad');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = 'comportamiento-tendencia-incidencia-delictiva/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>El Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública, organismo desconcentrado de SEGOB, publica mensualmente y desde el mes de enero de 2011 cifras sobre la incidencia delictiva en el país; por estado y por municipio. Estas cifras son reportadas por los órganos procuradores de justicia basándose en las denuncias y/o victimas dependiendo el tipo de delito.</p>

<p>Es un ejercicio relevante ya que al cubrir la mayoría de los municipios del país otorga comparabilidad en cuestiones de seguridad pública entre los municipios al ser una fuente oficial y estandarizada.</p>

<p>El proporcionar estadísticas con una frecuencia óptima permite realizar diferentes tipos de análisis con los mismos números, dependiendo del enfoque que el analista le quiera dar. Comparar por años, por mes, por bimestre.</p>

<p>En este ejercicio mostramos la tendencia de la incidencia delictiva para los delitos más recurrentes en la ciudad de Torreón desde 2011, por lo que optamos por utilizar los datos publicados por la fuente y los agrupamos por semestres, cubriendo por completo los ciclos temporales (años completos).</p>

<p>El resultado: al darse acontecimientos que alteran el comportamiento de las estadísticas de un semestre a otro la fluctuación puede parecer en algunos casos volátil o estable, pero al abrir la línea de tiempo y utilizar un enfoque más amplio podemos observar las tendencias, que son representadas en las siguientes gráficas con la línea punteada.</p>

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-delitos-totales.jpg" alt="Torreón Delitos Totales">

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-homicidios.jpg" alt="Torreón Homicidios">

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-patrimoniales.jpg" alt="Torreón Patrimoniales">

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-robos.jpg" alt="Torreón Robos">

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-robos-a-casa-habitacion.jpg" alt="Torreón Robos a Casa Habitación">

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-robos-a-transeuntes.jpg" alt="Torreón Robos a Transeuntes">

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-robos-de-vehiculos.jpg" alt="Torreón Robos a Vehículos">

<img class="img-responsive contenido-imagen" src="comportamiento-tendencia-incidencia-delictiva/torreon-robos-a-negocio.jpg" alt="Torreón Robos a Negocio">

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase ComportamientoTendenciaIncidenciaDelictiva

?>
