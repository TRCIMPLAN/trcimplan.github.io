<?php
/**
 * TrcIMPLAN - Zonificación Primaria
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
namespace SIGMapasTorreon;

/**
 * Clase ZonificacionPrimaria
 */
class ZonificacionPrimaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre             = 'Zonificación Primaria';
        $this->autor              = 'Jair Miramontes';
        $this->fecha              = '2015-04-13T09:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo            = 'zonificacion-primaria';
        $this->imagen             = 'zonificacion-primaria/imagen.jpg';
        $this->imagen_previa      = 'zonificacion-primaria/imagen-previa.jpg';
        // Para el botón de ver a pantalla completa
        $this->url                = 'http://implantorreon.cartodb.com/u/sigimplan/viz/4dea92fe-70da-11e4-9a09-0e018d66dc29/embed_map';
        $this->url_etiqueta       = 'Ver a pantalla completa';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion        = 'Mapa con la Zonificación Primaria.';
        $this->claves             = 'IMPLAN, Torreón, Zonificación, Usos de Suelo';
        $this->categorias         = array('Infraestructura');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML
        $this->directorio         = 'sig-mapas-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu        = 'Información Geográfica';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado             = 'Publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir     = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                   = new \Base\SchemaPostalAddress();
        $region->addressCountry   = 'MX';
        $region->addressRegion    = 'Coahuila de Zaragoza';
        $region->addressLocality  = 'Torreón';
        // Instancia de SchemaMapa con el mapa en CartoDB
        $mapa                     = new \Base\SchemaMap();
        $mapa->mapType            = 'VenueMap';
        $mapa->url                = $this->url;
        $mapa->url_label          = $this->url_etiqueta;
        $mapa->extra              = <<<FINAL
<iframe width='100%' height='520' frameborder='0' src='http://implantorreon.cartodb.com/u/sigimplan/viz/4dea92fe-70da-11e4-9a09-0e018d66dc29/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
FINAL;
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                    = new \Base\SchemaPlace();
        $lugar->address           = $region;
        $lugar->hasMap            = $mapa;
        // Instancia de SchemaCreativeWork lo empaca con más datos
        $paquete                  = new \Base\SchemaCreativeWork();
        $paquete->big_heading     = true;
        $paquete->name            = $this->nombre;
        $paquete->description     = $this->descripcion;
        $paquete->author          = $this->autor;
        $paquete->datePublished   = $this->fecha;
        $paquete->headline_style  = $this->encabezado_color;
        $paquete->image           = $this->imagen;
     // $paquete->image_show      = false; // Por defecto la imagen NO se agrega al principio del contenido
        $paquete->contentLocation = $lugar;
        // El contenido es una instancia de SchemaCreativeWork
        $this->contenido          = $paquete;
        // JavaScript
        // Sin caja JS
    } // constructor

} // Clase ZonificacionPrimaria

?>