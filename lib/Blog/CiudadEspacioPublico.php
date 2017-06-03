<?php
/**
 * TrcIMPLAN Sitio Web - Ciudad y Espacio Público
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

namespace Blog;

/**
 * Clase CiudadEspacioPublico
 */
class CiudadEspacioPublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Ciudad y Espacio Público';
        $this->autor                      = 'Arq. Teresita Benítez Saludado';
        $this->fecha                      = '2015-01-13T08:05';
        // El nombre del archivo a crear
        $this->archivo                    = 'ciudad-espacio-publico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Actualmente las teorías urbanas afirman que el buen diseño de calles puede promover calidad de vida para todos.';
        $this->claves                     = 'IMPLAN, Torreon, Urbano, Infraestructura';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Análisis Publicados';
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CiudadEspacioPublico.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase CiudadEspacioPublico

?>
