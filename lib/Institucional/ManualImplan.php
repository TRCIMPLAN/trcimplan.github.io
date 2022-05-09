<?php
/**
 * TrcIMPLAN Sitio Web - ManualImplan
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
 * Clase ManualImplan
 */
class ManualImplan extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Manual de Organización de IMPLAN';
        $this->fecha                      = '2022-05-04T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'manual';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Manual de Organización del Instituto Municipal de Planeación y Competitividad de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Manual';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Institucional > Manual Implan';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/Institucional/ManualImplan.html';
    } // constructor

} // Clase ManualImplan

?>
