<?php
/**
 * TrcIMPLAN Sitio Web - HacinamientoEnTorreon
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
 * Clase HacinamientoEnTorreon
 */
class HacinamientoEnTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Situación de Hacinamiento en Torreón';
        $this->autor                      = 'Arq. Alejandra Martínez Avilés';
        $this->fecha                      = '2020-03-04T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'hacinamiento-en-torreon-marzo2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'La Organización Mundial de la Salud (OMS), define el hacinamiento como la “condición donde el número de ocupantes excede la capacidad de espacio de vivienda”; el indicador: 3 personas o más viviendo en una misma habitación.';
        $this->claves                     = 'IMPLAN, Torreon, hacinamiento, vivienda';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/HacinamientoEnTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Población', 'Vivienda');
        $this->fuentes                    = array('oms','INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase HacinamientoEnTorreon

?>
