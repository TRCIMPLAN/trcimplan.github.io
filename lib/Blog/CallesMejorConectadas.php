<?php
/**
 * TrcIMPLAN Sitio Web - CallesMejorConectadas
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
 * Clase CallesMejorConectadas
 */
class CallesMejorConectadas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Calles Mejor Conectadas, Mejor Calidad de Vida Urbana';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2019-07-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'calles-mejor-conectadas-julio2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El concepto de conectividad vial refiere a la capacidad que tiene una red de calles en las ciudades para interconectar, en mayor o menor medida, las necesidades de movilidad entre puntos de origen-destino, garantizar seguridad y accesibilidad a todos los modos de transporte e integrar las actividades sociales y económicas con su entorno construido.';
        $this->claves                     = 'IMPLAN, Torreon, conectividad, vialidad, movilidad, transporte';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CallesMejorConectadas.md';
        // Para el Organizador
        $this->categorias                 = array('Vialidad', 'Movilidad');
        $this->fuentes                    = array('ONU-Habitat');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase CallesMejorConectadas

?>
