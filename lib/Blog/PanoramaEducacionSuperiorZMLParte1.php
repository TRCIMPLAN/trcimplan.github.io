<?php
/**
 * TrcIMPLAN Sitio Web - Panorama de la Educación Superior en la Z.M.L. (Parte 1)
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
 * Clase PanoramaEducacionSuperiorZMLParte1
 */
class PanoramaEducacionSuperiorZMLParte1 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Panorama de la Educación Superior en la Z.M.L. (parte 1)';
        $this->autor                      = 'Lic. Rodrigo González Morales';
        $this->fecha                      = '2015-06-09T16:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'panorama-educacion-superior-zml-parte-1';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Al comparar la Zona Metropolitana de La Laguna (Z.M.L.) con datos nacionales se tienen más alumnos en carreras de Ingenerías y de Agronomía.';
        $this->claves                     = 'IMPLAN, Torreon, Educacion, Superior, La Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PanoramaEducacionSuperiorZMLParte1.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase PanoramaEducacionSuperiorZMLParte1

?>
