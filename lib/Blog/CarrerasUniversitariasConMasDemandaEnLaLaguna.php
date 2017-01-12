<?php
/**
 * TrcIMPLAN Sitio Web - CarrerasUniversitariasConMasDemandaEnLaLaguna
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

namespace Blog;

/**
 * Clase CarrerasUniversitariasConMasDemandaEnLaLaguna
 */
class CarrerasUniversitariasConMasDemandaEnLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Carreras universitarias con más demanda en La Laguna';
        $this->autor                      = 'Lic. Adriana Vargas Flores';
        $this->fecha                      = '2017-01-11T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'carreras-universitarias-con-mas-demanda-en-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las carreras que más demandan los jóvenes laguneros son las de Ciencias Sociales, Administración y Derecho, seguido por las Ingenierías, Manufacturas y Construcción. En tercero, la carrera de Educación.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CarrerasUniversitariasConMasDemandaEnLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Educación');
        $this->fuentes                    = array('CIDAC', 'IMPLAN', 'ANUIES');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase CarrerasUniversitariasConMasDemandaEnLaLaguna

?>
