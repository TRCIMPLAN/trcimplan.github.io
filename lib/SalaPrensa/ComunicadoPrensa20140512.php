<?php
/**
 * TrcIMPLAN Sitio Web - Sala de Prensa ComunicadoPrensa20140512
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 * @package TrcIMPLAN
 */

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20140512
 */
class ComunicadoPrensa20140512 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Comunicado de Prensa 12.5.14';
        $this->autor                      = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha                      = '2014-05-12T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2014-05-12-comunicado-prensa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Precisiones respecto a conferencia de Sam Podolsky.';
        $this->claves                     = 'IMPLAN, Torreon, Competitividad, Gobernanza, Bienestar';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo HTML con el contenido
        $this->contenido_archivo_html     = 'lib/SalaPrensa/ComunicadoPrensa20140512.html';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ComunicadoPrensa20140512

?>
