<?php
/**
 * TrcIMPLAN Sitio Web - PruebaPlanea2017
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
 * Clase PruebaPlanea2017
 */
class PruebaPlanea2017 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Resultados para La Laguna en la prueba Planea 2017';
        $this->autor                      = 'Lic. Iván de Luna Aldape';
        $this->fecha                      = '2018-02-08T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'prueba-planea-2017';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Torreón obtuvo resultados en el nivel sobresaliente por encima de la media nacional en la prueba de Lenguaje y Comunicación, con 15.34%. En cuanto a la prueba de Matemáticas Lerdo cuenta con la mayor proporción de alumnos en nivel suficiente con 11.69 % y sobresaliente con 7.56%.';
        $this->claves                     = 'IMPLAN, Torreon, Alumnos, Docente, Educacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PruebaPlanea2017.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Educación');
        $this->fuentes                    = array('IMPLAN', 'SEP');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PruebaPlanea2017

?>
