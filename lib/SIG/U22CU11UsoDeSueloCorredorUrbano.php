<?php
/**
 * TrcIMPLAN Sitio Web - U22CU11UsoDeSueloCorredorUrbano
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

namespace SIG;

/**
 * Clase U22CU11UsoDeSueloCorredorUrbano
 */
class U22CU11UsoDeSueloCorredorUrbano extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'CU 1.1 – Corredor Urbano Habitacional, Comercio y Servicios';
        $this->fecha                      = '2022-09-28T12:07';
        // El nombre del archivo a crear
        $this->archivo                    = 'u22-cu11-uso-de-suelo-corredor-urbano';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Usos de suelo para Corredor Urbano Habitacional, Comercio y Servicios.';
        $this->claves                     = 'IMPLAN, Torreon, Usos, Suelo, corredor, urbano, comercio, servicios';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Información Geográfica > Zonificación Secundaria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SIG/U22CU11UsoDeSueloCorredorUrbano.md';
    } // constructor

} // Clase U22CU11UsoDeSueloCorredorUrbano

?>
