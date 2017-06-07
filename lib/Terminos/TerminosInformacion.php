<?php
/**
 * TrcIMPLAN Sitio Web - Términos de Uso de la Información
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
 * Clase TerminosInformacion
 */
class TerminosInformacion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Términos de Uso de la Información';
        $this->fecha                      = '2015-07-28T11:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'terminos-informacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Términos de Uso de la Información del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Terminos, Libre, Uso, Informacion';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Términos de Uso > De la información';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Terminos/TerminosInformacion.md';
    } // constructor

} // Clase TerminosInformacion

?>
