<?php
/**
 * TrcIMPLAN Sitio Web - ImpulsandoLaIgualdadDeGeneroEnElEjercitoYFuerzaAerea
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
 * Clase ImpulsandoLaIgualdadDeGeneroEnElEjercitoYFuerzaAerea
 */
class ImpulsandoLaIgualdadDeGeneroEnElEjercitoYFuerzaAerea extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Impulsando la equidad de género en el Ejército y Fuerza Aérea Mexicanos.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-03-18T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'impulsando-la-igualdad-de-genero-en-el-ejercito-y-fuerza-aerea';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A nivel nacional, más de 28 mil mujeres integran el Ejército y Fuerza Aérea Mexicanos. La XI Región Militar (Que comprende los Estados de Coahuila y Chihuahua) cuenta con 1,183 mujeres; y en la ciudad de Torreón, el número de personal femenino es de 110.';
        $this->claves                     = 'IMPLAN, Torreon, mujeres, ejercito, equidad, igualdad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ImpulsandoLaIgualdadDeGeneroEnElEjercitoYFuerzaAerea.md';
        // Para el Organizador
        $this->categorias                 = array('Género');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ImpulsandoLaIgualdadDeGeneroEnElEjercitoYFuerzaAerea

?>
