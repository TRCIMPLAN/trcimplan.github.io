<?php
/**
 * TrcIMPLAN Sitio Web - Las generaciones del cambio
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
 * Clase GeneracionesCambio
 */
class GeneracionesCambio extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Las generaciones del cambio';
     // $this->autor                      = '';
        $this->fecha                      = '2015-02-04T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'generaciones-cambio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los universitarios están involucrados con su sociedad, con las características de nuestra ciudad y sus necesidades, ya son parte de un entorno que si bien no es el mejor, están conscientes que se puede mejorar.';
        $this->claves                     = 'IMPLAN, Torreon, Universidades, Generación, Cambio';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/GeneracionesCambio.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Bienestar');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase GeneracionesCambio

?>
