<?php
/**
 * TrcIMPLAN Sitio Web - DisminucionDeLaPobrezaEnTorreonHaciaAgenda2030
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
 * Clase DisminucionDeLaPobrezaEnTorreonHaciaAgenda2030
 */
class DisminucionDeLaPobrezaEnTorreonHaciaAgenda2030 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Disminución de la Pobreza en Torreón, Hacia la Agenda 2030.';
        $this->autor                      = 'Lic. Ana Luisa Pacheco Meraz';
        $this->fecha                      = '2019-10-21T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'disminucion-de-la-pobreza-en-torreon-hacia-agenda2030-oct2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A nivel mundial la pobreza es una problemática apremiante que debe erradicarse para poder lograr el desarrollo sostenible, si bien los porcentajes de pobreza han ido a la baja en México, su ritmo ha sido lento. En Torreón de 2010 a 2015 la pobreza disminuyó 3.9%, equivalente a 0.78 puntos porcentuales por año.';
        $this->claves                     = 'IMPLAN, Torreon, pobreza';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/DisminucionDeLaPobrezaEnTorreonHaciaAgenda2030.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Población');
        $this->fuentes                    = array('CONEVAL');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase DisminucionDeLaPobrezaEnTorreonHaciaAgenda2030

?>
