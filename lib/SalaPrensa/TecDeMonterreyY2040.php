<?php
/**
 * TrcIMPLAN Sitio Web - TecDeMonterreyY2040
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
 * Clase TecDeMonterreyY2040
 */
class TecDeMonterreyY2040 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El IMPLAN y el Tec de Monterrey presentaron el Encuentro LagunaY2040';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-10-14T16:45';
        // El nombre del archivo a crear
        $this->archivo                    = '2017-10-14-tec-de-monterrey-y2040';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Se realizó el encuentro Laguna Y2040 Youth Challenge organizado por el IMPLAN Torreón y el Tecnológico de Monterrey Campus Laguna con la participación de alrededor de 200 jóvenes estudiantes, miembros del programa de liderazgo Action Leadership for an Amazing World (ALFAW).';
        $this->claves                     = 'IMPLAN, Torreon, Tec de Monterrey, Y2040';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/TecDeMonterreyY2040.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'La Laguna');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase TecDeMonterreyY2040

?>
