<?php
/**
 * TrcIMPLAN Sitio Web - Comunicado Prensa 20150318
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

namespace SalaPrensa;

/**
 * Clase EncuentroLagunaY2040
 */
class EncuentroLagunaY2040 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Encuentro Y2040 2018';
        $this->fecha                      = '2018-03-05T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'encuentro-laguna-y2040-2018';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El viernes 2 de marzo se llevó a cabo la inauguración del encuentro de participación ciudadana juvenil “LagunaY2040 Youth Challenge 2018” con la presencia del alcalde de Torreón, Jorge Zermeño Infante; el secretario del Ayuntamiento, Sergio Lara Galván; el rector del Tecnológico de Monterrey, Carlos Bejos; el director del IMPLAN, Eduardo Holguín, así como rectores de las diversas universidades participantes..';
        $this->claves                     = 'IMPLAN, Torreon, Y2040, Coahuila, Encuentro';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/EncuentroLagunaY2040.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Educacion', 'Competitividad');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase EncuentroLagunaY2040

?>
