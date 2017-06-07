<?php
/**
 * TrcIMPLAN Sitio Web - La Utopía de una Ciudad Caminable
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
 * Clase LaUtopiaDeUnaCiudadCaminable
 */
class LaUtopiaDeUnaCiudadCaminable extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Utopía de una Ciudad Caminable';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2015-08-07T16:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-utopia-de-una-ciudad-caminable';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Un lugar agradable y atractivo es un lugar lleno de gente; es por ello que un lugar ideal es caminable, compacto, accesible y diverso.';
        $this->claves                     = 'IMPLAN, Torreon, Caminar, Ciudad, Calle, Banqueta, Peaton';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaUtopiaDeUnaCiudadCaminable.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Movilidad', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaUtopiaDeUnaCiudadCaminable

?>
