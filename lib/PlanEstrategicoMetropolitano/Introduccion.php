<?php
/*
 * SMIbeta - Introducción
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
namespace PlanEstrategicoMetropolitano;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Plan Estratégico Metropolitano';
        $this->autor         = 'TrcIMPLAN';
        $this->fecha         = '2014-09-24';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'introduccion';
     // $this->imagen_previa = 'introduccion/imagen-previa.jpg';
        $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="introduccion/banner.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'El Plan Estratégico Metropolitano es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Plan Estrategico Metropolitano');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio    = 'plan-estrategico-metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu   = 'Plan Estratégico Metropolitano';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<h2>¿Qué es el Plan Estratégico Metropolitano?</h2>

<p>El <strong>Plan Estratégico Metropolitano (PEM)</strong> es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para <strong>atender la necesidad urgente de elevar el nivel de competitividad</strong> para el desarrollo económico y social de la <strong>Zona Metropolitana de La Laguna</strong>.</p>

<h2>¿En qué me beneficia?</h2>

<p>El PEM es un amplio ejercicio de corresponsabilidad y gobernanza que concentrará las visiones y opiniones de seis grandes temas: <strong>Buen Gobierno, Desarrollo Económico y Competitividad, Desarrollo Social, Movilidad y Transporte, Sustentabilidad y Entorno Urbano.</strong></p>

<p>Tu participación será vital para <strong>identificar y concretar las líneas de acción más efectivas</strong> que seguirán <strong>gobernantes y gobernados</strong>, de la gran cantidad de necesidades y proyectos que requiere la Laguna para ser mejor.</p>

<h2>¿Quienes lo elaboran?</h2>

<p>El PEM es realizado por <strong>sobresalientes y diversos actores locales</strong>, motivados por su compromiso de mejorar la zona metropolitana. Entre ellos están representantes de instituciones gubernamentales y no gubernamentales, grupos de profesionales expertos y personajes sociales estratégicos.</p>

<p>Se apoyarán con las propuestas proporcionadas por los <strong>ciudadanos</strong> y con el equipo técnico del IMPLAN Torreón, quienes coordinarán, ordenarán y publicarán este proceso.</p>

<h2>¿De qué forma puedo participar?</h2>

<p>Envíanos tu proyecto, solicitud o inquietud <strong><a href="http://trcimplan.mx/interaccion-web/index.php/722512/lang-es-MX" target="_blank">llenando esta encuesta en línea</a></strong>. Sólo necesitas tener una dirección de <strong>correo electrónico</strong> para que recibas un <strong>mensaje automático de invitación</strong> a la misma.</p>

<p>Le informamos que, como forma de control, la encuesta sólo puede ser llenada una vez por cada dirección de correo electrónico.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Introduccion

?>
