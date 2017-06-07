<?php
/**
 * TrcIMPLAN Sitio Web - Mensaje del Director
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
 * Clase MensajeDirector
 */
class MensajeDirector extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Mensaje del Director';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2014-05-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'mensaje-director';
        $this->imagen                     = 'mensaje-director/eduardo-olguin.jpg';
        $this->imagen_previa              = 'mensaje-director/eduardo-olguin-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Mensaje del Director General Ejecutivo del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Director';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Institucional > Mensaje del Director';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Institucional/MensajeDirector.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
    } // constructor

} // Clase MensajeDirector

?>
