<?php
/**
 * TrcIMPLAN Sitio Web - Torreón aumenta su competitividad aérea
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
 * Clase TorreonAumentaSuCompetitividadAerea
 */
class TorreonAumentaSuCompetitividadAerea extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Torreón aumenta su competitividad aérea';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-11-22T12:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'torreon-aumenta-su-competitividad-aerea';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El hecho de contar con más vuelos eleva la competitividad del Municipio haciéndolo un  atractivo polo de inversión  y potencializando la ocupación hotelera.';
        $this->claves                     = 'IMPLAN, Torreon, Aeropuertos, Vuelos, Transporte';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TorreonAumentaSuCompetitividadAerea.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Índice de Competitividad Urbana', 'Movilidad');
        $this->fuentes                    = array('IMCO');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase TorreonAumentaSuCompetitividadAerea

?>
