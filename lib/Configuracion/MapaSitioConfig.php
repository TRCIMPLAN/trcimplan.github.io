<?php
/**
 * TrcIMPLAN Sitio Web - Mapa Sitio Config
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace Configuracion;

/**
 * Clase MapaSitioConfig
 */
class MapaSitioConfig {

    public $xml_encoding  = 'UTF-8';                          // Character encoding to use in output XML
    public $max_urls      = 50000;                            // Maximum number of URLs that can be specified
    public $base_url      = 'http://www.trcimplan.gob.mx'; // The base URL for added URLs (Sin diagonal al final)
    public $priority_min  = 0.0;                              // The range of values priority can be
    public $priority_max  = 1.0;
    public $priority_step = 0.1;
    public $archivo       = 'sitemap.xml';

} // Clase MapaSitioConfig

?>
