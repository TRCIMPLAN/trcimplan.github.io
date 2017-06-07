<?php
/**
 * TrcIMPLAN Sitio Web - Transformación Urbana
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
 * Clase TransformacionUrbana
 */
class TransformacionUrbana extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Transformación Urbana';
        $this->autor                      = 'Francisco Valdés Perezgasga';
        $this->fecha                      = '2014-09-22T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'transformacion-urbana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Tenemos grupos organizados y activistas de las bicicletas. Lo que falta, es el compromiso de los ayuntamientos para lograr la transformación urbana de la Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Ciclistas, Bicicletas, Transporte';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/TransformacionUrbana.html';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Participación Ciudadana');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase TransformacionUrbana

?>
