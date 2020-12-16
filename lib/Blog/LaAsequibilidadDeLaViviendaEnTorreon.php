<?php
/**
 * TrcIMPLAN Sitio Web - LaAsequibilidadDeLaViviendaEnTorreon
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
 * Clase LaAsequibilidadDeLaViviendaEnTorreon
 */
class LaAsequibilidadDeLaViviendaEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Asequibilidad de la Vivienda en Torreón';
        $this->autor                      = 'Dr. Iván de Luna Aldape';
        $this->fecha                      = '2018-09-24T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-asequibilidad-de-la-vivienda-en-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el Índice de Precios de la Vivienda, y como se reporta en el Monitor de Vivienda del IMPLAN, el valor medio de las casa en Coahuila es de $425 mil pesos.';
        $this->claves                     = 'IMPLAN, Torreon, Vivienda';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaAsequibilidadDeLaViviendaEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('Sistema Nacional de Información e Indicadores de Vivienda');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaAsequibilidadDeLaViviendaEnTorreon

?>
