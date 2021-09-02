<?php
/**
 * TrcIMPLAN Sitio Web - MovilidadDeCuidado
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
 * Clase MovilidadDeCuidado
 */
class MovilidadDeCuidado extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Visibilizando la Movilidad de Cuidado en Torreón';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2021-09-02T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-de-cuidado-sep-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Considerando una distancia caminando 500 metros, equivalente a aproximadamente 5 cuadras, se obtuvo que, en Torreón, solo el 60.1% de la población tiene acceso a un parque o plaza.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad, cuidado, parque, plaza';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MovilidadDeCuidado.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase MovilidadDeCuidado

?>
