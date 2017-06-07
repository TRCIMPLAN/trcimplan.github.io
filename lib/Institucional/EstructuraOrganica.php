<?php
/**
 * TrcIMPLAN Sitio Web - Estructura Orgánica
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
 * Clase EstructuraOrganica
 */
class EstructuraOrganica extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Estructura Orgánica';
        $this->fecha                      = '2014-05-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'estructura-organica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Organigrama del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Estructura, Organica, Consejo, Comites, Tecnicos, Director, Cuerpo';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Institucional > Estructura Orgánica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Institucional/EstructuraOrganica.md';
    } // constructor

} // Clase EstructuraOrganica

?>
