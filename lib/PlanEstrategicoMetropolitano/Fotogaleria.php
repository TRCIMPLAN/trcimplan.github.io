<?php
/*
 * TrcIMPLAN - Plan Estratégico Metropolitano Fotogalería
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
 * @package TrcIMPLAN
 */

namespace PlanEstrategicoMetropolitano;

/**
 * Clase Fotogaleria
 */
class Fotogaleria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Fotogalería';
        $this->autor           = 'Dirección de Proyectos Estratégicos';
        $this->fecha           = '2015-04-10T18:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'fotogaleria';
        $this->imagen          = 'fotogaleria/imagen.jpg';
        $this->imagen_previa   = 'fotogaleria/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Presentación con las fotografías de las mesas del Plan Estratégico Metropolitano.';
        $this->claves          = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, Plan, Estrategico, Metropolitano';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'plan-estrategico-metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Plan Estratégico Metropolitano > Todas las Mesas';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir  = true;
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
        $this->poner_imagen_en_contenido = false;
        // Para el Organizador
        $this->categorias      = array('Bienestar', 'Competitividad', 'Gobierno', 'Infraestructura', 'Movilidad', 'Participación Ciudadana', 'Recursos Naturales', 'Seguridad');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Son 310 fotos
        $a = array();
        for ($i=1; $i <= 310; $i++) {
            $a[] = sprintf('            <div><img u="image" src="fotogaleria/fotos%03s.jpg"></div>', $i);
        }
        $fotos_html = implode("\n", $a);
        // El contenido
        $this->contenido = <<<FINAL
      <!-- Photo Slider inicia -->
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px; height: 500px;">
          <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 500px; overflow: hidden;">
{$fotos_html}
          </div>
          <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        </div>
      <!-- Photo Slider termina -->
FINAL;
        // Entregar resultado del padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
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
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión, sólo se pone la primer imagen como vínculo a la página en el sitio
        $this->redifusion = sprintf('<a href="%s"><img src="%s"><br>%s</a>', "{$this->directorio}/{$this->archivo}.html", 'fotogaleria/fotos001.jpg', $this->descripcion);
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Fotogaleria

?>
