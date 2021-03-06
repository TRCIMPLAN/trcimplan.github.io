<?php
/**
 * TrcIMPLAN Sitio Web - PuentesPeatonales
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
 * Clase PuentesPeatonales
 */
class PuentesPeatonales extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La funcionalidad de los puentes peatonales';
        $this->autor                      = 'Arq. Ihanelly Hernández Villa';
        $this->fecha                      = '2018-02-14T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'puentes-peatonales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón existe un total de 47 puentes peatonales, de los cuales el 85% se encuentran sobre vialidades primarias, destacando el eje que une bulevar Revolución y bulevar Torreón-Matamoros con 15 puentes. En contraste, es uno de los cruces con más atropellamientos.';
        $this->claves                     = 'IMPLAN, Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/PuentesPeatonales.md';
        // Para el Organizador
        $this->categorias                 = array('Competitividad','Infraestructura', 'Vialidad');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase PuentesPeatonales

?>
