<?php
/**
 * TrcIMPLAN Sitio Web - Panorama de la Educación Superior en la Z.M.L. (parte 2)
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
 * Clase PanoramaEducacionSuperiorZMLParte2
 */
class PanoramaEducacionSuperiorZMLParte2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Panorama de la Educación Superior en la Z.M.L. (parte 2)';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2015-07-24T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'panorama-educacion-superior-zml-parte-2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de las cantidades de estudiantes a nivel licenciatura, comparando los datos nacionales contra los de la Zona Metropolitana de La Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Educacion, Superior, La Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PanoramaEducacionSuperiorZMLParte2.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PanoramaEducacionSuperiorZMLParte2

?>
