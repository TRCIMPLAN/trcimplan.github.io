<?php
/*
 * TrcIMPLAN Sitio Web - Plan Estratégico Metropolitano Mesa 2
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
 * Clase Mesa2
 */
class Mesa2 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Mesa 2: Visión y Objetivos';
        $this->autor            = '';
        $this->fecha            = '2014-10-30T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'mesa-2';
     // $this->imagen_previa    = 'mesa-2/imagen-previa.jpg';
        $this->encabezado_color = '#DF9C0A';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Segunda mesa del Plan Estratégico Metropolitano.';
        $this->claves           = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, Plan, Estrategico, Metropolitano';
        $this->categorias       = array('Plan Estrategico Metropolitano');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'plan-estrategico-metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Plan Estratégico Metropolitano > M2 Visión y Objetivos';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
     // $schema->image          = 'mesa-2/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = <<<FINAL
      <p>El 30 de Octubre de 2014 se llevó a cabo la segunda reunión para la construcción del Plan Estratégico Metropolitano dónde los ciudadanos construyeron la visión metropolitana al 2040 y los objetivos a corto, mediano y largo plazo, necesarios para atender la problemática prioritaria de la región y promover su competitividad así como un alto nivel en la calidad de vida. Se contó con la participación de 83 líderes de los cuatro municipios de la zona metropolitana.</p>
      <h3>Fotografías</h3>
      <!-- Photo Slider inicia -->
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1024px; height: 512px;">
          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1024px; height: 512px; overflow: hidden;">
            <div><img u="image" src="mesa-2/foto-buen-gobierno.jpg"></div>
            <div><img u="image" src="mesa-2/foto-desarrollo-economico.jpg"></div>
            <div><img u="image" src="mesa-2/foto-desarrollo-social.jpg"></div>
            <div><img u="image" src="mesa-2/foto-entorno-urbano.jpg"></div>
            <div><img u="image" src="mesa-2/foto-movilidad-transporte.jpg"></div>
            <div><img u="image" src="mesa-2/foto-sustentabilidad-medio-ambiente.jpg"></div>
          </div>
          <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        </div>
      <!-- Photo Slider termina -->
      <h3>Solucionemos Juntos</h3>
      <img class="img-responsive contenido-imagen" src="mesa-2/solucionemos-juntos-buen-gobierno.jpg" alt="Solucionemos Juntos - Buen Gobierno">
      <img class="img-responsive contenido-imagen" src="mesa-2/solucionemos-juntos-desarrollo-economico.jpg" alt="Solucionemos Juntos - Desarrollo Económico">
      <img class="img-responsive contenido-imagen" src="mesa-2/solucionemos-juntos-desarrollo-social.jpg" alt="Solucionemos Juntos - Desarrollo Social">
      <img class="img-responsive contenido-imagen" src="mesa-2/solucionemos-juntos-entorno-urbano.jpg" alt="Solucionemos Juntos - Entorno Urbano">
      <img class="img-responsive contenido-imagen" src="mesa-2/solucionemos-juntos-movilidad-transporte.jpg" alt="Solucionemos Juntos - Movilidad y Transporte">
      <img class="img-responsive contenido-imagen" src="mesa-2/solucionemos-juntos-sustentabilidad.jpg" alt="Solucionemos Juntos - Sustentabilidad y Medio Ambiente">
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // JavaScript
        $this->javascript[]     = '<script type="text/javascript" src="../js/jssor.slider.min.js"></script>';
        $this->javascript[]     = <<<FINAL
  <!-- Photo Slider inicia -->
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
  <!-- Photo Slider termina -->
FINAL;
    } // constructor

} // Clase Mesa2

?>
