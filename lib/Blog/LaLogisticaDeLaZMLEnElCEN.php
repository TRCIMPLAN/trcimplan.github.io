<?php
/**
 * TrcIMPLAN Sitio Web - LaLogisticaDeLaZMLEnElCEN
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
 * Clase LaLogisticaDeLaZMLEnElCEN
 */
class LaLogisticaDeLaZMLEnElCEN extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Logística de la ZML en el Corredor Económico del Norte';
        $this->autor                      = 'Lic. Jorge Fernando del Moral Fraire';
        $this->fecha                      = '2021-06-28T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-logistica-de-la-zml-en-el-cen-jun-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Para atraer inversión empresarial a la Zona Metropolitana de La Laguna (ZML) y así potencializar el papel que juega económicamente en el Corredor Económico del Norte, la Zona cuenta con alrededor de 15 áreas industriales y 151 unidades económicas con más de 100 empleados ya ubicadas dentro de las mismas, pero con espacio disponible para que lleguen más a la zona.';
        $this->claves                     = 'IMPLAN, Torreon, inversion, zml, corredor, economico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaLogisticaDeLaZMLEnElCEN.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaLogisticaDeLaZMLEnElCEN

?>
