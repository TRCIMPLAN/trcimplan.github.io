<?php
/**
 * TrcIMPLAN Sitio Web - Sesion Ordinaria 2016-11-23
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * Clase SesionOrdinaria20161123
 */
class SesionOrdinaria20161123 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'El IMPLAN presenta ante su consejo el Informe 2016';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2016-11-23T15:10';
        // El nombre del archivo a crear
        $this->archivo                    = '2016-11-23-sesion-ordinaria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El IMPLAN Torreón, llevó a cabo el miércoles 23 de noviembre su onceava sesión de Consejo Directivo, con la finalidad de presentar el Informe 2016, destacando los proyectos más importantes realizados en el año.';
        $this->claves                     = 'IMPLAN, Torreon, Sesion, Consejo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Sala de Prensa';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/SesionOrdinaria20161123.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase SesionOrdinaria20161123

?>
