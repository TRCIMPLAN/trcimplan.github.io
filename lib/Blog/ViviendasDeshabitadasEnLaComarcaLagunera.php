<?php
/**
 * TrcIMPLAN Sitio Web - ViviendasDeshabitadasEnLaComarcaLagunera
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
 * Clase ViviendasDeshabitadasEnLaComarcaLagunera
 */
class ViviendasDeshabitadasEnLaComarcaLagunera extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Viviendas Deshabitadas en la Comarca Lagunera';
        $this->autor                      = 'Gilberto Eduardo Ríos Buendía';
        $this->fecha                      = '2021-07-12T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'viviendas-deshabitadas-en-la-comarca-lagunera-jul-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Actualmente, el tema de las viviendas deshabitadas en la Comarca Lagunera es muy evidente. De acuerdo con las últimas estadísticas del Inventario Nacional de Viviendas 2016 del Instituto Nacional de Estadística y Geografía (INEGI), un promedio de 90,300 viviendas en La Laguna está deshabitada, de un total de aproximadamente 410,000 viviendas; contando los nuevos desarrollos inmobiliarios, dando como resultado aproximadamente un 20% del total. La situación se da tanto en las periferias de las ciudades, como en los centros consolidados.';
        $this->claves                     = 'IMPLAN, Torreon, viviendas, abandonadas, laguna';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ViviendasDeshabitadasEnLaComarcaLagunera.md';
        // Para el Organizador
        $this->categorias                 = array('Vivienda');
        $this->fuentes                    = array('Inegi');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ViviendasDeshabitadasEnLaComarcaLagunera

?>
