<?php
/*
 * TrcIMPLAN Sitio Web - Mesa 3: Estrategias y Proyectos
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
 * Clase Mesa3
 */
class Mesa3 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'M3 Estrategias y Proyectos';
     // $this->autor            = '';
        $this->fecha            = '2014-11-27T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'mesa-3';
        $this->imagen           = 'introduccion/imagen.jpg';
        $this->imagen_previa    = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Tercera mesa del Plan Estratégico Metropolitano.';
        $this->claves           = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, Plan, Estrategico, Metropolitano';
        $this->categorias       = array('Plan Estrategico Metropolitano');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'plan-estrategico-metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Plan Estratégico Metropolitano > M3 Estrategias y Proyectos';
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
      <p>El 27 de Noviembre de 2014 se llevó a cabo la tercera reunión para la construcción del Plan Estratégico Metropolitano, la cual se dedicó a la definición y priorización de Acciones y Estrategias, dando como siguiente paso la integración de una cartera de proyectos. Se contó con una asistencia de 110 líderes de los cuatro municipios de la zona metropolitana.</p>
      <h3>Fotografías</h3>
      <!-- Photo Slider inicia -->
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px; height: 500px;">
          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 500px; overflow: hidden;">
            <div><img u="image" src="mesa-3/foto-buen-gobierno.jpg"></div>
            <div><img u="image" src="mesa-3/foto-desarrollo-economico.jpg"></div>
            <div><img u="image" src="mesa-3/foto-desarrollo-social.jpg"></div>
            <div><img u="image" src="mesa-3/foto-entorno-urbano.jpg"></div>
            <div><img u="image" src="mesa-3/foto-movilidad-transporte.jpg"></div>
            <div><img u="image" src="mesa-3/foto-sustentabilidad-medio-ambiente.jpg"></div>
          </div>
          <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        </div>
      <!-- Photo Slider termina -->
      <h3>Características de Proyectos Estratégicos</h3>
      <img class="img-responsive contenido-imagen" src="mesa-3/caracteristicas-proyectos-estrategicos-01-pem.jpg" alt="PEM">
      <img class="img-responsive contenido-imagen" src="mesa-3/caracteristicas-proyectos-estrategicos-02-pertinentes.jpg" alt="Pertinentes">
      <img class="img-responsive contenido-imagen" src="mesa-3/caracteristicas-proyectos-estrategicos-03-viables-factibles.jpg" alt="Viables y Factibles">
      <img class="img-responsive contenido-imagen" src="mesa-3/caracteristicas-proyectos-estrategicos-04-enfoque-sistemico.jpg" alt="Enfoque Sistémico">
      <img class="img-responsive contenido-imagen" src="mesa-3/caracteristicas-proyectos-estrategicos-05-participativo.jpg" alt="Participativo">
      <img class="img-responsive contenido-imagen" src="mesa-3/caracteristicas-proyectos-estrategicos-06-control-seguimiento.jpg" alt="Control y Seguimiento">
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // JavaScript
        $this->javascript[]     = '<script type="text/javascript" src="../js/jssor.slider.min.js"></script>';
        $this->javascript[]     = <<<FINAL
// PHOTO SLIDER
<script>
jQuery(document).ready(function ($) {
    var options = {
        \$AutoPlay: true,
        \$ChanceToShow: 5,
        \$DragOrientation: 1
    };
    var jssor_slider1 = new \$JssorSlider\$("slider1_container", options);
    // responsive code begin
    function ScaleSlider() {
        var parentWidth = $('#slider1_container').parent().width();
        if (parentWidth) {
            jssor_slider1.\$ScaleWidth(parentWidth);
        }
        else
            window.setTimeout(ScaleSlider, 30);
    }
    // Scale slider after document ready
    ScaleSlider();
    // Scale slider while window load/resize/orientationchange.
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    // responsive code end
});
</script>
FINAL;
    } // constructor

} // Clase Mesa3

?>
