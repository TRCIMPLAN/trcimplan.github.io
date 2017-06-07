<?php
/**
 * TrcIMPLAN Sitio Web - Reglamentos
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

namespace Institucional;

/**
 * Clase Reglamentos
 */
class Reglamentos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamentos';
        $this->fecha                      = '2015-03-18T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamentos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Ley que crea el Instituto Municipal de Planeación y Competitividad de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Reglamento';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Institucional > Reglamentos';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Institucional/Reglamentos.html';
    } // constructor

} // Clase Reglamentos

?>
