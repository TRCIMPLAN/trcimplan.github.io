<?php
/*
 * TrcIMPLAN Sitio Web - Mapa del Avance de Reconversión del Alumbrado Público de Torreón
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
namespace SIG;

/**
 * Clase AlumbradoPublico
 *
 * Ha sido descontinuada del menú de navegación. Se crea el archivo con estatus revisar sólo para recibir visitantes con el URL antiguo.
 */
class AlumbradoPublico extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre             = 'Avance de Reconversión Tecnológica Led del Alumbrado Público';
     // $this->autor              = '';
        $this->fecha              = '2014-09-08T08:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo            = 'alumbrado-publico';
        $this->imagen             = 'introduccion/imagen.jpg';
        $this->imagen_previa      = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion        = 'Mapa del Avance de Reconversión del Alumbrado Público de Torreón.';
        $this->claves             = 'IMPLAN, Torreon, Alumbrado, Reconversión, SIG, GIS';
        $this->categorias         = array();
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML
        $this->directorio         = 'sig';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu        = 'Información Geográfica';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado             = 'revisar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir     = true;
        // Instancia de SchemaPostalAddress
        $region                   = new \Base\SchemaPostalAddress();
        $region->addressCountry   = 'MX';
        $region->addressRegion    = 'Coahuila de Zaragoza';
        $region->addressLocality  = 'Torreón';
        // Instancia de SchemaMapa
        $mapa                     = new \Base\SchemaMap();
        $mapa->mapType            = 'VenueMap';
        $mapa->url                = 'https://implantorreon.cartodb.com/u/sigimplan/viz/5a6594ac-e772-11e4-a750-0e4fddd5de28/embed_map';
        $mapa->url_label          = 'Ver a pantalla completa';
        $mapa->extra              = <<<FINAL
            <iframe width='100%' height='520' frameborder='0' src='https://implantorreon.cartodb.com/u/sigimplan/viz/5a6594ac-e772-11e4-a750-0e4fddd5de28/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
            <p>
                <b>Nota:</b> La información mostrada está sujeta a cambios sin previo aviso por la concesionaria.<br>
                <b>Fuente:</b> Dirección General de Servicios Públicos de Torreón.
            </p>
FINAL;
        // Instancia de SchemaPlace
        $lugar                    = new \Base\SchemaPlace();
        $lugar->address           = $region;
        $lugar->hasMap            = $mapa;
        // Instancia de SchemaCreativeWork
        $paquete                  = new \Base\SchemaCreativeWork();
        $paquete->big_heading     = true;
        $paquete->name            = $this->nombre;
        $paquete->description     = $this->descripcion;
        $paquete->author          = $this->autor;
        $paquete->datePublished   = $this->fecha;
        $paquete->headline_style  = $this->encabezado_color;
        $paquete->image           = $this->imagen;
        $paquete->contentLocation = $lugar;
        // El contenido es una instancia
        $this->contenido          = $paquete;
        // Sin JavaScript
        $this->javascript         = '';
        // Para redifusión, si tiene una imagen se usa y después la descripción
        if ($this->imagen != '') {
            $this->redifusion = sprintf("<a href=\"%s\"><img src=\"%s\"><br>\n\n%s</a>", "{$this->directorio}/{$this->archivo}.html", $this->imagen, $this->descripcion);
        } else {
            $this->redifusion = sprintf('<a href="%s">%s</a>', "{$this->directorio}/{$this->archivo}.html", $this->descripcion);
        }
    } // constructor

} // Clase AlumbradoPublico

?>
