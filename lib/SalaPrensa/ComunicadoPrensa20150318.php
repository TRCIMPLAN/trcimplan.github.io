<?php
/**
 * TrcIMPLAN Sitio Web - Sala de Prensa ComunicadoPrensa20150318
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
 * Clase ComunicadoPrensa20150318
 */
class ComunicadoPrensa20150318 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Comunicado de Prensa 18.3.15';
    //  $this->autor                      = '';
        $this->fecha                      = '2015-03-18T17:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-03-18-comunicado-prensa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 18 de marzo de 2015 fue aprobado el decreto de creación del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Congreso, Coahuila, Creacion';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20150318.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ComunicadoPrensa20150318

?>
