<?php
/**
 * TrcIMPLAN Sitio Web - LaInfanciaEnConfinamiento
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
 * Clase LaInfanciaEnConfinamiento
 */
class LaInfanciaEnConfinamiento extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La infancia en confinamiento';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2021-03-22T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-infancia-en-confinamiento-mar-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Censo de Población y vivienda 2020 registra en Torreón 143,935 niños y niñas de 3 a 14 años en algún grado de estudio (preescolar, primaria y secundaria). ';
        $this->claves                     = 'IMPLAN, Torreon, censo, poblacion, vivienda, estudios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaInfanciaEnConfinamiento.md';
        // Para el Organizador
        $this->categorias                 = array('Población', 'Educación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaInfanciaEnConfinamiento

?>
