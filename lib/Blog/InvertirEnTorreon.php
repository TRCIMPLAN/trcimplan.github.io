<?php
/**
 * TrcIMPLAN Sitio Web - Invertir en Torreón
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
 * Clase InvertirEnTorreon
 */
class InvertirEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Invertir en Torreón';
        $this->autor                      = 'Lic. Heriberto Ramos Hernández';
        $this->fecha                      = '2014-05-13T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'invertir-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Inversiones, Empresas';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/InvertirEnTorreon.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Infraestructura', 'Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase InvertirEnTorreon

?>
