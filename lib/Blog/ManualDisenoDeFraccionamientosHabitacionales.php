<?php
/**
 * TrcIMPLAN Sitio Web - ManualDisenoDeFraccionamientosHabitacionales
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
 * Clase ManualDisenoDeFraccionamientosHabitacionales
 */
class ManualDisenoDeFraccionamientosHabitacionales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Manual de diseño de fraccionamientos habitacionales';
        $this->autor                      = 'Lic. Jesús Abraham Salazar Valadez';
        $this->fecha                      = '2020-05-27T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'diseno-fraccionamientos-habitacionales-torreon-mayo-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“El Manual es un instrumento técnico complementario del Reglamento de Desarrollo Urbano y Construcción del Municipio de Torreón, con el cual se podrán visualizar de manera gráfica las disposiciones referentes a la construcción de fraccionamientos habitacionales”. ';
        $this->claves                     = 'IMPLAN, Torreon, manual, reglamento, desarrollo, urbano, construccion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ManualDisenoDeFraccionamientosHabitacionales.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('Ayuntamiento de Torreón');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ManualDisenoDeFraccionamientosHabitacionales

?>
