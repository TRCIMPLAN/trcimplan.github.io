<?php
/**
 * TrcIMPLAN Sitio Web - Términos del Sitio Web
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

namespace Terminos;

/**
 * Clase TerminosSitio
 */
class TerminosSitio extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Términos del Sitio Web';
        $this->fecha                      = '2015-01-05T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'terminos-sitio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Términos de Uso del Sitio Web del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Terminos, Uso, Sitio, Web';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Términos de Uso > Del sitio web';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Terminos/TerminosSitio.md';
    } // constructor

} // Clase TerminosSitio

?>
