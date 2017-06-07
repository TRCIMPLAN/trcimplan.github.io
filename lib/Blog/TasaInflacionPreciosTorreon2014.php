<?php
/**
 * TrcIMPLAN Sitio Web - Tasa de inflación y precios en Torreón 2014
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
 * Clase TasaInflacionPreciosTorreon2014
 */
class TasaInflacionPreciosTorreon2014 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Tasa de inflación y precios en Torreón 2014';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2015-02-03T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'tasa-inflacion-precios-torreon-2014';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Un incremento en la inflación como el que sufrió Torreón en 2014 no es necesariamente una señal negativa pues puede ser causada por exceso de dinero en la economía.';
        $this->claves                     = 'IMPLAN, Torreon, Inflacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/TasaInflacionPreciosTorreon2014.md';
        // Para el Organizador
        $this->categorias                 = array('Mercados');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase TasaInflacionPreciosTorreon2014

?>
