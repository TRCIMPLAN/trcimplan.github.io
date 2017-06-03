<?php
/**
 * TrcIMPLAN Sitio Web - Conviviendo en Nuestras Ciudades
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

namespace Blog;

/**
 * Clase ConviviendoEnNuestrasCiudades
 */
class ConviviendoEnNuestrasCiudades extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Conviviendo en Nuestras Ciudades';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2015-09-27T19:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'conviviendo-en-nuestras-ciudades';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La ciudad es el espacio donde sus habitantes se representan, reúnen, conviven fortalecen las estructuras sociales e inclusive se manifiestan. Por ello es necesario cuidar la cantidad y calidad de los servicios que ahí se prestan.';
        $this->claves                     = 'IMPLAN, Torreon, Ciudad, Convivencia, Calidad de Vida';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/ConviviendoEnNuestrasCiudades.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Infraestructura');
        $this->fuentes                    = array('Banco Interamericano del Desarrollo (BID)', 'Secretaría de Desarrollo Urbano Territorial y Urbano (SEDATU)');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ConviviendoEnNuestrasCiudades

?>
