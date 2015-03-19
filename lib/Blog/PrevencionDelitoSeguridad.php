<?php
/*
 * SMIbeta - La Prevención del Delito como elemento fundamental para la Seguridad
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
 * Clase PrevencionDelitoSeguridad
 */
class PrevencionDelitoSeguridad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'La Prevención del Delito como elemento fundamental para la Seguridad';
        $this->autor            = 'Lic. Alfredo Viesca Domínguez';
        $this->fecha            = '2014-11-18T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'prevencion-delito-seguridad';
        $this->imagen_previa    = 'prevencion-delito-seguridad/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'La prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).';
        $this->claves           = 'IMPLAN, Torreon, Prevecion, Delito, Seguridad';
        $this->categorias       = array('Delincuencia', 'Seguridad');
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
        $schema->image          = 'prevencion-delito-seguridad/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>La prevención es la medida o disposición que se toma de manera anticipada para evitar que suceda una cosa considerada negativa.</p>

<p>Del latín <i>praeventio</i>, prevención es preparar con antelación lo necesario para un fin, anticiparse a una dificultad, prever un daño, avisar a alguien de algo.</p>

<p><b>La prevención es pues, la disposición que se hace de forma anticipada para minimizar un riesgo.</b> El objetivo de prevenir es lograr que un perjuicio eventual no se concrete.</p>

<p><b>En este sentido la prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).</b></p>

<p>La tendencia nacional y local en políticas de seguridad es que las políticas se han centrado en un control de la delincuencia, persiguiéndola y castigando a los responsables.</p>

<p>Se ha implementado un control reactivo estableciendo por ejemplo  a nivel nacional  un sistema de seguridad, aunado a esto se ha dado un incremento en los recursos económicos para fortalecer los cuerpos de seguridad pública y la persecución de los delitos.</p>

<p>Y mientras en nuestro país el control es lo principal, en otros países se ha privilegiado la prevención obteniendo resultados muy positivos.</p>

<p>En el caso de México, (que se refleja en la ZML) se han asignado una cantidad considerable de recursos económicos desde el año 2000 y hasta el 2013 para los estados y el Distrito Federal de acuerdo a los datos que proporciona el Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública.</p>

<p>En el 2000 se asignaron 5,000 millones de pesos y para el 2013 la cantidad había aumentado a 7,631 millones.</p>

<p>En este sentido lo que <b>las evidencias nos dicen es que aun y cuando se han modernizado los equipos y crecido el presupuesto a las instituciones de seguridad pública la delincuencia y la violencia que se relacionan al crimen organizado y al narcotráfico no han disminuido.</b> Se atacan los efectos no las causas.</p>

<p>Es por esto que la prevención cobra un sentido trascendental contra la violencia y la delincuencia, de hecho, es tan importante que el Gobierno Federal la ha establecido como una de sus estrategias principales.</p>

<p>¿Cuál es el reto?, atacar el problema de prevención desde la raíz, identificar los actores y los factores de riesgo que están generando un ambiente social, familiar, escolar que hace que los pequeños de 10, 11 o 12 años en los siguientes dos años decidan ser delincuentes.</p>

<p>Prevención es atacar estos elementos de riesgo, neutralizarlos para que esos niños no decidan más tarde ser parte de un grupo criminal, para esto es necesario la integración de la sociedad en las acciones de prevención. <b>No hay país que haya logrado bajar los índices de delincuencia sin una estrategia de prevención pero también sin apoyarse en la sociedad civil.</b></p>

<p>Para el caso de la ZML, <b>es necesario que las autoridades trabajen en conjunto con las organizaciones de la sociedad civil que se dedican a la prevención,</b> estas organizaciones cuentan con información y experiencias valiosas que es necesario reconocer y valorar.</p>

<p><b>Las experiencias exitosas de otros países hacen pensar en la posibilidad de que en la ZML, la situación de inseguridad y violencia puedan disminuir significativamente.</b> Desde los años 80´s y 90´s en ciudades como Filadelfia. Milwakee, Oklahoma y San Antonio en los EE. UU. se implementaron programas para evitar la deserción escolar considerada como un factor de riesgo.</p>

<p>De 1990 a 1994 en varias ciudades de Noruega y Francia se implementaban acciones para bajar la violencia escolar, en América Latina, en diferentes ciudades de Costa Rica, Chile, Colombia y El Salvador se trabajó con programas para reducir situaciones de riesgo con acciones de mejora urbana, y todo esto con la participación de la ciudadanía.</p>

<p><b>En la ZML existen diferentes factores de riesgo, tanto situacionales como individuales y familiares que aumentan la probabilidad de que los niños y adolescentes sean orillados a engrosar las filas del crimen organizado y el narcotráfico.</b></p>

<p>La alternativa a la inseguridad es la prevención, donde las autoridades, las organizaciones ciudadanas y la sociedad civil tengan un rol específico para que esta prevención opere.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase PrevencionDelitoSeguridad

?>
