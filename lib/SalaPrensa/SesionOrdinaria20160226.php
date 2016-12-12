<?php
/**
 * Sitio Web - Realizan Segunda Sesión de Consejo Directivo del IMPLAN
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace SalaPrensa;

/**
 * Clase SesionOrdinaria20160226
 */
class SesionOrdinaria20160226 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Realizan Segunda Sesión de Consejo Directivo del IMPLAN';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-02-26T09:20';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-02-26-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El viernes 26 de febrero se llevó a cabo la segunda sesión del Consejo Directivo del Instituto Municipal de Planeación y Competitividad (IMPLAN) de Torreón en este año en la que  fueron presentados proyectos como la Actualización del Plan Director de Desarrollo Urbano.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion, Consejo Directivo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20160226.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase SesionOrdinaria20160226

?>
