<?php
/**
 * TrcIMPLAN Sitio Web - Turismo urbano como motor en las ciudades
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
 * Clase TurismoUrbanoComoMotorEnLasCiudades
 */
class TurismoUrbanoComoMotorEnLasCiudades extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Turismo urbano como motor en las ciudades';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2015-08-13T10:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'turismo-urbano-como-motor-en-las-ciudades';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los patrimonios históricos de las ciudades se pueden convertir en atractivos turísticos. Promoviendo más actividades y servicios comerciales, la modernización de la infraestructura, enbellecimiento de la imagen urbana y mejor calidad de vida.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TurismoUrbanoComoMotorEnLasCiudades.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase TurismoUrbanoComoMotorEnLasCiudades

?>
