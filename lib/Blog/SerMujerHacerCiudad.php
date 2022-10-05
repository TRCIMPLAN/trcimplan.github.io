<?php
/**
 * TrcIMPLAN Sitio Web - SerMujerHacerCiudad
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
 * Clase SerMujerHacerCiudad
 */
class SerMujerHacerCiudad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '¿Me avisas cuando llegues a casa? Ser mujer, hacer ciudad.';
        $this->autor                      = 'Mtra. Migdy Yosdel García Vargas';
        $this->fecha                      = '2022-10-04T12:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'ser-mujer-hacer-ciudad-oct-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las mujeres significamos nuestras experiencias dentro del espacio público a través de los roles y estereotipos que han sido impuestos como mandato de género, nuestra vida discurre entre el ámbito doméstico y público intrincada por diversas formas de violencia.';
        $this->claves                     = 'IMPLAN, Torreon, mujeres, violencia, genero';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SerMujerHacerCiudad.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array('ONU');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SerMujerHacerCiudad

?>
