<?php
/**
 * TrcIMPLAN Sitio Web - Movilidad laboral cotidiana en la ZML
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
 * Clase MovilidadLaboralCotidianaZML
 */
class MovilidadLaboralCotidianaZML extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Movilidad laboral cotidiana en la ZML';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2014-08-06T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-laboral-cotidiana-zml';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Población ocupada que tiene trabajo en su PROPIO municipio y que tiene trabajo en OTRO Municipio de la Zona Metropolitana de la Laguna.';
        $this->claves                     = 'IMPLAN, Torreon, Poblacion, Ocupada, Trabajo, Municipio, La Laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_html     = 'lib/Blog/MovilidadLaboralCotidianaZML.html';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Infraestructura', 'Vialidad', 'Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array('La Laguna');
    } // constructor

} // Clase MovilidadLaboralCotidianaZML

?>
