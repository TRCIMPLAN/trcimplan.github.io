<?php
/**
 * TrcIMPLAN Sitio Web - ¿Qué son los datos abiertos?
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
 * Clase QueSonDatosAbiertos
 */
class QueSonDatosAbiertos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre                     = '¿Qué son los datos abiertos?';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2015-02-26T08:35';
        // El nombre del archivo a crear
        $this->archivo                    = 'que-son-datos-abiertos';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion                = 'Los datos abiertos son los datos digitales de carácter público que son accesibles en línea y que también pueden ser usados, reutilizados y redistribuidos por cualquier interesado.';
        $this->claves                     = 'IMPLAN, Torreon, Datos Abiertos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/QueSonDatosAbiertos.md';
        // Para el Organizador
        $this->categorias                 = array('Transparencia', 'Gobierno Digital');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase QueSonDatosAbiertos

?>
