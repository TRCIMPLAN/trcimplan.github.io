<?php
/**
 * TrcIMPLAN Sitio Web - El papel de la cultura en la competitividad
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
 * Clase ElPapelDeLaCulturaEnLaCompetitividad
 */
class ElPapelDeLaCulturaEnLaCompetitividad extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El papel de la cultura en la competitividad';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-10-20T10:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-papel-de-la-cultura-en-la-competitividad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La ZML ocupa el lugar 54 en el ranking nacional por el número de espacios culturales con los que cuenta. Su infraestructura aún es escasa comparada con la de otras ciudades importantes del país.';
        $this->claves                     = 'IMPLAN, Torreon, Cultura, Museos, Bibliotecas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ElPapelDeLaCulturaEnLaCompetitividad.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad', 'Cultura');
        $this->fuentes                    = array('Instituto Nacional de Bellas Artes (INBA)');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ElPapelDeLaCulturaEnLaCompetitividad

?>
