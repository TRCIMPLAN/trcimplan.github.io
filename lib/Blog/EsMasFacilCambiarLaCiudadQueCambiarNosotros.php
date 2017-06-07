<?php
/**
 * TrcIMPLAN Sitio Web - Es más fácil cambiar la ciudad que cambiar nosotros
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
 * Clase EsMasFacilCambiarLaCiudadQueCambiarNosotros
 */
class EsMasFacilCambiarLaCiudadQueCambiarNosotros extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Es más fácil cambiar la ciudad que cambiar nosotros';
        $this->autor                      = 'Arq. Ilse Ávila García';
        $this->fecha                      = '2015-07-28T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'es-mas-facil-cambiar-la-ciudad-que-cambiar-nosotros';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Debemos de tomar acciones que nos lleven a revalorizar nuestro centro histórico, donde está la historia del nacimiento de nuestra ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, Patrimonio, Historico, Edificios, Cultura';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EsMasFacilCambiarLaCiudadQueCambiarNosotros.md';
        // Para el Organizador
        $this->categorias                 = array('Cultura', 'Infraestructura');
        $this->fuentes                    = array('Instituto Nacional de Antropología e Historia (INAH)', 'Instituto Nacional de Bellas Artes (INBA)');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase EsMasFacilCambiarLaCiudadQueCambiarNosotros

?>
