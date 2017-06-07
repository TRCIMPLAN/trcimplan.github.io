<?php
/**
 * TrcIMPLAN Sitio Web - Torreón, camino a la redensificación II
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
 * Clase TorreonCaminoRedensificacion2
 */
class TorreonCaminoRedensificacion2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón, camino a la redensificación II';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2014-10-23T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-camino-redensificacion-2';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Continuación del tema de la redensificación de ciudades. Las cifras nos indican como el territorio ocupado en Torreón es siete veces contra tres del crecimiento poblacional de la década de 1970 a la fecha.';
        $this->claves                     = 'IMPLAN, Torreon, Infraestructura, Redensificacion, Crecimiento, Mancha Urbana';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/TorreonCaminoRedensificacion2.html';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase TorreonCaminoRedensificacion2

?>
