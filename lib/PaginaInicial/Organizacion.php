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
        // Acumular
        $b   = array();
        $b[] = '  <section id="organizacion">';
            //~ $b[] = '    <a href="consejo-directivo/convocatoria-2015.html"><img class="banner" src="consejo-directivo/convocatoria-2015/banner.jpg" alt="Banner"></a>';
            $b[] = '    <img class="banner" src="imagenes/banner-implan-2018-01.jpg" width="100" height="400" alt="IMPLAN Torreon">';
            //  $b[] = ' ';
            $b[] = '<li></li>';
            //INICIO  CONVOCATORIAS
            $b[] = '<div class="slider2">';
                $b[] = '<ul>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/convocatorias/vision-metropoli.html"><img src="imagenes\convocatorias\convocatorias-2018-vm-banner-formulario-04.jpg" alt="Convocatoria Visión Metrópoli"></a>';
               // $b[] = '<a href="http://www.trcimplan.gob.mx/convocatorias/consejeros.html"><img src="imagenes\convocatorias\convocatorias-2018-cs-banner-09.jpg" alt="Consejeros ciudadanos"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/convocatorias/vision-metropoli.html"><img src="imagenes\convocatorias\convocatorias-2018-vm-banner-formulario-04.jpg" alt="Convocatoria Visión Metrópoli"></a>';
                $b[] = '</ul>';
            $b[] = '</div>';

            //FIN CONVOCATORIA
            //$b[] = '<li>M O N I T O R E S  -   I M P L A N  -   T O R R E Ó N</li>';
            //INICIO MONITORES
            $b[] = ' . ';
            $b[] = '<div class="slider">';
                $b[] = '<ul>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-comercio-exterior.html"><img src="imagenes\monitores\monitores-comercio-julio-2018-1.jpg" alt="Imagen de Comercio Exterior 1"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-julio-2018-1.jpg" alt="Imagen Empleo 1"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-seguridad-3May2018.html"><img src="imagenes\monitores\monitores-seguridad-mayo-2018-1.jpg" alt="Imagen Seguridad 7"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-negocios.html"><img src="imagenes\monitores\monitores-febrero-02.jpg" alt="Imagen Negocios 10"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-economia.html"><img src="imagenes\monitores\monitores-febrero-07.jpg" alt="Imagen Economía 14"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-vivienda.html"><img src="imagenes\monitores\monitores-febrero-09.jpg" alt="Imagen Vivienda 16"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-sustentabilidad.html"><img src="imagenes\monitores\monitores-febrero-03.jpg" alt="Imagen Sustentabilidad 11"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-julio-2018-2.jpg" alt="Imagen Empleo 2"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-seguridad-3May2018.html"><img src="imagenes\monitores\monitores-seguridad-mayo-2018-2.jpg" alt="Imagen Seguridad 8"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-comercio-exterior.html"><img src="imagenes\monitores\monitores-comercio-julio-2018-2.jpg" alt="Imagen de Comercio Exterior 2"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-julio-2018-3.jpg" alt="Imagen Empleo 3"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-seguridad-3May2018.html"><img src="imagenes\monitores\monitores-seguridad-mayo-2018-3.jpg" alt="Imagen Seguridad 9"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-julio-2018-4.jpg" alt="Imagen Empleo 4"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-comercio-exterior.html"><img src="imagenes\monitores\monitores-comercio-julio-2018-3.jpg" alt="Imagen de Comercio Exterior 3"></a>';

                /*$b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-mayo-2018-4.jpg" alt="Imagen Empleo 4"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-mayo-2018-5.jpg" alt="Imagen Empleo 5"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-empleo.html"><img src="imagenes\monitores\monitores-empleo-mayo-2018-6.jpg" alt="Imagen Empleo 6"></a>';*/
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-sustentabilidad"><img src="imagenes\monitores\monitores-febrero-04.jpg" alt="Imagen Sustentabilidad 12"></a>';
              /*  $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-negocios.html"><img src="imagenes\monitores\monitores-febrero-05.jpg" alt="Imagen Negocios 13"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-economia.html"><img src="imagenes\monitores\monitores-febrero-08.jpg" alt="Imagen Economía 15"></a>';
                $b[] = '<a href="http://www.trcimplan.gob.mx/monitores/monitor-de-vivienda.html"><img src="imagenes\monitores\monitores-febrero-10.jpg" alt="Imagen Vivienda 17"></a>'; */
                $b[] = '</ul>';
            $b[] = '</div>';
            //FIN MONITORES
            $b[] = implode("\n", $a);
        $b[] = '  </section>';
        // Entregar
        return implode("\n", $b);
    } // html

} // Clase Organizacion

?>
