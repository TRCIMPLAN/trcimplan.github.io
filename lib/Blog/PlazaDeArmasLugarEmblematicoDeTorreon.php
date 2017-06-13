<?php
/**
 * TrcIMPLAN Sitio Web - Plaza De Armas: lugar emblemático de Torreón
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
 * Clase PlazaDeArmasLugarEmblematicoDeTorreon
 */
class PlazaDeArmasLugarEmblematicoDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plaza De Armas: lugar emblemático de Torreón';
        $this->autor                      = 'Arq. Ángeles Melisa Rodríguez Salas';
        $this->fecha                      = '2017-06-12T22:12';
        // El nombre del archivo a crear
        $this->archivo                    = 'plaza-de-armas-lugar-emblematico-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La historia de la Plaza de Armas de Torreón se remonta al año de 1883 cuando don Andrés Eppen concibió la idea de una colonia de la "Estación Torreón". Hoy en día es uno de los lugares de convivencia más emblemáticos.';
        $this->claves                     = 'IMPLAN, Torreon, Colonia, Plaza de Armas, Historia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PlazaDeArmasLugarEmblematicoDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura', 'Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PlazaDeArmasLugarEmblematicoDeTorreon

?>
