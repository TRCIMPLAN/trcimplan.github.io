<?php
/**
 * TrcIMPLAN Sitio Web - TorreonGamer
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
 * Clase TorreonGamer
 */
class TorreonGamer extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón Gamer';
        $this->autor                      = 'Lic. Abraham Cuéllar';
        $this->fecha                      = '2021-09-09T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-gamer-sep-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿A cuántas personas conocemos que por lo menos jueguen religiosamente un videojuego?';
        $this->claves                     = 'IMPLAN, Torreon, gamers, videojuegos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonGamer.md';
        // Para el Organizador
        $this->categorias                 = array('Población', 'Salud');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonGamer

?>
