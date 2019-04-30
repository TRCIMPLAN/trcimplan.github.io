<?php
/**
 * TrcIMPLAN Sitio Web - ElCiudadanoComoEspecialistaUrbano
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
 * Clase ElCiudadanoComoEspecialistaUrbano
 */
class ElCiudadanoComoEspecialistaUrbano extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El Ciudadano como Especialista Urbano';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2019-04-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-ciudadano-como-especialista-urbano-abril2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“La ciudad tiene la capacidad de proveer algo para todos, sólo cuando éstas son creadas para todos.” Jane Jacobs.';
        $this->claves                     = 'IMPLAN, Torreon, urbanismo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElCiudadanoComoEspecialistaUrbano.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura', 'Población');
        $this->fuentes                    = array('CONAPO','IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElCiudadanoComoEspecialistaUrbano

?>
