<?php
/**
 * TrcIMPLAN Sitio Web - Organización
 *
 * Copyright (C) 2015 IMPLAN Torreón
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

namespace PaginaInicial;

/**
 * Clase Organizacion
 */
class Organizacion extends \Base\SchemaGovernmentOrganization {

    // En Schema
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $identation;      // Integer. Level of identation (beautiful code).
    // public $id_property;     // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;  // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;      // Boolean. Use true for enclose with <article>
    // public $is_visible;      // Boolean. Use true for use invisible meta tags.
    // En SchemaThing
    // public $big_heading;     // Boolean. Use true to use a big heading for the web page.
    // public $headline;        // Text. Headline of the article.
    // public $headline_style;  // Text. CSS style or Hex color.
    // public $headline_icon;   // Text. Font Awsome icon.
    // public $content;         // Text. HTML content to put INSIDE.
    // public $extra;           // Text. Additional HTML to put ASIDE.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $image_show;      // Boolean. Use true to put an img tag. Use false to put a meta tag.
    // public $name;            // Text. The name of the item.
    // public $url;             // URL of the item.
    // public $url_label;       // Label for the URL of the item.
    // En SchemaOrganization
    // public $address;         // PostalAddress. Physical address of the item.
    // public $email;           // Text. Email address.
    // public $location;        // PostalAddress or Place. The location of the event, organization or action.
    // public $telephone;       // Text. The telephone number.

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir propiedades
        $this->name           = 'Instituto Municipal de Planeación y Competitividad de Torreón';
        $this->description    = 'Órgano técnico responsable de la planeación del desarrollo del municipio de Torreón, Coahuila, México.';
        $this->image          = 'imagenes/implan-logo.png';
        $this->is_article     = FALSE;
        $this->big_heading    = TRUE;
        $this->headline_style = 'organizacion';
        // PRUEBA VM  $this->extra           = 'Instituto Municipal de Planeación Torreón';


        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular inicia
        if ($this->onTypeProperty != '') {
            $a[] = "  <div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/GovernmentOrganization\">";
        } else {
            $a[] = '  <div itemscope itemtype="http://schema.org/GovernmentOrganization">';
        }
        // Propiedad image
        if ($this->image != '') {
            $a[] = "    <img class=\"organizacion-logotipo\" itemprop=\"image\" alt=\"{$this->name}\" src=\"{$this->image}\">";
        }
        // Propiedad name
        if ($this->name != '') {
            $a[] = "    <h3 class=\"organizacion-titulo\" itemprop=\"name\">{$this->name}</h3>";
        } else {
            throw new \Exception('Error en Organizacion, html: La propiedad name es incorrecta.');
        }
        // Propiedad description
        if ($this->description != '') {
            $a[] = "    <div class=\"organizacion-descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        $a[] = '  </div>';

        // PRUEBA CLIMA
        //        $a[] = '<div id="cont_48bbd494eaf01080ac4dc6a238b4497f"><script type="text/javascript" async src="https://www.meteored.mx/wid_loader/48bbd494eaf01080ac4dc6a238b4497f"></script></div>';


        //FIN PRUEBA CLIMA

        // <!--   PRUEBA IDIOMA VM  -->

        $a[] = 'Traducir Página a tu Idioma';
        $a[] = '<div id="google_translate_element" class="google"></div> ';

        $a[] = '<script type="text/javascript">
                    function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: "es", includedLanguages: "ca,eu,gl,en,fr,it,pt,de,ch", layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, "google_translate_element");
                }';
        $a[] = '</script>';
        $a[] = '<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>';

        // <!--   FIN PRUEBA IDIOMA VM  -->




        // Acumular
        $b   = array();
        $b[] = '  <section id="organizacion">';
            //~ $b[] = '    <a href="consejo-directivo/convocatoria-2015.html"><img class="banner" src="consejo-directivo/convocatoria-2015/banner.jpg" alt="Banner"></a>';
            $b[] = '    <img class="banner" src="imagenes/banner-implan-2018-01c.jpg" width="100" height="500" alt="IMPLAN Torreon">';

            //  $b[] = ' ';
            $b[] = '<li></li>';



            //INICIO  CONVOCATORIAS
            $b[] = '<div class="slider2">';
                $b[] = '<ul>';

                $b[] = '<a href="https://solucionessig.com.mx/PDU_TORREON/Index.html"><img src="imagenes\pddu\pddu-banner2-qr-23.jpg" alt="liga pddu"></a>';

                $b[] = '<a href="https://issuu.com/consejovisionmetropoli/docs/digital_graffiti-2021"><img src="http://www.trcimplan.gob.mx/imagenes/libros/banner-arte-urbano-01.jpg" alt="Arte Urbano"></a>';

//                $b[] = '<a href="http://www.trcimplan.gob.mx/convocatorias/manos-a-la-cebra3.html"><img src="imagenes\convocatorias\convocatoria-manos-a-la-cebra-banner2021.jpg" alt="Convocatorias Manos a la Cebra 2021"></a>';
                $b[] = '<a href="https://solucionessig.com.mx/PDU_TORREON/Index.html"><img src="imagenes\pddu\pddu-banner2-qr-23.jpg" alt="liga pddu"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/investigaciones/desigualdad-de-genero.html"><img src="imagenes\cdg\banner-cdg.jpg" alt="Desigualdad de Género"></a>';

                $b[] = '<a href="http://www.trcimplan.gob.mx/vision-de-ciudad/vision-de-ciudad.html"><img src="imagenes\vision-de-ciudad\banner-vision-de-ciudad2.jpg" alt="visión de ciudad"></a>';

                $b[] = '<a href="https://arcg.is/0vySSr"><img src="imagenes\atlas-de-riesgo2020\banner-atlas-21.jpg" alt="liga Atlas de Riesgo Torreón"></a>';

//                $b[] = '<a href="https://storymaps.arcgis.com/stories/4db284ef5edd47d991f0bf5bc02e4557"><img src="imagenes\pddu\pddu-banner-qr-23.jpg" alt="liga pddu"></a>';
//                $b[] = '<a href="http://177.244.42.17/ovie-torreon/#!"><img src="imagenes\ovie\ovie-logo-banda5.png" alt="liga ovie"></a>';


                // Fin: Anterior a veda AMLO

                //----------------



                $b[] = '</ul>';




            $b[] = '</div>';
            //$b[] = '<a href="https://solucionessig.com.mx/ENCUESTA_GENERAL/Index.html"><img src="imagenes/icono-pddu-2020.jpg"  alt="liga PPDU"></a>';
            //$b[] = '</br>';
            //FIN CONVOCATORIA

            //Inicio Visión de ciudad
            //$b[] = '</br>';
            //$b[] = '<center><a href="http://www.trcimplan.gob.mx/vision-de-ciudad/vision-de-ciudad.html"><img src="imagenes\vision-de-ciudad\banner-vision-de-ciudad2.jpg" width=95% height="20%" alt="visión de ciudad"></a></center>';
            //$b[] = '</br>';
            //$b[] = '</br>';
            //Fin Visión de ciudad

            //Inicio OVIE
            //$b[] = '<center><a href=""><img src="imagenes\ovie\ovie-logo-banda4.png"  width=95% height="70px" alt="liga ovie"></a></center>';

            // Veda AMLO
            $b[] = '<center><a href="http://177.244.42.17/ovie-torreon/#!"><img src="imagenes\ovie\ovie-logo-banda4.png"  width=95% height="70px" alt="liga ovie"></a></center>';
            //Fin: Veda AMLO

            $b[] = '</br>';
            $b[] = '</br>';
            //Fin OVIE

            //Inicio ATLAS DE RIESGO
            //$b[] = '<center><a href="https://arcg.is/0vySSr"><img src="imagenes\atlas-de-riesgo2020\banner-atlas-21.jpg"  width=95% height="20%" alt="liga Atlas de Riesgo Torreón"></a></center>';
            //$b[] = '</br>';
            //$b[] = '</br>';
            //Fin ATLAS DE RIESGO


            //$b[] = '<li>M O N I T O R E S  -   I M P L A N  -   T O R R E Ó N</li>';
            //INICIO MONITORES
            $b[] = ' . ';
//            $b[] = '<div class="slider3">';
//                $b[] = '<ul>';
//                  $b[] = '<a href=""><img src="imagenes\inegi\inegi1.jpg" alt="Imagen de Inegi 1"></a>';
//                  $b[] = '<a href=""><img src="imagenes\inegi\inegi2.jpg" alt="Imagen de Inegi 2"></a>';

//                  $b[] = '<a href=""><img src="imagenes\inegi\inegi3.jpg" alt="Imagen de Inegi 3"></a>';
//                  $b[] = '<a href=""><img src="imagenes\inegi\inegi4.jpg" alt="Imagen de Inegi 4"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-comercio-exterior.html"><img src="imagenes\monitores\monitores-comercio-julio-2018-1.jpg" alt="Imagen de Comercio Exterior 1"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-julio-2018-1.jpg" alt="Imagen Empleo 1"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-seguridad-3May2018.html"><img src="imagenes\monitores\monitores-seguridad-mayo-2018-1.jpg" alt="Imagen Seguridad 7"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-negocios.html"><img src="imagenes\monitores\monitores-febrero-02.jpg" alt="Imagen Negocios 10"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-economia.html"><img src="imagenes\monitores\monitores-febrero-07.jpg" alt="Imagen Economía 14"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-vivienda.html"><img src="imagenes\monitores\monitores-febrero-09.jpg" alt="Imagen Vivienda 16"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-sustentabilidad.html"><img src="imagenes\monitores\monitores-febrero-03.jpg" alt="Imagen Sustentabilidad 11"></a>';
//                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-julio-2018-2.jpg" alt="Imagen Empleo 2"></a>';


                //$b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-sustentabilidad"><img src="imagenes\monitores\monitores-febrero-04.jpg" alt="Imagen Sustentabilidad 12">
//                $b[] = '</ul>';
//            $b[] = '</div>';
            //FIN MONITORES

            $b[] = implode("\n", $a);
        $b[] = '  </section>';
        // Entregar
        return implode("\n", $b);
    } // html

} // Clase Organizacion

?>
