<?php
/**
 * TrcIMPLAN Sitio Web - InventarioNacionalDeVivienda2020
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
 * Clase InventarioNacionalDeVivienda2020
 */
class InventarioNacionalDeVivienda2020 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Inventario Nacional de Vivienda 2020, una herramienta para desarrollar política pública';
        $this->autor                      = 'Arq. Carla Estefanía Tovar Triana';
        $this->fecha                      = '2022-08-01T08:40';
        // El nombre del archivo a crear
        $this->archivo                    = 'inventario-nacional-de-vivienda-2020-jul-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El pasado 11 de Julio el Instituto Nacional de Estadística y Geografía (INEGI), llevó a cabo la presentación de la actualización del Inventario Nacional de Vivienda, 2020. Esta actualización se realiza a partir del levantamiento de datos que se llevó a cabo con el Censo de Población y Vivienda, 2020.';
        $this->claves                     = 'IMPLAN, Torreon, inegi, inventario, vivienda, censo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InventarioNacionalDeVivienda2020.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase InventarioNacionalDeVivienda2020

?>
