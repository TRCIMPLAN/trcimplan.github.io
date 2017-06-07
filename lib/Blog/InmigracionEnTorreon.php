<?php
/**
 * TrcIMPLAN Sitio Web - Inmigración en Torreón
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
 * Clase InmigracionEnTorreon
 */
class InmigracionEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Inmigración en Torreón';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2017-05-18T08:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'inmigracion-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Estudio sobre el fenómeno de la migración en Torréon y en la ZML donde hacemos referencia al movimiento de personas de una región geográfica a otra, motivado por factores internos o externos.';
        $this->claves                     = 'IMPLAN, Torreon, Migracion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InmigracionEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase InmigracionEnTorreon

?>
