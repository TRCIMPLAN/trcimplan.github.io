<?php
/*
 * TrcIMPLAN Sitio Web - Mapa del Avance de Reconversión del Alumbrado Público de Torreón
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Avance de Reconversión Tecnológica Led del Alumbrado Público';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-09-08T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'alumbrado-publico';
        // Imágenes
        $this->imagen                     = 'introduccion/imagen.jpg';
        $this->imagen_previa              = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Mapa del Avance de Reconversión del Alumbrado Público de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Alumbrado, Reconversión, SIG, GIS';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Información Geográfica > Mapas de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'publicar';
        // El contenido es una instancia SchemaCreativeWork
        $this->contenido                  = new \Base\SchemaCreativeWork();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                           = new \Base\SchemaPostalAddress();
        $region->addressCountry           = 'MX';
        $region->addressRegion            = 'Coahuila de Zaragoza';
        $region->addressLocality          = 'Torreón';
        // Instancia de SchemaMapa con el mapa en Carto
        $mapa                             = new \Base\SchemaMap();
        $mapa->mapType                    = 'VenueMap';
        $mapa->url                        = $this->url;
        $mapa->url_label                  = $this->url_etiqueta;
        $mapa->theMap                     = '<iframe width="100%" height="520" frameborder="0" src="https://implantorreon.cartodb.com/u/sigimplan/viz/5a6594ac-e772-11e4-a750-0e4fddd5de28/embed_map" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>';
        $mapa->extra                      = '<p><b>Nota:</b> La información mostrada está sujeta a cambios sin previo aviso por la concesionaria.<br><b>Fuente:</b> Dirección General de Servicios Públicos de Torreón.</p>';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                            = new \Base\SchemaPlace();
        $lugar->address                   = $region;
        $lugar->hasMap                    = $mapa;
        // Instancia de SchemaCreativeWork lo empaca con más datos
        $this->contenido                  = new \Base\SchemaCreativeWork();
        $this->contenido->big_heading     = true;
        $this->contenido->name            = $this->nombre;
        $this->contenido->description     = $this->descripcion;
        $this->contenido->author          = $this->autor;
        $this->contenido->datePublished   = $this->fecha;
        $this->contenido->headline_style  = $this->encabezado_color;
        $this->contenido->image           = $this->imagen;
        $this->contenido->contentLocation = $lugar;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase AlumbradoPublico

?>
