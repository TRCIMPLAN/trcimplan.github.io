<?php
/**
 * TrcIMPLAN Sitio Web - GeneroViolenciaDiscriminacionNinez
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
 * Clase GeneroViolenciaDiscriminacionNinez
 */
class GeneroViolenciaDiscriminacionNinez extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Género, violencia y discriminación, principales preocupaciones de la niñez y la juventud de Torreón';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2019-08-27T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'genero-violencia-discriminacion-ninez-agosto2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Respecto a los lugares donde identifican la violencia, niños y jóvenes señalan que la casa y la escuela son los espacios donde manifiestan enfrentar más violencia. A pesar de ello, la casa es el lugar donde dicen sentirse más seguros todos los rangos de edad.';
        $this->claves                     = 'IMPLAN, Torreon, Genero, Violencia, Niñez, Discriminacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/GeneroViolenciaDiscriminacionNinez.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array('CIJ','INE');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase GeneroViolenciaDiscriminacionNinez

?>
