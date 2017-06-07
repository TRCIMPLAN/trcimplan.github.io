<?php
/**
 * TrcIMPLAN Sitio Web - La Accesibilidad a las Banquetas en Torreón
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
 * Clase LaAccesibilidadALasBanquetasEnTorreon
 */
class LaAccesibilidadALasBanquetasEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Accesibilidad a las Banquetas en Torreón';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2017-05-11T11:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-accesibilidad-a-las-banquetas-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las normativas de tráfico y en particular, la legislación de seguridad vial desde sus inicios en los años veinte del siglo pasado, han considerado a las banquetas como un espacio exclusivamente peatonal.';
        $this->claves                     = 'IMPLAN, Torreon, Banquetas, Peatones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaAccesibilidadALasBanquetasEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase LaAccesibilidadALasBanquetasEnTorreon

?>
