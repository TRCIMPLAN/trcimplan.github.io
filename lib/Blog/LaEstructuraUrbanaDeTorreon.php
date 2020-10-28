<?php
/**
 * TrcIMPLAN Sitio Web - LaEstructuraUrbanaDeTorreon
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
 * Clase LaEstructuraUrbanaDeTorreon
 */
class LaEstructuraUrbanaDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La estructura urbana de Torreón';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2020-10-28T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-estructura-urbana-de-torreon-oct-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El área urbana de Torreón actualmente tiene una superficie de 15,288.8 hectáreas, es decir que el 49% del polígono municipal en el que se encuentra la ciudad de Torreón está urbanizado.';
        $this->claves                     = 'IMPLAN, Torreon, urbana, estructura, superficie';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaEstructuraUrbanaDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('ONU Hábitat','DENUE');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase LaEstructuraUrbanaDeTorreon

?>
