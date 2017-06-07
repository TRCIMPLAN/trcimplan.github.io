<?php
/**
 * TrcIMPLAN Sitio Web - Segunda generación del sitio web
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
 * Clase SegundaGeneracionSitioWeb
 */
class SegundaGeneracionSitioWeb extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Segunda generación del sitio web';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2015-01-20T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'segunda-generacion-sitio-web';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A partir de enero de 2015 se puso en línea el nuevo sitio web del IMPLAN Torreón. Se integraron todos los servicios y se adapta a teléfonos celulares y tablets.';
        $this->claves                     = 'IMPLAN, Torreon, Segunda Generacion, Sitio Web';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SegundaGeneracionSitioWeb.md';
        // Para el Organizador
        $this->categorias                 = array('Innovación');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase SegundaGeneracionSitioWeb

?>
