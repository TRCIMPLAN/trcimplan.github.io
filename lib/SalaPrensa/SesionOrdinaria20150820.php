<?php
/**
 * TrcIMPLAN Sitio Web - Presenta IMPLAN un nuevo “Reglamento de Zonificación, Uso de Suelo y Construcción”
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
 * Clase SesionOrdinaria20150820
 */
class SesionOrdinaria20150820 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Presenta IMPLAN un nuevo “Reglamento de Zonificación, Uso de Suelo y Construcción”';
    //  $this->autor                      = '';
        $this->fecha                      = '2015-08-20T11:30';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-08-20-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Sesión del Consejo Directivo del IMPLAN Torreón, donde presentaron la propuesta para un nuevo ordenamiento de asentamientos humanos.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion, Consejo Directivo, Reglamento, Asentamientos, Urbanos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20150820.html';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase SesionOrdinaria20150820

?>
