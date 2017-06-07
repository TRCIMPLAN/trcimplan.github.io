<?php
/**
 * TrcIMPLAN Sitio Web - Bicimetro: La innovación del Transporte Urbano
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
 * Clase BicimetroInnovacionTransporteUrbano
 */
class BicimetroInnovacionTransporteUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Bicimetro: La innovación del Transporte Urbano';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2014-11-19T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'bicimetro-innovacion-transporte-urbano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cada vez son más los ciudadanos que optan por dejar sus carros y se animan a desempolvar las bicicletas guardadas en los garajes y utilizarlas como medio de transporte ya sea habitual o por recreación.';
        $this->claves                     = 'IMPLAN, Torreon, Bicicleta, Transporte';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/BicimetroInnovacionTransporteUrbano.md';
        // Para el Organizador
        $this->categorias                 = array('Transporte', 'Movilidad', 'Infraestructura');
        $this->fuentes                    = array('Instituto Tecnológico de Massachussets (MIT)');
        $this->regiones                   = array();
    } // constructor

} // Clase BicimetroInnovacionTransporteUrbano

?>
