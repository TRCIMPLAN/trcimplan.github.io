<?php
/**
 * TrcIMPLAN Sitio Web - PlaneacionUrbanaConPerspectivaGenero
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
 * Clase PlaneacionUrbanaConPerspectivaGenero
 */
class PlaneacionUrbanaConPerspectivaGenero extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Planeación urbana con perspectiva de género';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2023-03-06T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'pu-con-perspectiva-genero-mar-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A lo largo de la historia moderna, las ciudades se han planificado bajo la influencia de los roles de género tradicionales, éstos refuerzan la división sexual del trabajo y benefician al perfil de hombre heterosexual, cisgénero y sin discapacidades, dejando a un lado cualquier otro perfil.';
        $this->claves                     = 'IMPLAN, Torreon, planeacion, urbana, genero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlaneacionUrbanaConPerspectivaGenero.md';
        // Para el Organizador
        $this->categorias                 = array('Grupos Vulnerables', 'Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlaneacionUrbanaConPerspectivaGenero

?>
