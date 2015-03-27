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
        $this->descripcion      = 'Cuarta mesa del Plan Estratégico Metropolitano.';
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
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->description    = $this->descripcion;
     // $schema->image          = 'mesa-4/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->headline_style = $this->encabezado_color;
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/Directorio/Mesa4.md');
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = <<<FINAL

    <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                \$AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                \$AutoPlaySteps: 1,                                 //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                \$AutoPlayInterval: 4000,                           //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                \$PauseOnHover: 1,                                  //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                \$ArrowKeyNavigation: true,                         //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                \$SlideDuration: 500,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                \$MinDragOffsetToSlide: 20,                         //[Optional] Minimum drag offset to trigger slide , default value is 20
                \$SlideSpacing: 0,                                  //[Optional] Space between each slide in pixels, default value is 0
                \$DisplayPieces: 1,                                 //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                \$ParkingPosition: 0,                               //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                \$UISearchMode: 1,                                  //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                \$PlayOrientation: 1,                               //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                \$DragOrientation: 3,                               //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                \$ArrowNavigatorOptions: {
                    \$Class: \$JssorArrowNavigator$,                //[Requried] Class to create arrow navigator instance
                    \$ChanceToShow: 1,                              //[Required] 0 Never, 1 Mouse Over, 2 Always
                    \$AutoCenter: 2,                                //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    \$Steps: 1                                      //[Optional] Steps to go for each navigation request, default value is 1
                },

                \$ThumbnailNavigatorOptions: {
                    \$Class: \$JssorThumbnailNavigator$,            //[Required] Class to create thumbnail navigator instance
                    \$ChanceToShow: 2,                              //[Required] 0 Never, 1 Mouse Over, 2 Always

                    \$ActionMode: 1,                                //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    \$AutoCenter: 3,                                //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    \$Lanes: 1,                                     //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    \$SpacingX: 3,                                  //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    \$SpacingY: 3,                                  //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    \$DisplayPieces: 9,                             //[Optional] Number of pieces to display, default value is 1
                    \$ParkingPosition: 260,                         //[Optional] The offset position to park thumbnail
                    \$Orientation: 1,                               //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    \$DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider2 = new \$JssorSlider$("slider2_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider2.\$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider2.\$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <!-- Jssor Slider Begin -->

    <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div>
                <img u="image" src="mesa-4/fotos001.jpg">
                <img u="thumb" src="mesa-4/fotos001thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos002.jpg">
                <img u="thumb" src="mesa-4/fotos002thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos003.jpg">
                <img u="thumb" src="mesa-4/fotos003thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos004.jpg">
                <img u="thumb" src="mesa-4/fotos004thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos005.jpg">
                <img u="thumb" src="mesa-4/fotos005thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos006.jpg">
                <img u="thumb" src="mesa-4/fotos006thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos007.jpg">
                <img u="thumb" src="mesa-4/fotos007thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos008.jpg">
                <img u="thumb" src="mesa-4/fotos008thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos009.jpg">
                <img u="thumb" src="mesa-4/fotos009thumb.jpg">
            </div>
            <div>
                <img u="image" src="mesa-4/fotos010.jpg">
                <img u="thumb" src="mesa-4/fotos010thumb.jpg">
            </div>
        </div>

        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 02 css */
            /*
            .jssora02l              (normal)
            .jssora02r              (normal)
            .jssora02l:hover        (normal mouseover)
            .jssora02r:hover        (normal mouseover)
            .jssora02ldn            (mousedown)
            .jssora02rdn            (mousedown)
            */
            .jssora02l, .jssora02r, .jssora02ldn, .jssora02rdn
            {
                position: absolute;
                cursor: pointer;
                display: block;
                background: url(../img/a02.png) no-repeat;
                overflow:hidden;
            }
            .jssora02l { background-position: -3px -33px; }
            .jssora02r { background-position: -63px -33px; }
            .jssora02l:hover { background-position: -123px -33px; }
            .jssora02r:hover { background-position: -183px -33px; }
            .jssora02ldn { background-position: -243px -33px; }
            .jssora02rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->

        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="jssort03" style="position: absolute; width: 600px; height: 60px; left:0px; bottom: 0px;">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>

            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 03 css */
                /*
                .jssort03 .p            (normal)
                .jssort03 .p:hover      (normal mouseover)
                .jssort03 .pav          (active)
                .jssort03 .pav:hover    (active mouseover)
                .jssort03 .pdn          (mousedown)
                */
                .jssort03 .w, .jssort03 .pav:hover .w
                {
                    position: absolute;
                    width: 60px;
                    height: 30px;
                    border: white 1px dashed;
                }
                * html .jssort03 .w
                {
                    width /**/: 62px;
                    height /**/: 32px;
                }
                .jssort03 .pdn .w, .jssort03 .pav .w { border-style: solid; }
                .jssort03 .c
                {
                    width: 62px;
                    height: 32px;
                    filter:  alpha(opacity=45);
                    opacity: .45;

                    transition: opacity .6s;
                    -moz-transition: opacity .6s;
                    -webkit-transition: opacity .6s;
                    -o-transition: opacity .6s;
                }
                .jssort03 .p:hover .c, .jssort03 .pav .c
                {
                    filter:  alpha(opacity=0);
                    opacity: 0;
                }
                .jssort03 .p:hover .c
                {
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 62px; HEIGHT: 32px; TOP: 0; LEFT: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" WIDTH: 100%; HEIGHT: 100%; border: none;position:absolute; TOP: 0; LEFT: 0;"></div></div>
                    <div class=c style="POSITION: absolute; BACKGROUND-COLOR: #000; TOP: 0; LEFT: 0">
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->

FINAL;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase Mesa4

?>
