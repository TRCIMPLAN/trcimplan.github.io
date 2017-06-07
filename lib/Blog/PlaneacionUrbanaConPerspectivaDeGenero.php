<?php
/**
 * TrcIMPLAN Sitio Web - Planeación Urbana con Perspectiva de Género
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
 * Clase PlaneacionUrbanaConPerspectivaDeGenero
 */
class PlaneacionUrbanaConPerspectivaDeGenero extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Planeación Urbana con Perspectiva de Género';
        $this->autor                      = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha                      = '2016-07-22T13:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'planeacion-urbana-con-perspectiva-de-genero';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón inició el programa “Ciudades Seguras y Libres de Violencia para las Mujeres y Niñas” que consiste en medir las condiciones de seguridad que existen para las mujeres. El tema es pertinente considerando que la fuerza laboral de las mujeres en nuestra ciudad es de casi 50% y hay un alto porcentaje de hogares con jefatura femenina.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlaneacionUrbanaConPerspectivaDeGenero.md';
        // Para el Organizador
        $this->categorias                 = array('Género', 'Población', 'Seguridad', 'Vivienda');
        $this->fuentes                    = array('INEGI', 'IMCO');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlaneacionUrbanaConPerspectivaDeGenero

?>
