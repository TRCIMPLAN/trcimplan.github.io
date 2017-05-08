<?php
/**
 * TrcIMPLAN Sitio Web - Integrantes del Consejo Directivo
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

namespace ConsejoDirectivo;

/**
 * Clase Integrantes
 */
class Integrantes extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Integrantes del Consejo Directivo';
     // $this->autor                      = '';
        $this->fecha                      = '2017-05-08T14:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'integrantes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Los Integrantes del Consejo Directivo del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Consejo, Directivo, Integrantes';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Consejo Directivo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ConsejoDirectivo/Integrantes.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
    } // constructor

} // Clase Integrantes

?>
