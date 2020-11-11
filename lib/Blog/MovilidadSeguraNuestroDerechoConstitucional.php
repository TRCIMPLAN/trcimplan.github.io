<?php
/**
 * TrcIMPLAN Sitio Web - MovilidadSeguraNuestroDerechoConstitucional
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
 * Clase MovilidadSeguraNuestroDerechoConstitucional
 */
class MovilidadSeguraNuestroDerechoConstitucional extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Movilidad Segura, Nuestro Derecho Constitucional.';
        $this->autor                      = 'Lic. Edgardo de la Cruz Torres';
        $this->fecha                      = '2020-11-11T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'movilidad-segura-nuestro-derecho-constitucional-nov-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En un sentido estricto, la movilidad se entiende como los desplazamientos que efectuamos para trasladarnos a nuestras escuelas, trabajos, establecimientos de compra de bienes y servicios, y actividades de ocio, etcétera.';
        $this->claves                     = 'IMPLAN, Torreon, movilidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/MovilidadSeguraNuestroDerechoConstitucional.md';
        // Para el Organizador
        $this->categorias                 = array('Ḿovilidad');
        $this->fuentes                    = array('El Financiero', 'IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase MovilidadSeguraNuestroDerechoConstitucional

?>
