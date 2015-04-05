<?php
/*
 * TrcIMPLAN Sitio Web - Mesa 4
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * Clase Mesa4
 */
class Mesa4 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Mesa 4';
     // $this->autor            = '';
        $this->fecha            = '2015-03-05T18:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'mesa-4';
     // $this->imagen_previa    = 'mesa-4/imagen-previa.jpg';
        $this->encabezado_color = '#DF9C0A';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'El 5 de marzo de 2015 se llevó a cabo la cuarta mesa para la construcción del Plan Estratégico Metropolitano.';
        $this->claves           = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, Plan, Estrategico, Metropolitano';
        $this->categorias       = array('Plan Estrategico Metropolitano');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'plan-estrategico-metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Plan Estratégico Metropolitano > M4';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // Son 310 fotos
        $a = array();
        for ($i=1; $i <= 310; $i++) {
            $a[] = sprintf('            <div><img u="image" src="mesa-4/fotos%03s.jpg" /></div>', $i);
        }
        $fotos_html = implode("\n", $a);
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
     // $schema->image          = 'mesa-4/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = <<<FINAL
      <p>El 5 de marzo de 2015 en la Universidad LaSalle en Gómez Palacio, Durango se signa el convenio por José Miguel Campillo Carrete alcalde de Gómez Palacio, Dgo. y Miguel Ángel Riquelme Solís alcalde de Torreón, Coahuila para un plan metropolitano en donde en breve se sumaran Lerdo, Durango y Matamoros, Coahuila.</p>
      <p>Este acto protocolario augura una nueva etapa para nuestra región : mejor transporte, mejores vías de comunicación al igual que una policía y reglamentos planeados en conjunto para beneficio de los ciudadanos. Ahora toca a cada uno de los habitantes de esta región así como a sus gobernantes lograr que esta zona lagunera se convierta en una región exitosa como lo ha hecho el Bajío. No hay duda que con voluntad política y con el apoyo de los ciudadanos lo podremos lograr.</p>
      <!-- Photo Slider inicia -->
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px; height: 500px;">
          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 500px; overflow: hidden;">
{$fotos_html}
          </div>
          <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        </div>
      <!-- Photo Slider termina -->
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
            \$Class: \$JssorThumbnailNavigator\$,
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

} // Clase Mesa4

?>
