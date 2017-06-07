<?php
/**
 * TrcIMPLAN Sitio Web - Torreón, camino a la redensificación
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
 * Clase TorreonCaminoRedensificacion
 */
class TorreonCaminoRedensificacion extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón, camino a la redensificación';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2014-08-28T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-camino-redensificacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón no ha aprovechado su territorio e infraestructura contenida, de una manera óptima, debido a su baja densidad de ocupación en su área urbana.';
        $this->claves                     = 'IMPLAN, Torreon, Infraestructura';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/TorreonCaminoRedensificacion.html';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase TorreonCaminoRedensificacion

?>
