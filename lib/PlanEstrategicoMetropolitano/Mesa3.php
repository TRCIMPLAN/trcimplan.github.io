<?php
/*
 * TrcIMPLAN Sitio Web - Plan Estratégico Metropolitano Mesa 3 Estrategias y Proyectos
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * @package TrcIMPLANSitioWeb
 */

namespace PlanEstrategicoMetropolitano;

/**
 * Clase Mesa3
 */
class Mesa3 extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Taller 3: Estrategias y Proyectos';
        $this->autor                      = 'Dirección de Proyectos Estratégicos';
        $this->fecha                      = '2014-11-27T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'mesa-3';
        $this->imagen                     = 'mesa-3/imagen.jpg';
        $this->imagen_previa              = 'mesa-3/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Tercer taller del Plan Estratégico Metropolitano.';
        $this->claves                     = 'IMPLAN, Torreon, Gomez Palacio, Lerdo, Matamoros, Plan, Estrategico, Metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Plan Estratégico Torreón 2040';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/PlanEstrategicoMetropolitano/Mesa3.html';
        // Banderas
        $this->poner_imagen_en_contenido  = false;
        $this->para_compartir             = false;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        $this->javascript[]     = '<script type="text/javascript" src="../js/jssor.slider.min.js"></script>';
        $this->javascript[]     = <<<FINAL
<script>
  // Photo slider
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
        return parent::javascript();
    } // javascript

} // Clase Mesa3

?>
