<?php
/**
 * TrcIMPLAN Sitio Web - Menos tiempo en transporte, mayor calidad de vida
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
 * Clase MenosTiempoEnTransporteMayorCalidadDeVida
 */
class MenosTiempoEnTransporteMayorCalidadDeVida extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Menos tiempo en transporte, mayor calidad de vida';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2016-06-07T14:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'menos-tiempo-en-transporte-mayor-calidad-de-vida';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La relación entre transporte público efectivo y competitividad es directa, pero para que la competitividad se traduzca en calidad de vida se debe reducir el tiempo de traslado de estudiantes y trabajadores. Con la llegada del Metrobus se podría lograr que el 70% de la población trabajadora invierta menos de media hora en cada traslado.';
        $this->claves                     = 'IMPLAN, Torreon, Transporte Público, Competitividad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MenosTiempoEnTransporteMayorCalidadDeVida.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad', 'Competitividad');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MenosTiempoEnTransporteMayorCalidadDeVida

?>
